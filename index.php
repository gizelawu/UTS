<?php
require_once "pembimbing.php";
$arr = Pembimbing::getAllData();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pembimbing.ID</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header>
    <div class="header-container">
      <a href="/" class="logo">
        <img src="assets/logo/logo.png">
        <h3>
          <span class="text-pembimbing">| Pembimbing.</span><span class="text-ID">ID</span>
        </h3>
      </a>

      <nav>
        <a href="/" class="nav-item">Home</a>
        <a href="#" class="nav-item">Paket</a>
        <a href="#" class="nav-item">Pembimbing</a>
        <a href="#" class="nav-item">Pemesanan</a>
        <a href="#" class="nav-item">Tentang Kami</a>
      </nav>

    </div>
  </header>

  <section class="hero">
    <div class="text-hero animate__animated animate__fadeInUp">
      <h1>Cara terbaik<br /> untuk menemukan
        pembimbing pilihanmu
      </h1>

      <p>
        Kami hadir untuk membantu kamu mencapai
        kesuksesan dalam pengerjaan skripsi, dengan kenyamanan sebagai prioritas utama.
      </p>

      <div class="cta-hero">
        <a target="_blank" class="get-free-btn" href="#">
          <button>
            Get Free
          </button>
        </a>
        <a class="lihat-paket-btn">
          <span>
            Lihat Paket
          </span>
        </a>
      </div>
    </div>
    <div class="image-hero-container animate__animated animate__fadeInDown">
      <div class="image-hero">
        <img class="h-full w-full" src="assets/hero3.png" />
      </div>
    </div>
  </section>

  <div class="univ-section">
    <h2>
      Mahasiswa yang mendapatkan
      bimbingan berasal dari berbagai<br /> universitas di seluruh Indonesia
    </h2>
  </div>

  <section id="paket" class="paket-section">
    <h2>
      Pilih Kebutuhan Paket Bimbinganmu Di sini
    </h2>
    <p>
      Pilih dan nikmati pengalaman belajar yang
      belum pernah kamu rasakan sebelumnya dan ikuti rangkaian program seru dari Pembimbing.id</p>

    <div class="paket-container">
      <div class="paket-card">
        <img src="assets/paket/free.png">
        <div class="paket-card-content">
          <h4>Paket Free</h4>
          <div class="paket-card-bimbingan">
            <h6>1x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>15 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga">
            <p>Rp0</p>
            <div class="paket-card-promo">
              <p>GRATIS</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
      <div class="paket-card">
        <img src="assets/paket/basic.png">
        <div class="paket-card-content">
          <h4>Paket Basic</h4>
          <div class="paket-card-bimbingan">
            <h6>1x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>30 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga-asli">
            <p>Rp100.000</p>
            <span>
              Rp50.000
            </span>
            <div class="paket-card-promo">
              <p>50%</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
      <div class="paket-card">
        <img src="assets/paket/silver.png">
        <div class="paket-card-content">
          <h4>Paket Silver</h4>
          <div class="paket-card-bimbingan">
            <h6>4x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>30 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga-asli">
            <p>Rp390.000</p>
            <span>
              Rp195.000
            </span>
            <div class="paket-card-promo">
              <p>50%</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
      <div class="paket-card">
        <div class="recommended-label-container">
          <div class="recommended-label">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 19 19" fill="none">
                <g clip-path="url(#clip0_245_25)">
                  <path d="M0.146149 10.0846C0.146149 9.85426 0.191513 9.6262 0.279652 9.41341C0.367791 9.20063 0.496979 9.00728 0.659838 8.84442C0.822698 8.68156 1.01604 8.55238 1.22883 8.46424C1.44161 8.3761 1.66968 8.33073 1.89999 8.33073C2.13031 8.33073 2.35838 8.3761 2.57116 8.46424C2.78395 8.55238 2.97729 8.68156 3.14015 8.84442C3.30301 9.00728 3.4322 9.20063 3.52034 9.41341C3.60848 9.6262 3.65384 9.85426 3.65384 10.0846V17.1C3.65384 17.5651 3.46906 18.0112 3.14015 18.3401C2.81124 18.669 2.36514 18.8538 1.89999 18.8538C1.43485 18.8538 0.988748 18.669 0.659838 18.3401C0.330928 18.0112 0.146149 17.5651 0.146149 17.1V10.0846ZM4.82307 9.88932V16.2382C4.82287 16.6728 4.94376 17.0988 5.17218 17.4685C5.4006 17.8382 5.72751 18.1369 6.11624 18.3312L6.1747 18.3604C6.82349 18.6847 7.53881 18.8536 8.26412 18.8538H14.5967C15.1375 18.854 15.6616 18.6668 16.0799 18.324C16.4982 17.9812 16.7847 17.504 16.8907 16.9737L18.2938 9.9583C18.3616 9.61908 18.3533 9.26903 18.2695 8.9334C18.1857 8.59777 18.0284 8.28492 17.8091 8.01739C17.5898 7.74987 17.3138 7.53433 17.0012 7.38633C16.6885 7.23833 16.3469 7.16154 16.0009 7.1615H11.8385V2.48458C11.8385 1.86438 11.5921 1.26958 11.1535 0.831038C10.715 0.392491 10.1202 0.146118 9.5 0.146118C9.1899 0.146118 8.8925 0.269305 8.67322 0.488578C8.45395 0.707851 8.33076 1.00525 8.33076 1.31535V2.09523C8.33076 3.10717 8.00255 4.09182 7.39538 4.90138L5.75846 7.08316C5.15129 7.89272 4.82307 8.87737 4.82307 9.88932Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_245_25">
                    <rect width="19" height="19" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="text-white text-[10px] font-bold">Recommended</div>
          </div>
        </div>
        <img src="assets/paket/gold.png">
        <div class="paket-card-content">
          <h4>Paket Gold</h4>
          <div class="paket-card-bimbingan">
            <h6>8x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>30 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga-asli">
            <p>Rp740.000</p>
            <span>
              Rp370.000
            </span>
            <div class="paket-card-promo">
              <p>50%</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
      <div class="paket-card">
        <img src="assets/paket/plat.png">
        <div class="paket-card-content">
          <h4>Paket Platinum</h4>
          <div class="paket-card-bimbingan">
            <h6>12x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>30 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga-asli">
            <p>Rp1.040.000</p>
            <span>
              Rp520.000
            </span>
            <div class="paket-card-promo">
              <p>50%</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
      <div class="paket-card">
        <img src="assets/paket/diamond.png">
        <div class="paket-card-content">
          <h4>Paket Diamond</h4>
          <div class="paket-card-bimbingan">
            <h6>14x Bimbingan</h6>
            <div class="paket-card-waktu">
              <img src="assets/clock2.svg">
              <h6>30 Menit</h6>
            </div>
          </div>
          <div class="paket-card-harga-asli">
            <p>Rp1.300.000</p>
            <span>
              Rp650.000
            </span>
            <div class="paket-card-promo">
              <p>50%</p>
            </div>
          </div>
          <div class="pesan-btn">
            <a target="_blank" href="#">
              <img src="assets/wa2.svg">
              <h4>
                Pesan Sekarang
              </h4>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="pemesanan-section">
    <div class="pemesanan-container">
      <h2>
        <span>Bagaimana Cara Pesannya?</span> <br>
        Mudah sekali! Lihat <span>Petunjuknya</span> Disini
      </h2>

      <div class="pemesanan-btn">
        <a href="#">
          Cara Order
        </a>
      </div>
    </div>
  </section>


  <section id="app" class="daftar-pembimbing-section">
    <div id="pembimbing" class="daftar-pembimbing-container">
      <h2>Temukan Pembimbingmu</h2>
      <h3>
        Konsultasikan materi dan soal
        tersulit kamu sebanyak-banyaknya dengan pembimbing terbaik.
      </h3>

      <div class="swiper carousel daftar-pembimbing-swiper-container">

        <div class="swiper-wrapper daftar-pembimbing-swiper-wrapper">

          <div class="swiper-slide daftar-pembimbing-swiper-slide">
            <?php
            for ($i = 0; $i < count($arr['id']); $i++) {
            ?>
              <div class="daftar-pembimbing-swiper-card">
                <div class="daftar-pembimbing-swiper-card-img">
                  <img src="<?= $arr['url'][$i] ?>" />
                </div>
                <div class="daftar-pembimbing-swiper-card-data">
                  <div class="name">
                    <?= $arr['name'][$i] ?>
                  </div>
                  <div class="univ">
                    <?= $arr['univ'][$i] ?>
                  </div>
                  <div class="deskripsi-jurusan">
                    <span class="deskripsi">
                      <?= $arr['deskripsi'][$i] ?>
                    </span>
                    <span class="jurusan">
                      <?= $arr['jurusan'][$i] ?>
                    </span>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>

        </div>
        <div class="swiper-button-next button-next-mentor"></div>
        <div class="swiper-button-prev button-prev-mentor"></div>
        <div class="swiper-pagination pagination-mentor"></div>
      </div>
    </div>
    <div class="daftar-pembimbing-btn">
      <a href="#">
        <button class="bg-sky-400 py-2 px-12 font-semibold rounded-full mt-4 hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)] hover:bg-white hover:text-sky-400 text-white transition-all">
          Selengkapnya
        </button>
      </a>
    </div>
  </section>

  <section class="contact-us-section">
    <div class="contact-us-container">
      <h2>
        Segera temukan <span>pembimbing terbaik</span> Anda
      </h2>

      <h2>Yuk, belajar di <span>PEMBIMBING.ID</span> Sekarang!</h2>

      <div class="contact-us-btn flex justify-center text-base md:text-2xl mt-5 text-center">
        <a href="#" target="_blank" class="text-black hover:text-white cursor-pointer border-2 border-white hover:border-2 rounded-full bg-white px-[60px] py-1 ml-1 pb-1 hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)] hover:bg-sky-400 transition-all font-bold">
          Hubungi Kami</a>
      </div>
    </div>
  </section>

  <footer id="footer">
    <div class="footer-container">
      <div class="footer-content">
        <div class="footer-img">
          <img src="assets/logo/logo.png" />
        </div>
        <div class="footer-logo">
          <div>Pembimbing.id</div>
        </div>
        <div class="footer-nav">
          <a href="/" class="footer-nav-item">Home</a>
          <a href="#" class="footer-nav-item">Paket</a>
          <a href="#" class="footer-nav-item">Pembimbing</a>
          <a href="#" class="footer-nav-item">Pemesanan</a>
          <a href="#" class="footer-nav-item">Tentang Kami</a>
        </div>
      </div>
      <div class="footer-socmed">
        <h4>Follow Us</h4>
        <div class="footer-socmed-container">
          <a href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="64" viewBox="0 0 64 64" fill="none">
              <g clip-path="url(#clip0_655_553)">
                <path d="M56.8889 0C58.7749 0 60.5836 0.749204 61.9172 2.0828C63.2508 3.41639 64 5.22513 64 7.11111V56.8889C64 58.7749 63.2508 60.5836 61.9172 61.9172C60.5836 63.2508 58.7749 64 56.8889 64H7.11111C5.22513 64 3.41639 63.2508 2.0828 61.9172C0.749204 60.5836 0 58.7749 0 56.8889V7.11111C0 5.22513 0.749204 3.41639 2.0828 2.0828C3.41639 0.749204 5.22513 0 7.11111 0H56.8889ZM55.1111 55.1111V36.2667C55.1111 33.1925 53.8899 30.2443 51.7162 28.0705C49.5424 25.8968 46.5942 24.6756 43.52 24.6756C40.4978 24.6756 36.9778 26.5244 35.2711 29.2978V25.3511H25.3511V55.1111H35.2711V37.5822C35.2711 34.8444 37.4756 32.6044 40.2133 32.6044C41.5335 32.6044 42.7996 33.1289 43.7332 34.0624C44.6667 34.9959 45.1911 36.262 45.1911 37.5822V55.1111H55.1111ZM13.7956 19.7689C15.3798 19.7689 16.8991 19.1396 18.0193 18.0193C19.1396 16.8991 19.7689 15.3798 19.7689 13.7956C19.7689 10.4889 17.1022 7.78667 13.7956 7.78667C12.2019 7.78667 10.6735 8.41974 9.54663 9.54663C8.41974 10.6735 7.78667 12.2019 7.78667 13.7956C7.78667 17.1022 10.4889 19.7689 13.7956 19.7689ZM18.7378 55.1111V25.3511H8.88889V55.1111H18.7378Z" fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_655_553">
                  <rect width="64" height="64" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="64" viewBox="0 0 64 64" fill="none">
              <path d="M37.3333 36.0002H44L46.6666 25.3335H37.3333V20.0002C37.3333 17.2535 37.3333 14.6668 42.6666 14.6668H46.6666V5.70683C45.7973 5.59216 42.5146 5.3335 39.048 5.3335C31.808 5.3335 26.6666 9.75216 26.6666 17.8668V25.3335H18.6666V36.0002H26.6666V58.6668H37.3333V36.0002Z" fill="#fff" />
            </svg>
          </a>
          <a href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="64" viewBox="0 0 64 64" fill="none">
              <path d="M20.8 5.3335H43.2C51.7334 5.3335 58.6667 12.2668 58.6667 20.8002V43.2002C58.6667 47.3022 57.0372 51.2362 54.1366 54.1367C51.2361 57.0373 47.3021 58.6668 43.2 58.6668H20.8C12.2667 58.6668 5.33337 51.7335 5.33337 43.2002V20.8002C5.33337 16.6981 6.96289 12.7641 9.86346 9.86358C12.764 6.96302 16.698 5.3335 20.8 5.3335ZM20.2667 10.6668C17.7206 10.6668 15.2788 11.6783 13.4785 13.4786C11.6781 15.279 10.6667 17.7208 10.6667 20.2668V43.7335C10.6667 49.0402 14.96 53.3335 20.2667 53.3335H43.7334C46.2795 53.3335 48.7213 52.3221 50.5216 50.5217C52.322 48.7214 53.3334 46.2796 53.3334 43.7335V20.2668C53.3334 14.9602 49.04 10.6668 43.7334 10.6668H20.2667ZM46 14.6668C46.8841 14.6668 47.7319 15.018 48.3571 15.6431C48.9822 16.2683 49.3334 17.1161 49.3334 18.0002C49.3334 18.8842 48.9822 19.7321 48.3571 20.3572C47.7319 20.9823 46.8841 21.3335 46 21.3335C45.116 21.3335 44.2681 20.9823 43.643 20.3572C43.0179 19.7321 42.6667 18.8842 42.6667 18.0002C42.6667 17.1161 43.0179 16.2683 43.643 15.6431C44.2681 15.018 45.116 14.6668 46 14.6668ZM32 18.6668C35.5363 18.6668 38.9276 20.0716 41.4281 22.5721C43.9286 25.0726 45.3334 28.4639 45.3334 32.0002C45.3334 35.5364 43.9286 38.9278 41.4281 41.4283C38.9276 43.9287 35.5363 45.3335 32 45.3335C28.4638 45.3335 25.0724 43.9287 22.572 41.4283C20.0715 38.9278 18.6667 35.5364 18.6667 32.0002C18.6667 28.4639 20.0715 25.0726 22.572 22.5721C25.0724 20.0716 28.4638 18.6668 32 18.6668ZM32 24.0002C29.8783 24.0002 27.8435 24.843 26.3432 26.3433C24.8429 27.8436 24 29.8784 24 32.0002C24 34.1219 24.8429 36.1567 26.3432 37.657C27.8435 39.1573 29.8783 40.0002 32 40.0002C34.1218 40.0002 36.1566 39.1573 37.6569 37.657C39.1572 36.1567 40 34.1219 40 32.0002C40 29.8784 39.1572 27.8436 37.6569 26.3433C36.1566 24.843 34.1218 24.0002 32 24.0002Z" fill="#fff" />
            </svg>
          </a>
          <a href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="64" viewBox="0 0 54 38" fill="none">
              <path d="M21.6666 27L35.5066 19L21.6666 11V27ZM52.4933 6.12004C52.8399 7.37337 53.0799 9.05337 53.2399 11.1867C53.4266 13.32 53.5066 15.16 53.5066 16.76L53.6666 19C53.6666 24.84 53.2399 29.1334 52.4933 31.88C51.8266 34.28 50.2799 35.8267 47.8799 36.4934C46.6266 36.84 44.3333 37.08 40.8133 37.24C37.3466 37.4267 34.1733 37.5067 31.2399 37.5067L26.9999 37.6667C15.8266 37.6667 8.86659 37.24 6.11992 36.4934C3.71992 35.8267 2.17325 34.28 1.50659 31.88C1.15992 30.6267 0.919919 28.9467 0.759919 26.8134C0.573252 24.68 0.493252 22.84 0.493252 21.24L0.333252 19C0.333252 13.16 0.759919 8.86671 1.50659 6.12004C2.17325 3.72004 3.71992 2.17337 6.11992 1.50671C7.37325 1.16004 9.66659 0.92004 13.1866 0.76004C16.6533 0.573374 19.8266 0.493374 22.7599 0.493374L26.9999 0.333374C38.1733 0.333374 45.1333 0.760041 47.8799 1.50671C50.2799 2.17337 51.8266 3.72004 52.4933 6.12004Z" fill="white" />
            </svg>
          </a>

          <a href="#" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="64" viewBox="0 0 64 74" fill="none">
              <g clip-path="url(#clip0_655_471)">
                <path d="M50.6922 11.459C47.9145 8.28799 46.3837 4.2156 46.3849 0H33.8287V50.3873C33.7318 53.114 32.5807 55.6967 30.6176 57.5916C28.6545 59.4865 26.0327 60.5456 23.3042 60.546C17.5341 60.546 12.7392 55.8324 12.7392 49.981C12.7392 42.9917 19.4846 37.7498 26.4331 39.9035V27.0629C12.4141 25.1937 0.142334 36.0838 0.142334 49.981C0.142334 63.5124 11.3576 73.1429 23.2636 73.1429C36.023 73.1429 46.3849 62.781 46.3849 49.981V24.4216C51.4764 28.0781 57.5894 30.04 63.8579 30.0292V17.473C63.8579 17.473 56.2185 17.8387 50.6922 11.459Z" fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_655_471">
                  <rect width="64" height="73.1429" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">© 2023 Pembimbing.id. All rights reserved
    </div>
  </footer>

  <a target="_blank" href="#" class="call-wa">
    <div class="wa-img">
      <img src="assets/wa.svg">
    </div>
  </a>
</body>

</html>