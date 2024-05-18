
![Logo](https://codebuddy.co/assets/img/Logo.svg)
# Laravel Interview


# Laravel Project -> Task 1

This is a Laravel project that includes authentication, user management, category management, and more.

## Getting Started

To get started with this project, follow these steps:

1. Clone the repository:
   ```bash
   git clone git@gitlab.com:shirsendu.tootle/laravel-interview-mt.git
   ```

2. Navigate to the project directory:
   ```bash
   cd laravel-interview-mt
   ```

3. Install dependencies:
   ```bash
   composer install
   ```  

4. Set up the environment file:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Create a MySQL database and update .env file with database credentials.
Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Seed the database with test data:
   ```bash
   php artisan db:seed --class=UsersTableSeeder
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

8. Open http://localhost:8000 in your browser to view the application.


## Features
- Basic Authentication (Login, Register, Forgot Password, Reset Password)
- User Management (CRUD operations for users)
- Category Management (CRUD operations for categories)
- Admin Dashboard
- User Dashboard


## Test Data

To facilitate testing and development, here are the details for the admin user:

Admin User:
- Username: admin@gmail.com
- Password: [admin@123]

Regular User:
- Username: user@gmail.com
- Password: [user@123]


## Technologies Used
- Laravel
- Bootstrap
- Font Awesome


## Dependencies 

Laravel version 8.0


## Author
[Taufik Khatik](https://github.com/taufik-khatik)


## License
This project is licensed under the MIT License.



# Another Task

## Task List

Task 1

    1) Install Laravel 8
    2) Create basic authentication using laravel auth module
    3) There will be 2 types of users. i.e. user and admin
    4) List all the users in admin panel
    5) There will be 2 dashboards. i) for Admin and ii) for User.
    6) Admin can go to user's dashboard but user can not.
    7) Create a CRUD functionality for Category. Admin will create n-level of categories. You have to plan db design and execute the features.
    8) In Dashboard admin will see nested Categories in a Tree view
        Example:
            Category 1
                Category 1-1
                Category 1-2
            Category 2
                Category 2-1
                Category 2-2

OR
---

Task 2


    Install Laravel 8 & write a function to validate and book tickets while adhering to the following specifications.

    Specifications
    ---------------
    1. There are initially 200 seats available across 20 columns (columns A to T) and 10 rows (row 1 to 10). So the first seat will be represented as A1 , and last seat as T10 in both input and output operations.
    2. The function will accept the input of 1 seat of user's choice, and the number of tickets they want to book (maximum 5). Ex: "bookSeats('A15', 4);"
    3. The function will need to check for available adjacent seats (both left or right of the supplied seat) including the seat of user's choice matching the number of tickets supplied.
    4. If the seats are available, the function will need to book them in database and return a confirmation with the list of seats booked.
    5. If the seats are not available, the function needs to return a message indicating a booking failure, and a set of alternate suggested seats depending on availability.





Coding Guidelines
----------
    1) Everything has to be in a Github public repository
    2) Every feature will be committed
    3) Will have to maintain proper migration files.
    4) Will have to write seeder classes to seed data,sharing any .sql file is not appreciated.
    5) Minimum laravel version is 7.x
    6) Maximum laravel version is 8.x
    6) Mention the user and admin credentials in readme.md file in the github repo.

Time:
-----
    2 hrs (if you need more time please let us know, it can be arranged)




Happy Coding ! 😀