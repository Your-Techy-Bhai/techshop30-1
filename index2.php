<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="We.png">
    <title>TechShop30 | Home - <?php $_SESSION['Username']?></title>
</head>
<body>
Welcome - <?php echo $_SESSION['username']?>
  <header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
       
        <span class="ml-3 text-xl">TechShop30</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="index.html"class="mr-5 hover:text-gray-900">Home</a>
        <a href="about.html"class="mr-5 hover:text-gray-900">About</a>
        <a href="contact.html"class="mr-5 hover:text-gray-900">Contact</a>
        <a href="https://techyarnav.tech.blog"class="mr-5 hover:text-gray-900">Main Website</a>
      </nav>
      <a href="shop.html" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Shop Now
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </header>
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
          <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://cdnb.artstation.com/p/marketplace/presentation_assets/000/106/847/large/file.png?1552455677">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">3D Models Seller TechShop30</h1>
            <p class="mb-8 leading-relaxed">Hello, Here We Sell 3D Models Online, Like SketchFab, And 3ds. This Website Is Inspired By Sketch Fab. Continue Shopping.
            </p>
            <div class="flex justify-center">
              <a href="signup.html" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Sign In</a>
            </div>
          </div>
        </div>
      </section>

      
    
</body>
</html>