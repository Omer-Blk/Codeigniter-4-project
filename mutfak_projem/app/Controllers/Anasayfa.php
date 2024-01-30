<?php

namespace App\Controllers;

use App\Models\AnasayfaModel;

class Anasayfa extends BaseController
{
    // Kullanılacak yardımcı sınıflar burada tanımlanır
    protected $helpers = ['form', 'text'];

    // Ana sayfa
    public function index()
    {
        $data = [];

        // AnasayfaModel sınıfından bir örnek al
        $model = model('AnasayfaModel');

        // Kayıtları almak için model fonksiyonunu çağır
        $kayitlar = $model->kayitlar();

        // Eğer kayıt varsa, veriyi diziye ekle
        if (count($kayitlar) > 0) {
            $data['kayitlar'] = $kayitlar;
        }

        // Session sınıfını kullan
        $session = session();

        // Oturumda 'durum' anahtarı varsa ve değeri true ise
        if ($session->has('durum') && $session->get('durum')) {

            // 'isim' ve 'durum' değerlerini al
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            // Gerekli sayfaları birleştirip döndür
            return view('tema/header', $data)
                . view('sayfalar/anasayfa')
                . view('tema/footer');
        } else {
            // Gerekli sayfaları birleştirip döndür
            return view('tema/header', $data)
                . view('sayfalar/anasayfa')
                . view('tema/footer');
        }
    }

    // Giriş işlemi
    public function login()
    { $session = session();

        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {

            if (!$this->request->is('post')) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            $rules = [
                'kulad' => 'required',
                'sifre' => 'required|numeric'
            ];

            $data = $this->request->getPost(array_keys($rules));

            if (!$this->validateData($data, $rules)) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            $veri = $this->validator->getValidated();
            $model = model('App\Models\AnasayfaModel');
            $sor = $model->where('kulad', $veri['kulad'])->findAll();

            if (count($sor)>0) {
                        $kul_bilgi = [
                            'isim' => $veri['kulad'],
                            'durum' => true
                        ];

                        $session->set($kul_bilgi);
    
                        return redirect()->to(base_url('panel'));


            }

            return view('tema/header', ['uyari' => 'Yanlış Kullanıcı']) . view('sayfalar/login') . view('tema/footer');
        }
    }

    public function logout()
    {
        // Session sınıfını kullan
        $session = session();

        // Session verilerini temizle (destroy)
        $session->destroy();

        // Giriş sayfasına yönlendir
        return redirect()->to(base_url('login'));
    }

    // Detayları incele
    public function incele($url)
    {
        $data = [];

        // AnasayfaModel sınıfından bir örnek al
        $model = model('AnasayfaModel');

        // Detayları almak için model fonksiyonunu çağır
        $veri = $model->kayit_detay($url);
        $data['veri'] = $veri[0];

        // Session sınıfını kullan
        $session = session();

        // Oturumda 'durum' anahtarı varsa ve değeri true ise
        if ($session->has('durum') && $session->get('durum')) {

            // 'isim' ve 'durum' değerlerini al
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
        }

        // Gerekli sayfaları birleştirip döndür
        return view('tema/header', $data)
            . view('sayfalar/incele')
            . view('tema/footer');
    }
}
