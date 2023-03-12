-- COUNTDOWN TABLE
DROP TABLE IF EXISTS countdowns_data;

CREATE TABLE IF NOT EXISTS countdowns_data(
    countdown_id int(2) NOT NULL PRIMARY KEY,
    countdown_title text NULL,
    countdown_alt text NULL,
    countdown_status text NULL,
    countdown_desc text NULL,
    countdown_target_url text NULL,
    countdown_target_date datetime NULL 
);

INSERT INTO countdowns_data VALUES
    (1,"Title: Countdown 1","cd1","active","This is countdown 1 descriptions","https://google.co.id","2023-3-18"),
    (2,"Title: Countdown 2","cd2","active","This is countdown 2 descriptions","https://google.co.id","2023-3-25");