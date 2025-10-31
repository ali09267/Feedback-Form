# 💬 Feedback Form System

This is a simple **PHP-based Feedback Form** project where users can submit their feedback through a web form.  
The data is validated on the frontend and stored in a **MySQL database** on submission.  
After submitting, all feedback records are displayed in a neat Bootstrap table.

---

## 🧩 Features

- 📝 Submit feedback with Name, Email, Rating, and Message  
- ✅ Frontend form validation (JavaScript)  
- 💾 Data saved in MySQL database using PHP  
- 📊 View all feedback records after submission  
- 🎨 Clean and responsive Bootstrap UI  

---

## ⚙️ Technologies Used

- **Frontend:** HTML, CSS, Bootstrap 5  
- **Backend:** PHP (Procedural)  
- **Database:** MySQL  
- **Tool:** XAMPP  

---

## 🗂️ Project Structure

FeedbackForm/
│
├── index.php # Feedback form page
├── process.php # Handles form submission and saves data
├── view_feedback.php # Displays all feedback records
├── databaseConnection.php # Database connection file
└── README.md # Project documentation


---

## 🚀 How to Run the Project

1. Copy the project folder (`FeedbackForm`) into your `htdocs` directory inside XAMPP.  
2. Start **Apache** and **MySQL** from the XAMPP Control Panel.  
3. Create a database named `feedback_db` in phpMyAdmin.  
4. Create a table named `user_feedback` with these columns:
   - `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
   - `name` (VARCHAR)
   - `email` (VARCHAR)
   - `rating` (INT)
   - `comment` (TEXT)
5. Update your database credentials in `databaseConnection.php` if needed.  
6. Open your browser and visit:  
   👉 `http://localhost/FeedbackForm/index.php`

---

## 🧠 Learning Outcome

This project demonstrates understanding of:
- PHP form handling  
- Database connectivity  
- Frontend validation  
- Simple CRUD operations  
- Integration of Bootstrap for UI  

---

## Output Screenshots
Feedback Page:-
<img width="1102" height="874" alt="Screenshot 2025-10-31 180355" src="https://github.com/user-attachments/assets/989e4f04-5a43-4afc-ab9c-66e843c03e9f" />
Database:-
<img width="1812" height="751" alt="Screenshot 2025-10-31 180406" src="https://github.com/user-attachments/assets/45030894-fd72-4363-8fd3-87b3a0ea7391" />

## 👨‍💻 Developer

**Ali Ahmed**  
📍 Feedback Form Mini Project — for Software Construction and Design (SCD) under the mentorship of Ma'am Pireh
📅 October 2025

---
