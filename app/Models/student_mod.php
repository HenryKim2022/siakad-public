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
        if ($this->db->tableExists($this->table)) {                 // table exists
            $tableTarget = $this->db->table($this->table);          // table empty check
            $totalRow = $tableTarget->countAll();
            if ($totalRow > 0) {
                if ($nim == false) {
                    return $this->findAll();
                }
                return $this->where(['nim' => $nim])->first();
            } else {
                $sql = 'INSERT INTO siakad.students_data VALUES
                    ("1152125001","Henry","Kim","Male","Earth","1998-8-8","Mt. Dores","henryk@example.com",
                    "+6282200000000","Dad","Heavens", "+6282200000000","Mom","General Soed","+6282200000000","","",""),
                    ("1152125002","Mr. Admin","Kim","Male","Earth","1998-8-26","Mt. Dores","henryk@example.com",
                    "+6282200000000","Dad","Heavens", "+6282200000000","Mom","General Soed","+6282200000000","","",""),
                    ("1152125003","Mr. Example","Sample Exampp","Male","Earth","1999-9-12","Jakpus","mrexample@example.com",
                    "+6282200000000","Dad","Jakpus", "+6282200000000","Mom","General Soed","+6282200000000","","","");
                ';
                $this->db->query($sql);
            }
        } else {                                                    // table does not exist
            // echo "<script>
            // alert('Table <$this->table> required!');
            // </script>";

            $sql = 'CREATE TABLE IF NOT EXISTS students_data (
                    nim varchar(18) NOT NULL PRIMARY KEY,
                    first_na varchar(25) NOT NULL,
                    last_na varchar(30) NOT NULL,
                    gender enum("Male", "Female"),
                    birth_loc varchar(50) NOT NULL,
                    birth_date date NOT NULL,
                    std_addr varchar(250) NOT NULL,
                    std_email varchar(30) NOT NULL,
                    std_phone varchar(16) NOT NULL,
                    dad_na varchar(50),
                    dad_addr varchar(250),
                    dad_phone varchar(16),
                    mom_na varchar(50),
                    mom_addr varchar(250),
                    mom_phone varchar(16),
                    std_photo varchar(255),
                    created_at timestamp NOT NULL DEFAULT current_timestamp(),
                    updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
                );                        
            ';
            $this->db->query($sql);
        }
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
