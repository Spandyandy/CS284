select car.carID name, brand, price, year, engine, horsepower, engineRev, maxSpeed from car, spec, carwithspec WHERE carwithspec.carID = car.carID AND carwithspec.specID = spec.specID;
