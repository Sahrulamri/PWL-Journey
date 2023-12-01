CREATE TABLE barang (
	id INT(11) PRIMARY KEY NOT NULL,
	nama VARCHAR(40),
	hrg DOUBLE,
	jml INT(11),
	keterangan VARCHAR(100),
	foto VARCHAR(255)
);

INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('1','aglonema Suksom','45000','10','aglone','aglonemaSuksom.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('2','aglonema Rotundum Aceh','30000','10','','aglonemaRotundumAceh.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('3','aglonemaRoDudAnjamani','75000','10','','aglonemaRoDudAnjamani.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('4','aglonemaSnowWhiteRemaja','77','10','','aglonemaSnowWhiteRemaja.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('5','aglonemaSuperWhite','90000','50','','aglonemaSuperWhite.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('6','aglonemaVenus','90000','10','77','aglonemaVenus.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('7','aglonemaRedAnjamaniDewasa','75000','10','','aglonemaRedAnjamaniDewasa.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('8','aglonemaAyunindi','35000','10','','aglonemaAyunindi.jpg');
INSERT INTO barang (id,nama,hrg,jml,keterangan,foto)
	VALUES ('9','aglonemaKhocin','35000','5','','aglonemaKhocin.jpg');
	
CREATE TABLE MEMBER(
	id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama_member VARCHAR(40),
	email VARCHAR(30),
	telp VARCHAR(30),
	alamat VARCHAR(60),
	kota VARCHAR(40),
	provinsi VARCHAR(40),
	gender VARCHAR(10),
	username VARCHAR(20),
	PASSWORD VARCHAR(100),
	foto VARCHAR(255)
);
	/*Insert Table Member*/
	INSERT INTO MEMBER(id,nama_member,email,telp,alamat,kota,provinsi,gender,username,PASSWORD,foto)
	VALUES ('1','Agus','agus@gmail.com','1234','Jl Melati IV 212','Semarang','jateng','L','agus','123','orang1.jpg'); 
	INSERT INTO MEMBER(id,nama_member,email,telp,alamat,kota,provinsi,gender,username,PASSWORD,foto)
	VALUES ('2','Joko','joko@gmail.com','','Jl Bambu Seru','Semarang','jateng','L','joko','123','orang2.jpg');
	INSERT INTO MEMBER(id,nama_member,email,telp,alamat,kota,provinsi,gender,username,PASSWORD,foto)
	VALUES ('3','Adul','adul@gmail.com','','Jl Melati Sukma','Pekalongan','jateng','L','adul','123','orang3.jpg');

CREATE TABLE tborder (
	id INT(10) PRIMARY KEY NOT NULL UNSIGNED AUTO_INCREMENT,
	idmember INT(10) NOT NULL,
	tgl DATE NOT NULL,
	jenisByr VARCHAR(20),
	bank VARCHAR(40),
	norek VARCHAR(40),
	biaya_kirim DOUBLE,
	pembelian DOUBLE,
	totalByr DOUBLE,
	ekspedisi VARCHAR(40),
	STATUS TINYINT(1)
);

CREATE TABLE tborder_detail (
	idorder INT(11) PRIMARY KEY NOT NULL,
	idbarang INT(11) PRIMARY KEY NOT NULL,
	jml FLOAT NOT NULL,
	hrg INT(11) NOT NULL
);

CREATE TABLE USER (
	iduser INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username VARCHAR(25) NOT NULL,
	PASSWORD VARCHAR(100) NOT NULL,
	foto VARCHAR(255)
);