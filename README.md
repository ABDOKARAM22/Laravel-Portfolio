# Portfolio Website

## Project Description

The Portfolio Website project is a Laravel-based web application dedicated to a production company. It encompasses various sections, including About Us, Services, Team, Portfolio, and Contact Us. The site features a powerful admin dashboard allowing administrators to easily update, add, or modify any part of the website. It supports both Arabic and English languages.

## Technologies Used

- **Frontend:** Bootstrab Template
- **Backend:** Laravel
- **Database:** MySQL

## Admin Dashboard

Access the admin dashboard at `/dashboard` to manage site content.

## Project Sections

1. **About Us:** Provides information about the company's background and mission.

2. **Services:** Highlights the services offered by the production company.

3. **Team:** Introduces the team members with their roles and expertise.

4. **Portfolio:** Showcases a selection of the company's completed projects.

5. **Contact Us:** Offers various methods to get in touch with the company.

## Multilingual Support

The website supports both Arabic and English languages. Users can easily switch between languages using the language toggle feature.

## Admin Dashboard Features

- **Content Management:** Admins can update, add, or modify content in any section of the website.
- **Management:** Admins can manage evrey thing in the site.
- **profile:** Admins can change profile information.
- **Add admin:** Admins can add new admin.




## How to Run the Project

1. **Prerequisites**
   - Ensure you have PHP and Composer installed.
   - Set up a MySQL database and update the `.env` file with the database details.

2. **Installation and Execution**
   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   # Update the .env file with your database details
   php artisan migrate --seed
   in the database folder you well found portfolio.sql emport it to your database
   php artisan serve

## Contact Information

**Developer:** Abdelrahman Karam

**Email:** abdokaram678@gmail.com