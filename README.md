<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Portfolio Website - Laravel

This is a Laravel-based portfolio website built for learning purposes. It showcases skills in HTML, CSS, JavaScript, Bootstrap, Laravel 10, and Yajra DataTables.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Introduction

This portfolio website is designed and developed using Laravel, a PHP framework known for its elegant syntax and advanced features. It serves as a platform to showcase personal projects, skills, and experiences. The Portfolio Web project is aimed at showcasing personal skills, projects, and experiences through a web platform. It utilizes Laravel, a PHP framework, to provide a robust and scalable backend infrastructure while employing HTML, CSS, and JavaScript for the frontend design and interactivity. Bootstrap is used for responsive layout and styling, ensuring the website looks great across various devices. Yajra DataTables is integrated to handle tabular data efficiently.

### Features

-   Responsive Design: The website is designed to be fully responsive, ensuring optimal viewing experience across various devices.
-   Project Showcase: Display personal projects with detailed descriptions, images, and links.
-   Skills Display: Highlight skills and expertise using visually appealing design elements.
-   Contact Form: Integrated contact form for users to reach out easily.
-   Yajra DataTables: Utilizes Yajra DataTables for efficient data presentation and manipulation.

## Installation

1. In your root folder, clone the project file using the command

```bash
  git clone https://github.com/mokammeltanvir/Portfolio-Web-Laravel.git

```

2. Open the terminal (bash/cmd). Then go to the project folder using the command

```bash
  cd Portfolio-Web-Laravel

```

3. Then install the required files and libraries using

```sh
composer install
```

4. Then create a .env file and generate a key for this project using the command

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```

6. Create a database in MYSQL and connect it with your project by updating .env file.

7. After connecting the db with the project, then run the command

```sh
php artisan migrate
```

```sh
php artisan db:seed
```

After completing the migration and seeding of db, you will have 1 System Admin ready for login in this project as 'admin'.

A. Admin -> Admin
Email -> admin@domain.com
Pass -> password

Finally, we are ready to run our project using this command!

```sh
php artisan serve
```

The application should now be accessible at http://localhost:8000.

# Usage

Once the application is set up, you can:

-   View the portfolio projects.
-   Explore different sections such as skills and contact.
-   Interact with the contact form to send messages.

# Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, please feel free to open an issue or create a pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)
