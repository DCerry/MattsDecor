<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Example</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="src/output.css">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>





<div class="F-Banner">

<div class="utensils-container">
<i class="fa-brands fa-pagelines"></i>
</div>

<div class="F-icons-container">

  <div class="F-social-icons">
    <a href="" target="_blank" class="F-icon-position"><i class="fab fa-facebook"></i></a>
    <a href="  " target="_blank" class="F-icon-position"><i class="fab fa-instagram"></i></a>
    <a href="mail to: mattdavid758@gmail.com" class="F-border-icon F-icon-position"><i class="far fa-envelope"></i></a>
    <a href="tel:+1758 715-4034" class="F-border-icon F-icon-position"><i class="fas fa-phone"></i></a>
  </div>
</div>

<a href="#" class="back-to-top">
  <i class="fas fa-arrow-up-long"></i>
</a>

<br>
<p class="F-copyright">&copy;  Matt's Decor 2025. All rights reserved.</p>
</div>





</body>

<script>
    

/* Hide arrow*/

document.addEventListener('DOMContentLoaded', function () {
  var backToTop = document.querySelector('.back-to-top');
  var lastScrollPosition = window.scrollY;

  window.addEventListener('scroll', function () {
      var currentScrollPosition = window.scrollY;

      if (currentScrollPosition > lastScrollPosition) {
          // Scrolling down, hide the arrow
          backToTop.style.transform = 'translateY(100%)';
      } else {
          // Scrolling up, show the arrow
          backToTop.style.transform = 'translateY(0)';
      }

      lastScrollPosition = currentScrollPosition;
  });

  backToTop.style.transition = 'transform 0.3s ease-in-out'; /* Transition */
});


</script>
</html>