<?php

namespace App\Models;

use CodeIgniter\Model;

class AnasayfaModel extends Model
{
    // Kullanılacak veritabanı tablosu
    protected $table = 'kullanicilar';

    // İzin verilen alanlar
    protected $allowedFields = ['kulad', 'sifre'];

    // Belirli bir kaydın detaylarını getir
    public function kayit_detay($url)
    {
        // Veritabanı tablosunu değiştir
        $this->table = 'mutfaklar';

        // URL'ye göre kaydı bul ve döndür
        return $this->where('url', $url)->find();
    }

    // Tüm kayıtları getir
    public function kayitlar()
    {
        // Veritabanı tablosunu değiştir
        $this->table = 'mutfaklar';

        // Tüm kayıtları bul ve döndür
        return $this->findAll();
    }
}
