<?php
require_once "./admin/functions/db.php";
include("./include/header.php")
?>

<!-- ===================hero banner start============== -->
<section class="hero-banner" id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hero-banner__block">
          <div class="position-relative">
            <h1 class="hero-banner__heading" data-aos="fade-right" data-aos-delay="100">
              Crafting Seamless
              <span class="d-inline-flex">
                <img src="./img/heading-img1.png" alt="" class="hero-banner__heading-img1">
              </span>
              <span class="d-none d-md-inline-flex">
                <img src="./img/heading-img2.png" alt="" class="hero-banner__heading-img2">
              </span>
              <span class="blue">Experiences</span> for The <span class="d-inline-flex d-md-none"><img src="./img/heading-img2.png" alt="" class="hero-banner__heading-img2"></span><span class="blue">Digital</span> World
            </h1>
            <p class="small-text pt-1 ">Custom Software Development & Data-Driven Digital Marketing to Elevate Your Brand. Tailored solutions & targeted strategies for growth.</p>

          </div>

          <div class="d-flex gap-2 gap-md-5 flex-column justify-content-center align-items-center mt-3 mt-md-5 pt-2 pt-md-4">
            <button class="primary-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
            <a href="#" class="scroll-btn">Scroll<span><img src="./icons/scroll-btn-icon.svg" alt=""></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===================hero banner end============== -->

<!-- =================== video start============== -->
<section class="video-section" id="videoSection">
  <div class="container">
    <div class="video-box">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/h6MntF4OxCk?si=tHmxZCl3AnUmiYsU&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen data-aos="fade-in" data-aos-delay="450"></iframe>
    </div>
  </div>
</section>
<!-- =================== video end============== -->

<!-- ===================about start============== -->
<section class="about-us" id="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 d-flex justify-content-center">
        <img src="./img/about-img.png" alt="" class="img-fluid">
      </div>
      <div class="col-xl-7">
        <div class="row mb-2 mb-md-4">
          <div class="col-md-6 d-flex align-items-center overflow-hidden mt-3 mb-4 mb-md-0 mt-md-0">
            <h2><span>
                <marquee behavior="" direction="">About The Company</marquee>
              </span></h2>
          </div>
          <div class="col-md-6">
            <p class="about-us__text">Crafting Digital Success: We specialize in creating custom software, stunning websites, seamless apps, and powerful SEO strategies that drive results. Our expertise in digital marketing and targeted ads ensures your brand stands out in a crowded marketplace. Let us help you elevate your brand, boost visibility, and achieve long-term growth with our comprehensive solutions tailored to your unique business needs.</p>
          </div>
        </div>
        <div class="about-us__counter-block">
          <div class="about-us__counter">
            <h4 class="about-us__counter-number">68%</h4>
            <p class="about-us__counter-txt">Business Growth</p>
          </div>
          <div class="about-us__counter">
            <h4 class="about-us__counter-number">10k+</h4>
            <p class="about-us__counter-txt">Interested People</p>
          </div>
          <div class="about-us__counter">
            <h4 class="about-us__counter-number">20+</h4>
            <p class="about-us__counter-txt">Technology Stack</p>
          </div>
          <div class="about-us__counter">
            <h4 class="about-us__counter-number">4.8+</h4>
            <p class="about-us__counter-txt">Top Rated in Google</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===================about end============== -->

<!-- ========================our servives====================== -->
<section class="our-service" id="services">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2 data-aos="fade-up" data-aos-delay="30">
          Our <span>Services</span>
        </h2>
        <ul class="our-service-list">
          <li class="our-service__item active"><span class="our-service__item-number">01</span> Google Ads <span class="ms-auto">
              <div class="arrow-btn"><img src="./icons/btn-arrow.svg" alt=""></div>
            </span></li>
          <li class="our-service__item"><span class="our-service__item-number">02</span> Web Development <span class="ms-auto">
              <div class="arrow-btn"><img src="./icons/btn-arrow.svg" alt=""></div>
            </span></li>
          <li class="our-service__item"><span class="our-service__item-number">03</span> CRM <span class="ms-auto">
              <div class="arrow-btn"><img src="./icons/btn-arrow.svg" alt=""></div>
            </span></li>
          <li class="our-service__item"><span class="our-service__item-number">04</span> SEO <span class="ms-auto">
              <div class="arrow-btn"><img src="./icons/btn-arrow.svg" alt=""></div>
            </span></li>
          <li class="our-service__item"><span class="our-service__item-number">05</span> ERP <span class="ms-auto">
              <div class="arrow-btn"><img src="./icons/btn-arrow.svg" alt=""></div>
            </span></li>
        </ul>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <div class="our-service__card ms-lg-auto mx-auto mx-lg-0 ">
          <img src="./img/service-card-img1.webp" alt="" class="our-service__card-img img-fluid">
          <h3 class="our-service__card-title">Expertly crafted ads for measurable growth</h3>
          <div class="our-service__card-txt">
            <p><b>At Flewny</b>, we offer a comprehensive suite of services designed to drive your business forward in the digital age. Our expertise spans across multiple domains to cater to all your digital needs.</p>
            <button class="primary-btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>
