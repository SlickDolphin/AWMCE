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
          <a class="nav-link responsive h5" href="media.php">Media</a>
        </li>
        <li class="nav-item" style="display: inline-block; margin-left: 4vw;">
          <a class="nav-link active responsive h5" style="color:#EB1C26;" aria-current="page" href="about.php">About</a>
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
    <h1 class="headerpic display-5 text-center"><br><br>About Us<br></h1>
    </section>
    <section class="about2">
        <div class="container-fluid">
        <div class="row">
      <div class="col-lg-5 p-3">
          <a href="https://australianoftheyear.org.au/recipients/bhakta-bahadur-bhattarai">
      <img class="img-fluid" src="/AWMCE/yaoty.jpg">
    </a>
      </div>
        <div class="col-lg-7 p-3">
            <p class="abouttext h3">AWMCE INC. 
Albury Wodonga Multicultural Community Events Inc.(AWMCE) is a Non- Profit Multicultural Organisation founded by <span style="color:yellow;">2024 VIC Young Australian of the Year, Bhakta Bahadur Bhattarai</span>, which aims to bring communities together, showcase multiculturalism, entertain, empower, educate and help the multicultural communities during the difficult times. Creating the pathways so that they can be connected in their communities, feel welcome and make it easier for them to belong in the community.
</p>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-7 p-3">
         <p class="abouttext h3">AWMCE fosters social cohesion, supports migrants, refugees, CALD diverse communities, Indigenous communities, the broader Australian community and international students together in the Albury Wodonga region. For our work, we have won the <span style="color:aqua;">2023 Two Cities One Community Volunteer Award</span>. We support individuals affected by mental illness, past traumas and suicide. Also, we aim to bring the community together to continue conversations and share experiences around trauma, suicide and mental illness. This extends to delivering programs to support young children and youth with their education, health and wellbeing, sports, pursuing their further studies and outpatient medical treatment with financial assistance across Australia.</p>
        </div>
        <div class="col-lg-5 p-3 order-first order-md-1">
             <a href="https://www.facebook.com/save.culture.au/posts/pfbid02aVwmPhQg6bvfMrzGhrQVANuHzCCVTC2yCfFCunRyHQ6eFdHwB3eYtWgFaqwHjof2l?__cft__[0]=AZU61cm8ucSm-c716kXuwd21wEjyrAibI1iOm4qO2xBgxs9wL_tMsiELsUQAsI-5SuUr6RPLBNZSFVfEwTmY71-wU8j6BTSqsOQBD1V-bIHp4u8w5XMS1YcCHwT_k-hImyzlANcytlxnsNthsmsSelbbqF4drw39Gq1zSQlArZFSyv-29Oo9ZWy2TVpiix3uTJim_VkiZMiP3KOGzgoWwe8P&__tn__=%2CO%2CP-R">
      <img class="img-fluid" src="/AWMCE/votya.jpg">
    </a>
        </div>
        </div>
        </div>
    </section>
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