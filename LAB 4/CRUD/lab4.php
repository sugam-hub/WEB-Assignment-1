<?php include " ./database.php";
global $conn;

mysqli_query(
    $conn,
    "INSERT INTO customers(CustomerName,ContactName,Address,City,PostalCode,Country) VALUES('Sugam','9813795441','Sydney','Sydney','12345','Australia')"
);

mysqli_query(
    $conn,
    "INSERT INTO customers(CustomerName,ContactName,Address,City,PostalCode,Country) VALUES('Anish','9823623613','Kathmandu','Kathmandu','123456','Nepal'),('Niraj','9860000888,'Kathmandu','Kathmandu','12345','Kathmandu')"
);

mysqli_query(
    $conn,
    "INSERT INTO customers(CustomerName,ContactName,Address,City,PostalCode,Country) VALUES('Anish','9823623613','Kathmandu','Kathmandu','123456','Nepal'),('Niraj','9860000888,'Kathmandu','Kathmandu','12345','Kathmandu'),('Anish','9823623613','Kathmandu','Kathmandu','123456','Nepal'),('Niraj','9860000888,'Kathmandu','Kathmandu','12345','Kathmandu')"
);

mysqli_query(
    $conn, 
    "UPDATE customer SET city='Lalitpur' WHERE city='Kathmandu'"
);

mysqli_query(
    $conn,
    "UPDATE customer SET city='New York',country='USA' WHERE city='Shanghai' AND country='China'"
);

mysqli_query(
    $conn,
    "DELETE FROM Customer WHERE country='Australia'"
);

mysqli_query(
    conn,
    "SELECT * FROM customer WHERE country in ('Nepal','India')"
);
?>