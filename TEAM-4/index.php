<?php
include 'includes/db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
    <!-- Link to FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts for a modern look -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600&display=swap">
    <style>
        /* Color Variables */
        :root {
            --primary-color: #f08080; /* Base theme color */
            --secondary-color: #ffb6c1; /* Light pink for accents */
            --text-color: #333;
            --background-color: #fffafa; /* Snow background for subtle contrast */
            --white-color: #ffffff;
        }

        /* General styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
        }
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header styles */
        header {
            background-color: var(--primary-color);
            color: var(--white-color);
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
        }
        header h1 {
            font-size: 2em;
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* Navigation links */
        .nav-links {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .nav-links li {
            margin-right: 25px;
        }
        .nav-links a {
            color: var(--white-color);
            font-weight: 500;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .nav-links a:hover {
            background-color: var(--secondary-color);
        }

        /* Account and cart buttons */
        .account-cart {
            display: flex;
            align-items: center;
        }
        .account-cart a {
            color: var(--white-color);
            background-color: var(--secondary-color);
            margin-left: 15px;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        .account-cart a:hover {
            background-color: #f4978e; /* Slightly darker shade on hover */
        }

        /* Page container */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 120px;
            padding: 20px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 383px;
        }

        /* Categories section */
        .categories {
            flex: 1;
            max-width: 250px;
            background-color: var(--white-color);
            padding: 20px;
            border-radius: 10px;
            margin-right: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .categories h2 {
            font-size: 1.5em;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }
        .category-list a {
            padding: 12px;
            margin: 10px 0;
            background-color: var(--secondary-color);
            color: var(--white-color);
            text-align: center;
            border-radius: 5px;
            font-weight: 500;
            display: block;
            transition: background-color 0.3s;
        }
        .category-list a:hover {
            background-color: #f4978e;
        }

        /* Main content section */
        .main-content {
            flex: 3;
            padding: 20px;
            background-color: var(--white-color);
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        /* Search bar */
        .search-bar {
            display: flex;
            margin-bottom: 30px;
            width: 100%;
        }
        .search-bar form {
            display: flex;
            width: 100%;
        }
        .search-bar input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }
        .search-bar input[type="text"]:focus {
            border-color: var(--primary-color);
        }
        .search-bar button {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            color: var(--white-color);
            font-size: 18px;
            transition: background-color 0.3s;
        }
        .search-bar button:hover {
            background-color: #f4978e;
        }

        /* Footer Styles */
        footer {
            background-color: var(--primary-color);
            color: var(--white-color);
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin-top: 100px;
            }
            .categories {
                max-width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }
            .main-content {
                margin-left: 0;
            }
            .nav-links li {
                margin-right: 15px;
            }
            .account-cart a {
                margin-left: 10px;
                padding: 8px 12px;
            }
        }
        @media (max-width: 576px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            .nav-links {
                flex-wrap: wrap;
                margin-top: 10px;
            }
            .nav-links li {
                margin-right: 10px;
                margin-bottom: 10px;
            }
            .account-cart {
                margin-top: 10px;
            }
            .search-bar input[type="text"] {
                width: 100%;
            }
            .categories {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>ShopEase</h1>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="account-cart">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i> Cart</a>
        <a href="account.php"><i class="fas fa-exit"></i> Logout        ///</a>
    </div>
</header>

<!-- Page container to wrap content -->
<div class="container">
    <!-- Left side category section -->
    <div class="categories">
        <h2>Shop by Categories</h2>
        <div class="category-list">
            <a href="shop.php?category=electronics">Electronics</a>
            <a href="shop.php?category=clothing">Clothing</a>
            <a href="shop.php?category=accessories">Accessories</a>
        </div>
    </div>

    <!-- Main content (search bar and products) -->
    <div class="main-content">
        <div class="search-bar">
            <form method="GET" action="shop.php">
                <input type="text" name="search" placeholder="Search for products...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <!-- Product grid could go here -->
    </div>
</div>

<!-- Footer -->
<footer>
    &copy; <?php echo date("Y"); ?> ShopEase. All rights reserved.
</footer>

</body>
</html>
