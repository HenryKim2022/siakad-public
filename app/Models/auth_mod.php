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

    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
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
