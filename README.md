
## Task Tracker Application

This is a simple Laravel-based Task Tracker application that allows users to create, update, and delete tasks. The application also features real-time updates using Laravel Echo and Pusher.


## Features
- Task Management: Create, view, update, and delete tasks.
- Real-Time Notifications: Receive real-time updates when tasks are created or updated.
- Authentication: Secure user authentication and authorization.
- Responsive Design: Mobile-friendly and responsive design using Bootstrap.


## Technologies used
- Laravel: Backend framework
- Bootstrap: Frontend framework for responsive UI
- Laravel Echo & Pusher: Real-time event broadcasting
- MySQL: Database


## Installation
**- Prerequisites**
- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL


## Steps
**-Clone the repository:**
- bash
- Copy code
- git clone https://github.com/Thadsha98/task-tracker-laravel.git
- cd task-tracker-laravel

**- Install dependencies:**
- bash
- Copy code
- composer install
- npm install

**- Set up environment variables:**
- Copy the .env.example file to .env and configure your database and other environment variables:
    - bash
    - Copy code
    - cp .env.example .env

**- Generate application key:**
- bash
- Copy code
- php artisan key:generate

**- Run migrations:**
- bash
- Copy code
- php artisan migrate

**- Run the application:**
- bash
- Copy code
- php artisan serve 

**- Run Laravel Mix to compile assets:**
- bash
- Copy code
- npm run dev 

## Usage
- After installation, register a new user or log in with existing credentials
- Once logged in, you will be redirected to the Tasks page where you can manage your tasks.
- You can create new tasks, edit existing ones, and delete tasks.
