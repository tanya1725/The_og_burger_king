<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger King</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            overflow-x: hidden;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/image/secondwallpaper.jpg') no-repeat center center/cover;
            opacity: 0.4;
            z-index: -1;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: black;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }

        .navbar-logo img {
            height: 50px;
        }

        .navbar-links {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar-links li {
            margin-left: 20px;
        }

        .navbar-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar-links a:hover {
            color: #e74c3c;
        }

        .cart-icon {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 18px;
            position: relative;
            transition: background 0.3s;
        }

        .cart-icon:hover {
            background: #c0392b;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #f39c12;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 12px;
            font-weight: bold;
        }

        .header {
            position: relative;
            z-index: 1;
            font-size: 80px;
            margin-top: 200px;
            margin-left: 140px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 2px grey;
        }

        .header2 {
            position: relative;
            z-index: 1;
            font-size: 80px;
            margin-left: 540px;
            margin-top: 20px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 2px grey;
        }

        .subheader {
            position: relative;
            z-index: 1;
            font-size: 30px;
            margin-left: 500px;
            letter-spacing: 5px;
            margin-top: 20px;
            text-shadow: 2px 2px 2px grey;
        }

        .zoomburger {
            margin: 50px 0 0 150px;
            height: 650px;
            overflow: hidden;
        }

        .zoomburger img {
            height: 100%;
            width: 640px;
            object-fit: cover;
            border-radius: 10px;
        }

        .zoomburger-side-part {
            background-color: orangered;
            width: 620px;
            height: 650px;
            margin-left: 790px;
            margin-top: -650px;
            opacity: 0.8;
            font-size: 25px;
            padding: 30px;
            box-sizing: border-box;
            text-align: justify;
            line-height: 1.6;
            border-radius: 10px;
        }

        .menu-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            margin-top: 100px;
        }

        .menu-title {
            text-align: center;
            font-size: 60px;
            margin-bottom: 50px;
            color: #e74c3c;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .menu-categories {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .category-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 12px 24px;
            margin: 5px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .category-btn:hover, .category-btn.active {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(231, 76, 60, 0.3);
        }

        .menu-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .menu-item h3 {
            color: #e74c3c;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .menu-item p {
            color: #ccc;
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .price-cart {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            color: #f39c12;
        }

        .add-to-cart {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
        }

        .add-to-cart:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        .cart-sidebar {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px;
            transition: right 0.3s;
            z-index: 1000;
            overflow-y: auto;
        }

        .cart-sidebar.open {
            right: 0;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e74c3c;
        }

        .cart-close {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cart-item-info h4 {
            margin: 0;
            color: #e74c3c;
        }

        .cart-item-info p {
            margin: 5px 0;
            color: #ccc;
        }

        .cart-item-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            background: #e74c3c;
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            font-weight: bold;
        }

        .cart-total {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e74c3c;
            text-align: center;
        }

        .checkout-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .checkout-btn:hover {
            background: #c0392b;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        .overlay.open {
            display: block;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 1200px) {
            .header, .header2, .subheader {
                font-size: 60px;
                margin-left: 20px;
                text-align: center;
            }

            .subheader {
                margin-top: 10px;
            }

            .zoomburger {
                margin-left: 0;
                height: 400px;
                width: 100%;
            }

            .zoomburger-side-part {
                width: 100%;
                margin-left: 0;
                height: auto;
                margin-top: 20px;
            }

            .cart-sidebar {
                width: 300px;
                right: -300px;
            }
        }

        @media (max-width: 768px) {
            .header, .header2 {
                font-size: 40px;
            }

            .subheader {
                font-size: 20px;
            }

            .navbar-links li {
                margin-left: 10px;
            }

            .menu-grid {
                grid-template-columns: 1fr;
            }

            .cart-sidebar {
                width: 100%;
                right: -100%;
            }
        }
    </style>
</head>
<body>
 <nav class="navbar">
        <div class="navbar-logo">
            <img src='/image/burgerkinglogo.jpg' alt="Burger King Logo">
        </div>
        <ul class="navbar-links">
            <li><a href="dashboard">Home</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#nearby-restaurants">Nearby Restaurants</a></li>
            <li><a href="login">Get started</a></li>

        </ul>
                <button class="cart-icon" onclick="toggleCart()">
            🛒
            <span class="cart-count" id="cart-count">0</span>
        </button>
    </nav>


    <div class="background"></div>

    <div id="home">
        <div class="header">THE FRESHEST, MOST DELICIOUS</div>
        <div class="header2">BURGERS</div>
        <div class="subheader">IN THE NEIGHBOURHOOD</div>

        <div class="zoomburger">
            <img src="image/zoomburger.jpg" alt="Zoomed Burger">
        </div>

        <div class="zoomburger-side-part">
            <p>BURGER KING, founded in 1954, is a global fast-food chain known for its flame-grilled burgers, particularly the iconic Whopper. With a presence in over 100 countries, it has established itself as a major player in the fast-food industry, offering a diverse menu that includes burgers, chicken sandwiches, fries, and breakfast items. Burger King emphasizes customer choice with options like the "Have It Your Way" slogan, allowing for personalized orders. Over the years, it has also been recognized for its innovative marketing campaigns and efforts to introduce plant-based alternatives, catering to evolving consumer preferences.</p>
        </div>
    </div>

    <div id="menu" class="menu-section">
        <h2 class="menu-title">OUR MENU</h2>
        
        <div class="menu-categories">
            <button class="category-btn active" onclick="filterMenu('all')">All Items</button>
            <button class="category-btn" onclick="filterMenu('burgers')">Burgers</button>
            <button class="category-btn" onclick="filterMenu('chicken')">Chicken</button>
            <button class="category-btn" onclick="filterMenu('sides')">Sides</button>
            <button class="category-btn" onclick="filterMenu('breakfast')">Breakfast</button>
            <button class="category-btn" onclick="filterMenu('desserts')">Desserts</button>
            <button class="category-btn" onclick="filterMenu('drinks')">Drinks</button>
        </div>

        <div class="menu-grid" id="menu-grid">
            <!-- Menu items will be populated by JavaScript -->
        </div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleCart()"></div>
    
    <div class="cart-sidebar" id="cart-sidebar">
        <div class="cart-header">
            <h2>Your Cart</h2>
            <button class="cart-close" onclick="toggleCart()">×</button>
        </div>
        <div id="cart-items"></div>
        <div class="cart-total">
            <h3>Total: $<span id="cart-total">0.00</span></h3>
            <button class="checkout-btn" onclick="checkout()">Checkout</button>
        </div>
    </div>

    <script>
        const menuItems = [
            // Burgers
            { id: 1, name: "Whopper", category: "burgers", price: 6.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Whopper", description: "Our signature flame-grilled beef patty with tomatoes, lettuce, mayo, ketchup, pickles, and onions on a sesame seed bun." },
            { id: 2, name: "Big King", category: "burgers", price: 7.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Big+King", description: "Two flame-grilled beef patties with lettuce, onions, pickles and our signature King sauce on a sesame seed bun." },
            { id: 3, name: "Bacon King", category: "burgers", price: 8.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Bacon+King", description: "Two flame-grilled beef patties with crispy bacon, American cheese, lettuce, tomato, and mayo on a sesame seed bun." },
            { id: 4, name: "Impossible Whopper", category: "burgers", price: 7.99, image: "https://via.placeholder.com/300x200/228B22/FFFFFF?text=Impossible+Whopper", description: "100% Whopper, 0% beef. Made with a plant-based patty and all the classic Whopper toppings." },
            { id: 5, name: "Double Whopper", category: "burgers", price: 8.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Double+Whopper", description: "Two flame-grilled beef patties with all the classic Whopper toppings." },
            { id: 6, name: "Whopper Jr.", category: "burgers", price: 4.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Whopper+Jr", description: "A smaller version of our signature Whopper with the same great taste." },
            { id: 27, name: "Triple Whopper", category: "burgers", price: 9.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Triple+Whopper", description: "Three flame-grilled beef patties with all the classic Whopper toppings for the ultimate burger experience." },
            { id: 28, name: "Rodeo King", category: "burgers", price: 8.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Rodeo+King", description: "Two flame-grilled beef patties with crispy onion rings, BBQ sauce, and American cheese." },
            { id: 29, name: "Steakhouse King", category: "burgers", price: 9.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Steakhouse+King", description: "Two flame-grilled beef patties with crispy onions, A1 sauce, and American cheese on a sesame seed bun." },
            { id: 30, name: "Bacon Double Cheeseburger", category: "burgers", price: 6.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Bacon+Double", description: "Two flame-grilled beef patties with crispy bacon and American cheese." },
            { id: 31, name: "Double Cheeseburger", category: "burgers", price: 5.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Double+Cheese", description: "Two flame-grilled beef patties with American cheese, pickles, onions, ketchup, and mustard." },
            { id: 32, name: "Hamburger", category: "burgers", price: 3.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Hamburger", description: "Classic flame-grilled beef patty with pickles, onions, ketchup, and mustard on a sesame seed bun." },
            { id: 33, name: "Cheeseburger", category: "burgers", price: 4.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Cheeseburger", description: "Flame-grilled beef patty with American cheese, pickles, onions, ketchup, and mustard." },
            
            // Chicken
            { id: 7, name: "Original Chicken Sandwich", category: "chicken", price: 5.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Chicken+Sandwich", description: "Crispy white meat chicken breast with lettuce and mayo on a sesame seed bun." },
            { id: 8, name: "Spicy Chicken Sandwich", category: "chicken", price: 6.49, image: "https://via.placeholder.com/300x200/FF6347/FFFFFF?text=Spicy+Chicken", description: "Crispy chicken breast with spicy glaze, lettuce, and mayo on a sesame seed bun." },
            { id: 9, name: "Chicken Nuggets (10 pc)", category: "chicken", price: 4.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Nuggets", description: "Ten pieces of crispy, golden chicken nuggets made with white meat." },
            { id: 10, name: "Chicken Fries", category: "chicken", price: 3.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Chicken+Fries", description: "Crispy chicken strips shaped like fries, perfect for dipping." },
            { id: 34, name: "Chicken Nuggets (4 pc)", category: "chicken", price: 2.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=4pc+Nuggets", description: "Four pieces of crispy, golden chicken nuggets made with white meat." },
            { id: 35, name: "Chicken Nuggets (6 pc)", category: "chicken", price: 3.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=6pc+Nuggets", description: "Six pieces of crispy, golden chicken nuggets made with white meat." },
            { id: 36, name: "Chicken Nuggets (20 pc)", category: "chicken", price: 8.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=20pc+Nuggets", description: "Twenty pieces of crispy, golden chicken nuggets made with white meat." },
            { id: 37, name: "Crispy Chicken Wrap", category: "chicken", price: 5.49, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Chicken+Wrap", description: "Crispy chicken strips with lettuce, tomato, and ranch dressing in a soft tortilla." },
            { id: 38, name: "Grilled Chicken Sandwich", category: "chicken", price: 6.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Grilled+Chicken", description: "Grilled chicken breast with lettuce, tomato, and mayo on a sesame seed bun." },
            { id: 39, name: "Buffalo Chicken Sandwich", category: "chicken", price: 6.99, image: "https://via.placeholder.com/300x200/FF6347/FFFFFF?text=Buffalo+Chicken", description: "Crispy chicken breast tossed in buffalo sauce with lettuce and ranch dressing." },
            
            // Sides
            { id: 11, name: "French Fries (Large)", category: "sides", price: 2.99, image: "https://via.placeholder.com/300x200/FFD700/FFFFFF?text=French+Fries", description: "Hot, crispy, and golden french fries seasoned with just the right amount of salt." },
            { id: 12, name: "Onion Rings", category: "sides", price: 3.49, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Onion+Rings", description: "Crispy, golden onion rings with a light, crunchy coating." },
            { id: 13, name: "Mozzarella Sticks", category: "sides", price: 4.99, image: "https://via.placeholder.com/300x200/FFFACD/FFFFFF?text=Mozzarella+Sticks", description: "Golden, crispy mozzarella sticks served with marinara sauce." },
            { id: 14, name: "Hash Browns", category: "sides", price: 1.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Hash+Browns", description: "Crispy, golden hash browns perfect for any time of day." },
            { id: 40, name: "French Fries (Medium)", category: "sides", price: 2.49, image: "https://via.placeholder.com/300x200/FFD700/FFFFFF?text=Medium+Fries", description: "Hot, crispy, and golden french fries seasoned with just the right amount of salt." },
            { id: 41, name: "French Fries (Small)", category: "sides", price: 1.99, image: "https://via.placeholder.com/300x200/FFD700/FFFFFF?text=Small+Fries", description: "Hot, crispy, and golden french fries seasoned with just the right amount of salt." },
            { id: 42, name: "Loaded Fries", category: "sides", price: 4.99, image: "https://via.placeholder.com/300x200/FFD700/FFFFFF?text=Loaded+Fries", description: "French fries topped with cheese sauce, bacon bits, and sour cream." },
            { id: 43, name: "Jalapeno Poppers", category: "sides", price: 4.49, image: "https://via.placeholder.com/300x200/228B22/FFFFFF?text=Jalapeno+Poppers", description: "Spicy jalapeno peppers stuffed with cream cheese and fried to perfection." },
            { id: 44, name: "Mac and Cheese Bites", category: "sides", price: 3.99, image: "https://via.placeholder.com/300x200/FFFACD/FFFFFF?text=Mac+Cheese+Bites", description: "Crispy, golden bites filled with creamy mac and cheese." },
            { id: 45, name: "Sweet Potato Fries", category: "sides", price: 3.49, image: "https://via.placeholder.com/300x200/FFA500/FFFFFF?text=Sweet+Potato+Fries", description: "Crispy sweet potato fries with a hint of natural sweetness." },
            
            // Breakfast
            { id: 15, name: "Croissan'wich", category: "breakfast", price: 4.49, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Croissan'wich", description: "Fluffy eggs, melted cheese, and your choice of meat on a toasted croissant." },
            { id: 16, name: "French Toast Sticks", category: "breakfast", price: 3.99, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=French+Toast", description: "Five golden French toast sticks dusted with cinnamon sugar." },
            { id: 17, name: "Pancakes (3 pc)", category: "breakfast", price: 4.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Pancakes", description: "Three fluffy pancakes served with butter and syrup." },
            { id: 18, name: "Breakfast Burrito", category: "breakfast", price: 5.49, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Breakfast+Burrito", description: "Scrambled eggs, cheese, and your choice of meat wrapped in a soft flour tortilla." },
            { id: 46, name: "Bacon Croissan'wich", category: "breakfast", price: 4.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Bacon+Croissan'wich", description: "Fluffy eggs, melted cheese, and crispy bacon on a toasted croissant." },
            { id: 47, name: "Sausage Croissan'wich", category: "breakfast", price: 4.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Sausage+Croissan'wich", description: "Fluffy eggs, melted cheese, and savory sausage on a toasted croissant." },
            { id: 48, name: "Ham Croissan'wich", category: "breakfast", price: 4.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Ham+Croissan'wich", description: "Fluffy eggs, melted cheese, and ham on a toasted croissant." },
            { id: 49, name: "Breakfast Platter", category: "breakfast", price: 6.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Breakfast+Platter", description: "Scrambled eggs, hash browns, and your choice of bacon or sausage." },
            { id: 50, name: "Cinnamon Rolls", category: "breakfast", price: 3.49, image: "https://via.placeholder.com/300x200/DEB887/FFFFFF?text=Cinnamon+Rolls", description: "Warm, gooey cinnamon rolls with sweet icing." },
            { id: 51, name: "Breakfast Sandwich", category: "breakfast", price: 3.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Breakfast+Sandwich", description: "Fluffy eggs, cheese, and your choice of meat on a toasted bun." },
            
            // Desserts
            { id: 19, name: "Chocolate Chip Cookies", category: "desserts", price: 1.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Cookies", description: "Warm, soft-baked chocolate chip cookies." },
            { id: 20, name: "Apple Pie", category: "desserts", price: 2.49, image: "https://via.placeholder.com/300x200/228B22/FFFFFF?text=Apple+Pie", description: "Hot apple pie with a crispy, flaky crust and cinnamon filling." },
            { id: 21, name: "Soft Serve Ice Cream", category: "desserts", price: 1.79, image: "https://via.placeholder.com/300x200/FFB6C1/FFFFFF?text=Ice+Cream", description: "Creamy vanilla soft serve ice cream in a cone or cup." },
            { id: 22, name: "Milkshake", category: "desserts", price: 3.99, image: "https://via.placeholder.com/300x200/FFB6C1/FFFFFF?text=Milkshake", description: "Thick, creamy milkshake available in vanilla, chocolate, or strawberry." },
            { id: 52, name: "Oreo Milkshake", category: "desserts", price: 4.49, image: "https://via.placeholder.com/300x200/000000/FFFFFF?text=Oreo+Milkshake", description: "Creamy vanilla milkshake blended with Oreo cookies." },
            { id: 53, name: "Chocolate Brownie", category: "desserts", price: 2.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Chocolate+Brownie", description: "Rich, fudgy chocolate brownie served warm." },
            { id: 54, name: "Sundae", category: "desserts", price: 3.49, image: "https://via.placeholder.com/300x200/FFB6C1/FFFFFF?text=Sundae", description: "Vanilla soft serve with your choice of chocolate or caramel sauce and whipped cream." },
            { id: 55, name: "Funnel Cake Fries", category: "desserts", price: 4.99, image: "https://via.placeholder.com/300x200/F0E68C/FFFFFF?text=Funnel+Cake+Fries", description: "Crispy funnel cake strips dusted with powdered sugar." },
            { id: 56, name: "Strawberry Pie", category: "desserts", price: 2.99, image: "https://via.placeholder.com/300x200/FFB6C1/FFFFFF?text=Strawberry+Pie", description: "Sweet strawberry pie with a flaky crust." },
            { id: 57, name: "Cheesecake", category: "desserts", price: 3.99, image: "https://via.placeholder.com/300x200/FFFACD/FFFFFF?text=Cheesecake", description: "Rich, creamy New York style cheesecake." },
            
            // Drinks
            { id: 23, name: "Coca-Cola", category: "drinks", price: 1.99, image: "https://via.placeholder.com/300x200/DC143C/FFFFFF?text=Coca-Cola", description: "Ice-cold Coca-Cola in small, medium, or large sizes." },
            { id: 24, name: "Coffee", category: "drinks", price: 1.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Coffee", description: "Hot, freshly brewed coffee to start your day right." },
            { id: 25, name: "Orange Juice", category: "drinks", price: 2.29, image: "https://via.placeholder.com/300x200/FFA500/FFFFFF?text=Orange+Juice", description: "Fresh, premium orange juice packed with vitamin C." },
            { id: 26, name: "Iced Tea", category: "drinks", price: 1.79, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Iced+Tea", description: "Refreshing iced tea, sweetened or unsweetened." },
            { id: 58, name: "Sprite", category: "drinks", price: 1.99, image: "https://via.placeholder.com/300x200/90EE90/FFFFFF?text=Sprite", description: "Crisp, refreshing lemon-lime soda." },
            { id: 59, name: "Dr Pepper", category: "drinks", price: 1.99, image: "https://via.placeholder.com/300x200/8B0000/FFFFFF?text=Dr+Pepper", description: "Unique blend of 23 flavors in a refreshing soda." },
            { id: 60, name: "Fanta Orange", category: "drinks", price: 1.99, image: "https://via.placeholder.com/300x200/FFA500/FFFFFF?text=Fanta+Orange", description: "Refreshing orange-flavored soda." },
            { id: 61, name: "Lemonade", category: "drinks", price: 2.19, image: "https://via.placeholder.com/300x200/FFFF00/FFFFFF?text=Lemonade", description: "Fresh, tangy lemonade made with real lemons." },
            { id: 62, name: "Hot Chocolate", category: "drinks", price: 2.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Hot+Chocolate", description: "Rich, creamy hot chocolate topped with whipped cream." },
            { id: 63, name: "Milk", category: "drinks", price: 1.99, image: "https://via.placeholder.com/300x200/FFFFFF/000000?text=Milk", description: "Cold, fresh milk available in 1%, 2%, or whole milk." },
            { id: 64, name: "Bottled Water", category: "drinks", price: 1.49, image: "https://via.placeholder.com/300x200/87CEEB/FFFFFF?text=Water", description: "Pure, refreshing bottled water." },
            { id: 65, name: "Energy Drink", category: "drinks", price: 2.99, image: "https://via.placeholder.com/300x200/32CD32/FFFFFF?text=Energy+Drink", description: "Boost your energy with this refreshing energy drink." },
            { id: 66, name: "Cappuccino", category: "drinks", price: 2.99, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Cappuccino", description: "Rich espresso with steamed milk and foam." },
            { id: 67, name: "Iced Coffee", category: "drinks", price: 2.49, image: "https://via.placeholder.com/300x200/8B4513/FFFFFF?text=Iced+Coffee", description: "Cold brew coffee served over ice." }
        ];

        let cart = [];
        let currentFilter = 'all';

        function renderMenu() {
            const menuGrid = document.getElementById('menu-grid');
            const filteredItems = currentFilter === 'all' ? menuItems : menuItems.filter(item => item.category === currentFilter);
            
            menuGrid.innerHTML = filteredItems.map(item => `
                <div class="menu-item">
                    <img src="${item.image}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <p>${item.description}</p>
                    <div class="price-cart">
                        <span class="price">$${item.price.toFixed(2)}</span>
                        <button class="add-to-cart" onclick="addToCart(${item.id})">Add to Cart</button>
                    </div>
                </div>
            `).join('');
        }

        function filterMenu(category) {
            currentFilter = category;
            document.querySelectorAll('.category-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            renderMenu();
        }

        function addToCart(itemId) {
            const item = menuItems.find(i => i.id === itemId);
            const existingItem = cart.find(c => c.id === itemId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ ...item, quantity: 1 });
            }
            
            updateCartUI();
        }

        function removeFromCart(itemId) {
            cart = cart.filter(item => item.id !== itemId);
            updateCartUI();
        }

        function updateQuantity(itemId, change) {
            const item = cart.find(c => c.id === itemId);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeFromCart(itemId);
                } else {
                    updateCartUI();
                }
            }
        }

        function updateCartUI() {
            const cartCount = document.getElementById('cart-count');
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');
            
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
            cartCount.textContent = totalItems;
            cartTotal.textContent = totalPrice.toFixed(2);
            
            cartItems.innerHTML = cart.map(item => `
                <div class="cart-item">
                    <div class="cart-item-info">
                        <h4>${item.name}</h4>
                        <p>$${item.price.toFixed(2)} each</p>
                    </div>
                    <div class="cart-item-controls">
                        <button class="quantity-btn" onclick="updateQuantity(${item.id}, -1)">-</button>
                        <span>${item.quantity}</span>
                        <button class="quantity-btn" onclick="updateQuantity(${item.id}, 1)">+</button>
                    </div>
                </div>
            `).join('');
        }

        function toggleCart() {
            const cartSidebar = document.getElementById('cart-sidebar');
            const overlay = document.getElementById('overlay');
            
            cartSidebar.classList.toggle('open');
            overlay.classList.toggle('open');
        }

        function checkout() {
            if (cart.length === 0) {
                alert('Your cart is empty!');
                return;
            }
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            alert(`Thank you for your order! Total: $${total.toFixed(2)}\n\nYour order will be ready in 15-20 minutes.`);
            
            cart = [];
            updateCartUI();
            toggleCart();
        }

        // Initialize the menu on page load
        renderMenu();
    </script>
</body>
</html>