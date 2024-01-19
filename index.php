  <!DOCTYPE html>

  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>HOSTEL</title>
      <link rel="stylesheet" href="css/style.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <!-- JQ -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      <!-- FONT -->
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  </head>

  <body>




      <!-- Username: admin
       Password: Test@12345 -->

      <!-- *****************  Header start   ******************** -->

      <header class="text-gray-400 bg-gray-900 body-font">
          <div class="container w-100   mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
              <nav class="flex lg:w-10/2 mb-1 flex-wrap items-center text-base md:ml-auto">
                  <a class="mr-4 hover:text-white" href="#home">Home</a>
                  <a class="mr-4 hover:text-white" href="loginsystem/index.php">Book-Hostel</a>
                  <!-- <a class="mr-4 hover:text-white" href="#contact-us">Contact-us</a> -->
                  <!-- <a class="mr-4 hover:text-white" href="#Services">Services</a> -->
                  <!-- <a class="mr-4 hover:text-white" href="admin.php">Admin</a> -->
                  <a class="mr-4 hover:text-white" href="about.php">About-us</a>
              </nav>
              <a class="flex order-first lg:order-none lg:w-10/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-2 md:ml-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 mt-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                      <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                  </svg>
                  <span class="ml-3 text-xl xl:block lg:hidden mt-2 ">MGM's Hostel</span>
              </a>

              </button>
          </div>
          </div>
      </header>
      <!-- *****************     Header end    ******************** -->


      <!-- *****************      Carousel start     ******************** -->



      <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
          <!-- *******for autoplay images  ******* data-bs-ride="carousel"******** -->
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
              <div class="carousel-item active">
                  <img src="images/mgm.webp" class="media_q d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block ">
                      <h3 class="text-3xl"><b>Hostel</b></h3>
                      <p>A hostel is a lower-priced in of sorts that offers basic, shared accommodations.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="images/bed1.jpg" class="media_q d-block w-100" alt="...">
                  <style>
                      .media_q {
                          height: 600px;
                      }

                      .back_image {
                          background-image: url(images/ac_rooms1.jpg);
                          height: 225px;
                          color: white;

                      }

                      .back_image1 {
                          background-image: url(images/common_room1.jpg);
                          height: 225px;
                          color: white;

                      }

                      .back_image2 {
                          background-image: url(images/seperate-block1.jpg);
                          height: 225px;
                          color: white;

                      }

                      .back_image3 {
                          background-image: url(images/security.jpg);
                          height: 225px;
                          color: white;

                      }

                      .back_image4 {
                          background-image: url(images/medical.jpg);
                          height: 225px;
                          color: white;

                      }

                      .back_image5 {
                          background-image: url(images/healthy-food.jpg);
                          height: 225px;
                          color: white;

                      }


                      @media screen and (max-width:720px) {
                          .media_q {
                              height: 251px;
                          }
                      }
                  </style>
                  <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-3xl"><b>Bedrooms</b></h5>
                      <p>We provide sharing room seperate beds .</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="images/food.jpg" class="media_q d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <h5 class="text-3xl"><b>Food</b></h5>
                      <p>Healthy food is the need of young generation .</p>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>

      <!-- *****************    Carousel end    ******************** -->
      <hr>
      <!-- *****************    Feature Section Start    ******************** -->
      <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-wrap w-full mb-20 flex-col items-center
                text-center">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2
                  text-gray-900"><span>Hostel Facilities</span></h1>
                  <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Our hostel Provides best Features than any other hostels in nanded, mgms features are very good in your budget.</p>
              </div>
              <div class="flex flex-wrap -m-4">
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image">

                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                              </svg>
                          </div>

                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"><span>Ac Rooms</span></h2>
                          <p class="leading-relaxed text-base"> The student who wants ac rooms according to their budget and requirment we provide them ac room facilities... </p>
                      </div>
                  </div>
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image1">
                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <circle cx="6" cy="6" r="3"></circle>
                                  <circle cx="6" cy="18" r="3"></circle>
                                  <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12
                          12"></path>
                              </svg>
                          </div>
                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"><span> Common Rooms</span></h2>
                          <p class="leading-relaxed text-base"> the student which have low budgent and poor family we provide them common rooms according to their Result</p>
                      </div>
                  </div>
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image2">
                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                  <circle cx="12" cy="7" r="4"></circle>
                              </svg>
                          </div>
                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"> <span>Seperate Blocks</span></h2>
                          <p class="leading-relaxed text-base">Seperate blocks for Seperate year student which is easy for interacting with each other....</p>
                      </div>
                  </div>
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image3">
                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                              </svg>

                          </div>
                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"> <span>Security</span></h2>
                          <p class="leading-relaxed text-base"> Our hostel provides best security in hostel each an every corner we fixed an CC-tv cameras and on the gate security guards .</p>
                      </div>
                  </div>
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image4">
                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                              </svg>
                          </div>
                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"> <span>Medical</span></h2>
                          <p class="leading-relaxed text-base">Our hostel provides emergency medical services.</p>
                      </div>
                  </div>
                  <div class="xl:w-1/3 md:w-1/2 p-4">
                      <div class="border border-gray-200 p-6 rounded-lg back_image5">
                          <div class="w-10 h-10 inline-flex items-center
                      justify-center rounded-full bg-indigo-100 text-indigo-500
                      mb-4">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                  <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4
                                1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                              </svg>
                          </div>
                          <h2 class="text-lg text-gray-900 font-medium title-font
                      mb-2"> <span>Healthy food</span></h2>
                          <p class="leading-relaxed text-base">Our hostel provides Healthy Meal on fixed time. we focus on student growth </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- *****************    Feature Section Start   ******************** -->
      <hr>
      <!-- *****************    Contact Section Start    ******************** -->
      <section class="text-gray-600 body-font relative ">
          <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-12">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4
                  text-gray-900"><span> Contact Us</span></h1>
                  <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Just send us your questions or concerns by starting a new case and we will give you the help you need..</p>
              </div>
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                  <div class="flex flex-wrap -m-2">
                      <div class="p-2 w-1/2">
                          <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                              <input type="text" id="name" name="name" class="w-full
                        bg-gray-100 bg-opacity-50 rounded border border-gray-300
                        focus:border-indigo-500 focus:bg-white focus:ring-2
                        focus:ring-indigo-200 text-base outline-none
                        text-gray-700 py-1 px-3 leading-8 transition-colors
                        duration-200 ease-in-out">
                          </div>
                      </div>
                      <div class="p-2 w-1/2">
                          <div class="relative">
                              <label for="email" class="leading-7 text-sm
                        text-gray-600">Email</label>
                              <input type="email" id="email" name="email" class="w-full
                        bg-gray-100 bg-opacity-50 rounded border border-gray-300
                        focus:border-indigo-500 focus:bg-white focus:ring-2
                        focus:ring-indigo-200 text-base outline-none
                        text-gray-700 py-1 px-3 leading-8 transition-colors
                        duration-200 ease-in-out">
                          </div>
                      </div>
                      <div class="p-2 w-full">
                          <div class="relative">
                              <label for="message" class="leading-7 text-sm
                        text-gray-600">Message</label>
                              <textarea id="message" name="message" class="w-full
                        bg-gray-100 bg-opacity-50 rounded border border-gray-300
                        focus:border-indigo-500 focus:bg-white focus:ring-2
                        focus:ring-indigo-200 h-32 text-base outline-none
                        text-gray-700 py-1 px-3 resize-none leading-6
                        transition-colors duration-200 ease-in-out"></textarea>
                          </div>
                      </div>
                      <div class="p-2 w-full">
                          <button class="flex mx-auto text-white bg-indigo-500
                      border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600
                      rounded text-lg " type="submit">Submit</button>
                      </div>
                      <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200
                    text-center">
                          <a class="text-indigo-500">mgm0507@email.com</a>
                          <p class="leading-normal my-5">Namaskar Chowk
                              <br>Nanded Maharashtra 431602
                          </p>
                          <span class="inline-flex">
                              <a class="text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5
                          h-5" viewBox="0 0 24 24">
                                      <path d="M18 2h-3a5 5 0 00-5
                            5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                  </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5
                          h-5" viewBox="0 0 24 24">
                                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0
                            00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64
                            11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0
                            00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                  </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116
                            11.37zm1.5-4.87h.01"></path>
                                  </svg>
                              </a>
                              <a class="ml-4 text-gray-500">
                                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5
                          h-5" viewBox="0 0 24 24">
                                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0
                            01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38
                            8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0
                            013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                  </svg>
                              </a>
                          </span>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- *****************    Contact Section End   ******************** -->
      <hr>
      <hr>

      <!-- *****************    Footer Section Start  ******************** -->

      <div>
          <div class="bg-gray-700 p-3 space-y-10 md:grid grid-cols-2 md:-mt-6 lg:grid-cols-4">
              <div class="w-1/2 md:ml-24 md:mt-9 md:w-3/4">
                  <h1 class="text-orange-400 text-xl font-medium">MGM's hostel</h1> <br />
                  <p class="text-gray-300/80 text-base hover:text-yellow-300 cursor-none"> Namaskar Chowk, Nanded <br /> Maharashtra, MH 431602 <br /> India </p> <br />
                  <p class="text-gray-200/80 text-base hover:text-yellow-300 cursor-pointer"> <strong class="tracking-wide text-orange-400 font-normal">Phone:</strong> +91 1234567890 </p>
                  <p class="text-gray-200/80 text-base hover:text-yellow-300 cursor-pointer"> <strong class="tracking-wide text-orange-400 font-normal">Email:</strong>mgm0507@gmail.com </p>
              </div>
              <div class="leading-9 md:w-2/4 md:order-3 md:ml-24">
                  <h1 class="text-orange-400 text-xl font-medium tracking-[0.030rem]"> Useful Links </h1>
                  <ul class="mt-2 text-gray-300/80">
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300">
                              Home</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="about.php" class="hover:text-yellow-300">
                              About Us</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300">
                              Services</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300">
                              Terms of service</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300">
                              Privacy policy</a> </li>
                  </ul>
              </div>
              <div class="leading-9 md:w-3/4 md:order-4">
                  <h1 class="text-orange-400 text-xl font-medium tracking-[0.030rem]"> Our Services </h1>
                  <ul class="mt-2 text-gray-300/80">
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300"> AC
                              Rooms</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300"> Non AC
                              Rooms</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300"> Special
                              bed</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300"> Special
                              Toilet</a> </li>
                      <li> <i class="fa fa-chevron-right text-orange-400"></i> <a href="#" class="hover:text-yellow-300"> Good
                              Food</a> </li>
                  </ul>
              </div>
              <div class="md:order-2 lg:order-last">
                  <h1 class="text-orange-400 text-xl font-medium tracking-[0.030rem]"> About MGM's Hostel </h1> <br />
                  <p class="text-gray-300/80 w-3/5 leading-7 mb-5 md:w-3/4"> A hostel is a lower-priced inn of sorts that offers basic, shared accommodations.</p>
                
              </div>
          </div>
          <div class="bg-gray-900 p-3 flex flex-col text-center pt-5 space-y-8 md:flex-row md:justify-between md:space-y-0">
              <div class="flex mx-3 justify-between space-x-20 md:flex-row text-gray-200 md:space-x-28 md:ml-20 lg:ml-24 lg:space-x-[13rem] xl:space-x-72 xl:ml-24">
                  <p>@ Copyright <strong>MGM's hostel.</strong>All Rights Reserved</p>
                  <p>Designed by <span class="text-orange-400">Kamlesh Chavan</span></p>
              </div>
              <div class="text-white pb-4 text-center text-xl space-x-2 md:w-2/4 md:pb-0 md:pl-2 md:space-x-1 lg:pl-[171px] lg:space-x-2 xl:pl-44">
                  <a href="#" class="w-8 h-8 bg-orange-500 hover:text-orange-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i class="fa fa-twitter"></i></a> <a href="#" class="w-8 h-8 bg-orange-500 hover:text-orange-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i class="fa fa-instagram"></i></a> <a href="#" class="w-8 h-8 bg-orange-500 hover:text-orange-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i class="fa fa-facebook"></i></a> <a href="#" class="w-8 h-8 bg-orange-500 hover:text-orange-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i class="fa fa-google"></i></a> <a href="#" class="w-8 h-8 bg-orange-500 hover:text-orange-500 inline-block rounded-full pt-[3px] hover:bg-gray-200"><i class="fa fa-linkedin"></i></a>
              </div>
          </div>
      </div>

      <!-- *****************    Footer Section End  ******************** -->





      <!-- Tailwind cdn links  -->
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
  </body>

  </html>