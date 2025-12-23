# 🏫 School Management system

A **School Management Web Application** designed to manage **rooms, courses, teachers, and students**.  
This system provides **three login roles (Admin, Teacher, Student)** and allows efficient handling of academic operations including **course management, room assignments, and student grading**.

---

## 🌐 Overview

The **School Site Management Portal** helps educational institutions automate academic record-keeping.  
- The **Admin** can manage the entire system (CRUD operations for rooms, courses, teachers, and students).  
- **Teachers** can feed marks for students enrolled in their assigned courses.  
- **Students** can log in to view their marks and personal details securely.

---

## 🚀 Core Features

### 👩‍💼 Admin Panel
- Login with admin credentials  
- Manage all system entities:
  - Add / Edit / Delete Courses  
  - Add / Edit / Delete Rooms  
  - Register and Manage Teachers  
  - Register and Manage Students  
- Assign teachers to specific courses and rooms  
- View all marks and reports  
- Full **CRUD Operations** (Create, Read, Update, Delete)

### 👨‍🏫 Teacher Panel
- Login using teacher credentials  
- View assigned courses and student lists  
- Record or update marks for students  
- View feedback and course data  

### 👨‍🎓 Student Panel
- Login using student credentials  
- View enrolled courses  
- Check marks and grades posted by teachers  
- Update basic profile information  

---

## 🧱 Tech Stack

| Technology | Usage |
|-------------|--------|
| **HTML5** | Page structure and form layout |
| **CSS3** | Styling and responsive UI |
| **PHP (Core)** | Backend logic and CRUD operations |
| **MySQL / SQL** | Database and data storage |

---

## 🗄️ Database Structure (Main Tables)

| Table | Description |
|--------|--------------|
| `admins` | Stores admin credentials |
| `teachers` | Teacher profile and login info |
| `students` | Student profile and login info |
| `courses` | Course data and assignments |
| `rooms` | Room and class information |
| `marks` | Student marks given by teachers |

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clonehttps://github.com/daniiiiel00/school-management-system.git
```
## 2️⃣ Move to Project Folder
cd school-management-system

## 3️⃣ Set Up Database

Open phpMyAdmin

Create a new database (e.g. school_portal_db)

Import the database.sql file located in the project folder

## 4️⃣ Configure Database Connection

Edit your database configuration file (e.g. config.php):

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_portal_db";

## 5️⃣ Run the Application

Place the project folder inside your local server directory:

XAMPP: htdocs/

WAMP: www/

Start Apache and MySQL

Visit in your browser:

http://localhost/school-management-system

## 🔐 Login Roles

| Role    | Username    | Password     | Description                        |
| ------- | ----------- | ------------ | ---------------------------------- |
| Admin   | `admin`     | `admin123`   | Full system access                 |
| Teacher | `teacher01` | `teacher123` | Manage marks for assigned students |
| Student | `student01` | `student123` | View marks and profile             |

## 🧭 Project Folder Structure

school-management-portal/
│
├── admin/
│   ├── dashboard.php
│   ├── manage_courses.php
│   ├── manage_rooms.php
│   ├── manage_teachers.php
│   ├── manage_students.php
│
├── teacher/
│   ├── dashboard.php
│   ├── feed_marks.php
│
├── student/
│   ├── dashboard.php
│   ├── view_marks.php
│
├── includes/
│   ├── db_connect.php
│   ├── header.php
│   ├── footer.php
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── images/
│
├── database.sql
└── index.php
## 📱 Responsive Design

Built with HTML + CSS

Fully responsive layout for desktop and mobile

User-friendly interface for all roles

## 🧰 Future Improvements

Add parent login portal

Export reports to PDF or Excel

Add notifications and messaging system

Role-based access enhancements

Integrate RESTful API for mobile version

## 🪪 License

This project is licensed under the MIT License
.
## 👨‍💻 Author

Daniel Melese
Diploma in Web Development & Database Administration
🏆 Skilled in HTML, CSS, PHP, SQL, and Full Stack Web Development
📧 Email: danielmelese240@gmail.com
🌐 GitHub: https://github.com/daniiiiel00



