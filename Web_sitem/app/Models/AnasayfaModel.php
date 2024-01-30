<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    // Kullanılacak tablo adını belirt
    protected $table = 'kullanicilar';

    // Tüm kayıtları getiren fonksiyon
    public function kayitlar()
    {
        // Tabloyu 'enstruman' olarak değiştir
        $this->table = 'enstruman';

        // Tüm kayıtları getir
        return $this->findAll();
    }

    // Belirli bir kaydı URL'ine göre getiren fonksiyon
    public function kayit_detay($url)
    {
        // Tabloyu 'enstruman' olarak değiştir
        $this->table = 'enstruman';

        // Belirli bir kaydı URL'ine göre getir
        return $this->where('url', $url)->find();
    }
}
