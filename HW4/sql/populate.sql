
insert into car(name, brand, price, year)
	values('Veneno', 'Lamborghini', 4500000, 2017)
	     ,('Lykan HyperSport ', 'W Motors', 3400000, 2017)
	     ,('La Ferrari', 'Ferrari', 2700000, 2017)
	     ,('Chiron', 'Bugatti', 2600000, 2017)
	     ,('Huayra', 'Pagani', 1600000, 2017)
	     ,('Centenario', 'Lamborghini', 1900000, 2017)
	     ,('McLaren P1 LM', 'McLaren', 3000000, 2017)
	     ,('One-77', 'Aston Martin', 1750000, 2017)
	     ,('TS1', 'Zenvo', 1200000, 2017)
	     ,('S600 Guard', 'Mercedes-Maybach', 516000, 2017)
	;

insert into spec(engine, horsepower, engineRev, maxSpeed)
	values('V12', 1036, 3.1, 290)
	     ,('8L V16', 1500, 2.9, 261)
	     ,('6.5L V12', 750 ,2.8, 220)
	     ,('RUF', 780, 2.8, 240)
	     ,('V12', 759, 2.8, 220)
	     ,('6L twin V12', 700, 3.0, 210)
   	     ,('6L V12', 565, 3.0, 200)
	     ,('V8', 986, 2.4, 217)
	     ,('6L V12', 530, 4.5, 160)
	     ,('V8', 740, 2.9, 233)
	;

insert into carwithspec(carID, specID)
	values(1,3)
	     ,(2,4)
	     ,(3,1)
	     ,(4,2)
	     ,(5,6)
	     ,(6,5)
	     ,(7,8)
	     ,(8,7)
	     ,(9,10)
	     ,(10,9)
	;

