# Borrow App for SMK Informatika Pesat

This application helps manage the borrowing and returning of various items used within the school. It streamlines the process for both administrators and users, allowing easy tracking of item availability and loan status.

## How to Run the Project

Follow the steps below to set up and run the Borrow App on your local machine:

### Prerequisites

Make sure you have the following installed:

-   PHP (v8.x or higher)
-   Composer
-   Node.js and npm
-   MySQL or another database supported by Laravel

### Steps to Get Started

1. **Clone the Repository**  
    Open your terminal and clone this project:
    ```bash
    git clone <repository-url>
    Open the Project in VS Code
    Navigate to the project directory and open it using VS Code:
    ```

bash
Copy code
cd <repository-directory>
code .
Install Dependencies
Inside your terminal, run the following command to install PHP dependencies:

bash
Copy code
composer install
Generate Application Key
Run this command to generate a new key for your Laravel app:

bash
Copy code
php artisan key:generate
Run Migrations and Seed Database
Set up the database structure and insert initial data using:

bash
Copy code
php artisan migrate --seed
Create Super Admin User
Assign super-admin privileges to the first user (with ID = 1):

bash
Copy code
php artisan shield:super-admin --user=1
Install Node Modules
To handle frontend assets, run:

bash
Copy code
npm install
Compile Frontend Assets
Build and watch your frontend assets using:

bash
Copy code
npm run dev
Run the Laravel Development Server
Launch the development server:

bash
Copy code
php artisan serve
Access the Application
Open your browser and navigate to:

arduino
Copy code
http://localhost:8000
Login Credentials
Use the following credentials to log in:

Email: admin@gmail.com
Password: admin
