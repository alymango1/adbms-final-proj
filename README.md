
# 🎓 Simple Student Information System (CRUD Web Application)

## 📖 Overview

The **Student Information System** is a simple web-based CRUD application designed to manage student records stored in a MySQL database.

It allows users to **create, view, update, and delete** student information through a user-friendly interface.
This project was developed as part of an **Advanced Database Management Systems (ADBMS)** course requirement to demonstrate practical database operations and web integration.

---

## ⚙️ Features

### ➕ Add Student

* Insert new student records into the database
* Capture complete student details through a form

### 📋 View Students

* Display all student records in a structured table
* Data is dynamically retrieved from the database

### ✏️ Edit / Update Student

* Modify existing student information
* Update records directly in the database

### ❌ Delete Student

* Remove student records permanently from the database
* Changes are reflected immediately in the table

---

## 🗂️ Database Structure

The system uses a single main table:

### `students`

It stores the following fields:

* Student ID
* Name
* Email
* Course
* Program
* Address
* Section
* Year Level
* Status

---

## 🧠 Core Functionality

This project demonstrates:

* CRUD operations using SQL (Create, Read, Update, Delete)
* Form handling for inserting and updating records
* Data retrieval and table display from MySQL
* Record deletion with database synchronization
* Basic relational database design principles

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS
* **Backend:** PHP 
* **Database:** MySQL
* **Tools:** XAMPP, phpMyAdmin, VS Code

---

## 🚀 How to Run the Project

1. Clone the repository:

```bash id="clone3"
git clone https://github.com/alymango1/adbms-final-proj.git
```

2. Import the database:

* Open **phpMyAdmin**
* Create a database (e.g., `crud_db`)
* Import the provided `.sql` file

3. Run the project locally:

* Move the project folder to `htdocs` (XAMPP)
* Start **Apache** and **MySQL**
* Open browser:

```id="run3"
http://localhost/adbms-final-proj/
```

---

## 📸 Screenshots

<img width="1917" height="872" alt="image" src="https://github.com/user-attachments/assets/3637a85d-edff-4b6c-acfa-7b7ecd03f443" />
<img width="1918" height="871" alt="image" src="https://github.com/user-attachments/assets/b6f2a419-eaab-4b85-8ca7-8da20b728529" />
<img width="1919" height="871" alt="image" src="https://github.com/user-attachments/assets/47cf81a0-fb6a-4f46-9a8c-d44daad76aae" />
<img width="1919" height="877" alt="image" src="https://github.com/user-attachments/assets/9dd51810-813e-4779-a67a-e94feecbfb0a" />
<img width="1919" height="874" alt="image" src="https://github.com/user-attachments/assets/e28f2bb5-56f0-4fd2-8080-836d5ef495bd" />


---

## 📌 Future Improvements

* Add input validation and error handling
* Improve UI/UX design (responsive and modern layout)
* Add search and filter functionality
* Add login system for admin access
* Improve database normalization and constraints

---

## 👨‍💻 Developer

* Jorge Andrei Fuertes

---

## 📄 License

This project is intended for academic purposes only.


