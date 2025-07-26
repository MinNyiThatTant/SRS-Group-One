
## About Student Registration System (SRS) created by E-service-Group(1/2025)

SRS is a web-based application designed to streamline the process of student registration and course management for Technological University targeting WYTU(sample).

### Goal

- SRS is to facilitate the registration process for students, whether they are new or returning. 
- To provide a user-friendly interface that allows students to register for courses, update their personal information, and track their academic progress. 
- For administrators, SRS offers tools to manage departments, courses, and student registrations efficiently.

### Key Features

1. **User -Friendly Interface**: The system is designed with an intuitive interface that simplifies the registration process for students. It provides clear navigation and easy access to necessary information.

2. **Student Registration**: New students can easily register by filling out a form with their personal details, while returning students can log in to update their information and register for new courses.

3. **Course Management**: Administrators can create and manage courses, assign teachers, and set prerequisites. This feature ensures that students have access to the courses they need for their academic progression.

4. **Department Management**: The system allows for the creation and management of various academic departments, ensuring that courses are organized and categorized appropriately.

5. **Academic Year and Semester Management**: Administrators can define academic years and semesters, which helps in organizing course offerings and student registrations according to the academic calendar.

6. **Financial Tracking**: The system includes a finance module that tracks student payments, financial statuses, and approve invoices.

7. **Class Scheduling**: Administrators can create and manage class schedules, ensuring that students are informed about when and where their classes will take place.

8. **Reporting**: Reporting features allow administrators to generate reports on student registration statistics, and financial status.

<!-- ### Benefits

- **Efficiency**: The system automates many of the manual processes involved in student registration, reducing administrative workload and minimizing errors.
- **Accessibility**: Students can access the system from anywhere with an internet connection, making it convenient for them to register and manage their academic profiles.
- **Data Integrity**: The use of a centralized database ensures that all student information is stored securely and can be easily retrieved or updated as needed.
- **Improved Communication**: The system can facilitate communication between students and administrators, providing notifications and updates regarding registrations, payments, and academic progress. -->

# Laravel Implementation

## Table of Contents
1. [System Overview](#system-overview)
2. [Features](#features)
3. [Installation](#installation)
4. [Database Schema](#database-schema)
5. [Implementation Steps](#implementation-steps)
6. [Additional Functions](#additional-functions)

## System Overview <a name="system-overview"></a>
A comprehensive student registration system built with Laravel framework that handles both new and returning student registrations with department management, course scheduling, and financial tracking.

## Features <a name="features"></a>
1. **Student Management**
   - New student registration
   - Returning student profile updates
   - Student status tracking

2. **Academic Management**
   - Department creation and management
   - Course creation and assignment
   - Semester and academic year configuration

3. **Administration**
   - Teacher management
   - Class scheduling
   - Registration approval workflow
   - Grade management

4. **Financial Tracking**
   - Payment records
   - Financial status monitoring

## Installation <a name="installation"></a>

### Prerequisites
- [PHP 8.0 or higher](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/mysql/)
- [npm](https://icons.getbootstrap.com/) //(node_module for bootstrap theme & icons)
```bash
npm i bootstrap-icons

### Installation Steps

1. **Install Laravel Framework**
```bash
composer global require laravel/installer

- go to your project directory and run artisan

2. **If you need dependencies**
```bash
composer install
npm install

3. **Generate artisan key**
```bash
php artisan key:generate

4. **Run Migration**
```bash
php artisan migrate

5. **To serve your project**
```bash
php artisan serve