<?php

namespace App\Controllers;

use App\Models\PanelModel;
use App\Models\AnasayfaModel; // Eklenen satır

class Panel extends BaseController
{
    // Form yardımcısını kullanabilmek için gerekli
    protected $helpers = ['form'];

    // Ana panel sayfası
    public function index()
    {
        // Oturum kontrolü için session başlat
        $session = session();

        // Oturum kontrolü
        if ($session->has('durum') && $session->get('durum')) {
            // Oturum varsa, panel sayfasını oluştur
            return view('tema/ziyaretcigiris/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                . view('tema/panelgiris/panel_header')
                . view('sayfalar/panasayfa')
                . view('tema/panelgiris/panel_footer')
                . view('tema/ziyaretcigiris/footer');
        } else {
            // Oturum yoksa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Yeni kayıt ekleme sayfası
    public function kayit_ekle()
    {
        // Oturum kontrolü
        $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            // Oturum varsa, kayıt ekleme işlemlerini gerçekleştir

            // İstek post metodu ile gelmemişse, kayıt ekleme formunu göster
            if (!$this->request->is('post')) {
                return view('tema/ziyaretcigiris/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                    . view('tema/panelgiris/panel_header')
                    . view('sayfalar/kayit_ekle')
                    . view('tema/panelgiris/panel_footer')
                    . view('tema/ziyaretcigiris/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required',
                'resim' => 'uploaded[resim]|max_size[resim,1024]'
            ];

            // Form doğrulama
            if (!$this->validate($rules)) {
                return view('tema/ziyaretcigiris/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                    . view('tema/panelgiris/panel_header')
                    . view('sayfalar/kayit_ekle')
                    . view('tema/panelgiris/panel_footer')
                    . view('tema/ziyaretcigiris/footer');
            }

            // Doğrulanan form verilerini al
            $veri = $this->validator->getValidated();

            // Modeli oluştur
            $model = new PanelModel();

            // Yüklenen resmi al ve belirli bir klasöre taşı
            $img = $this->request->getFile('resim');

            if ($img->isValid() && !$img->hasMoved()) {
                $yol = FCPATH . 'uploads/';
                $isim = $img->getRandomName();

                $img->move($yol, $isim);

                // Veritabanına kaydı ekle
                $sonuc = $model->veri_ekle($veri['baslik'], url_title($veri['baslik'], '_', true), $veri['icerik'], $isim);

                // Başarılıysa kayıt ekleme sayfasına yönlendir
                if ($sonuc) {
                    return redirect()->to(base_url('kayit_ekle'));
                }
            }
        } else {
            // Oturum yoksa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Kayıtları listeleme sayfası
    public function kayit_listele()
    {
        // Oturum kontrolü
        $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            // Oturum varsa, kayıtları listeleme sayfasını oluştur

            // Giriş bilgilerini taşıyan veriyi hazırla
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            // Modeli oluştur
            $model = new AnasayfaModel();

            // Kayıtları getir
            $kayitlar = $model->kayitlar();

            // Eğer kayıt varsa, veriyi taşıyan diziye ekle
            if (count($kayitlar) > 0) {
                $data['kayitlar'] = $kayitlar;
            }

            // Kayıtları listeleme sayfasını oluştur
            return view('tema/ziyaretcigiris/header', $data)
                . view('tema/panelgiris/panel_header')
                . view('sayfalar/kayit_listele')
                . view('tema/panelgiris/panel_footer')
                . view('tema/ziyaretcigiris/footer');
        } else {
            // Oturum yoksa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Belirli bir kaydı silme işlemi
    public function kayit_sil($id)
    {
        // Oturum kontrolü
        $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            // Oturum varsa, belirli bir kaydı sil

            // Modeli oluştur
            $model = new PanelModel();

            // Kaydı sil
            $model->kayit_sil($id);

            // Kayıt listeleme sayfasına yönlendir
            return redirect()->to(base_url('kayit_listele'));
        } else {
            // Oturum yoksa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }

    // Belirli bir kaydı düzenleme sayfası
    public function kayit_duzenle($id)
    {
        // Oturum kontrolü
        $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            // Oturum varsa, belirli bir kaydı düzenleme sayfasını oluştur

            // Modeli oluştur
            $model = new PanelModel();

            // Giriş bilgilerini taşıyan veriyi hazırla
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
            $data['veri'] = $model->kayit_al($id);

            // Eğer post metodu ile gelmemişse, kaydı düzenleme formunu göster
            if (!$this->request->is('post')) {
                return view('tema/ziyaretcigiris/header', $data)
                    . view('tema/panelgiris/panel_header')
                    . view('sayfalar/kayit_duzenle')
                    . view('tema/panelgiris/panel_footer')
                    . view('tema/ziyaretcigiris/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'baslik' => 'required',
                'icerik' => 'required'
            ];

            // Form doğrulama
            if (!$this->validate($rules)) {
                return view('tema/ziyaretcigiris/header', $data)
                    . view('tema/panelgiris/panel_header')
                    . view('sayfalar/kayit_duzenle')
                    . view('tema/panelgiris/panel_footer')
                    . view('tema/ziyaretcigiris/footer');
            }

            // Doğrulanan form verilerini al
            $veri = $this->validator->getValidated();

            // Veriyi güncelle
            $sonuc = $model->veri_duzenle($veri['baslik'], url_title($veri['baslik'], '_', true), $veri['icerik'], $id);

            // Başarılıysa düzenleme sayfasına yönlendir
            if ($sonuc) {
                return redirect()->to(base_url('kayit_duzenle/' . $id));
            }
        } else {
            // Oturum yoksa, giriş sayfasına yönlendir
            return redirect()->to(base_url('login'));
        }
    }
}
