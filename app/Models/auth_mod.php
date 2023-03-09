<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class auth_mod extends Model
{
    protected $table      = 'user_auth';
    protected $primaryKey = 'username';

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['first_na', 'last_na', 'username', 'level', 'phone', 'email', 'password', 'photo', 'user_ip', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function checkTB()
    {
        if ($this->db->tableExists($this->table)) {                 // table exists      
            $tableTarget = $this->db->table($this->table);          // table empty check
            $totalRow = $tableTarget->countAll();
            if ($totalRow > 0) {
            } else {
                $sql = 'INSERT INTO siakad.user_auth VALUE(
                    "admin", 
                    "Admin", 
                    "SIAKAD", 
                    "082200000000", 
                    "admin@support.com", 
                    "admin", 
                    "1",
                    "127.0.0.1",
                    "admin.png",
                    "", 
                    ""
                );
            ';
                $this->db->query($sql);
            }
        } else {                                                    // table does not exist
            // Create Table
            $sql = 'CREATE TABLE IF NOT EXISTS siakad.user_auth(
                username varchar(25) NOT NULL PRIMARY KEY,
                first_na varchar(25) NOT NULL,
                last_na varchar(30) NOT NULL,
                phone varchar(16) NOT NULL,
                email varchar(30) NOT NULL,
                password varchar(18) NOT NULL,
                level enum("1","2","3","4","5") NOT NULL,
                user_ip varchar(15) NOT NULL,
                photo varchar(255) NOT NULL,
                created_at timestamp NOT NULL DEFAULT current_timestamp(),
                updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
            );';
            $this->db->query($sql);

            $tableTarget = $this->db->table($this->table);          // table empty check
            $totalRow = $tableTarget->countAll();
            if ($totalRow > 0) {
            } else {
                $sql = 'INSERT INTO siakad.user_auth VALUE(
                    "admin", 
                    "Admin", 
                    "SIAKAD", 
                    "082200000000", 
                    "admin@support.com", 
                    "admin", 
                    "1",
                    "127.0.0.1",
                    "admin.png",
                    "", 
                    ""
                );
            ';
                $this->db->query($sql);
            }
        }
    }


    public function saveData($data)
    {
        return $this->db
            ->table('user_auth')
            ->insert($data);
    }

    public function clogData($username, $password)
    {
        return $this->db
            ->table('user_auth')
            ->where([
                'username' => $username,
                'password' => $password
            ])->get()->getRowArray();
    }
}
