Gamer Central Application
Overview
Gamer Central is a web application designed for gaming enthusiasts. Users can register, log in, and search for video games using a simple and intuitive interface. The application pulls game data from the RAWG API to provide up-to-date information about various games, including titles, images, genres, prices, and age ratings.

Features
User Registration and Login: Users can create accounts and log in to access personalized content.
Search Functionality: Users can search for games by title.
Game Display: Games are displayed in a clean, organized layout with relevant details.
Admin Capabilities: Admin users can update and delete game entries.
Technologies Used
PHP
MySQL
Bootstrap
HTML/CSS
JavaScript
RAWG Video Games API

Installation
Set Up the Database:

Import the provided SQL scripts to create the required database and tables. Modify the database connection settings in reusables/connect.php as needed.
Update Environment Variables:

Ensure that the RAWG API key is correctly set in the code. Replace the placeholder with your actual API key in the fetchRawgGameData function.
Run the Application:

Use a local server environment such as XAMPP, WAMP, or a web hosting service to serve the PHP files.
Access the application in your browser at the defined local server address.
Usage
Register: Navigate to the registration page to create a new user account.
Login: Use your credentials to log in.
Search Games: Utilize the search bar on the main page to find games.
Game Details: Click on a game's details for update and delete options (available to admin users).


Directory Structure
CMS_PROJECT

>Image
>>background.jpg >>2.gif >>4.gif >>GAMECENTRALLOGO.PNG

>includes
>>addGame.php
>>deleteGame.php
>>updateGame.php 
>>functions.php

 >public
>>styles.css

>reusables
>>connect.php
>>nav.php


>add.php
>delete.php
>index.php
>update.php 
>login.php
>logout.php 
>update.php  
>register.php
>search.php

Contributing
If you would like to contribute to this project:

Fork the repository.
Create a new branch (git checkout -b feature-branch).
Make your changes and commit them (git commit -m "Add new feature").
Push to your branch (git push origin feature-branch).
Submit a pull request.




