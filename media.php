<!DOCTYPE html>
<html>
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Albury-Wodonga Multicultural Community Events (AWMCE)</title>
        <meta name="description" content="Albury-Wodonga Multicultural Community Events (AWMCE)">
        <link rel="stylesheet" type="text/css" href="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">   
        <script src="bootstrap-5.3.1-dist/bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="icon" href="favicon.jpg" type="image/gif">
    </head>
    <body>
        <header style="z-index:9999;">
          <nav class="navbar navbar-absolute fixed-top navbar-expand-lg navbar-light d-inline-block" style="background-color: #FFFFFF;">
          <div class="container-fluid">
    <a class="navbar-brand" style="padding-left:6vw; padding-top:0rem; padding-bottom:0rem;" href="index.php">
    <picture>
  <source srcset="/AWMCE/brand.jpg" media="(max-width: 1050px)">
  <source srcset="/AWMCE/navbrand2.jpg">
  <img class="logo d-inline-block" src="/AWMCE/navbrand2.jpg" alt="logo">
    </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right:10vw; padding-top:0rem; padding-bottom:0rem;">
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link responsive h5" href="index.php">Home</a>
        </li>
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link responsive h5" href="projects.php">Projects</a>
        </li>
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link active responsive h5" style="color:#EB1C26;" aria-current="page" href="media.php">Media</a>
        </li>
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link responsive h5" href="about.php">About</a>
        </li>
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link responsive h5" href="index.php#Contact">Contact</a>
        </li>
         </ul>
      </div>
  </div>
          </nav>
  </header>
        <section>
    <h1 class="headerpic display-5 text-center"><br><br>Our Media Feed<br></h1>
    </section>
    <div class="intropic d-flex justify-content-center">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsave.culture.au&tabs=timeline&width=340&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="600" style="border-radius:20px;border:none;overflow:hidden;visibility:visible;margin-top:15vh;margin-bottom:15vh" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
            <footer class="footer text-center">
        <br><span id="ccright" class="h6"></span><a href="https://slickdolphin.github.io/suprawebdev/" style="white-space: nowrap;">Supra Web Development</a><br><br>
    </footer>
        <script>
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarSupportedContent')
const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})
navLinks.forEach((l) => {l.addEventListener('click', () => { bsCollapse.toggle() })
})
            
$(function () {
            $(document).click(function (event) {
                var clickover = $(event.target);
                var _opened = $(".navbar-collapse").hasClass("navbar-collapse collapse show");
                if (_opened === true && !clickover.hasClass("navbar-toggler")) {
                    $("button.navbar-toggler").click();
                }
            });
        });
        </script>
        <script>
    document.getElementById("ccright").innerHTML="&copy; " + new Date().getFullYear() + " - Albury-Wodonga Multicultural Community Events (AWMCE). <br> Website by ";
</script> 
        </body>
</html>