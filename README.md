# Todo App

This is a Todo application built with Laravel for the backend and Vue.js for the frontend.

## Getting Started

### Clone the Repository

First, clone the repository to your local machine:
   ```bash
   git clone https://github.com/Ayyubshahab786/todo-app.git
   cd todo-app
   ```
### Backend Setup (Laravel)
1. **Navigate to the Backend Directory**:

   ```bash
   cd todo-backend
   ```
2. **Install Composer**: Make sure you have Composer installed. If not, you can download it from [getcomposer.org](https://getcomposer.org/). After downloading, run the following command to install the dependencies:

   ```bash
   composer install
   ```

3. **Copy the Environment File**: Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

4. **Create a MySQL Database**: Create a new MySQL database named `todo_app`.

5. **Update the `.env` File**: Open the `.env` file and update the database connection settings:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=todo_app
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run Migrations**: Run the following command to migrate the database:

   ```bash
   php artisan migrate
   ```

7. **Run Seeder**: Seed the database with initial data:

   ```bash
   php artisan db:seed --class=TaskSeeder
   ```

8. **Serve the Application**: Start the Laravel development server:

   ```bash
   php artisan serve
   ```

### Frontend Setup (Vue.js)

1. **Navigate to the Frontend Directory**:

   ```bash
   cd todo-frontend
   ```

2. **Install Dependencies**: Install the required npm packages:

   ```bash
   npm install
   ```

3. **Run the Development Server**: Start the Vue.js development server:

   ```bash
   npm run dev
   ```


## Conclusion

You should now have the Todo app running on your local machine. Access the frontend at `http://localhost:3000` and the backend at `http://127.0.0.1:8000`.