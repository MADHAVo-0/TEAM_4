<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us - ShopEase</title>
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

        /* Contact Us section styling */
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }

        .contact-us {
            max-width: 800px;
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .contact-us h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .contact-us p {
            font-size: 18px;
            line-height: 1.8;
            color: #555;
            margin: 15px 0;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 600px;
            margin: 0 auto;
        }

        input, textarea, button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            background-color: #c12a2a;
            color: #fff;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #a31f1f;
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
        <section class="contact-us">
            <h2>Contact Us</h2>
            <p>If you have any questions, feedback, or need assistance, the <strong>ShopEase</strong> team, <strong>Team-4</strong>, is here to help. Please use the contact form below to reach us, and we’ll respond as soon as possible.</p>
            <p>You can also reach us by email at <strong>support@shopease.com</strong> or call us at <strong>(123) 456-7890</strong> during our business hours, Monday to Friday, 9:00 AM - 5:00 PM.</p>

            <form action="submit_contact.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ShopEase - All Rights Reserved</p>
    </footer>
</body>
</html>
