-- SQLite
CREATE TABLE category (
    id integer PRIMARY KEY,
    name varchar(255)
);
CREATE TABLE product (
    id integer PRIMARY KEY,
    name varchar(255),
    price varchar(255),
    category_id integer,
    FOREIGN KEY(category_id) REFERENCES category(id)
);
