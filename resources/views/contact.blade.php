<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- My css-->
    <link rel="stylesheet" href="scss/contact.css">

    <!-- my jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY >0);
      })
    </script>

    <title>Tropisianimal</title>
  </head>
  <body>
  <section class="sec1"> 
    @include('partials.navbar')

    <div class="container">
      <div class="row custom-section">
        <div class="col-12 col-lg-4">
          <h2>Kontak Kami</h2>
        </div>
      </div>
    </div>
  </section>

    <section class="sec-map">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.23522712826!2d107.6639873!3d-6.9432114!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1633119627976!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <section class="sec-contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <table class="mt-4">
                <tr>
                    <td rowspan="4">
                        <div class="form-floating">
                            <textarea class="form-control txtarea-size" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                            <label for="floatingTextarea2">Deskripsi</label>
                        </div>
                    </td>
                    <td><div class="form-floating form-size">
                            <input class="form-control form-control-lg" type="text" placeholder="subject" aria-label=".form-control-lg example">
                            <label for="floatingPassword">Subject</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-floating form-size">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Nama">
                        <label for="floatingPassword">Nama</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-floating form-size">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Email">
                        <label for="floatingPassword">Email</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>  <a href="/profile" class="about-button btn btn-primary">Kirim<svg xmlns="http://www.w3.org/2000/svg" width="17.986" height="18.414" viewBox="0 0 17.986 18.414">
                    <defs>
                        <style>
                        .cls-1 {
                            fill: none;
                            stroke: #fff;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-width: 2px;
                        }
                        </style>
                    </defs>
                    <g id="send" transform="translate(1 1.414)">
                        <line id="Line_2" data-name="Line 2" class="cls-1" x1="9" y2="9" transform="translate(6.572)"/>
                        <path id="Path_2" data-name="Path 2" class="cls-1" d="M17.818,2,12.282,17.818,9.118,10.7,2,7.536Z" transform="translate(-2 -1.818)"/>
                    </g>
                    </svg>
                </a></td>
                </tr>
            </table>    
        </div>
    </section>

    <section class="sec-contact2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-icon">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 18.829 14.834">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <g id="mail" transform="translate(-0.607 -3)">
                                <path id="Path_25" data-name="Path 25" class="cls-1" d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z"/>
                                <path id="Path_26" data-name="Path 26" class="cls-1" d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)"/>
                            </g>
                            </svg>
                        </div>    
                    </div>    
                    <h2>Email</h2>
                    <p>tropisianimal@gmail.com</p>
                </div>
                <div class="col">
                <div class="contact-icon">
                        <div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 18.044 18.077">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <path id="phone" class="cls-1" d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z" transform="translate(-1.111 -1)"/>
                            </svg>
                        </div>    
                    </div>    
                    <h2>Phone</h2>
                    <p><span class="number">+62 812 3456 7890</span></p>
                </div>
                <div class="col">
                <div class="contact-icon">
                        <div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 15.128 18.045">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #fff;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                    stroke-width: 2px;
                                }
                                </style>
                            </defs>
                            <g id="map-pin" transform="translate(-2)">
                                <path id="Path_27" data-name="Path 27" class="cls-1" d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z"/>
                                <circle id="Ellipse_17" data-name="Ellipse 17" class="cls-1" cx="2.5" cy="2.5" r="2.5" transform="translate(7 5.046)"/>
                            </g>
                            </svg>
                        </div>    
                    </div>    
                    <h2 class="title-location">Location</h2>
                    <p><span class="align-middle">Kota Bandung, Jawa Barat<br>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Indonesia</span></span></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="row row-cols-5 foot-set ">
    <div class="col-4">
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none fs-4 fw-bold text-white">
        Tropisianimal
      </a>
      <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore<br> et dolore magna aliqua. Ut enim ad</p>
      <div class="d-flex flex-row bd-highlight p-0 mb-3 social-icon">
        <div class="p-2 bd-highlight"><a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none"><img src="../img/fb.png" class="rounded-circle"></a></div>
        <div class="p-2 bd-highlight"><a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none"><img src="../img/twitter.png" class="rounded-circle"></a></div>
      </div> 
    </div>

    <div class="col">
      <h5>Useful links</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Blog</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Hewan</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Galeri</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Testimonial</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Privacy</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Karir</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Tentang Kami</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Kontak kami</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">servis</a></li>
      </ul>
    </div>

    <div class="col">
      <h5>Contact Info</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="18.829" height="14.834" viewBox="0 0 18.829 14.834">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #fff;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 2px;
              }
            </style>
          </defs>
          <g id="mail" transform="translate(-0.607 -3)">
            <path id="Path_25" data-name="Path 25" class="cls-1" d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z"/>
            <path id="Path_26" data-name="Path 26" class="cls-1" d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)"/>
          </g>
        </svg>
        <span>tropisianimal@gmail.com</span>
        </a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="18.044" height="18.077" viewBox="0 0 18.044 18.077">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #fff;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 2px;
              }
            </style>
          </defs>
          <path id="phone" class="cls-1" d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z" transform="translate(-1.111 -1)"/>
        </svg>
        <span>+ 62 812 3456 7890</span>
        </a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="15.128" height="18.045" viewBox="0 0 15.128 18.045">
          <defs>
            <style>
              .cls-1 {
                fill: none;
                stroke: #fff;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke-width: 2px;
              }
            </style>
          </defs>
          <g id="map-pin" transform="translate(-2)">
            <path id="Path_27" data-name="Path 27" class="cls-1" d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z"/>
            <circle id="Ellipse_17" data-name="Ellipse 17" class="cls-1" cx="2.5" cy="2.5" r="2.5" transform="translate(7 5.046)"/>
          </g>
        </svg>
        <span>Kota Bandung, Jawa Barat</span>
        </a></li>
      </ul>
    </div>
    <div class="bottom-footer">
      <p class="copyright">Copyright &copy;2020 All rights reserved</p>
    </div>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>