<!-- ========================our servives====================== -->

<!-- ===================achieve list start============== -->
<section class="container d-flex justify-content-center my-0 my-md-5">
  <div class="cta-section d-flex flex-column align-items-center">
    <h2>Unleashing Solutions, Mastering Challenges — Our Goal: Adding Value to Your Business!</h2>
    <button class="primary-btn primary-btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Explore Now<span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
  </div>
</section>
<!-- ===================achieve list end============== -->

<!-- ===================we-do section start============== -->
<section class="we-do-section">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end">
      <h2>How we do it, <br> Strategy</h2>
      <div class="d-flex review-section__btns">
        <button class="swiper-btn-prev weDoBtn-prev"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
        <button class="swiper-btn-next weDoBtn-next"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
      </div>
    </div>
  </div>
  <div class="container-fluid g-0 mt-3 mt-md-5">
    <div class="swiper mt-3 mt-md-5s weDoSwiper">
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="we-do-card">
            <div class="we-do-card__left-col">
              <h3 class="we-do-card__title">Phase One Delivery</h3>
              <p class="we-do-card__number">01</p>
              <p class="we-do-card__content">At the forefront of our approach is a dedication to showcasing results swiftly. Upon reaching this stage, we kindly request the release of 20% of the full payment to proceed further in delivering excellence.</p>
            </div>
            <div class="we-do-card__right-col">
              <img src="./img/we-do-img1.png" alt="" class="we-do-card__img">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="we-do-card">
            <div class="we-do-card__left-col">
              <h3 class="we-do-card__title">Phase One Delivery</h3>
              <p class="we-do-card__number">02</p>
              <p class="we-do-card__content">At the forefront of our approach is a dedication to showcasing results swiftly. Upon reaching this stage, we kindly request the release of 20% of the full payment to proceed further in delivering excellence.</p>
            </div>
            <div class="we-do-card__right-col">
              <img src="./img/we-do-img1.png" alt="" class="we-do-card__img">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="we-do-card">
            <div class="we-do-card__left-col">
              <h3 class="we-do-card__title">Phase One Delivery</h3>
              <p class="we-do-card__number">03</p>
              <p class="we-do-card__content">At the forefront of our approach is a dedication to showcasing results swiftly. Upon reaching this stage, we kindly request the release of 20% of the full payment to proceed further in delivering excellence.</p>
            </div>
            <div class="we-do-card__right-col">
              <img src="./img/we-do-img1.png" alt="" class="we-do-card__img">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ===================we-do section end============== -->

