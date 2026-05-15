@extends('layout.main')

@section('content')

<style>
    body {
        background: #0e0e0e;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .about-section {
        padding: 140px 60px 80px;
        max-width: 1100px;
        margin: auto;
    }

    .title {
        text-align: center;
        font-size: 46px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #d9b24c;
    }

    .gold-line {
        width: 120px;
        height: 4px;
        background: linear-gradient(90deg, #caa74e, #e6c978, #caa74e);
        margin: 20px auto 50px;
        border-radius: 20px;
        filter: drop-shadow(0 0 6px rgba(217,178,76,0.6));
    }

    .about-box {
        background: linear-gradient(145deg, #101010, #181818);
        padding: 40px;
        border-radius: 20px;
        border: 1px solid rgba(217,178,76,0.25);
        line-height: 1.8;
        font-size: 18px;
        color: #e6e6e6;
        margin-bottom: 50px;
    }

    .about-highlight {
        color: #d9b24c;
        font-weight: 600;
    }

    .vision-box, .mission-box {
        margin-top: 40px;
        padding: 30px;
        background: #111;
        border-radius: 16px;
        border: 1px solid rgba(217,178,76,0.25);
    }

    .sub-title {
        font-size: 28px;
        color: #d9b24c;
        font-weight: 600;
        margin-bottom: 12px;
    }

    .mission-box ul {
        margin-left: 20px;
        line-height: 1.8;
    }
    /* ================= RESPONSIVE ================= */

@media (max-width: 992px) {

    .about-section {
        padding: 120px 40px 70px;
    }

    .title {
        font-size: 38px;
    }

    .about-box {
        padding: 35px;
        font-size: 17px;
    }

}


@media (max-width: 768px) {

    .about-section {
        padding: 100px 25px 60px;
    }

    .title {
        font-size: 30px;
    }

    .gold-line {
        width: 90px;
        height: 3px;
        margin: 18px auto 40px;
    }

    .about-box {
        padding: 25px;
        font-size: 16px;
        line-height: 1.7;
    }

    .sub-title {
        font-size: 22px;
    }

    .vision-box,
    .mission-box {
        padding: 22px;
    }

    .mission-box ul {
        margin-left: 15px;
    }

}


@media (max-width: 480px) {

    .about-section {
        padding: 90px 18px 50px;
    }

    .title {
        font-size: 24px;
    }

    .about-box {
        font-size: 15px;
    }

}

</style>

<section class="about-section">

    <h1 class="title">Tentang Kami</h1>
    <div class="gold-line"></div>

    <div class="about-box">
        <p>
            <span class="about-highlight">Vancouver.ID</span> adalah brand parfum yang mengedepankan 
            karakter elegan, mewah, dan berkelas. Setiap aroma dirancang dengan presisi untuk memberikan 
            pengalaman wangi yang tahan lama dan meninggalkan kesan mendalam.
        </p>
        <p>
            Kami percaya bahwa parfum bukan sekadar wewangian — namun sebuah 
            <span class="about-highlight">statement</span>, identitas, dan bentuk kepercayaan diri.
        </p>
    </div>

    <div class="vision-box">
        <div class="sub-title">Visi</div>
        <p>
            Menjadi brand parfum lokal terbaik yang dikenal akan kualitas premium, daya tahan luar biasa, 
            dan estetika elegan yang dapat bersaing secara global.
        </p>
    </div>

    <div class="mission-box">
        <div class="sub-title">Misi</div>
        <ul>
            <li>Memberikan produk parfum berkualitas tinggi dengan harga terjangkau.</li>
            <li>Menghadirkan aroma eksklusif yang memancarkan karakter setiap individu.</li>
            <li>Mengutamakan kualitas bahan dan proses produksi yang profesional.</li>
            <li> Membawa brand parfum lokal naik ke level internasional.</li>
        </ul>
    </div>

</section>

@endsection
