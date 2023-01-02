<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>Blog</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="assets/images/GettyImages-1207514166.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Why does it hurt so much when we get ghosted? A psychologist explains</a></h4>
            <i class="far fa-user"> Michelle Drouin</i>
            &nbsp;
            <i class="far fa-calendar"> Sept 18, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/img.png.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Gallery: During lockdown, this street photographer created a vibrant, surreal world    </a></h4>
            <i class="far fa-user"> Paige Drownie</i>
            &nbsp;
            <i class="far fa-calendar"> May 31, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/what-is-leadership.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">5 ways to show you can lead — even when you don t have a leadership role</a></h4>
            <i class="far fa-user">  David Burkus</i>
            &nbsp;
            <i class="far fa-calendar"> May 5, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/cute-girl.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">How to have better conversations on social media (really!)</a></h4>
            <i class="far fa-user"> Hayley Caldwell</i>
            &nbsp;
            <i class="far fa-calendar">Nov 17, 2022</i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/sad.png" alt="" class="slider-image">
          <div class="post-info">
            <h4><a href="single.html">Even gritty people get discouraged</a></h4>
            <i class="far fa-user"> Angela Duckworth PhD</i>
            &nbsp;
            <i class="far fa-calendar"> Nov 2, 2022 </i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/pelle-pigmentata.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">Leather is bad for animals and the planet — but what if we made it in a lab?</a></h2>
            <i class="far fa-user"> Laura Pitcher</i>
            &nbsp;
            <i class="far fa-calendar"> Dec 1, 2022</i>
            <p class="preview-text">
            The fashion industry contributes around 8 to 10 percent of global greenhouse gas emissions — and one of the worst culprits is the leather industry.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/The-6-Great-Misconceptions-of-a-Trust.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">7 ways to build greater trust in all of your partnerships</a></h2>
            <i class="far fa-user"> Jean Oelwang</i>
            &nbsp;
            <i class="far fa-calendar"> Dec 12, 2022</i>
            <p class="preview-text">
            Quick question: How many relationships do you currently have where you feel like the other person has your back? And how would you like to have more of them? 
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/love-life-1280x720.png" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.hmtl">4 ways that climate change could be affecting your love life</a></h2>
            <i class="far fa-user"> Carla M. Delgado</i>
            &nbsp;
            <i class="far fa-calendar"> Dec 15, 2022</i>
            <p class="preview-text">
            The climate crisis is the single biggest threat facing humanity.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="fas fa-search" placeholder="...">
            <i class="fas fa-search"></i>
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Business</a></li>
            <li><a href="#">Arts+Desing</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">We Humans</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>