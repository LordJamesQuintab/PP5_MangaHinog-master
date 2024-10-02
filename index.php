<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Manga Hinog</title>
    <!-- nav  -->
    <?php include 'components/header.php' ?>
    
    
      <div>
        <div class="flex flex-col items-center  gap-6 w-full">
          <h2 class="text-latest text-[60px] font-bold">Latest Updates</h2>
      
          <div class="recomend-section">
            
          </div>
        </div>
      <!-- header  -->
  
      <div id="carouselExampleAutoplaying" class="car carousel slide" data-bs-ride="carousel">
        <div class="car carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./assets/4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</head>
<body>

  <div>
    <div class="flex flex-col items-center p-5 gap-6 w-full">
      <h2 class="text-pop text-[60px] font-bold">Most Popular</h2>
      
      <div class="recomend-section">
       
      </div>
    </div>
    
   
    <div class="most-popular-section">
    
    </div>
  </div>
 
   <!-- manga -->
   
      <div class="manga-list">
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>
       <a href="./manga.php">
          <div class="manga">
            <img src="./assets/1.png" />
            <div class="layer">
             <h3>Lorem, ipsum dolor.</h3>
             <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia facere corporis odio neque eligendi adipisci.
             </p>
            
            </div>
          </div>
       </a>

      </div>
</div>

<!-- footer.html -->
<?php include './components/footer.php' ?>

          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="carousel.js"></script>
</body>
</html>