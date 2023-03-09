-- CREATE DB
CREATE DATABASE IF NOT EXISTS siakad;
USE siakad;


-- USER SIGNUP/SIGNIN
CREATE TABLE IF NOT EXISTS siakad.user_auth(
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
);

INSERT INTO siakad.user_auth VALUE(
    "admin", 
    "Admin", 
    "SIAKAD", 
    "082281190072", 
    "admin@support.com", 
    "admin", 
    "1",
    "127.0.0.1",
    "admin.png",
    "", 
    ""
);


-- USER STUDENT DATA
CREATE TABLE IF NOT EXISTS siakad.students_data (
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


-- APPEND STUDENT DATA by ADMIN
INSERT INTO siakad.students_data VALUES
    ("1152125001","Henry","Kim","Male","Earth","1998-8-8","Mt. Dores","henryk@example.com",
    "+6282200000000","Dad","Heavens", "+6282200000000","Mom","General Soed","+6282200000000","","",""),
    ("1152125002","Mr. Admin","Kim","Male","Earth","1998-8-26","Mt. Dores","henryk@example.com",
    "+6282200000000","Dad","Heavens", "+6282200000000","Mom","General Soed","+6282200000000","","",""),
    ("1152125003","Mr. Muhammad","Ramdan Pujianto","Male","Earth","1999-9-12","Balaradja","mramdanpujianto@example.com",
    "+6282200000000","Dad","Balaradja", "+6282200000000","Mom","General Soed","+6282200000000","","","");
