CREATE DATABASE store_management COLLATE 'utf8mb4_unicode_ci';

CREATE TABLE governorates (
    id int(11) unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL ,
  created_at datetime default now()
);
-- Each governorate can have more than one store
--Any specific store cannot be located in more than one governorate
  -- Rlation between supliers & governorates is 1:M  
CREATE TABLE stores (
    id int(11) unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL ,
    adress varchar (255) NOT NULL,
    governorateID int(11) unsigned NOT NULL,
    created_at datetime default now(),
    CONSTRAINT governorateStoreRelation
    FOREIGN KEY (governorateID) REFERENCES governorates(id) ON UPDATE CASCADE ON DELETE CASCADE

);


CREATE TABLE suppliers (
    id int(11) unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL ,
    phone  varchar(20) not null ,
    email varchar(100) not null unique ,
    briefData text ,
    created_at datetime default now()
    );

--  Each supplier can supply more than one product
-- Any specific product is supplied by only one supplier
-- Rlation between supliers & products is 1:M  
CREATE TABLE prouducts(
    id int(11) unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL ,
    code int(11) UNIQUE NOT NULL,
    description text ,
    price int(6) NOT NULL ,
    created_at datetime default now(),
    supplierID int(11) unsigned ,
    CONSTRAINT productSuplierRelation
    FOREIGN KEY (supplierID) REFERENCES suppliers(id) ON UPDATE CASCADE ON DELETE CASCADE
    );


--Each store has more than one product
--Each product can be found in more than one store
-- relation between stores and products is M:M
CREATE TABLE storeProduct (
    storeID int(11) unsigned ,
    productID int(11) unsigned,
    PRIMARY KEY (storeID, productId),
    CONSTRAINT storeProductRelation
    FOREIGN KEY(storeID) REFERENCES stores (id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT productStoreRelation
    FOREIGN KEY(productID) REFERENCES prouducts (id) ON UPDATE CASCADE ON DELETE CASCADE
    );


-- Each store can take products from more than one supplier
-- Each supplier can give products to more than one store
-- relation between stores and suppliers is M:M
    CREATE TABLE storeSupplier (
    storeID int(11) unsigned ,
    supplierID int(11) unsigned ,
    PRIMARY KEY (storeID, supplierID),
    CONSTRAINT storeSupplierRelation
    FOREIGN KEY(storeID) REFERENCES stores (id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT supplierStoreRelation
    FOREIGN KEY(supplierID) REFERENCES suppliers (id) ON UPDATE CASCADE ON DELETE CASCADE
    )

