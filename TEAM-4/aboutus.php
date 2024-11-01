<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>About Us - ShopEase</title>
    <style>
        /* Reset body and html for full-height layout */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        /* Header styling */
        header {
            background-color: #c12a2a;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }
        
        header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a, .account-cart a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* About Us section styling */
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .about-us {
            max-width: 800px;
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .about-us h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .about-us p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin: 15px 0;
        }

        /* Footer styling */
        footer {
            background-color: #c12a2a;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            width: 100%;
            position: relative;
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
            <a href="cart.php">Cart</a>
            <a href="account.php">Logout</a>
        </div>
    </header>

    <main>
        <section class="about-us">
            <h2>About Us</h2>
            <p>Welcome to <strong>ShopEase</strong>, your one-stop destination for a seamless shopping experience. Founded by <strong>Team-4</strong>, our mission is to make online shopping simple, accessible, and enjoyable for everyone.</p>
            <p>At ShopEase, we believe shopping should be hassle-free and fit effortlessly into your lifestyle. We provide a diverse range of products, from the latest fashion and electronics to home essentials, all carefully curated to meet our customers' unique needs.</p>
            <p>Our team, <strong>Team-4</strong>, is dedicated to constantly improving the shopping experience through innovation, quality service, and customer feedback. We value trust and transparency, ensuring that each transaction is secure and each product meets our high standards.</p>
            <p>Thank you for choosing ShopEase. We look forward to serving you and helping you find exactly what you’re looking for. Happy shopping!</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ShopEase - All Rights Reserved</p>
    </footer>
</body>
</html>
