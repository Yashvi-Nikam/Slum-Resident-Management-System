<!DOCTYPE html>
<html>
<head>
    <title>Slum Resident Information Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-wrapper">
    <form method="post" action="save_data.php" enctype="multipart/form-data">
        <h2>Slum Resident Information Form</h2><br>

        <label>Slum Name</label>
        <input type="text" name="slum_name" required><br>

        <label>Address</label>
        <input type="text" name="address" required><br>

        <label>Hut Number</label>
        <input type="text" name="hut_number" required><br><br>

        <label>Owner Name</label>
        <input type="text" name="owner_name" required><br>

        <label>Owner Aadhaar</label>
        <input type="text" name="husband_aadhaar" required><br>

        <label>Owner Photo</label>
        <input type="file" name="husband_photo" required><br>

        <label>Owner Fingerprint</label>
        <input type="file" name="husband_fingerprint" required><br><br>

        <label>Spouse Name</label>
        <input type="text" name="wife_name" required><br>

        <label>Spouse Aadhaar</label>
        <input type="text" name="wife_aadhaar" required><br>

        <label>Spouse Photo</label>
        <input type="file" name="wife_photo" required><br>

        <label>Spouse Fingerprint</label>
        <input type="file" name="wife_fingerprint" required><br><br><br>

        <input type="submit" value="Submit Data">
    </form>
</div>

</body>
</html>
