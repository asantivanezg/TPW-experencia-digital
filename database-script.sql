CREATE DATABASE BD_EXPERIENCIA_DIGITAL;
USE BD_EXPERIENCIA_DIGITAL;

CREATE TABLE TB_PRODUCTO (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    precio DOUBLE(10 , 2 ),
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255),
    stock SMALLINT NOT NULL,
    activo BOOL NOT NULL,
    idCategoria INT NOT NULL
);

CREATE TABLE TB_CATEGORIA (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(255) NOT NULL,
    estado BOOLEAN NOT NULL
);

CREATE TABLE TB_USUARIO (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    usuario VARCHAR(15) NOT NULL,
    contrasenia VARCHAR(15) NOT NULL,
    telefono VARCHAR(9),
    estado BOOLEAN NOT NULL
);

CREATE TABLE TB_CLIENTE (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    dni VARCHAR(8) NOT NULL UNIQUE,
    telefono VARCHAR(9),
    direccion VARCHAR(100),
    estado BOOLEAN NOT NULL
);

CREATE TABLE TB_VENTA (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idCliente INT NOT NULL,
    total DOUBLE(10 , 2 ) NOT NULL,
    fechaVenta DATE NOT NULL,
    estado BOOLEAN NOT NULL
);

CREATE TABLE TB_DETALLE_VENTA (
    id INT AUTO_INCREMENT PRIMARY KEY,
    idCabeceraVenta INT NOT NULL,
    idProducto INT NOT NULL,
    cantidad SMALLINT NOT NULL,
    precioUnitario DOUBLE(10 , 2 ) NOT NULL,
    subtotal DOUBLE(10 , 2 ) NOT NULL,
    descuento DOUBLE(10 , 2 ) NOT NULL,
    igv DOUBLE(10 , 2 ) NOT NULL,
    totalPagar DOUBLE(10 , 2 ) NOT NULL,
    estado BOOLEAN NOT NULL
);

ALTER TABLE TB_DETALLE_VENTA
ADD FOREIGN KEY (idCabeceraVenta) REFERENCES TB_VENTA(id);

ALTER TABLE TB_VENTA
ADD FOREIGN KEY (idCliente) REFERENCES TB_CLIENTE(id);

ALTER TABLE TB_PRODUCTO
ADD FOREIGN KEY (idCategoria) REFERENCES TB_CATEGORIA(id);

ALTER TABLE TB_DETALLE_VENTA
ADD FOREIGN KEY (idProducto) REFERENCES TB_PRODUCTO(idCategoria);