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


<div class="slideshow-container">

  <!-- Slide 1 -->
  <div class="Slide">
    <img src="https://adexperienceevents.com/wp-content/uploads/2023/07/featured-Images-still-editing-22.png" style="width:100%">
    <p class="Para">Bring your vision to life</p>
    <a href="contact.php" class="button">Contact Us</a>
  </div>

  <!-- Slide 2 -->
  <div class="Slide">
    <img src="https://media.licdn.com/dms/image/D5612AQFPGNAHlBSNFQ/article-cover_image-shrink_720_1280/0/1705405428154?e=2147483647&v=beta&t=d4a2lX38ur0QMsO_QmEuSNkcXzP-v7TiANgGKajfKi4" style="width:100%">
    <p class="Para">View our work</p>
    <a href="gallery.php" class="button">View Gallery</a>
  </div>

  <!-- Slide 3 -->
  <div class="Slide">
    <img src="https://static.tnn.in/thumb/msid-114729815,thumbsize-1915746,width-1280,height-720,resizemode-75/114729815.jpg" style="width:100%">
    <p class="Para">Meet the mind behind it all</p>
    <a href="about.php" class="button">About Us</a>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>

<br>

<!-- Dots/circles -->
<div class="dot-container" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<br>
<div class="reading">
<img src="src\images\PngItem_8278812.png" alt="Decor Image" class="mx-auto mt-4">
<br>
<p class="header text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-indigo-600">
   Transforming Your Ideas into Extraordinary Spaces.
</p>
</div>


<br>

<div class="reading">
  <p class="text-center text-lg md:text-xl lg:text-2xl text-gray-700 mt-4">
    At Matt's Decor, we specialize in creating stunning event setups that reflect your vision. Whether it's a wedding, birthday, corporate event, or any special occasion, our team is dedicated to turning your ideas into reality with attention to detail, creativity, and style. We cater to all events, ensuring every space we design leaves a lasting impression.
  </p>
  
  <!-- Image below the paragraph -->
  <img src="src\images\PngItem_827881.png" alt="Decor Image" class="mx-auto mt-4">
</div>


<br><br>
<div class="utensils-container">
<i class="fa-brands fa-pagelines"></i>
</div>


<p class="header text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-indigo-600">
Designing Moments, Crafting Memories.
</p>

<br><br>

<div class="container mx-auto px-4">
  <div class="space-y-10">
    <!-- Outer square container -->
    <div class="w-full h-auto bg-gray-100">
      <!-- Image on the right, Text on the left (Mobile-first) -->
      <div class="flex items-center justify-center flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
        <div class="text-center md:text-left w-full md:w-1/2">
          <p class="text-lg md:text-xl lg:text-2xl text-gray-700">Let us make your wedding day as unforgettable as your love story.</p>
          <br><br>
          <a href="your-link-here" class="btn">Contact Us</a> 
        </div>
        <div class="w-full md:w-1/2">
          <img src="https://media.architecturaldigest.com/photos/65e7bfaf9257bd9a533e18eb/16:9/w_1280,c_limit/0350E&J.jpg" alt="Event Setup" class="w-full h-full object-cover rounded-lg">
        </div>
      </div>

      <!-- Image on the left, Text on the right -->
      <div class="flex items-center justify-center flex-col-reverse md:flex-row space-y-6 md:space-y-0 md:space-x-8">
        <div class="w-full md:w-1/2">
          <img src="https://media.licdn.com/dms/image/v2/D5612AQFfMxmXhIuTdQ/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1725370052072?e=2147483647&v=beta&t=T-iWgsMe8tJd36S1r7YcVIY6q1GDm3WnZG5H6APekeA" alt="Event Setup" class="w-full h-full object-cover rounded-lg">
        </div>
        <div class="text-center md:text-right w-full md:w-1/2">
          <p class="text-lg md:text-xl lg:text-2xl text-gray-700">Make every birthday unforgettable with personalized decor and special touches that bring your celebration to life.</p>
           <br><br>
           <a href="your-link-here" class="btn">Contact Us</a> 
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-2 mx-auto px-4">
  <div class="space-y-10">
    <!-- Image and text stacked vertically -->
    <div class="flex flex-col space-y-6">
      <!-- First image and text -->
      <div class="w-full">
        <img src="https://media.architecturaldigest.com/photos/65e7bfaf9257bd9a533e18eb/16:9/w_1280,c_limit/0350E&J.jpg" alt="Event Setup" class="w-full h-auto object-cover rounded-lg">
        <br>
        <p class="text-lg sm:text-xl lg:text-2xl text-center text-gray-700">Let us make your wedding day as unforgettable as your love story.</p>
        <a href="your-link-here" class="btn">Contact Us</a> 
    </div>
       <br>
      <!-- Second image and text -->
      <div class="w-full">
        <img src="https://picnicmakers.com/wp-content/uploads/2023/11/best-18th-birthday-celebration-ideas.jpg" alt="Event Setup" class="w-full h-auto object-cover rounded-lg">
        <br>
        <p class="text-lg sm:text-xl lg:text-2xl text-center text-gray-700">Make every birthday unforgettable with personalized decor and special touches that bring your celebration to life.</p>
        <a href="your-link-here" class="btn">Contact Us</a> 
    </div>
    </div>
  </div>
</div>


<footer>
<?php include 'footer.php'; ?>
</footer>



<script>
    let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
// Automatic slideshow
function autoSlides() {
  plusSlides(1);
}
//interval for automatic slideshow
setInterval(autoSlides, 10000); // 10000 milliseconds = 10 seconds

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("Slide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

</script>

