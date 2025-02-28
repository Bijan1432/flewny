<!-- ======================footer start=========================== -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-9 border-right">
                <img src="<?php echo $base ?>/icons/Lets-talk.svg" alt="" class="img-fluid mb-5 pe-md-5 pb-md-4">
                <div class="row pt-lg-5 border-top">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <h2>FLEWNY</h2>
                        <p>copyright@2024</p>
                    </div>
                    <div class="col-6 col-md-2 mb-4 mb-md-0">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-2 mb-4 mb-md-0">
                        <ul>
                            <li><a href="#">Behance</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="#">bijanmondal1432@gmail.com</a></li>
                            <li><a href="#">info@flewny.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3 d-flex">
                <img src="<?php echo $base ?>/icons/star.svg" alt="" class="img-fluid mt-0 mt-lg-auto my-auto mx-auto rotating">
            </div>
        </div>
    </div>
    <!-- <a href="https://sayanwebwork.site/" class="credit">Developed by sayanwebwork</a> -->
</footer>
<!-- ==================footers end============== -->

</div>
<!-- ===========outer box end================= -->

<!-- =====================modal start=================== -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $base ?>/img/modal.jpg" class="img-fluid" height="700" width="700" alt="Best Modern Website Design company" />
                </div>
                <div class="col-md-6">
                    <div class="modal-right">
                        <div class="txt">
                            <span style="color: rgb(12, 65, 255)"> Warning: </span> Flewny
                            may cause extreme awesomeness.
                        </div>
                        <form action="<?php echo $base ?>/mail.php" method="post">
                            <input type="text" name="name" id="" placeholder="Your Name*" required />
                            <input type="text" name="mobile" id="mobile" placeholder="Your Mobile Number*" required />
                            <input type="email" name="email" id="" placeholder="Your Email*" required />
                            <textarea type="text" name="message" id="" placeholder="Your Message Here">
                  </textarea>
                            <button type="submit" class="btfn btn-primary d-bflock">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =====================modal end=================== -->

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/bootstrap.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    AOS.init({
        duration: 1200 // Increase the duration (in milliseconds)
    });
    // Initialize Swiper
    var swiper = new Swiper(".reviewSwiper", {
        spaceBetween: 10,
        centerslides: true,
        slidesPerView: 1.1,
        initialSlide: 0,
        // loop: true,
        navigation: {
            nextEl: '.reviewBtn-next',
            prevEl: '.reviewBtn-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 3
            },
            900: {
                slidesPerView: 3.5
            },
            1200: {
                slidesPerView: 3.5
            }
        }
    });
    // Initialize Swiper
    var weDoSwiper = new Swiper(".weDoSwiper", {
        spaceBetween: 10,
        slidesPerView: 1.1,
        initialSlide: 1,
        centeredSlides: true,
        // loop: true,
        navigation: {
            nextEl: '.weDoBtn-next',
            prevEl: '.weDoBtn-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1
            },
            900: {
                slidesPerView: 1.5
            },
            1200: {
                spaceBetween: 60,
                slidesPerView: 1.8
            }
        }
    });
    // Initialize Swiper
    var weDoSwiper = new Swiper(".proSwiper", {
        spaceBetween: 10,
        centerslides: true,
        slidesPerView: 1.1,
        initialSlide: 0,
        // loop: true,
        navigation: {
            nextEl: '.reviewBtn-next',
            prevEl: '.reviewBtn-prev',
        },
        breakpoints: {
            450: {
                slidesPerView: 1.3
            },
            576: {
                slidesPerView: 1.5
            },
            768: {
                slidesPerView: 2
            },
            900: {
                slidesPerView: 2.1
            },
            1100: {
                slidesPerView: 2.8
            },
            1200: {
                slidesPerView: 3.5
            }
        }
    });
</script>
<script src="js/custom.js"></script>
</body>

</html>