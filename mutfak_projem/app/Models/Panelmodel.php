<?php

namespace App\Models;

class PanelModel
{
    protected $db;

    // Veritabanı bağlantısını kurmak için constructor
    public function __construct()
    {
        $this->db = db_connect();
    }

    // Yeni bir kayıt eklemek için fonksiyon
    public function veri_ekle($baslik, $url, $icerik, $resim)
    {
        // 'mutfaklar' tablosuna bağlantı kur
        $builder = $this->db->table('mutfaklar');

        // Eklenecek verileri içeren dizi
        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'icerik' => $icerik,
            'resim' => $resim,
        ];

        // Veriyi ekleyerek başarılı olup olmadığını kontrol et
        return $builder->insert($data);
    }

    // Belirli bir kaydı silmek için fonksiyon
    public function kayit_sil($id)
    {
        // 'mutfaklar' tablosuna bağlantı kur
        $builder = $this->db->table('mutfaklar');

        // Silinecek kaydı belirle
        $builder->where('id', $id);

        // Kaydı silerek başarılı olup olmadığını kontrol et
        return $builder->delete();
    }

    // Belirli bir kaydı almak için fonksiyon
    public function kayit_al($id)
    {
        // 'mutfaklar' tablosuna bağlantı kur
        $builder = $this->db->table('mutfaklar');

        // Alınacak kaydı belirle
        $builder->where('id', $id);

        // Kaydı al ve dizi olarak döndür
        $veri = $builder->get()->getResultArray();

        // Eğer kayıt varsa ilk kaydı döndür, yoksa boş bir dizi döndür
        return !empty($veri) ? $veri[0] : [];
    }

    // Belirli bir kaydı güncellemek için fonksiyon
    public function veri_duzenle($baslik, $url, $icerik, $id)
    {
        // 'enstruman' tablosuna bağlantı kur
        $builder = $this->db->table('mutfaklar');

        // Güncellenecek kaydı belirle
        $builder->where('id', $id);

        // Güncellenecek verileri içeren dizi
        $data = [
            'baslik' => $baslik,
            'url' => $url,
            'icerik' => $icerik,
        ];

        // Veriyi güncelleyerek başarılı olup olmadığını kontrol et
        return $builder->update($data);
    }
}
