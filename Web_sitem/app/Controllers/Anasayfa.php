<?php

namespace App\Controllers;

use App\Models\AnasayfaModel;
use App\Controllers\Panel;

class Anasayfa extends BaseController
{
    // Form ve text yardımcılarını kullanabilmek için gerekli
    protected $helpers = ['form', 'text'];

    // Anasayfa index fonksiyonu
    public function index()
    {
        // Veri dizisi başlat
        $data = [];

        // Anasayfa modelini yükle
        $model = model('AnasayfaModel');
        // Tüm kayıtları al
        $kayitlar = $model->kayitlar();

        // Eğer kayıt varsa, veri dizisine ekle
        if (count($kayitlar) > 0) {
            $data['kayitlar'] = $kayitlar;
        }

        // Oturum kontrolü için session başlat
        $session = session();

        // Oturum varsa, giriş bilgilerini veri dizisine ekle
        if ($session->has('durum') && $session->get('durum')) {
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');

            // Anasayfa view'ini oluştur
            return view('tema/ziyaretcigiris/header', $data)
                . view('sayfalar/anasayfa')
                . view('tema/ziyaretcigiris/footer');
        } else {
            // Oturum yoksa, giriş bilgileri olmadan anasayfa view'ini oluştur
            return view('tema/ziyaretcigiris/header', $data) . view('sayfalar/anasayfa') . view('tema/ziyaretcigiris/footer');
        }
    }

    // Giriş sayfası
    public function login()
    {
        // Oturum kontrolü için session başlat
        $session = session();

        // Oturum varsa, panel sayfasına yönlendir
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            // Post metodu ile gelmemişse, giriş formunu göster
            if (!$this->request->is('post')) {
                return view('tema/ziyaretcigiris/header') . view('sayfalar/login') . view('tema/ziyaretcigiris/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'kulad' => 'required|max_length[30]',
                'sifre' => 'required|max_length[255]|min_length[2]',
            ];

            // Form doğrulama
            if (!$this->validate($rules)) {
                return view('tema/ziyaretcigiris/header') . view('sayfalar/login') . view('tema/ziyaretcigiris/footer');
            }

            // Doğrulanan form verilerini al
            $veri = $this->validator->getValidated();

            // Anasayfa modelini yükle
            $model = model('AnasayfaModel');

            // Kullanıcı bilgilerini kontrol et
            $sor = $model->where(['kulad' => $veri['kulad'], 'sifre' => $veri['sifre']])->find();

            // Kullanıcı varsa, oturumu başlat ve panel sayfasına yönlendir
            if (count($sor) > 0) {
                $kul_bilgi = [
                    'isim' => $veri['kulad'],
                    'durum'  => true
                ];

                $session->set($kul_bilgi);

                return redirect()->to(base_url('panel'));
            } else {
                // Kullanıcı yoksa, uyarı ile giriş sayfasını göster
                return view('tema/ziyaretcigiris/header', ['uyarı' => 'Yanlış kullanıcı']) . view('sayfalar/login') . view('tema/ziyaretcigiris/footer');
            }
        }
    }

    // Oturumu kapatma işlemi
    public function logout()
    {
        // Oturum kontrolü için session başlat
        $session = session();

        // Oturumu sonlandır ve giriş sayfasına yönlendir
        $session->destroy();
        return redirect()->to(base_url('login'));
    }

    // Belirli bir kaydı inceleme sayfası
    public function incele($url)
    {
        // Veri dizisi başlat
        $data = [];

        // Anasayfa modelini yükle
        $model = model('AnasayfaModel');

        // Belirli bir kaydı getir
        $veri = $model->kayit_detay($url);

        // Veriyi veri dizisine ekle
        $data['veri'] = $veri[0];

        // Oturum kontrolü için session başlat
        $session = session();

        // Oturum varsa, giriş bilgilerini veri dizisine ekle
        if ($session->has('durum') && $session->get('durum')) {
            $data['isim'] = $session->get('isim');
            $data['durum'] = $session->get('durum');
        }

        // İnceleme sayfasını oluştur
        return view('tema/ziyaretcigiris/header') . view('sayfalar/incele', $data) . view('tema/ziyaretcigiris/footer');
    }
}
