<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table      = 'listfilm';
    protected $useTimestamps = true;
    // protected $primaryKey = 'id';

    protected $allowedFields = ['judul', 'sutradara', 'synopsis', 'cover', 'slug'];
    // if slug is missing
    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
