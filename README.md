<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow App - README</title>
</head>
<body>
    <h1>Borrow App for SMK Informatika Pesat</h1>
    <p>This application helps manage the borrowing and returning of various items used within the school. It streamlines the process for both administrators and users, allowing easy tracking of item availability and loan status.</p>
    
    <h2>How to Run the Project</h2>
    <p>Follow the steps below to set up and run the Borrow App on your local machine:</p>

    <h3>Prerequisites</h3>
    <ul>
        <li>PHP (v8.x or higher)</li>
        <li>Composer</li>
        <li>Node.js and npm</li>
        <li>MySQL or another database supported by Laravel</li>
    </ul>

    <h3>Steps to Get Started</h3>
    <ol>
        <li><strong>Clone the Repository</strong>
            <p>Open your terminal and clone this project:</p>
            <pre><code>git clone &lt;repository-url&gt;</code></pre>
        </li>

        <li><strong>Open the Project in VS Code</strong>
            <p>Navigate to the project directory and open it using VS Code:</p>
            <pre><code>cd &lt;repository-directory&gt;<br>code .</code></pre>
        </li>

        <li><strong>Install Dependencies</strong>
            <p>Inside your terminal, run the following command to install PHP dependencies:</p>
            <pre><code>composer install</code></pre>
        </li>

        <li><strong>Generate Application Key</strong>
            <p>Run this command to generate a new key for your Laravel app:</p>
            <pre><code>php artisan key:generate</code></pre>
        </li>

        <li><strong>Run Migrations and Seed Database</strong>
            <p>Set up the database structure and insert initial data using:</p>
            <pre><code>php artisan migrate --seed</code></pre>
        </li>

        <li><strong>Create Super Admin User</strong>
            <p>Assign super-admin privileges to the first user (with ID = 1):</p>
            <pre><code>php artisan shield:super-admin --user=1</code></pre>
        </li>

        <li><strong>Install Node Modules</strong>
            <p>To handle frontend assets, run:</p>
            <pre><code>npm install</code></pre>
        </li>

        <li><strong>Compile Frontend Assets</strong>
            <p>Build and watch your frontend assets using:</p>
            <pre><code>npm run dev</code></pre>
        </li>

        <li><strong>Run the Laravel Development Server</strong>
            <p>Launch the development server:</p>
            <pre><code>php artisan serve</code></pre>
        </li>

        <li><strong>Access the Application</strong>
            <p>Open your browser and navigate to:</p>
            <pre><code>http://localhost:8000</code></pre>
        </li>

        <li><strong>Login Credentials</strong>
            <p>Use the following credentials to log in:</p>
            <ul>
                <li><strong>Email:</strong> admin@gmail.com</li>
                <li><strong>Password:</strong> admin</li>
            </ul>
        </li>
    </ol>

</body>
</html>
