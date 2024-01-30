<?php

namespace App\Controllers;

use App\Models\PanelModel;

class Panel extends BaseController
{
    // Kullanılacak yardımcı sınıflar burada tanımlanır
    protected $helpers = ['form', 'text'];

    // Ana panel sayfası
    public function index()
    {
        $session = session();

        // Eğer kullanıcı oturum açmışsa
        if ($session->has('durum') && $session->get('durum')) {
            // Gerekli görüntüleri birleştirip döndür
            return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                . view('tema/panel_header')
                . view('sayfalar/panasayfa')
                . view('tema/panel_footer')
                . view('tema/footer');
        } else {
            // Oturum açmamışsa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Yeni kayıt ekleme sayfası
    public function kayit_ekle()
    {
        $session = session();

        // Eğer kullanıcı oturum açmışsa
        if ($session->has('durum') && $session->get('durum')) {
            // Eğer POST isteği değilse
            if (!$this->request->is('post')) {
                // Gerekli görüntüleri birleştirip döndür
                return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                    . view('tema/panel_header')
                    . view('sayfalar/kayit_ekle')
                    . view('tema/panel_footer')
                    . view('tema/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required',
                'resim' => 'uploaded[resim]|max_size[resim,1024]'
            ];

            // Formu doğrula
            if (!$this->validate($rules)) {
                // Gerekli görüntüleri birleştirip döndür
                return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                    . view('tema/panel_header')
                    . view('sayfalar/kayit_ekle')
                    . view('tema/panel_footer')
                    . view('tema/footer');
            }

            // Onaylanmış verileri al
            $veri = $this->validator->getValidated();
            $model = model('PanelModel');

            // Resim dosyasını işle
            $img = $this->request->getFile('resim');
            if ($img->isValid() && !$img->hasMoved()) {
                $yol = FCPATH . 'uploads/';
                $isim = $img->getRandomName();
                $img->move($yol, $isim);

                // Veritabanına veriyi ekle
                $sonuc = $model->veri_ekle($veri['baslik'], url_title($veri['baslik'], '_', true), $veri['icerik'], $isim);

                if ($sonuc) {
                    // Kayıt ekleme başarılıysa, kayıt ekleme sayfasına yönlendir
                    return redirect()->to(base_url('kayit_ekle'));
                }
            }
        } else {
            // Oturum açmamışsa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıtları listeleme sayfası
    public function kayit_listele()
    {
        $session = session();

        // Eğer kullanıcı oturum açmışsa
        if ($session->has('durum') && $session->get('durum')) {
            // Gerekli verileri al
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            $model = model('AnasayfaModel');
            $kayitlar = $model->kayitlar();

            // Eğer kayıt varsa, veriyi diziye ekle
            if (count($kayitlar) > 0) {
                $data['kayitlar'] = $kayitlar;
            }

            // Gerekli görüntüleri birleştirip döndür
            return view('tema/header', $data)
                . view('tema/panel_header')
                . view('sayfalar/kayit_listele')
                . view('tema/panel_footer')
                . view('tema/footer');
        } else {
            // Oturum açmamışsa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıt düzenleme sayfası
    public function kayit_duzenle($id)
    {
        $session = session();

        // Eğer kullanıcı oturum açmışsa
        if ($session->has('durum') && $session->get('durum')) {
            // Gerekli verileri al
            $model = model('PanelModel');
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
            $data['veri'] = $model->kayit_al($id);

            // Eğer POST isteği değilse
            if (!$this->request->is('post')) {
                // Gerekli görüntüleri birleştirip döndür
                return view('tema/header', $data)
                    . view('tema/panel_header')
                    . view('sayfalar/kayit_duzenle')
                    . view('tema/panel_footer')
                    . view('tema/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required'
            ];

            // Formu doğrula
            if (!$this->validate($rules)) {
                // Gerekli görüntüleri birleştirip döndür
                return view('tema/header', $data)
                    . view('tema/panel_header')
                    . view('sayfalar/kayit_duzenle')
                    . view('tema/panel_footer')
                    . view('tema/footer');
            }

            // Onaylanmış verileri al
            $data = $this->validator->getValidated();

            // Veriyi güncelle
            $sonuc = $model->veri_duzenle($data['baslik'], url_title($data['baslik'], '_', true), $data['icerik'], $id);

            if ($sonuc) {
                // Güncelleme başarılıysa, düzenleme sayfasına yönlendir
                return redirect()->to(base_url('kayit_duzenle/' . $id));
            }
        } else {
            // Oturum açmamışsa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıt silme işlemi
    public function kayit_sil($id)
    {
        $session = session();

        // Eğer kullanıcı oturum açmışsa
        if ($session->has('durum') && $session->get('durum')) {
            $model = model('PanelModel');

            // Kaydı sil
            $model->kayit_sil($id);

            // Kayıt listeleme sayfasına yönlendir
            return redirect()->to(base_url('kayit_listele'));
        } else {
            // Oturum açmamışsa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }
}
