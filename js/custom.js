$(document).ready(function () {
  $('.test-car').slick({
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  })
  $('.blog-car').slick({
    slidesToShow: 2,
    dots: true,
    slidesToScroll: 1,
    infinite: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  })
})

$(document).ready(function () {
  $('.hamburger').click(function () {
    $(this).toggleClass('is-active')
  })
})

document.getElementById('menuopen').addEventListener('click', () => {
  document.getElementById('menu').classList.remove('d-none')
})
document.getElementById('menuclose').addEventListener('click', () => {
  document.getElementById('menu').classList.add('d-none')
})

//slick slider for serivce =================
$('.slider-service').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 1,
  lazyLoad: 'ondemand',
  autoplay: true,
  arrows: false,
  autoplaySpeed: 2000,
})

//our serivce -- home page =================

let serviceItemsContent = [
  {
    title: 'Web Development',
    text: 'We build websites that are fast, secure, and easy to manage. We develop websites that are responsive and mobile-friendly.',
  },
  {
    title: 'Mobile App Development',
    text: 'We build mobile apps that are fast, secure, and easy to manage. We develop mobile apps that are responsive and mobile-friendly.',
  },
  {
    title: 'Digital Marketing',
    text: 'We build digital marketing that are fast, secure, and easy to manage. We develop digital marketing that are responsive and mobile-friendly.',
  },
  {
    title: 'SEO Optimization',
    text: 'We build SEO optimization that are fast, secure, and easy to manage. We develop SEO optimization that are responsive and mobile-friendly.',
  },
  {
    title: 'Graphic Design',
    text: 'We build graphic design that are fast, secure, and easy to manage. We develop graphic design that are responsive and mobile-friendly.',
  },
]

document.querySelectorAll('.our-service__item').forEach((item, index) => {
  item.addEventListener('mouseover', () => {
    document.querySelectorAll('.our-service__item').forEach((innerItem) => {
      innerItem.classList.remove('active')
    })
    item.classList.add('active')
    //
    document.querySelector('.our-service__card-img').src =
      './img/service-card-img' + (index + 1) + '.webp '
    document.querySelector('.our-service__card-title').textContent =
      serviceItemsContent[index + 1].title
    document.querySelector('.our-service__card-txt p').textContent =
      serviceItemsContent[index + 1].text
  })
})
