<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="https://api-jdih.tulangbawangkab.go.id">
<meta property="og:title" content="API JDIH Kabupaten Tulang Bawang">
<meta property="og:description" content="API JDIH Kabupaten Tulang Bawang">
<meta property="og:image" content="{{ asset('assets/img/jdih.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/jdih.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://api-jdih.tulangbawangkab.go.id">
<meta property="twitter:title" content="API JDIH Tulang Bawang">
<meta property="twitter:description" content="API JDIH Kabupaten Tulang Bawang">
<meta property="twitter:image" content="{{ asset('assets/img/jdih.png') }}">

<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/jdih.png') }}">
<link rel="icon" type="image/png" href="{{ asset('assets/img/jdih.png') }}">
<title>
    API JDIH Kabupaten Tulang Bawang
</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('assets') }}/css/material-kit.css?v=3.0.4" rel="stylesheet" />
<body class="index-page ">
<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('./assets/img/banner_jdih_tuba.jpg')">
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto py-3">
        <div class="text-center">
            <h3>API JDIH Kabupaten Tulang Bawang</h3>
            <p style="font-size: 18px">Gerbang Anda untuk integrasi yang kuat</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="overview" class="py-5">
    <div class="container">
        <h2 class="mb-4">Gambaran Umum</h2>
        <p style="font-size: 18px">Selamat datang di dokumentasi API Saya. API kami memungkinkan Anda untuk mengakses data dan melakukan berbagai operasi dengan mudah. Di bawah ini Anda akan menemukan detail tentang cara menggunakan endpoint API kami.</p>
    </div>
</section>
<section id="endpoints">
    <div class="container">
        <h2 class="mb-4">Endpoint API</h2>
        
        <div class="endpoint mb-4 p-3 bg-white border rounded">
            <h5>GET /api/dokumen</h5>
            <p>Mengambil list dokumen</p>
            <pre><code>curl -X GET "https://api-jdih.tulangbawangkab.go.id" -H "accept: application/json"</code></pre>
        </div>
        
        <div class="endpoint mb-4 p-3 bg-white border rounded">
            <h5>GET /api/dokumen</h5>
            <p>Menampilkan dokumen berdasarkan id_dokumen</p>
            <pre><code>curl -X GET "https://api-jdih.tulangbawangkab.go.id/{id}" -H "accept: application/json" -H "Content-Type: application/json"</code></pre>
        </div>
        
        <!-- Tambahkan endpoint lainnya sesuai kebutuhan -->
        
    </div>
</section>

<footer>
      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            All rights reserved. Copyright © <script>document.write(new Date().getFullYear())</script> Umaedi KH <a href="https://www.creative-tim.com" target="_blank">Full Stack Enginer</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>


  

  
  















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="./assets/js/plugins/countup.min.js"></script>





<script src="./assets/js/plugins/choices.min.js"></script>



<script src="./assets/js/plugins/prism.min.js"></script>
<script src="./assets/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="./assets/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="./assets/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="./assets/js/plugins/choices.min.js"></script>
















<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="./assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>


























</body>

</html>
