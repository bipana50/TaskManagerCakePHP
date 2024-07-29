# My Task Manager Application

This is a task manager application built with CakePHP. It allows users to manage tasks in a Trello-like fashion.

## Setup Instructions

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL
- Git

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/task-manager.git
    cd task-manager
    ```

2. Install the dependencies:

    ```bash
    composer install
    ```

3. Configure your database:

    - Copy the `config/app_local.php.example` to `config/app_local.php`.
    - Update the database configuration in `config/app_local.php` with your database credentials.

4. Run the database migrations or use sql commands:

    ```bash
    bin/cake migrations migrate
    ```

    ```sql
    CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );

    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        status ENUM('todo', 'in-progress', 'done') DEFAULT 'todo',
        user_id INT NOT NULL,
        created DATETIME DEFAULT CURRENT_TIMESTAMP,
        modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );
    ```

5. Start the CakePHP server:

    ```bash
    bin/cake server
    ```

6. Access the application:

    Open your browser and navigate to `http://localhost:8765`.

### Additional Information

- The default home page is the tasks page.
- You can register a new user by navigating to `/users/add`.
- After logging in, you will be redirected to the tasks page.
- You can add, edit, and delete tasks as needed.
