<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    

    <!-- My css-->
    <link rel="stylesheet" href="scss/main.css">

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
          <h2>Hewan<br>Tropis di Dunia</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
        </div>
      </div>
    </div>
  </section>

    <section class="sec2">
      <div class="container">
        <div class="row">
          <div class="col-4 new-col">
            <h6>TENTANG KAMI</h6>
                <h2 class="lh-base">Membangun<br>Komunitas Hewan</h2>
                <p class="text-about1">Lorem ipsum dolor sit amet, consectetur adipiscing<br> elit, sed do eiusmod tempor incididunt ut labore et<br> dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                <p class="text-about2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco<br> laboris nisi ut aliquip ex ea commodo consequat</p>
                <a href="/profile" class="about-button btn btn-primary">baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="12.405" height="13.639" viewBox="0 0 12.405 13.639">
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
                    <g id="arrow-right_1_" data-name="arrow-right (1)" transform="translate(-4.405 -3.586)">
                      <line id="Line_3" data-name="Line 3" class="cls-1" x2="10" transform="translate(5.405 10.405)"/>
                      <path id="Path_3" data-name="Path 3" class="cls-1" d="M12,5l5.405,5.405L12,15.811" transform="translate(-1.595)"/>
                    </g>
                  </svg>
                </a>
          </div>
          <div class="col-6 new-col2 ">
            <div class="container">
              <div class="row img-row">
                <div class="col-6 col-md-4"><img src="../img/gajah2.png" class="about-img"></div>
                <div class="col-6 col-md-4"><img src="../img/komodo.png" class="about-img2"></div>
              </div>
              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
              <div class="row new-img-row">
                <div class="col-md-8"><img src="../img/buaya2.png" class="about-img3"></div>
              </div>
          </div>
        </div>
      </div>
    </section>
      
    <section class="sec3">
        <div class="container">
            <h4 class="title-about-animal">Kami Membawa Anda<br>Untuk Mengetahui Lebih Dalam</h4><div class="row">
              <div class="col">
                  <div class="card text-center card-size">
              <div class="card-body">
              <div class="new-paw text center">
              <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
                </div>
                <h5>Lorem ipsum<br>dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
              </div>
              <div class="col">
                  <div class="card text-center card-size">
              <div class="card-body">
              <div class="new-paw text center">
              <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
                </div>
                <h5>Lorem ipsum<br>dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
              </div>
              <div class="col">
                  <div class="card text-center card-size">
              <div class="card-body">
              <div class="new-paw text center">
              <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
                </div>
                <h5>Lorem ipsum<br>dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
              </div>
              <div class="col">
                  <div class="card text-center card-size">
              <div class="card-body">
              <div class="new-paw text center">
              <svg xmlns="http://www.w3.org/2000/svg" width="34.215" height="29.904" viewBox="0 0 34.215 29.904">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <g id="pawprint" transform="translate(0 0)">
                    <path id="Path_29" data-name="Path 29" class="cls-1" d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0" transform="translate(-60.152 -169.79)"/>
                    <path id="Path_30" data-name="Path 30" class="cls-1" d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0" transform="translate(0 -92.285)"/>
                    <path id="Path_31" data-name="Path 31" class="cls-1" d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0" transform="translate(-116.1 0)"/>
                    <path id="Path_32" data-name="Path 32" class="cls-1" d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0" transform="translate(-265.203 -37.564)"/>
                    <path id="Path_33" data-name="Path 33" class="cls-1" d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0" transform="translate(-351.56 -159.623)"/>
                  </g>
                </svg>
                </div>
                <h5>Lorem ipsum<br>dolor sit amet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
              </div>
            </div>
              </div>
            </div>            
        </div>
    </section>
    
    <section class="sec4">
      <div class="container">
        <h6>Berita</h6>
        <h2>Baca Berita Terbaru Kami<br>Dalam Tropisianimal</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card text-center">
                  <img src="../img/harimau2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Apa Kabar Kebun Binatang Saat Wabah Covid-19?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center">
                  <img src="../img/burung.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Anugrah Dari Hutan<br> Indonesia</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center">
                  <img src="../img/badak.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">10 Hewan Herbivora Yang Berbahaya</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center">
                  <img src="../img/harimau.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">4 Penyakit yang Ditularkan Hewan ke Manusia</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center">
                  <img src="../img/terumbu.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Terumbu Karang: Pengertian, Jenis, Sebaran, dan Masalah</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-center">
                  <img src="../img/kancil.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Ternyata Tanduk Rusa Berasal dari Sel Kanker Tulang</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </section>

    <section class="sec5">
        <div class="container">
          <div class="galeri-title">
            <h6>Galeri</h6>
            <h2>Lihat Lebih Banyak Hewan Tropis<br>di Galeri Kami</h2>
          </div> 
          </div>
            <div class="d-flex bd-highlight galery-flex">
              <div class="flex-fill bd-highlight img-flex"><img src="../img/bunglon.png" class="model"></div>
              <div class="flex-fill bd-highlight img-flex"><img src="../img/kura.png" class="model2"></div>
              <div class="flex-fill bd-highlight img-flex"><img src="../img/orangutan.png" class="model3"></div>
              <div class="flex-fill bd-highlight img-flex"><img src="../img/kakatua.png" class="model4"></div>
            </div>
    </section>

    <footer class="row row-cols-5 foot-set">
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
  </body>
</html>