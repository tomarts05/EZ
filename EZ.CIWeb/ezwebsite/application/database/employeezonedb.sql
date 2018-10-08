
CREATE DATABASE /*!32312 IF NOT EXISTS*/`employeezonedb` /*!40255 DEFAULT CHARACTER SET latin1 */;

USE `employeezonedb`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE 'user' (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  'E_Mail' varchar(255) DEFAULT NULL,
  'Username' varchar(255) DEFAULT NULL,
  'Password' varchar(255) DEFAULT NULL,
  'Role' varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
);


DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_ID` varchar(100) DEFAULT NULL,
  `Employee_Name_English` varchar(255) DEFAULT NULL,
  `Employee_Name_Arabic` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `PositionArabic` varchar(255) DEFAULT NULL,
  `Grade` varchar(255) DEFAULT NULL,
  `Cost_Center` varchar(255) DEFAULT NULL,
  `Hiring_Date` datetime DEFAULT NULL,
  `Termination_Date` datetime DEFAULT NULL,
  `Birth_Date` datetime DEFAULT NULL,
  `ID_Iqama` varchar(255) DEFAULT NULL,
  `E_Mail` varchar(255) DEFAULT NULL,
  `Mobile` varchar(255) DEFAULT NULL,
  `Nationality` varchar(255) DEFAULT NULL,
  `Sponsor` varchar(255) DEFAULT NULL,
  `Line_Manager_No` varchar(255) DEFAULT NULL,
  `Line_Manager_Name` varchar(255) DEFAULT NULL,
  `Line_Manager_Email` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Dept_Head_No` varchar(255) DEFAULT NULL,
  `Dept_Head_Name` varchar(255) DEFAULT NULL,
  `Dept_Head_Email` varchar(255) DEFAULT NULL,
  `Employee_Spouse` varchar(255) DEFAULT NULL,
  `Cost_Center_HoD` varchar(255) DEFAULT NULL,
  `Function_Head` varchar(255) DEFAULT NULL,
  `Division` varchar(255) DEFAULT NULL,
  `Line_Manager_Name_AP` varchar(255) DEFAULT NULL,
  `Dept_Head_Name_AP` varchar(255) DEFAULT NULL,
  `Oracle_Org_Name` varchar(255) DEFAULT NULL,
  'User_Id' INT(11) DEFAULT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


