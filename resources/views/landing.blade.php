@extends('layout.main')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Parfum</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <!-- HERO -->
    <!-- HERO SECTION NEW PREMIUM -->
<section class="hero">
    <div class="hero-overlay"></div>

    <div class="hero-light"></div>

    <div class="hero-content">
        <h1 class="hero-title">Where Elegance Begins</h1>
        <p class="hero-subtitle">Where Timeless Elegance Meets an Unforgettable Signature Scent</p>

        <div class="hero-buttons">
            <a href="{{ route('product.index') }}" class="btn-shop">SHOP NOW</a>
            <a href="#explore-section" class="btn-explore">EXPLORE NOW</a>
        </div>


    </div>
</section>

<!-- LUXURY VIDEO INTRO SECTION -->
<section class="lux-video-section">
    <div class="lux-video-wrapper">

        <h2 class="video-title">
            The Essence of Every Moment
        </h2>

        <p class="video-subtitle">
            Discover the signature collection crafted for presence, power, and elegance.
        </p>    

        <div class="lux-video-card">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
            </video>
        </div>

    </div>
</section>


    <!-- PRODUCT SECTION -->
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<section class="py-200 bg-[#0d0d0d]">
<h2 class="text-center text-4xl font-bold text-white mb-10 tracking-wide">
  <span class="relative inline-block">  
    Produk Terbaru
    <span class="absolute left-1/2 -bottom-2 w-16 h-[3px] bg-yellow-400 rounded-full -translate-x-1/2"></span>
    <div class="gold-line"></div>
  </span>
</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Card 1 -->
      <div class="swiper-slide">
        <div class="card">
        <img src="{{ asset('images/parfum1.png') }}" class="product-img" />
          <h3>Aurora</h3>
          <p>Aroma soft elegan dengan sentuhan woody & tobacco.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="{{ asset('images/parfum2.png') }}" class="product-img" />
          <h3>Selia</h3>
          <p>Wangi floral vanilla premium untuk kesan anggun & memikat.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="{{ asset('images/parfum3.png') }}" class="product-img" />
          <h3>Majestic</h3>
          <p>Perpaduan aroma musk & amber yang mewah.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="swiper-slide">
        <div class="card">
          <img src="{{ asset('images/parfum4.png') }}" class="product-img" />
          <h3>Meraki</h3>
          <p>Sentuhan berries yang sweet yang memberikan kesan luxury.</p>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="card">
          <img src="{{ asset('images/parfum5.png') }}" class="product-img" />
          <h3>Kama</h3>
          <p>Aroma fresh pear & melon dipadu dengan fressia dan rose memberikan kesan segar.</p>
        </div>
      </div>

    </div>

    <!-- Navigasi -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>

  </div>
</section>

<!-- MARKETPLACE STORE SECTION -->
<section class="lux-advantages marketplace-section">
  <div class="title-box">
    <h2>Our Marketplace Store</h2>
    <p style="color:#cfcfcf; margin-top:10px;">Available On</p>
    <div class="gold-line"></div>
  </div>

  <div class="adv-wrapper">

    <!-- CARD MARKETPLACE -->
    <div class="adv-card" style="padding: 30px 300px;">
      <div class="icon" style="
          background: radial-gradient(circle, rgba(217,178,76,0.25), transparent 70%);
          border: 1px solid rgba(217,178,76,0.35);
          width:70px;
          height:70px;
          border-radius:50%;
          display:flex;
          align-items:center;
          justify-content:center;
          margin:auto;
        ">
        <!-- Ikon custom -->
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
          <path d="M6 6h15l-1.5 9h-13z"/>
          <circle cx="9" cy="21" r="1"/>
          <circle cx="18" cy="21" r="1"/>
        </svg>
      </div>

      <h3 style="margin-top:15px;">Shop With Us</h3>

      <div style="display:flex; justify-content:center; gap:30px; margin-top:20px;">
        <!-- TikTok -->
        <a href="https://www.tiktok.com/@vancouver.id?is_from_webapp=1&sender_device=pc" target="_blank" style="display:flex; flex-direction:column; align-items:center; gap:5px; text-decoration:none;">
          <img src="{{ asset('images/tiktok.png') }}" alt="TikTok" style="width:60px; height:60px; object-fit:contain;">
          <span style="color:white; font-weight:600; font-size:0.85rem;">TikTok</span>
        </a>

        <!-- Shopee -->
        <a href="https://id.shp.ee/p6SuyqDr" target="_blank" style="display:flex; flex-direction:column; align-items:center; gap:5px; text-decoration:none;">
          <img src="{{ asset('images/shoppee.png') }}" alt="Shopee" style="width:60px; height:60px; object-fit:contain;">
          <span style="color:white; font-weight:600; font-size:0.85rem;">Shopee</span>
        </a>
      </div>
    </div>

  </div>
</section>

