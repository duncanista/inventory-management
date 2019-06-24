CREATE DATABASE iosys;

USE iosys;

CREATE TABLE supplier(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      company VARCHAR(200)
);

CREATE TABLE storage(
      id INT NOT NULL PRIMARY KEY,
      storage VARCHAR(200)
);

CREATE TABLE unit(
      id INT NOT NULL PRIMARY KEY,
      unit VARCHAR(50)
);

CREATE TABLE user_type(
      id INT NOT NULL PRIMARY KEY,
      type VARCHAR(200)
);

CREATE TABLE transaction_type(
      id INT NOT NULL PRIMARY KEY,
      type VARCHAR(50)
);

CREATE TABLE user(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      name VARCHAR(100),
      lastname VARCHAR(100),
      email VARCHAR(100),
      password VARCHAR(200),
      type INT NOT NULL,

      FOREIGN KEY (type) REFERENCES user_type(id) 
);

CREATE TABLE inventory(
      id VARCHAR(50) NOT NULL PRIMARY KEY,
      descript VARCHAR(200) NOT NULL,
      supplier INT,
      cost FLOAT,
      sell FLOAT,
      reposition INT,
      storage INT,
      caducation DATE,
      unit INT,
      quantity INT,

      FOREIGN KEY (supplier) REFERENCES supplier(id),
      FOREIGN KEY (storage) REFERENCES storage(id),
      FOREIGN KEY (unit) REFERENCES unit(id)
);

CREATE TABLE inventory_image(
      id VARCHAR(50) NOT NULL PRIMARY KEY,
      image VARCHAR(300),

      FOREIGN KEY (id) REFERENCES inventory(id)
);

CREATE TABLE transaction(
      id INT NOT NULL PRIMARY KEY,
      item VARCHAR(50) NOT NULL,
      user INT NOT NULL,
      type INT NOT NULL,
      date_transaction DATE,

      FOREIGN KEY (item) REFERENCES inventory(id),
      FOREIGN KEY (user) REFERENCES user(id),
      FOREIGN KEY (type) REFERENCES transaction_type(id)
);
