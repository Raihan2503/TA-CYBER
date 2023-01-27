<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url('assets/images/icon.png'); ?>" type="image/png">
  <title>Cyber Movie</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/media_query.css'); ?>">
  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>
<body>
  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="#" class="navbar-brand">
          <!-- <img src="./assets/images/cyber-movie.jpeg" alt="" width="10">  -->
        </a>

        <!--
          - navbar navigation
        -->

        <nav class="">
          <ul class="navbar-nav">

            <li> <a href="#" class="navbar-link">Home</a> </li>
            <li> <a href="#category" class="navbar-link">Category</a> </li>

          </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">
            <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

          <button class="navbar-search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

      </div>
    </header>

    <!--
      - MAIN SECTION
    -->
    <main>

      <!--
        - #BANNER SECTION
      -->
      <section class="banner">
        <div class="banner-card">

          <img src="./assets/images/John-Wick-3.jpg" class="banner-img" alt="">

          <div class="card-content">
            <div class="card-info">

              <div class="genre">
                <ion-icon name=></ion-icon>
              </div>

              <div class="year">
                <ion-icon name=></ion-icon> 
              </div>

              <div class="duration">
                <ion-icon name=></ion-icon>
              </div>

              <div class="quality"></div>

            </div>

            <h2 class="card-title">Cyber Movie</h2>
            <p>Merupakan platform film yang dibangun untuk memudahkan video streaming film secara gratis. <br>
              Cyber Movie merupakan juga menyidiakan <b>source</b> secara open.
            </p>
          </div>

        </div>
      </section>

      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        <!--
          - filter bar
        -->
        <div class="filter-bar">

          <div class="filter-dropdowns">

            <select name="genre" class="genre">
              <option value="all genres">All genres</option>
              <option value="action">Avengers</option>
              <option value="adventure">Anime</option>
              <option value="animal">Romansa</option>
              <option value="animation">Korea</option>
            </select>
          </div>

          <div class="filter-radios">

            <input type="radio" name="grade" id="featured" checked>
            <label for="featured">Featured</label>

            <input type="radio" name="grade" id="popular">
            <label for="popular">Popular</label>

            <input type="radio" name="grade" id="newest">
            <label for="newest">Newest</label>

            <div class="checked-radio-bg"></div>

          </div>

        </div>


        <!--
          - movies grid
        -->

        <div class="movies-grid">

        <?php foreach($dataMovie as $m) : ?>
          <div class="movie-card">

            <div class="card-head">
              <img src="<?= base_url(); ?>/assets/images/movies/<?= $m['gambar_movie']; ?>" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>6.4</span>
                </div>

                <div class="play">
                  <ion-icon name="play-circle-outline"></ion-icon>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title"><?= $m['judul_movie']; ?></h3>

              <div class="card-info">
                <p><?= $m['detail_movie']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!--
          - load more button
        -->

      </section>





      <!--
        - #CATEGORY SECTION
      -->
      <section class="category" id="category">

        <h2 class="section-heading">Category</h2>

        <div class="category-grid">

          <div class="category-card">
            <img src="./assets/images/action.jpg" alt="" class="card-img">
            <div class="name">Action</div>
            <div class="total">100</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/comedy.jpg" alt="" class="card-img">
            <div class="name">Comedy</div>
            <div class="total">50</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/thriller.webp" alt="" class="card-img">
            <div class="name">Thriller</div>
            <div class="total">20</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/horror.jpg" alt="" class="card-img">
            <div class="name">Horror</div>
            <div class="total">80</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/adventure.jpg" alt="" class="card-img">
            <div class="name">Adventure</div>
            <div class="total">100</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/animated.jpg" alt="" class="card-img">
            <div class="name">Animated</div>
            <div class="total">50</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/crime.jpg" alt="" class="card-img">
            <div class="name">Crime</div>
            <div class="total">20</div>
          </div>

          <div class="category-card">
            <img src="./assets/images/sci-fi.jpg" alt="" class="card-img">
            <div class="name">SCI-FI</div>
            <div class="total">80</div>
          </div>

        </div>

      </section>


          </div>

        </div>

      </section>

    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>

      <div class="footer-content">

        <div class="footer-brand">
          <img src="./assets/images/cyber-movie.jpeg" alt="" class="footer-logo">
          <p class="slogan">Movies & TV Online cinema,</p>


          <div class="social-link">


          </div>
        </div>


        <div class="footer-links">
          <ul>

            <h4 class="link-heading">Cyber Movie</h4>

            <li class="link-item"><a href="#">About us</a></li>
            <li class="link-item"><a href="#">Contacts</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Help</h4>

            <li class="link-item"><a href="#">Supported devices</a></li>
            <li class="link-item"><a href="#">Accessibility</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-copyright">

        <div class="copyright">
          <p>&copy; copyright 2022 Cyber Movie</p>
        </div>

        <div class="wrapper">
          <a href="#">Privacy policy</a>
          <a href="#">Terms and conditions</a>
        </div>

      </div>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>