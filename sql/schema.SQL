CREATE TABLE architect_records (
    architectID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR (50),
    lastName VARCHAR (50),
    emailAddress VARCHAR (50),
    contactNumber VARCHAR (50),
    gender VARCHAR (50),
    licenseNumber VARCHAR (50),
    specialization VARCHAR (50),
    dateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);