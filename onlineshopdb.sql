
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `category` (`Id`, `Name`, `Slogan`) VALUES
(1, 'Phone', 'Explore our new iPhone 12 Pro with the latest features. Different colors are available ...'),
(2, 'Laptop', 'Explore our new HP Laptop with the latest features and colors. High Performance and super powerful ...'),
(3, 'TV', 'Explore our new Samsung TV with the latest features and Dimensions. Smart TVs with Android technology are available ...');

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` (`Id`, `Name`, `Description`, `Price`, `CategoryId`, `Image`) VALUES
(3, 'Apple iPhone 12 ', 'RAM: 8 GB, Storage: 256 GB', 4000, 1, 'phone2.jpg'),
(4, 'Huawei Pro  ', 'RAM: 8 GB, Storage: 500 GB', 3200, 1, 'phone3.jpg'),
(5, 'HP Laptop', 'RAM: 16 GB, Storage: 1 TB', 5300, 2, 'laptop1.png'),
(6, 'Samsung Smart TV', '45 inches, Full-HD, High Resolution', 6100, 3, 'tv1.jpg'),
(9, 'OnePlus 6', 'RAM: 8GB, Storage: 128GB', 2200, 1, 'phone1.jpg'),
(15, 'Sony TV', 'High HD - 44 inches', 5200, 3, 'tv3.jpg'),
(16, 'Sony Smart TV', 'Samsung 55 Inch Curved 4K UHD Smart LED TV Grey - 55KU7500', 3052, 3, 'tv2.jpg'),
(17, 'Sony Smart LED', 'Sony 75 Inch TV Smart LED Black - KD-75X8000G', 6800, 3, 'tv4.jpg');

ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);


ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CategoryId` (`CategoryId`);


ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`);
COMMIT;

