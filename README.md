<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ApiDemo - Laravel API

This project, named **"ApiDemo"**, is a Laravel API developed for learning purposes during my second year of **BTS SIO**. The main objective of this API is to provide a simple example of creating a **RESTful API** with Laravel.

## Features

- **Endpoints:** The API provides multiple endpoints to interact with different resources.  
- **CRUD Operations:** Implements CRUD (Create, Read, Update, Delete) operations to demonstrate basic functionality.

## Installation and Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/naelbenaissa/ApiDemo.git
   ```

2. **Install dependencies:**
   ```bash
   cd ApiDemo
   composer install
   ```

3. **Configure the database:**
   - Create a copy of the `.env.example` file and rename it to `.env`.
   - Configure your database settings inside the `.env` file.

4. **Run migrations and seeders:**
   ```bash
   php artisan migrate --seed
   ```

5. **Start the development server:**
   ```bash
   php artisan serve
   ```

## Contributions

If you would like to contribute to this project, follow these steps:

1. **Fork the repository**  
2. **Create a new branch for your feature**  
   ```bash
   git checkout -b feature/NewFeature
   ```
3. **Commit your changes**  
   ```bash
   git commit -am 'Added a new feature'
   ```
4. **Push the branch to your repository**  
   ```bash
   git push origin feature/NewFeature
   ```
5. **Create a Pull Request**

