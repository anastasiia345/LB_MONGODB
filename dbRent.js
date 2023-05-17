db.rent.insertMany([
    {
      id: 1,
      startDate: 1630512000, // Unix Timestamp (01/09/2021 @ 12:00am (UTC))
      endDate: 1633017600, // Unix Timestamp (09/30/2021 @ 12:00am (UTC))
      cost: 100, // Currency in your local format
      carBrand: "Toyota"
    },
    {
      id: 2,
      startDate: 1654070400, // Unix Timestamp (06/01/2022 @ 12:00am (UTC))
      endDate: 1656748800, // Unix Timestamp (06/30/2022 @ 12:00am (UTC))
      cost: 150, // Currency in your local format
      carBrand: "Ford"
    },
    // add more rental documents as needed
  ])