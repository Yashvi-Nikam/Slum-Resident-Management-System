# Slum Resident Management System 

A PHP & MySQL based web application designed to collect, store, and view slum resident information in a structured and secure manner.  
This project was developed for academic purposes to demonstrate form handling, file uploads, database storage, and admin-based record viewing.

---

##  Features

- Resident data collection through a clean web form
- Stores details such as:
  - Slum name & address
  - Hut number
  - Owner & spouse names
  - Aadhaar numbers (masked in display)
  - Photo & fingerprint uploads
- Admin panel to view stored records
- Aadhaar masking for privacy protection
- Simple and user-friendly UI

---

##  Screenshots

### 1. Resident Information Form
![Form Page](screenshots/form_page.png)

### 2. Successful Data Submission
![Success Page](screenshots/After_Submission.png)

### 3. Admin – Residents List
![Admin Output](screenshots/Output_Page.png)

### 4. Database View (phpMyAdmin)
![Database](screenshots/myphpadmin_page.png)

---

##  Privacy & Security Notes

- Aadhaar numbers are **masked** in both the admin panel and screenshots.
- Uploaded photos and fingerprints are **sample/demo images only**.
- No authentication system is implemented in this version.
- This project is intended **strictly for academic and learning purposes**, not for real-world deployment.

---

##  Limitations

- No user authentication or role-based access
- Admin page is not protected by login
- Data editing/deletion is done directly via the database
- No encryption for uploaded files
- Not deployed live (PHP requires a server environment)

---

##  Technologies Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP (Apache & phpMyAdmin)

---

##  Installation & Setup

Follow these steps to run the project locally:

1. Install **XAMPP** or **WAMP**
2. Start **Apache** and **MySQL**
3. Copy the project folder into:   htdocs/ (XAMPP)
4. Open **phpMyAdmin**
5. Create a database named:   slum_project_db
6. Import the file:  database.sql
7. Update database credentials in:  db_connect.php
8. Open browser and visit:  http://localhost/slum_project/index.php


---

##  Live Deployment

This project is **not deployed live** because:
- GitHub Pages does not support PHP
- The application requires a local server and database

---


This project is created for educational purposes only.

