<?php
// Create Connection
include 'connect.php';


$sql = "SELECT * FROM products where name='".$_POST['nama_product']."'";

$result = $conn->query($sql);

echo "<a href='read.php'>Reset</a><br><br>";
echo "<form action='read.php' method='post'><input type='text' name='nama_product'><input type='submit' value='search product'></form>";

if($result->num_rows>0){
    echo "<table style='border: solid 1px black;'><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Created</th></tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["description"]."</td><td>".$row["price"]."</td><td>".$row["created"]."</td></tr>";

    }
    echo "</table>";
}else{
    echo "0 result";
}

$conn->close();
?>