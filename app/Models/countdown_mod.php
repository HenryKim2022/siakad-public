<?php

namespace App\Models;

use CodeIgniter\Model;

class countdown_mod extends Model
{
    // Load data from db into, data master -> carousel data -> table list of carousel data
    protected $table = 'countdowns_data';
    protected $useTimestamps = false;

    //Add new student, into db-> load it into table list of carousel data
    protected $primaryKey = 'countdown_id';
    protected $allowedFields = ['countdown_id', 'countdown_title', 'countdown_alt', 'countdown_status', 'countdown_desc', 'countdown_target_url', 'countdown_target_date'];


    public function getDetails($cd_id = false)
    {
        if ($this->db->tableExists($this->table)) {                 // table exists      
            $tableTarget = $this->db->table($this->table);          // table empty check
            $totalRow = $tableTarget->countAll();
            if ($totalRow > 0) {
                if ($cd_id == false) {
                    return $this->findAll();
                }
                return $this->where(['countdown_id' => $cd_id])->first();
            } else {
                $sql = 'INSERT INTO countdowns_data VALUES
                    (1,"Title: Countdown 1","cd1","active","This is countdown 1 descriptions","https://google.co.id","2023-3-18"),
                    (2,"Title: Countdown 2","cd2","active","This is countdown 2 descriptions","https://google.co.id","2023-3-25");
                ';
                $this->db->query($sql);
            }
        } else {                                                    // table does not exist
            // Create Table
            $sql = 'CREATE TABLE IF NOT EXISTS countdowns_data(
                    countdown_id int(2) NOT NULL PRIMARY KEY,
                    countdown_title text NULL,
                    countdown_alt text NULL,
                    countdown_status text NULL,
                    countdown_desc text NULL,
                    countdown_target_url text NULL,
                    countdown_target_date datetime NULL 
                );
            ';
            $this->db->query($sql);
        }
    }

    public function editDetails($cd_id)
    {
        return $this->where(['countdown_id' => $cd_id])->update();
    }

    public function delDetails($cd_id)
    {
        return $this->where(['countdown_id' => $cd_id])->delete();
    }
}
