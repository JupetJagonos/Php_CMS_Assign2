<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        .box2 {
            width: 100%; /* Full width for the box */
            display: flex;
            justify-content: center; /* Centers the rectangle */
            position: relative; /* For positioning of contents */
        }

        .rectangle2 {
            -webkit-backdrop-filter: blur(4px) brightness(100%);
            backdrop-filter: blur(4px) brightness(100%);
            background-color: #d9d9d91a; /* Slight transparency */
            border: 2px solid #ffffff80; /* Light border */
            border-radius: 20px;
            height: 90px; 
            width: 90%; /* Make the rectangle responsive */
            display: flex; /* Use flex to align items */
            align-items: center; /* Vertically centers children */
            padding: 0 20px; /* Add some padding for spacing */
            justify-content: space-between; /* Space out logo and navigation items */
            z-index: 1000; 
        }

        .navbar-brand {
            flex-grow: 1; /* Allow the logo to take available space */
            display: flex; 
            justify-content: center; /* Center the logo horizontally */
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end; /* Align items to the right */
        }

        .navbar-nav .nav-link {
            color: white; /* Default color for links */
            font-family: 'Helvetica Neue', sans-serif; /* Custom font */
            padding: 10px; /* Padding for better spacing */
        }

        .navbar-nav .nav-link.logout {
            color: red; /* Color for the Logout link */
        }
    </style>
</head>
<body>
    <div class="box2">
        <div class="rectangle2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Logo centered here -->
                    <div class="navbar-brand">
                        <a href="index.php">
                            <img src="Image/SmallVersionLogo.png" alt="Game Central Logo" style="max-height: 80px; max-width: 80px;"> 
                        </a>
                    </div>
                    <!-- Navigation links on the right -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link logout" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>