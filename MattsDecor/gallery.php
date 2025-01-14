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





<div class="Image-container">

<div class="relative">
    <img class="h-auto max-w-full rounded-lg" src="https://balsacircle.com/cdn/shop/articles/BC_BackdropIdeas_Door.jpg?v=1580799486" alt="">
    <div class="overlay"></div> <!-- Darken overlay -->
    <h1 class="header absolute inset-0 flex justify-center items-center text-white font-bold text-4xl sm:text-4xl md:text-5xl lg:text-6xl text-center">
       Bringing your vision to life.
    </h1>
</div>






    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/7f/2a/b3/7f2ab39bf3ea779b8f72107a30b32788.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/originals/03/87/69/038769574b3388d488ec83c0a038b9c8.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/0b/13/4b/0b134bb346123e662d4465296fa319d6.jpg" alt="" onclick="openModal(this)">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/e7/e8/e2/e7e8e2838eea05c6bd84a8c4aa22308e.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/61/64/64/6164649f981dd50a8060659552bf6708.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/bb/05/e4/bb05e46d1ea2dbaf620a2f1c073ba634.jpg" alt="" onclick="openModal(this)">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/1c/15/09/1c15091565b1e689b22efba77115d936.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/21/f3/3d/21f33def6345a8e4b7ce884e8bf36e63.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/b6/96/26/b69626b7172d6f4efb63488bd46ef5f0.jpg" alt="" onclick="openModal(this)">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/9c/da/84/9cda8474d11b4b167bac3f173499fb78.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/e5/3f/5b/e53f5b25fdab7fb925840e5f2b72d6d7.jpg" alt="" onclick="openModal(this)">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg cursor-pointer" src="https://i.pinimg.com/736x/59/35/1c/59351c003c97357a658ec9f91c65eac9.jpg" alt="" onclick="openModal(this)">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="imageModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">×</span>
        <img id="modalImage" class="modal-image" src="" alt="">
    </div>
</div>

<!-- JavaScript -->
<script>
    // Function to open the modal
    function openModal(imageElement) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageElement.src; // Set modal image source to the clicked image
        modal.style.display = 'flex'; // Show modal
    }

    // Function to close the modal
    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.style.display = 'none'; // Hide modal
    }
</script>





<footer>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>