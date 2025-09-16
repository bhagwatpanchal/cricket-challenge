# CricSummit 2021 — Cricket Coding Challenge

A command-line cricket simulation built with **Laravel 12**, demonstrating the application of **SOLID principles, Test-Driven Development (TDD), and Clean Code** practices.

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
    ```bash
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

5. **Running the Application:**

    ```bash
    php artisan cric:superover

The command will output a ball-by-ball commentary and the final match result.

6. **OUTPUT:**
    ```bash
    SUPER OVER - AUSTRALIA 11 HAS TO CHASE 21 RUNS
    0. Sudhakar bowled Yorker ball,
    Craig played Perfect Straight shot
    Just over the fielder. - 4 runs
    1. Sudhakar bowled Pace ball,
    Craig played Early Flick shot
    Excellent line and length. - 0 runs
    2. Sudhakar bowled Slower Ball ball,
    Craig played Good LegGlance shot
    Excellent line and length. - 0 runs
    3. Sudhakar bowled Yorker ball,
    Craig played Perfect Long On shot
    Just over the fielder. - 4 runs
    4. Sudhakar bowled Pace ball,
    Craig played Late LongOff shot
    Excellent line and length. - 0 runs
    5. Sudhakar bowled Inswinger ball,
    Craig played Perfect LongOn shot
    Excellent line and length. - 0 runs
    AUSTRALIA scored: 8 runs
    AUSTRALIA lost by 13 runs.

  2nd Output
```bash

    SUPER OVER - AUSTRALIA 11 HAS TO CHASE 21 RUNS
    0. Sudhakar bowled Bouncer ball,
    Craig played Perfect Straight shot
    Just over the fielder. - 4 runs
    1. Sudhakar bowled Leg Cutter ball,
    Craig played Early Flick shot
    Excellent line and length. - 0 runs
    2. Sudhakar bowled Leg Cutter ball,
    Craig played Good LegGlance shot
    Excellent line and length. - 0 runs
    3. Sudhakar bowled Off Cutter ball,
    Craig played Perfect Long On shot
    Excellent line and length. - 0 runs
    4. Sudhakar bowled Off Break ball,
    Craig played Late LongOff shot
    Excellent line and length. - 0 runs
    5. Sudhakar bowled Bouncer ball,
    Craig played Perfect LongOn shot
    That's massive and out of the ground. - 6 runs
    AUSTRALIA scored: 10 runs
    AUSTRALIA lost by 11 runs.