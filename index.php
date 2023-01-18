<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratan Vilas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="public/styles/main.css">
    <style>
       .availability-form
       {
        margin-top: -50px;
        z-index: 2;
        position:relative;
       }
       @media screen and (max-width: 575px) {
        .availability-form
          {
            margin-top: 25px;
            padding: 0 35px;
          }
       }

    </style>
</head>
<body class="bg-light">
    
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">Ratan Vilas</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href='index.php'>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none  me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#LoginModel">
          Log In
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registerModel">
          Register
        </button>
      </div>
    </div>
  </div>
</nav>
      <!-- Login -->
     <div class="modal fade" id="LoginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                    <h5 class="modal-title align-text-center d-flex">
                    <i class="bi bi-person-badge fs-3 me-2"></i>User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                              <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                              </div>
                              <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                              </div>
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                <button type="submit" class="btn btn-dark shadow-none">Login</button>
                                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password </a>
                              </div>
                    </div>
              </form>
            </div>
        </div>
     </div>
     <!-- Register -->
      <div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                    <h5 class="modal-title align-text-center d-flex">
                    <i class="bi bi-person-badge fs-3 me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                      Note: Your Details Must Match With Your ID (Aadhar Crd, Passport, Driving License, etc...)
                      That will be require while check-in. 
                    </span>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Photo</label>
                                <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Pin Code</label>
                                <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none">
                        </div>
                      </div>
                    </div>
                    <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                    </div>
              </form>
            </div>
        </div>
      </div>
 <!-- slider -->

      <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_15372.png" class="w-400 d-block">
            </div>
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_40905.png" class="w-400 d-block">
            </div>
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_55677.png" class="w-400 d-block">
            </div>
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_62045.png" class="w-400 d-block">
            </div>
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_93127.png" class="w-400 d-block">
            </div>
            <div class="swiper-slide">
              <img src="public/src/images/carousel/IMG_99736.png" class="w-100 d-block">
            </div>
          </div>
        </div>
      </div>
      <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">
              Check Booking Availability
            </h5>
            <form>
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3"> 
                      <label class="form-label" style="font-weight: 500;">Check-In</label>
                      <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3"> 
                      <label class="form-label" style="font-weight: 500;">Check-Out</label>
                      <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Adult</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 mb-3 ">
                  <label class="form-label" style="font-weight: 500;">Children</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col 1 mb-lg-3 mt-2">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Our Rooms -->
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>


      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width:360px; margin: auto;">
              <img src="public/src/images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room</h5>
                <h6 class="mb-4">₹600 Per Night</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge bg-light text-dark text-wrap">
                     1 Room
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Balconay
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                </div>

                <div class="facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Free WiFi
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Ratings</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
              </div>
            </div>


          </div>

          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width:360px; margin: auto;">
              <img src="public/src/images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room</h5>
                <h6 class="mb-4">₹600 Per Night</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge bg-light text-dark text-wrap">
                     1 Room
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Balconay
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                </div>

                <div class="facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Free WiFi
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Ratings</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width:360px; margin: auto;">
              <img src="public/src/images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>Simple Room</h5>
                <h6 class="mb-4">₹600 Per Night</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge bg-light text-dark text-wrap">
                     1 Room
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    1 Balconay
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    2 Sofa
                  </span>
                </div>

                <div class="facilities mb-4">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge bg-light text-dark text-wrap">
                    Room Heater
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Telivision
                  </span>
                  <span class="badge bg-light text-dark text-wrap">
                    Free WiFi
                  </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Ratings</h6>
                  <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
                </div>
                <div class="d-flex justify-content-evenly mb-">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>> </a>
          </div>
        </div>
      </div>

      <!-- Our Facilities -->
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>


      <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="public/src/images/facilities/IMG_41622.svg" width="80px"> 
            <h5 mt-3>T.V</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="public/src/images/facilities/IMG_43553.svg" width="80px"> 
            <h5 mt-3>Wi-Fi</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="public/src/images/facilities/IMG_47816.svg" width="80px"> 
            <h5 mt-3>Massage</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="public/src/images/facilities/IMG_49949.svg" width="80px"> 
            <h5 mt-3>AC</h5>
          </div>
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="public/src/images/facilities/IMG_96423.svg" width="80px"> 
            <h5 mt-3>Heater</h5>
          </div>
          <div class="col-lg-12 text-center g-lg-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>> </a>
          </div>
        </div>
      </div>
        <!-- Testimonials -->
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

      <div class="container mt-5">
        <!-- Swiper -->
    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="public/src/images/about/staff.svg" width="60px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Aut quae laborum deleniti pariatur molestias obcaecati 
            maiores sunt dolores rem quidem.
          </p>
          <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="public/src/images/about/staff.svg" width="60px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Aut quae laborum deleniti pariatur molestias obcaecati
            maiores sunt dolores rem quidem.
          </p>
          <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="public/src/images/about/staff.svg" width="60px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Aut quae laborum deleniti pariatur molestias obcaecati 
            maiores sunt dolores rem quidem.
          </p>
          <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <img src="public/src/images/about/staff.svg" width="60px">
            <h6 class="m-0 ms-2">Random User 1</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Aut quae laborum deleniti pariatur molestias obcaecati 
            maiores sunt dolores rem quidem.
          </p>
          <div class="rating">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
    </div>
      </div>

      <!-- Reach US -->
      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach US</h2>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 p-4 m-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="450"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14310.491392848957!2d73.030269!3d26.2739013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3abda651e07f78c6!2sHOTEL%20RATAN%20VILAS!5e0!3m2!1sen!2sin!4v1674028550035!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5>Contact US</h5>
              <i class="bi bi-telephone-fill"></i><a href="tel: +8795xxxxxx0" class="d-inline-block mb-2 text-decoration-none text-dark">+8795xxxxxx0</a><br>
              <i class="bi bi-telephone-fill"></i><a href="tel: +8795xxxxxx0" class="d-inline-block mb-2 text-decoration-none text-dark">+8795xxxxxx0</a>
            </div>
          </div>
        </div>
      </div>

<br>
<br>
<br>
<br>
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }
      });
      var swiper = new Swiper(".swiper-testimonial", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        breakpoints: {
          320: {
            slidesPerView:1,
          },
          640: {
            slidesPerView:1,
          },
          768: {
            slidesPerView:2,
          },
          1024: {
            slidesPerView:3,
          }
        }
      });
    </script>
</body>
</html>