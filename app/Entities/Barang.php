<?php namespace App\Entities;

use CodeIgniter\Entity;

class Barang extends Entity
{
    public function setGambar($file)
    {
        $fileName = $file->getRandomName();
        $writepath ='./uploads';
        $file->move($writepath, $fileName);
        $this->attributes['gambar'] = $fileName;
        return $this;
    }
}