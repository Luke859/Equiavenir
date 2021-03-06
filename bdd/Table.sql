CREATE TABLE User
(
	UserId INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	UserLastName VARCHAR(80),
	UserFirstName VARCHAR(80),
	UserEmail VARCHAR(255),
	UserLocation VARCHAR(80),
	UserGender VARCHAR(80),
	UserPhone VARCHAR(16),
	UserBirthDate Date
);

CREATE TABLE Seller
(
	SellerId INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	UserId INT,
	CONSTRAINT fk_Seller_User FOREIGN KEY (UserId) REFERENCES User(UserId)
);

CREATE TABLE Buyer
(
	BuyerId INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	BuyerRIB VARCHAR(80),
-- 	BuyerCV VARBINARY(MAX),
	UserId INT,
	CONSTRAINT fk_Buyer_User FOREIGN KEY (UserId) REFERENCES User(UserId)
);

CREATE TABLE Job
(
	JobId INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	JobName VARCHAR(80),
	JobDate DATE,
	JobDuration DATE,
	JobTitle VARCHAR(80),
	JobDescription VARCHAR(255),
	SellerId INT,
	CONSTRAINT fk_Job_Seller FOREIGN KEY (SellerId) REFERENCES Seller(SellerId)
);

CREATE TABLE Booking
(
	BookingId INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
	BuyerId INT,
	JobId INT,
	CONSTRAINT fk_Booking_Job FOREIGN KEY (JobId) REFERENCES Job(JobId),
	CONSTRAINT fk_Booking_Buyer FOREIGN KEY (BuyerId) REFERENCES Buyer(BuyerId)
)