<?php

namespace App\Models;

use CodeIgniter\Model;

class student_mod extends Model
{
    // Load data from db into, data master -> students data -> table list of students data
    protected $table = 'students_data';
    protected $useTimestamps = true;

    //Add new student, into db-> load it into table list of students data
    protected $primaryKey = 'nim';
    // protected $allowedFields = ['first_na', 'last_na', 'username', 'level', 'phone', 'email', 'password', 'created_at', 'updated_at'];
    protected $allowedFields = ['nim', 'first_na', 'last_na', 'birth_loc', 'birth_date', 'gender', 'std_addr', 'std_phone', 'std_email', 'created_at', 'updated_at'];


    public function getDetails($nim = false)
    {
        if ($nim == false) {
            return $this->findAll();
        }
        return $this->where(['nim' => $nim])->first();
    }

    public function editDetails($nim)
    {
        return $this->where(['nim' => $nim])->update();
    }

    public function delDetails($nim)
    {
        return $this->where(['nim' => $nim])->delete();
    }
}
