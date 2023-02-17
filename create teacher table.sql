-- USER TEACHER DATA
CREATE TABLE siakad.teachers_data (
	nidn varchar(18) NOT NULL PRIMARY KEY,
	first_na varchar(25) NOT NULL,
	last_na varchar(30) NOT NULL,
	gender enum("Male", "Female"),
    birth_loc varchar(50) NOT NULL,
    birth_date date NOT NULL,
    tch_addr varchar(250) NOT NULL,
    tch_email varchar(30) NOT NULL,
	tch_phone varchar(16) NOT NULL,

    dad_na varchar(50),
    dad_addr varchar(250),
    dad_phone varchar(16),
    mom_na varchar(50),
    mom_addr varchar(250),
    mom_phone varchar(16),

    tch_photo varchar(255),
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL
);


-- APPEND TEACHER DATA by ADMIN
INSERT INTO siakad.teachers_data VALUES
    ('1152125001','Henry','Kim','Male','Earth','1998-8-26','Mt. Sindurs','henryk@example.com',
    '+6282281190072','Dad','Heavens', '+6282281190072','Mom','General Sudirman','+6282281190072','','',''),
    ('1152125002','Mr. Admin','Kim','Male','Earth','1998-8-26','Mt. Sindurs','henryk@example.com',
    '+6282281190073','Dad','Heavens', '+6282281190073','Mom','General Sudirman','+6282281190073','','',''),
    ('1152125003','Mr. Muhammad','Ramdan Pujianto','Male','Earth','1999-9-12','Balaradja','mramdanpujianto@example.com',
    '+6282281190074','Dad','Balaradja', '+6282281190074','Mom','General Sudirman','+6282281190074','','','');