<!-- ===================blog section start============== -->
<section class="blog-section-bg">
  <div class="container g-0">
    <div class="blog-section">
      <div class="d-flex justify-content-between align-items-center mb-3 mb-md-5 mt-2">
        <h2>Recent blogs</h2>
        <div class="d-flex">
          <a href="./blog/" class="blog-section__load-more-btn d-none d-md-block">Load More</a>
        </div>
      </div>
      <div class="blog-section__wrapper">
        <?php
        $sql_latest = 'SELECT title, category, blog_image, blog_image_alt, slug, published_date, published_status  FROM blogs WHERE published_status = 1 ORDER BY published_date DESC LIMIT 3';
        $query_latest = mysqli_query($connection, $sql_latest);

        if (mysqli_num_rows($query_latest) == 0) {
          echo "<b style='color:brown;'>Sorry there are no posts Yet :( We will be uploading new content soon! </b> ";
        } else {

          while ($row = mysqli_fetch_array($query_latest)) {
            //publish date
            $date = explode("-", $row['published_date']);
            $monthNum  = $date[1];
            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
            $monthName = $dateObj->format('F'); // Month name
        ?>
            <div class="blog-card">
              <img src="./uploads/blog/<?php echo $row['blog_image'] ?>" alt="<?php echo $row['blog_image_alt'] ?>" class="blog-card__img">
              <div class="d-flex gap-2">
                <div class="blog-card__category"><?php echo $row['category'] ?></div>
                <div class="blog-card__date">
                  <span><img src="./icons/calendar.svg" alt=""></span><?php echo substr($monthName, 0, 3) . " " . $date[2] . ", " . $date[0]  ?>
                </div>
              </div>
              <h3 class="blog-card__title">
                <!-- <a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="" target="_blank"> -->
                <?php echo $row['title'] ?>
                <!-- </a> -->
              </h3>
              <div class="d-flex mt-auto">
                <a href="<?php echo '/flewny/blog/' . $row['slug'] ?>" class="blog-btn" target="_blank"><span class="blog-btn-txt">Read More </span><span class="blog-btn-icon"><img src="./icons/btn-arrow.svg" alt=""></span></a>
              </div>
              <div class="blog-card__cutout"></div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- ===================blog section end============== -->

<!-- ===================review section start============== -->
<section class="review-section">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end">
      <h2>Real Stories, <br>Real <span>Results</span></h2>
      <div class="d-flex review-section__btns">
        <button class="swiper-btn-prev reviewBtn-prev"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
        <button class="swiper-btn-next reviewBtn-next"><img src="./icons/primary-btn-arrow.svg" alt=""></button>
      </div>
    </div>
    <div class="swiper mt-3 mt-md-5s reviewSwiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="review-card active">
            <p class="review-card-message ">
              Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
            </p>
            <p class="review-card-user">– Samantha R., Marketing Manager</p>
            <p class="review-card-number">01</p>
            <div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="review-card">
            <p class="review-card-message">
              Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
            </p>
            <p class="review-card-user">– Samantha R., Marketing Manager</p>
            <p class="review-card-number">02</p>
            <div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="review-card">
            <p class="review-card-message">
              Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
            </p>
            <p class="review-card-user">– Samantha R., Marketing Manager</p>
            <p class="review-card-number">03</p>
            <div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="review-card">
            <p class="review-card-message">
              Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
            </p>
            <p class="review-card-user">– Samantha R., Marketing Manager</p>
            <p class="review-card-number">04</p>
            <div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="review-card">
            <p class="review-card-message">
              Working with Flewny has been a complete game-changer for our business. Their expertise in web development and SEO not only boosted our online presence but also significantly improved our customer engagement. They took the time to understand our goals and delivered solutions that exceeded our expectations. We couldn’t be happier with the results.
            </p>
            <p class="review-card-user">– Samantha R., Marketing Manager</p>
            <p class="review-card-number">05</p>
            <div class="review-card__cutout"><img src="./icons/quote.svg" alt="" class="img-fluid"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ===================review section end============== -->

<!-- ===================people section start============== -->
<section class="people-section-bg">
  <div class="container g-0">
    <div class="people-section">
      <div class="mb-3 mb-md-5 mt-2">
        <h2>The People <br>
          Driving <span>Our Vision</span></h2>
      </div>
      <div class="people-section__wrapper">

        <div class="people-card">
          <div class="people-card__img-box">
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__img-wrapper">
              <div class="people-card__img-wrapper__cutout"></div>
              <div class="people-card__img-wrapper__cutout"></div>
              <img src="./img/people-card1.png" alt="" class="people-card__img">
            </div>
          </div>
          <div class="people-card__body">
            <h3 class="people-card__name">Bijan Mondal</h3>
            <h5 class="people-card__designation">Chief Executive Officer</h5>
            <p class="people-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
          </div>
        </div>

        <div class="people-card">
          <div class="people-card__img-box">
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__img-wrapper">
              <div class="people-card__img-wrapper__cutout"></div>
              <div class="people-card__img-wrapper__cutout"></div>
              <img src="./img/people-card2.png" alt="" class="people-card__img">
            </div>
          </div>
          <div class="people-card__body">
            <h3 class="people-card__name">Bijan Mondal</h3>
            <h5 class="people-card__designation">Chief Executive Officer</h5>
            <p class="people-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
          </div>
        </div>

        <div class="people-card">
          <div class="people-card__img-box">
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__line"></div>
            <div class="people-card__img-wrapper">
              <div class="people-card__img-wrapper__cutout"></div>
              <div class="people-card__img-wrapper__cutout"></div>
              <img src="./img/people-card3.png" alt="" class="people-card__img">
            </div>
          </div>
          <div class="people-card__body">
            <h3 class="people-card__name">Bijan Mondal</h3>
            <h5 class="people-card__designation">Chief Executive Officer</h5>
            <p class="people-card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- ===================people section end============== -->

<!-- ===================trusted partners section start============== -->
<section class="trusted-partners-section">
  <div class="trusted-partners container">
    <div class="row">
      <div class="col-md-6 d-flex flex-column">
        <h2 class="trusted-partners__heading">Trusted Partnerships, Shared Goals</h2>
        <p class="trusted-partners__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas risus magna, vitae aliquam neque ultricies eu. Vestibulum eget felis elementum.</p>
        <div class="d-flex mt-auto pt-4">
          <div class="trusted-partners__number-wrapper">
            <p class="trusted-partners__number">50+</p>
            <p class="trusted-partners__number-text">Interested Clients</p>
          </div>
          <img src="./img/green-circle.png" alt="" class="trusted-partners__number-wheel rotating">
        </div>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        <div class="trusted-partners__container">
        </div>
      </div>
    </div>
  </div>
  <div class="trusted-partners">
  </div>
</section>
<!-- ===================trusted partners section end============== -->

<!-- =================== faq section start============== -->
<section class="faq-section-bg">
  <div class="faq-section container">
    <div class="row">
      <div class="col-12">
        <h2>FAQs: Quick <span>Answers</span><br> for You</h2>
        <div class="accordion mt-4 mt-md-5" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Q: What services does your company offer?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Q: What services does your company offer?

              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                A: We specialize in web development, UI/UX design, and CRM solutions tailored to meet diverse business needs.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Q: What services does your company offer?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Q: What services does your company offer?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Q: What services does your company offer?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =================== faq section end ============== -->

<!-- =================== connection section start============== -->

<section class="mb-3 mb-md-5">
  <div class="container connection-section g-0">
    <div class="connection-block">
      <h2>MAke a Connection</h2>

      <div class="row mb-3 mb-md-5">
        <div class="connection-block__card-wrapper ">
          <div class="connection-block__card">
            <h3 class="connection-block__card-title">New Business</h3>
            <div class="connection-block__card-content">
              <h4 class="connection-block__card-name">Bijan Mondal <span>(Chief Executive Officer)</span></h4>
              <a href="mailto:bijanmondal1432@gmail.com" class="connection-block__card-link"><span><img src="./icons/envelop.svg" alt=""></span>bijanmondal1432@gmail.com</a>
            </div>
          </div>
          <div class="connection-block__card">
            <h3 class="connection-block__card-title">New Business</h3>
            <div class="connection-block__card-content">
              <h4 class="connection-block__card-name">Benjamin Frank <span>(Chief Operating Officer)</span></h4>
              <a href="mailto:info@flewny.com" class="connection-block__card-link"><span><img src="./icons/envelop.svg" alt=""></span>info@flewny.com</a>
            </div>
          </div>
        </div>

      </div>

      <form class="row connection-block__form ">
        <div class="col-lg-6 mb-3 mb-md-0">
          <h3>Let’s Connect</h3>
          <div class="d-flex gap-3 mt-1 mt-md-3">
            <input type="checkbox" name="" id="Confirmation">
            <label for="Confirmation">Yes, I would like to receive e-mail communications from Flewny. I can unsubscribe at any time.</label>
          </div>
        </div>
        <div class="col-lg-6 px-2 px-lg-4">
          <input type="text" name="" id="" placeholder="Your Email">
          <button type="submit">Submit <span><img src="./icons/primary-btn-arrow.svg" alt=""></span></button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- =================== connection section  end============== -->


<?php include("./include/footer.php") ?>