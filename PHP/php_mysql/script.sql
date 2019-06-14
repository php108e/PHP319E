/*==NHÓM CÂU LỆNH ĐỊNH NGHĨA DỮ LIỆU (DDL)==*/
/*Tạo CSDL có tên 'DienthoaiDB'*/
CREATE DATABASE DienthoaiDB;

/*Tạo bảng theo yêu cầu đầu bài*/
CREATE TABLE dienthoai
(
	masp int(11) auto_increment PRIMARY KEY,
	tensp varchar(100),
	giasp int(11),
	soluong int(11),
	namsx int(4),
	hang varchar(20),
	tomtat text
);

/*==NHÓM CÂU LỆNH THAO TÁC DỮ LIỆU (DML)==*/
/*Thêm dữ liệu vào bảng 'dienthoai'*/
INSERT INTO dienthoai(masp,tensp,giasp,soluong,namsx,hang,tomtat) VALUES
(1, 'IPhone X', 23000000, 10, 2018, 'Apple', 'Dòng điện thoại cao cấp của Apple'),
(2, 'Samsung Note 10', 2000000, 5, 2019, 'Samsung', 'Điện thoại mới nhất của Samsung');

