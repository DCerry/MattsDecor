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
</head>

<body>


<div class="w-full relative banner">
  <img src="https://cdn.pixabay.com/photo/2024/07/29/18/41/ai-generated-8930391_1280.jpg" alt="Banner Image" class="w-full h-full object-cover">
  <div class="absolute inset-0 flex items-center justify-center banner-overlay">
    <h2 class=" header text-white text-4xl font-bold">Contact Us</h2>
  </div>
</div>
<br>
<div class="utensils-container">
<i class="fa-brands fa-pagelines"></i>
</div>
<p class="header text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-indigo-600">
   For any inquiries or interest in business feel free to contact us
</p>
</div>

<p class="text-center text-lg sm:text-xl md:text-2xl lg:text-3xl text-gray-700 mt-4">
  Call us: <a href="tel:+17587154034" class="text-indigo-600 hover:text-indigo-800">+1 (758) 7154034</a>  
  <br>
  Email us: <a href="mailto:mattdavidslu758@gmail.com" class="text-indigo-600 hover:text-indigo-800">mattdavidslu758@gmail.com</a>
</p>

<div class="utensils-container">
<i class="fa-brands fa-pagelines"></i>
</div>

<br>

  <main class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md">
    <p class="header text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-indigo-600">
        Contact Form 
    </p>
    <br>
    <form action="send_email.php" method="POST" class="space-y-4" id="myForm">
  <div>
    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      class="w-full mt-1 p-2 border rounded-md shadow-sm focus:ring focus:ring-primary focus:outline-none" 
      placeholder="Enter your name" 
      required
    />
  </div>
  <div>
    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
    <input 
      type="email" 
      id="email" 
      name="email" 
      class="w-full mt-1 p-2 border rounded-md shadow-sm focus:ring focus:ring-primary focus:outline-none" 
      placeholder="Enter your email" 
      required
    />
  </div>
  <div>
    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
    <textarea 
      id="message" 
      name="message" 
      rows="4" 
      class="w-full mt-1 p-2 border rounded-md shadow-sm focus:ring focus:ring-primary focus:outline-none" 
      placeholder="Write your message here..."
      required
    ></textarea>
  </div>
  <button class="btn" onclick="showLoadingScreen()"
          type="submit" 
          class="w-full py-2 px-4 bg-primary text-white font-semibold rounded-md shadow-md hover:bg-blue-600 transition duration-300"
        >
          Submit
        </button>
</form>

    </div>
  </main>

    <!-- Loading Screen Overlay -->
    <div id="loading-overlay" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 flex items-center justify-center hidden">
    <!-- Wavy Bouncing Dots Animation -->
    <div class="flex space-x-2 justify-center items-center">
      <span class="sr-only">Loading...</span>
      <div class="h-8 w-8 bg-white rounded-full animate-wave1"></div>
      <div class="h-8 w-8 bg-white rounded-full animate-wave2"></div>
      <div class="h-8 w-8 bg-white rounded-full animate-wave3"></div>
    </div>
  </div>


  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>

<style>

:root {
  --primary: #007BFF;
}


input,
textarea {
  border: 1px solid #ddd;
}

input:focus,
textarea:focus {
  border-color: var(--primary);
  box-shadow: 0 0 5px var(--primary);
}


.btn{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto; /* Centers horizontally *//

}

.banner{
  height: 200px;
}

.banner-overlay {
    background-color: rgba(0, 0, 0, 0.5); /* Dark semi-transparent overlay */
  }

  @keyframes wave1 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

@keyframes wave2 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-15px);
  }
  100% {
    transform: translateY(0);
  }
}

@keyframes wave3 {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-20px);
  }
  100% {
    transform: translateY(0);
  }
}

.animate-wave1 {
  animation: wave1 1.2s ease-in-out infinite;
}

.animate-wave2 {
  animation: wave2 1.2s ease-in-out infinite;
  animation-delay: 0.2s;
}

.animate-wave3 {
  animation: wave3 1.2s ease-in-out infinite;
  animation-delay: 0.4s;
}



  

  </style>

<script>
// Add event listener to the form to handle submission
document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent the form from submitting immediately
  
  // Get form fields
  var name = document.getElementById('name');
  var email = document.getElementById('email');
  
  // Check if the fields are filled out
  if (name.value.trim() === "" || email.value.trim() === "") {
    alert("Please fill out all fields.");
    return; // Stop the function if fields are not filled out
  }

  // Show the loading screen
  document.getElementById('loading-overlay').classList.remove('hidden');
  
  // Simulate a delay before submitting the form
  setTimeout(function() {
    // Now submit the form after showing the loading screen
    document.getElementById('myForm').submit();
  }, 2000); // Delay of 2 seconds
});
</script>
</html>