<section class="lux-advantages">
    <div class="title-box">
        <h2>Keunggulan Vancouver Parfume</h2>
        <div class="gold-line"></div>
    </div>

    <div class="adv-wrapper">

        <!-- CARD 1 -->
        <div class="adv-card">
            <div class="icon">
                <!-- Premium Icon -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 2L15 8L22 9L17 14L18 21L12 18L6 21L7 14L2 9L9 8L12 2Z"
                        stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <h3>Kualitas Premium</h3>
            <p>Diformulasi dari bahan aroma kelas dunia.</p>
        </div>

        <!-- CARD 2 -->
        <div class="adv-card">
            <div class="icon">
                <!-- Clock Icon -->
                <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/>
                    <path d="M12 7V12L15 15" stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <h3>Tahan Lama</h3>
            <p>Ketahanan hingga 12–18 jam di kulit.</p>
        </div>

        <!-- CARD 3 -->
        <div class="adv-card">
            <div class="icon">
                <!-- Shield Icon -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 3L19 6V12C19 16 16 19 12 21C8 19 5 16 5 12V6L12 3Z"
                        stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <h3>Aman Dikulit</h3>
            <p>Bebas alkohol keras & ramah untuk daily use.</p>
        </div>

        <!-- CARD 4 -->
        <div class="adv-card">
            <div class="icon">
                <!-- Sparkle Icon -->
                <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 2L13.5 8.5L20 10L13.5 11.5L12 18L10.5 11.5L4 10L10.5 8.5L12 2Z"
                        stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
            <h3>Aroma Signature</h3>
            <p>Wangi unik dan berbeda dari parfum pasaran.</p>
        </div>

    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="lux-contact">
    <div class="contact-container">

        <div class="contact-title-box">
            <h2>Our Office Location</h2>
            <p class="contact-subtitle">
                Visit our exclusive showroom and experience the essence of elegance.
            </p>
            <div class="gold-line"></div>
        </div>

        <div class="contact-content">

            <!-- Address Info -->
            <div class="contact-info">
                <h3>Vancouver Parfume</h3>
                <p>
                    Jl. Peninggaran Timur II<br>
                    Jakarta Selatan, Indonesia 12240
                </p>

                <p class="contact-detail">
                    Phone: +62 815-1469-6322
                </p>

                <p class="contact-detail">
                    Email: vancouverid@gmail.com
                </p>
            </div>

            <!-- Google Maps -->
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.95906024402066!2d106.77326773712132!3d-6.244155916327991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f11dd7ce8e33%3A0x26e737ea76795b4e!2sYayasan%20An%20Nabil!5e0!3m2!1sid!2sid!4v1771172074874!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>
</section>


    <!-- FOOTER -->
    <footer class="lux-footer">

    <div class="footer-container">

        <!-- LOGO AREA -->
        <div class="footer-brand">
    <img src="images/logo.png" alt="Vancouver Logo" class="footer-logo">
</div>


        <!-- ABOUT -->
        <div class="footer-column">
            <h4>About Us</h4>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Journal</a></li>
            </ul>
        </div>

        <!-- SOCIAL -->
        <div class="footer-column">
            <h4>Social</h4>
            <ul>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Tiktok</a></li>
            </ul>
        </div>

        <!-- INFO -->
        <div class="footer-column">
            <h4>Info</h4>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Returns & Exchanges</a></li>
            </ul>
        </div>

    </div>

    <!-- CONTACT -->
    <div class="footer-contact">
        <div>
            <p><strong>Customer Service</strong></p>
            <p>customerservice@vancouver.com</p>
        </div>
        <div>
            <p><strong>Business Inquiries</strong></p>
            <p>vancouverid001@gmail.com</p>
        </div>
    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    speed: 800,
    grabCursor: true,

    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: { slidesPerView: 1 },
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>

<script>
function smoothScroll(target, duration) {
    let targetEl = document.querySelector(target);
    let targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset;
    let startPos = window.pageYOffset;
    let distance = targetPos - startPos;
    let startTime = null;

    function animationScroll(currentTime) {
        if (startTime === null) startTime = currentTime;
        let timeElapsed = currentTime - startTime;

        // Easing supaya lebih lembut & premium
        let run = easeInOutQuad(timeElapsed, startPos, distance, duration);
        window.scrollTo(0, run);

        if (timeElapsed < duration) requestAnimationFrame(animationScroll);
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t + b;
        t--;
        return (-c / 2) * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animationScroll);
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
        e.preventDefault();

        let target = this.getAttribute("href");

        // lebih lambat lagi (2.5 detik)
        smoothScroll(target, 2500);
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {

            const url = new URL(this.href);
            const targetId = url.hash;

            if (targetId) {
                const targetEl = document.querySelector(targetId);

                if (targetEl) {
                    e.preventDefault();

                    const navbarHeight = document.querySelector("nav").offsetHeight;
                    const targetPosition =
                        targetEl.getBoundingClientRect().top +
                        window.pageYOffset -
                        navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: "smooth"
                    });
                }
            }

        });
    });

});
</script>


<section id="explore-section" style="padding: 0px 0;">
</section>

