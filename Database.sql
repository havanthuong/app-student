CREATE TABLE Users (
    userID integer PRIMARY KEY AUTO_INCREMENT,
    userName varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    age int NOT NULL
);
INSERT INTO Users(userName,password,age) VALUES
('hvt', '12345678', 23),
('admin', '123', 30),
('user', '789', 25);

CREATE TABLE Students (
    studentID integer PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    age int NOT NULL,
    class varchar(255) NOT NULL
);
INSERT INTO Students(name,age,class) VALUES
('ĐỖ Ngọc Hoàng', 15, '10A1'),
('Hà Văn Khắc Cương', 15, '10A1'),
('Trần Phi Long', 15, '10A1'),
('Hoàng Nhật Tiên', 15, '10A1'),
('Vũ Văn Vô Địch', 15, '10A1'),
('Tạ Tử Long', 15, '105'),
('Huỳnh Hoa Bảo', 15, '10A5'),
('Lý Thu Thủy', 15, '10A5'),
('Đoàn Chính Thuần', 15, '10A5'),
('Mộc UYển Thanh', 15, '105');