<?php

namespace App\Models;

use CodeIgniter\Model;

class carousel_mod extends Model
{
    // Load data from db into, data master -> carousel data -> table list of carousel data
    protected $table = 'news_carousel';
    protected $useTimestamps = false;

    //Add new student, into db-> load it into table list of carousel data
    protected $primaryKey = 'carousel_id';
    protected $allowedFields = ['carousel_id', 'carousel_title', 'carousel_alt', 'carousel_desc', 'carousel_status', 'carousel_url'];


    public function getDetails($carou_id = false)
    {
        if ($carou_id == false) {
            return $this->findAll();
        }
        return $this->where(['carousel_id' => $carou_id])->first();
    }

    public function editDetails($carou_id)
    {
        return $this->where(['carousel_id' => $carou_id])->update();
    }

    public function delDetails($carou_id)
    {
        return $this->where(['carousel_id' => $carou_id])->delete();
    }
}
