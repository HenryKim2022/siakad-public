-- USER SIGNUP/SIGNIN
CREATE TABLE siakad.user_auth(
    username varchar(25) NOT NULL PRIMARY KEY,
    first_na varchar(25) NOT NULL,
    last_na varchar(30) NOT NULL,
    phone varchar(16) NOT NULL,
    email varchar(30) NOT NULL,
    password varchar(18) NOT NULL,
    level enum("1","2","3","4","5") NOT NULL,
    user_ip varchar(15) NOT NULL,
    photo varchar(255) NOT NULL,
    created_at datetime NOT NULL DEFAULT current_timestamp(),
    updated_at datetime NOT NULL DEFAULT current_timestamp()
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
CREATE TABLE siakad.students_data (
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
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
);


-- APPEND STUDENT DATA by ADMIN
INSERT INTO siakad.students_data VALUES
    ('1152125001','Henry','Kim','Male','Earth','1998-8-26','Mt. Sindurs','henryk@example.com',
    '+6282281190072','Dad','Heavens', '+6282281190072','Mom','General Sudirman','+6282281190072','','',''),
    ('1152125002','Mr. Admin','Kim','Male','Earth','1998-8-26','Mt. Sindurs','henryk@example.com',
    '+6282281190073','Dad','Heavens', '+6282281190073','Mom','General Sudirman','+6282281190073','','',''),
    ('1152125003','Mr. Muhammad','Ramdan Pujianto','Male','Earth','1999-9-12','Balaradja','mramdanpujianto@example.com',
    '+6282281190074','Dad','Balaradja', '+6282281190074','Mom','General Sudirman','+6282281190074','','','');
