<?php

use app\core\Application;

class m0001_initial
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "
        CREATE TABLE stores (
            id varchar(100) NOT NULL,
            address varchar(1000) NOT NULL,
            status varchar(100) NOT NULL,
            image_url varchar(4000) NOT NULL,
            open_time varchar(100) NOT NULL,
            phone varchar(100) NOT NULL,
            is_deleted BOOLEAN DEFAULT FALSE,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            PRIMARY KEY (id)
          );
          
          CREATE TABLE users (
            id varchar(100) NOT NULL,
            firstname varchar(100) NOT NULL,
            lastname varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            phone_number varchar(100) NOT NULL,
            password varchar(100) NOT NULL,
            image_url varchar(4000) DEFAULT NULL,
            address varchar(100) NOT NULL,
            ward_id varchar(100) DEFAULT NULL,
            district_id varchar(100) DEFAULT NULL,
            province_id varchar(100) DEFAULT NULL,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            role varchar(100)   DEFAULT NULL,
            is_deleted BOOLEAN DEFAULT FALSE,
            PRIMARY KEY (id)
          );
          
          CREATE TABLE categories (
            id varchar(100) NOT NULL,
            name varchar(100) NOT NULL,
            is_deleted BOOLEAN DEFAULT FALSE,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            PRIMARY KEY (id)
          );
          
          CREATE TABLE products (
            id varchar(100) NOT NULL,
            category_id varchar(100) NOT NULL,
            name varchar(100) NOT NULL,
            image_url varchar(1000) NOT NULL,
            price int NOT NULL,
            description varchar(4000) NOT NULL,
            is_deleted boolean default false,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            PRIMARY KEY (id),
            CONSTRAINT category_id FOREIGN KEY (category_id) REFERENCES categories (id)
          );
          
          CREATE TABLE orders (
            id varchar(100) NOT NULL,
            user_id varchar(100) NOT NULL,
            payment_method varchar(100) NOT NULL,
            status varchar(100) NOT NULL,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            delivery_name varchar(100)   DEFAULT NULL,
            delivery_phone varchar(100)   DEFAULT NULL,
            delivery_address varchar(100)   DEFAULT NULL,
            display varchar(10),
            PRIMARY KEY (id),
            CONSTRAINT order_customer_fk FOREIGN KEY (user_id) REFERENCES users (id)
          );
          
          CREATE TABLE order_detail (
            id varchar(100) NOT NULL,
            product_id varchar(100) NOT NULL,
            order_id varchar(100) NOT NULL,
            quantity int NOT NULL,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            size varchar(100)  DEFAULT NULL,
            note varchar(100)  DEFAULT NULL,
            CONSTRAINT order_fk FOREIGN KEY (order_id) REFERENCES orders (id),
            CONSTRAINT order_product_fk FOREIGN KEY (product_id) REFERENCES products (id)
          );
          
          CREATE TABLE cart (
            id varchar(100) NOT NULL,
            user_id varchar(100) NOT NULL,
            status varchar(100) NOT NULL,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            PRIMARY KEY (id),
            CONSTRAINT cart_customer_fk FOREIGN KEY (user_id) REFERENCES users (id)
          );
          
          CREATE TABLE cart_detail (
            order_detail_id varchar(100) NOT NULL,
            product_id varchar(100) NOT NULL,
            cart_id varchar(100) NOT NULL,
            quantity int NOT NULL,
            note varchar(100) DEFAULT NULL,
            created_at timestamp NOT NULL DEFAULT current_timestamp(),
            updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            size varchar(100)  DEFAULT NULL,
            CONSTRAINT cart_fk FOREIGN KEY (cart_id) REFERENCES cart (id),
            CONSTRAINT product_fk FOREIGN KEY (product_id) REFERENCES products (id)
          );
        ";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE users;";
        $db->pdo->exec($sql);
    }
}