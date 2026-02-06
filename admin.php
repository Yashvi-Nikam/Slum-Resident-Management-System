<?php
include 'db_connect.php';

$sql = "SELECT * FROM residents";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Residents List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 class="admin-heading">Residents List</h2>

<table>
<tr>
    <th>ID</th>
    <th>Slum Name</th>
    <th>Address</th>
    <th>Hut No</th>
    <th>Owner</th>
    <th>Owner Aadhaar</th>
    <th>Owner Photo</th>
    <th>Owner Fingerprints</th>
    <th>Spouse</th>
    <th>Spouse Aadhaar</th>
    <th>Spouse Photo</th>
    <th>Spouse Fingerprints</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['slum_name']}</td>
            <td>{$row['address']}</td>
            <td>{$row['hut_number']}</td>
            <td>{$row['owner_name']}</td>
            <td>{$row['husband_aadhaar']}</td>
            <td><img src='{$row['husband_photo_path']}'></td>
            <td><img src='{$row['husband_fingerprint_path']}'></td>
            <td>{$row['wife_name']}</td>
            <td>{$row['wife_aadhaar']}</td>
            <td><img src='{$row['wife_photo_path']}'></td>
            <td><img src='{$row['wife_fingerprint_path']}'></td>
        </tr>";
    }
}
$conn->close();
?>

</table>

</body>
</html>
