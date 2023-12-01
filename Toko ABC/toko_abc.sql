CREATE TABLE product (
	id INT(11) PRIMARY KEY,
	nama VARCHAR(50),
	harga DOUBLE,
	jml INT(11),
	idkategori INT(11),
	img VARCHAR(255)
);	
SELECT * FROM product

CREATE TABLE tborder (
	orderid INT(11) PRIMARY KEY,
	tanggal DATE,
	nama_user VARCHAR(60),
	email VARCHAR(60),
	alamat VARCHAR(60),
	kota VARCHAR(30),
	propinsi VARCHAR(30),
	biaya_kirim DOUBLE,
	tot_byr DOUBLE,
	tot_hrg DOUBLE
);
SELECT * FROM tborder

CREATE TABLE tborder_detail (
	orderid INT(11) PRIMARY KEY,
	productid INT(11),
	jml INT(11),
	hrg INT(11)
);
SELECT * FROM tborder_detail

CREATE TABLE member_user (
	id INT(11) PRIMARY KEY,
	nama_member VARCHAR(40),
	email VARCHAR(30),
	telp VARCHAR(30),
	alamat VARCHAR(60),
	kota VARCHAR(40),
	provinsi VARCHAR(40),
	gender VARCHAR(10),
	username VARCHAR(20),
	password_user VARCHAR(100),
	foto VARCHAR(255)
);
	/*Insert Table Member*/
	INSERT INTO member_user (id,nama_member,email,telp,alamat,kota,provinsi,gender,username,password_user,foto)
	VALUES ('1','Agus','agus@gmail.com','1234','Jl Melati IV 212','Semarang','jateng','L','agus','123','orang3.jpg'); 
	INSERT INTO member_user (id,nama_member,email,telp,alamat,kota,provinsi,gender,username,password_user,foto)
	VALUES ('2','Joko','joko@gmail.com','','Jl Bambu Seru','Semarang','jateng','L','joko','123','avatar_g2.jpg');
	INSERT INTO member_user (id,nama_member,email,telp,alamat,kota,provinsi,gender,username,password_user,foto)
	VALUES ('3','Adul','adul@gmail.com','','Jl Melati Sukma','Pekalongan','jateng','L','adul','123','avatar_smoke.jpg');

CREATE TABLE 