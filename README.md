# CricSummit 2021 — Cricket Coding Challenge

A command-line cricket simulation built with **Laravel**, demonstrating the application of **SOLID principles, Test-Driven Development (TDD), and Clean Code** practices.

This project simulates the **"Super Over" challenge** from the CricSummit 2021 tournament. It predicts the outcome of each ball, generates live commentary, and simulates a full super over using predefined static data.

---

## Project Overview

- Simulates a full Super Over match scenario.
- Predicts cricket shot outcomes based on a static data set.
- Generates dynamic commentary for each ball.
- Demonstrates clean, maintainable code structure following SOLID and TDD.

---

## Prerequisites

Make sure the following are installed on your system:

- **PHP 8.1+**
- **Composer**
- **Laravel 11+**

---

## Setup & Installation

Follow the steps below to get the project running:

1. **Create a new Laravel project:**
   ```bash
   composer create-project laravel/laravel cricket-challenge

2. **Navigate to the project directory:**
    ```bash
    cd cricket-challenge
3. **Navigate to the project directory:**
    ```bash
    php artisan make:class Services/CricketData
    php artisan make:class Services/PredictionService
    php artisan make:class Services/CommentaryService
    php artisan make:command CricChallenge
    php artisan make:test PredictionServiceTest --unit
    php artisan make:test CommentaryServiceTest --unit

4. **Code Structure:**
cricket-challenge/
├── app/
│   ├── Console/
│   │   └── Commands/
│   │       └── CricChallenge.php      # Entry point (Artisan command)
│   └── Services/
│       ├── CricketData.php             # Static data storage (bowling, batting, outcomes, commentary)
│       ├── PredictionService.php       # Predicts outcome of ball-shot combo
│       └── CommentaryService.php       # Generates commentary based on outcomes
└── tests/
    └── Unit/
        ├── PredictionServiceTest.php   # Tests prediction logic
        └── CommentaryServiceTest.php   # Tests commentary generation

