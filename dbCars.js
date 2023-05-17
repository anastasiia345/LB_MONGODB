db.cars.insertMany([
  {
    id: "1",
    carBrand: [ "Toyota",
    "BMW",
    "Ford" ],
    year: 2020,
    mileage: "20000",
    condition: "good"
  },
  {
    id: "2",
    carBrand: [
      "Ford",
      "Supra",
      "Skoda"
    ],
    year: 2019,
    mileage: "15000",
    condition: "new"
  },
  // add more car documents as needed
])