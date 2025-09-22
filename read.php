<?php
// Create Connection
include 'connect.php';

// Read one record by id
// $sql = "SELECT * FROM products WHERE id = 1";

// Read one record by name
$sql = "SELECT * FROM products";

// Read one record by price
// $sql = "SELECT * FROM products WHERE price = 150000";

$result = $conn->query($sql);

echo "<a href='form_input_product.php'>Add product</a><br><br>";

if($result->num_rows>0){
    echo "<table border=1>
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Created</th>
    <th>Action</th>
    </tr>";
    $no = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>" . 
        "<td>" . $no++ . "</td>" . 
        "<td>" . $row["name"]. "</td>" . 
        "<td>" . $row["description"] . "</td>" . 
        "<td>" . $row["price"] . "</td>" . 
        "<td>" . $row["created"] . "</td>" . 
        "<td> 
        <a href='form_edit_product.php?id=".$row['id']."'>Edit |</a>
        <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Apakah kamu yakin ingin menghapus data ini?')\">Delete</a>". 
        "</td>" . 
        "</tr>";

    }
    echo "</table>";
}else{
    echo "0 result";
}

$conn->close();
?>