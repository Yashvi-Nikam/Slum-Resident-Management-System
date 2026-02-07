# Slum Resident Management System 

The Slum Resident Management System is a PHP and MySQL based web application developed for academic purposes.  
It allows structured collection, storage, and viewing of basic resident information through a web form and an admin panel.

The project demonstrates form handling, file uploads, database integration, and record display using core web technologies.

---


##  Features

- Web form for collecting resident details
- Stores the following information:
  - Slum name and address
  - Hut number
  - Owner and spouse names
  - Aadhaar numbers (masked during display)
  - Photo and fingerprint uploads
- Admin panel to view stored records
- Aadhaar masking to reduce exposure of sensitive data
- Simple and readable user interface

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


## Privacy and Data Handling Notes

- Aadhaar numbers are masked in the admin panel and all screenshots.
- Uploaded photos and fingerprints are sample or dummy images.
- No authentication or authorization mechanism is implemented in this version.
- Records are view-only from the application; editing and deletion are done directly in the database.
- This project is intended strictly for academic and learning purposes and is not suitable for real-world deployment.

---


## Limitations

- No login or role-based access control
- Admin panel is publicly accessible if the URL is known
- No encryption for uploaded files
- No validation against duplicate or incorrect entries
- Requires a local server environment

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

