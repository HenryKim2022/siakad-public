DROP TABLE IF EXISTS news_carousel;

CREATE TABLE news_carousel(
    carousel_id int(2) NOT NULL PRIMARY KEY,
    carousel_title text NULL,
    carousel_alt text NULL,
    carousel_status text NULL,
    carousel_desc text NULL,
    carousel_img_url text NULL,
    carousel_url text NULL
);

INSERT INTO news_carousel VALUES
    (1,"Title: Carousel 1","caro1","active","This is carousel 1 descriptions","public/carousel/1.png",""),
    (2,"Title: Carousel 2","caro2","notactive","This is carousel 2 descriptions","public/carousel/2.png",""),
    (3,"Title: Carousel 3","caro3","active","This is carousel 3 descriptions","public/carousel/3.png","");