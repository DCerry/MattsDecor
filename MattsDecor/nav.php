<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matt's Decor</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="src/output.css">
  <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+VIC+Guides&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="NAV bg-white border-b border-blue-500 shadow-lg">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <!-- "Matt's Decor" text aligned to the far left -->
      <a  class=" Logo flex items-center space-x-3 rtl:space-x-reverse">
        Matt's Decor
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-semibold flex flex-col p-4 md:p-0 mt-4 border border-gray-200 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">
          <li>
            <a href="home.php" class="block py-2 px-4 text-blue-500 border-b-2 border-blue-500 md:border-0 md:hover:text-blue-700">Home</a>
          </li>
          <li>
            <a href="gallery.php" class="block py-2 px-4 text-gray-700 hover:text-blue-500 md:hover:text-blue-700">Gallery</a>
          </li>
          <li>
            <a href="about.php" class="block py-2 px-4 text-gray-700 hover:text-blue-500 md:hover:text-blue-700">About</a>
          </li>
          <li>
            <a href="contact.php" class="block py-2 px-4 text-gray-700 hover:text-blue-500 md:hover:text-blue-700">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
