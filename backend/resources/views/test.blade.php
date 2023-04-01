<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>My E-Shop</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <h1>My E-Shop</h1>
    </header>
    <main>
      <section class="hero-section">
        <h2>Welcome to My E-Shop</h2>
        <p>Find the perfect products for you.</p>
        <a href="#" class="btn">Shop Now</a>
      </section>
      <section class="products-section">
        <h2>Our Products</h2>
        <div class="product-card">
          <img src="product1.jpg" alt="Product 1" />
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
          <img src="product2.jpg" alt="Product 2" />
          <h3>Product 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
          <img src="product3.jpg" alt="Product 3" />
          <h3>Product 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <a href="#" class="btn">Buy Now</a>
        </div>
      </section>
    </main>
    <footer>
      <p>&copy; My E-Shop 2023</p>
    </footer>
  </body>
</html>
