<?php
require_once("./config/employeeDb.php");

// Setting query
$createHolidaysTable = "CREATE TABLE holidays (
  emp_no      INT             NOT NULL,
  destination VARCHAR(50)     NOT NULL,
  from_date   DATE            NOT NULL,
  to_date     DATE            NOT NULL,
  FOREIGN KEY (emp_no) REFERENCES employees (emp_no) ON DELETE CASCADE,
  PRIMARY KEY (emp_no, from_date)
)";


// Creating table
if ($employeeDBConnection->query($createHolidaysTable) === TRUE) {
  // echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $employeeDBConnection->error;
}

// Filling table
$fillingHolidaysTable = "INSERT INTO holidays (emp_no, destination, from_date, to_date)
values (1, 'Parma', '2019-12-03', now()),
(2, 'Sevilla', '2002-12-31', now()),
(3, 'Barcelona', '2000-12-11', now()),
(4, 'Sardegna', '2002-12-05', now()),
(5, 'New York', '2004-07-26', now()),
(6, 'Dos Hermanas', '2004-10-08', now()),
(7, 'Camboya', '2005-06-13', now()),
(8, 'Paris', '2006-09-02', now()),
(9, 'Berlin', '2006-11-10', now()),
(10, 'Canarias', '2008-07-02', now()),
(11, 'Marrakech', '2013-06-20', now()),
(12, 'Sagres', '2013-07-29', now()),
(13, 'Toscana', '2013-09-01', now()),
(14, 'London', '2016-03-29', now()),
(15, 'Ginebra', '2016-09-05', now())
";

// Inserting data
if ($employeeDBConnection->query($fillingHolidaysTable) === TRUE) {
  // echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $employeeDBConnection->error;
}
