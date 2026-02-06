<?php
include 'db_connect.php';  // connect to database

// Collect form data from index.php
$slum_name = $_POST['slum_name'];
$address = $_POST['address'];
$owner_name = $_POST['owner_name'];
$wife_name = $_POST['wife_name'];
$hut_number = $_POST['hut_number'];
$husband_aadhaar = $_POST['husband_aadhaar'];
$wife_aadhaar = $_POST['wife_aadhaar'];

// For now, photo and fingerprint paths are empty
// Folder to save uploaded images
$target_dir = "uploads/";

// Folder to save uploads
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Husband files
$husband_photo_name = $_FILES['husband_photo']['name'];
$husband_photo_tmp = $_FILES['husband_photo']['tmp_name'];
$husband_photo_path = $target_dir . basename($husband_photo_name);
move_uploaded_file($husband_photo_tmp, $husband_photo_path);

$husband_fingerprint_name = $_FILES['husband_fingerprint']['name'];
$husband_fingerprint_tmp = $_FILES['husband_fingerprint']['tmp_name'];
$husband_fingerprint_path = $target_dir . basename($husband_fingerprint_name);
move_uploaded_file($husband_fingerprint_tmp, $husband_fingerprint_path);

// Wife files
$wife_photo_name = $_FILES['wife_photo']['name'];
$wife_photo_tmp = $_FILES['wife_photo']['tmp_name'];
$wife_photo_path = $target_dir . basename($wife_photo_name);
move_uploaded_file($wife_photo_tmp, $wife_photo_path);

$wife_fingerprint_name = $_FILES['wife_fingerprint']['name'];
$wife_fingerprint_tmp = $_FILES['wife_fingerprint']['tmp_name'];
$wife_fingerprint_path = $target_dir . basename($wife_fingerprint_name);
move_uploaded_file($wife_fingerprint_tmp, $wife_fingerprint_path);



// Insert data into the table
$sql = "INSERT INTO residents 
    (slum_name, address, owner_name, wife_name, hut_number, husband_aadhaar, wife_aadhaar, 
     husband_photo_path, husband_fingerprint_path, wife_photo_path, wife_fingerprint_path)
    VALUES
    ('$slum_name', '$address', '$owner_name', '$wife_name', '$hut_number', '$husband_aadhaar', '$wife_aadhaar', 
     '$husband_photo_path', '$husband_fingerprint_path', '$wife_photo_path', '$wife_fingerprint_path')";


// Execute query and check
if ($conn->query($sql) === TRUE) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="success-page">

        <div class="success-box">
            <h1>✅ Data Saved Successfully</h1>
            <p>The resident information has been securely stored.</p>

            <a href="index.php" class="success-btn">Add Another Entry</a>
            <a href="admin.php" class="success-btn outline">View Records</a>
        </div>

    </body>
    </html>
    ';
}

