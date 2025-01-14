<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matt's Decor</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="src/output.css">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@1.4.7/dist/flowbite.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/tailwindcss@3.1.0/dist/tailwind.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.7/dist/flowbite.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>

<div class="w-full relative banner">
  <img src="https://images.prestigeonline.com/wp-content/uploads/sites/6/2022/05/30000725/lsa-hero-2-1600x900.jpeg" alt="Banner Image" class="w-full h-full object-cover">
  <div class="absolute inset-0 flex items-center justify-center banner-overlay">
    <h2 class=" header text-white text-4xl font-bold">About Us</h2>
  </div>
</div>

<br><br>

<div class="container3 flex justify-center items-center min-h-screen">
  <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
    <!-- Second Column with Matthew's Information -->
    <div class=" second w-full md:w-1/3 text-center">
    <h2 class="header text-3xl md:text-3xl font-bold text-white shadow-lg">Matthew David</h2> <!-- Header with shadow -->

  
      <p class="font-bold">Managing Director</p>
    
      <div class="mt-4 w-64 h-64 mx-auto rounded-full overflow-hidden">
        <img src="https://imgcdn.stablediffusionweb.com/2024/9/16/25b5b6bf-5b94-4e75-87c2-0f09316af5e2.jpg" alt="Circle Image" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- First Column with Light Grey Background and More Width -->
    <div class="w-full md:w-2/3 bg-gray-100 p-4">
      <h2 class="header text-3xl md:text-3xl font-bold text-center md:text-left">Behind The Success</h2> <!-- Centered header on small screens -->
      <p class="mt-2 text-xl md:text-2xl text-center md:text-left">
  In 2016, Matthew David founded Matt's Decor, a business dedicated to transforming spaces and crafting experiences that evoke warmth, joy, and connection.
  It all started with a vision to offer unique designs that would elevate every event and leave a lasting impression on everyone involved.
  Driven by a passion for creativity and a deep commitment to quality, Matthew wanted to create more than just a decor service, he aimed to build a legacy of beautiful, unforgettable moments.
  Every piece of decor, every arrangement, tells a story crafted with attention to detail, creativity, and the belief that great celebrations begin with the perfect atmosphere.
</p>

    </div>
  </div>
  
</div>

<div class="relative">
    <img class="w-full h-auto object-cover rounded-lg" src="https://balsacircle.com/cdn/shop/articles/BC_BackdropIdeas_Door.jpg?v=1580799486" alt="">
    <div class="overlay absolute inset-0 bg-black opacity-50"></div> <!-- Darken overlay with opacity -->
    
    <!-- Container for both text elements -->
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center z-10">
        <h1 class=" header text-white font-bold text-4xl sm:text-4xl md:text-5xl lg:text-6xl mb-4">
            Mission Statement 
        </h1>
        <p class="reading text-white text-lg sm:text-xl md:text-2xl max-w-xl">
           Our mission is to consistently exceed customer expectations through creativity, attention to detail, and personalized service, ensuring each space reflects your vision and leaves a lasting impression.
        </p>
    </div>
</div>

<style>
  
  .relative{
    width: 90%;
    margin: 0 auto;
    margin-top: 10px;
  }

  
.mission {
  position: absolute;
  bottom: 4%; /* Adjust this value to move the text up or down */
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  color: white;
  font-size: 1.25rem; /* You can adjust this for the desired size */
  max-width: 80%; /* Adjust this width to avoid text overflowing */
  z-index: 10; /* Ensure the paragraph is above the image */
  line-height: 1.5; /* Adjust line-height for better readability */
}

.reading{
  font-size: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Horizontal, Vertical, Blur, Color */
  font-weight: bold;
}
@media (max-width: 868px) {
  .reading{
    font-size: 15px;
    width: 100%;
    line-height: 1.2;
    letter-spacing: normal;
    word-spacing: normal;
  }

  .relative{
   width: 100%;
  }


}


  </style>








<style>
  .banner {
    height: 8rem; /* Adjust this value for the banner height */
  }

  .banner-overlay {
    background-color: rgba(0, 0, 0, 0.5); /* Dark semi-transparent overlay */
  }
</style>





</body>

<footer>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>