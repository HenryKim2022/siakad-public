<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class carousel_mod extends Model
{
    // Load data from db into, data master -> carousel data -> table list of carousel data
    protected $table = 'news_carousel';
    protected $useTimestamps = false;

    //Add new student, into db-> load it into table list of carousel data
    protected $primaryKey = 'carousel_id';
    protected $allowedFields = ['carousel_id', 'carousel_title', 'carousel_alt', 'carousel_desc', 'carousel_status', 'carousel_img_url', 'carousel_url'];


    public function getDetails($carou_id = false)
    {
        if ($this->db->tableExists($this->table)) {                 // table exists      
            $tableTarget = $this->db->table($this->table);          // table empty check
            $totalRow = $tableTarget->countAll();
            if ($totalRow > 0) {
                if ($carou_id == false) {
                    return $this->findAll();
                }
                return $this->where(['carousel_id' => $carou_id])->first();
            } else {
                $sql = 'INSERT INTO news_carousel VALUES
                    (1,"Title: Carousel 1","caro1","active","This is carousel 1 descriptions","public/carousel/1.png",""),
                    (2,"Title: Carousel 2","caro2","notactive","This is carousel 2 descriptions","public/carousel/2.png",""),
                    (3,"Title: Carousel 3","caro3","active","This is carousel 3 descriptions","public/carousel/3.png","");
                ';
                $this->db->query($sql);
            }
        } else {                                                    // table does not exist
            // Create Table
            $sql = 'CREATE TABLE news_carousel(
                carousel_id int(2) NOT NULL PRIMARY KEY,
                carousel_title text NULL,
                carousel_alt text NULL,
                carousel_status text NULL,
                carousel_desc text NULL,
                carousel_img_url text NULL,
                carousel_url text NULL
            );';
            $this->db->query($sql);
        }
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
