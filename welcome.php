<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<h1>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="Foodie.com">
        </div>

        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">About Us</a></li>
            <li class="item"><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Our Restaurant</h1>
        <p></p>

    </section>

    <div class="menu-container">
        <h1>Our Menu</h1>
        <div class="menu-section">
            <div class="menu-item">
                <div>
                    <h3>Garlic Bread</h3>
                    <span>$4.70</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                <img src="garlic bread.jpg" alt="Garlic Bread"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Garlic Bread')">-</button>
                <span id="quantity-Garlic Bread">0</span>
                <button onclick="increaseQuantity('Garlic Bread')">+</button>
            </div>
            <div class="menu-item">
                <div>
                    <h3>Veg Spring Rolls</h3>
                    <span>$5.34</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                <img src="VegSpringRolls.jpg" alt="Veg Spring Rolls"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Veg Spring Rolls')">-</button>
                <span id="quantity-Veg Spring Rolls">0</span>
                <button onclick="increaseQuantity('Veg Spring Rolls')">+</button>
            </div>
            <div class="menu-item">
                <div>
                    <h3>Burger</h3>
                    <span>$5.75</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                <img src="Burger.png" alt="Burger"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Burger')">-</button>
                <span id="quantity-Burger">0</span>
                <button onclick="increaseQuantity('Burger')">+</button>
            </div>
            <div class="menu-item">
                <div>
                    <h3>Pasta</h3>
                    <span>$4.73</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                    <img src="pasta.png" alt="Pasta"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Pasta')">-</button>
                <span id="quantity-Pasta">0</span>
                <button onclick="increaseQuantity('Pasta')">+</button>
            </div>
            <div class="menu-item">
                <div>
                    <h3>Pizza</h3>
                    <span>$7.20</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                <img src="Pizza.png" alt="Pizza"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Pizza')">-</button>
                <span id="quantity-Pizza">0</span>
                <button onclick="increaseQuantity('Pizza')">+</button>
            </div>
            <div class="menu-item">
                <div>
                    <h3>Veg Manchurian</h3>
                    <span>$8.65</span>
                    <p>A classic, buttery bread baked with fresh garlic, often with a sprinkle of herbs like parsley and a touch of cheese.</p>
                </div>
                <img src="veg manchurian.png" alt="Veg Manchurian"
            </div>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity('Veg Manchurian')">-</button>
                <span id="quantity-Veg Manchurian">0</span>
                <button onclick="increaseQuantity('Veg Manchurian')">+</button>
            </div>
        </div>
    </div>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email: </label>
                    <input type="email" name="name" id="name" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Phone Number: </label>
                    <input type="phone" name="name" id="name" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="name">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.Foodie.com. All rights reserved!
        </div>
    </footer>
</h1
</body>
</html>