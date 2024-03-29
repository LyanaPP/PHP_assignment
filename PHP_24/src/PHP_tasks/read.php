<?php
$title = "Exercise 7: CURD-Read";
$md="Please use appropriate meta Description";
include 'header.php'; ?>


<?php
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM studentsinfo"; //上传shell需要改students

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupid']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>

<?php include 'footer.php'; ?>