<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
protected $table      = 'kullanicilar';
protected $primaryKey = 'id';

protected $allowedFields = ['kulad', 'sifre'];

public function kayit_ol($veri)
{
return $this->insert($veri);
}
}