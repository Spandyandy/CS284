
create table car(
 	 carID int AUTO_INCREMENT NOT NULL PRIMARY KEY
	,name varchar(40)
	,brand varchar(40)
	,price int
	,year int
);

create table spec(
	 specID int AUTO_INCREMENT NOT NULL PRIMARY KEY
	,engine varchar(20)
	,horsepower int
	,engineRev float
	,maxSpeed int
);

create table carwithspec(
	descriptionID int AUTO_INCREMENT NOT NULL PRIMARY KEY
	,carID int
	,specID int
);

