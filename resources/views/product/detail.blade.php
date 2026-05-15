@extends('layout.main')

@section('content')

<style>
    body {
        background: #0e0e0e;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .detail-container {
        padding: 120px 60px;
        display: flex;
        gap: 40px;
    }

    .detail-image {
        width: 420px;
        border-radius: 20px;
    }

    .detail-info {
        max-width: 600px;
    }

    .detail-title {
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .detail-price {
        font-size: 22px;
        color: #d9b24c;
        margin-bottom: 20px;
    }

    .notes-box {
        margin-bottom: 15px;
        padding: 14px;
        background: #111;
        border-radius: 12px;
        border: 1px solid rgba(217,178,76,0.2);
    }

    .notes-title {
        color: #d9b24c;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .back-btn {
        margin-top: 30px;
        display: inline-block;
        padding: 10px 24px;
        border-radius: 30px;
        border: 1px solid #d9b24c;
        color: #d9b24c;
        text-decoration: none;
        transition: 0.3s;
    }

    .back-btn:hover {
        background: #d9b24c;
        color: #000;
    }

    .detail-image {
    width: 420px;
    height: 540px;
    object-fit: cover;
    border-radius: 20px;
}

/* ================= RESPONSIVE ================= */

@media (max-width: 992px) {

    .detail-container {
        padding: 110px 40px;
        gap: 30px;
    }

    .detail-image {
        width: 350px;
        height: 480px;
    }

    .detail-title {
        font-size: 32px;
    }

}


@media (max-width: 768px) {

    .detail-container {
        flex-direction: column;
        align-items: center;
        padding: 100px 25px 60px;
        text-align: center;
    }

    .detail-image {
        width: 100%;
        max-width: 380px;
        height: auto;
        aspect-ratio: 3 / 4;
    }

    .detail-info {
        max-width: 100%;
    }

    .detail-title {
        font-size: 26px;
    }

    .detail-price {
        font-size: 20px;
    }

    .notes-box {
        text-align: left;
    }

    .back-btn {
        display: block;
        width: 100%;
        text-align: center;
    }

}


@media (max-width: 480px) {

    .detail-container {
        padding: 95px 18px 50px;
    }

    .detail-title {
        font-size: 22px;
    }

    .detail-price {
        font-size: 18px;
    }

}


</style>


<div class="detail-container">

    <!-- Product Image -->
    <div>
           <img 
    src="{{ asset('images/product/' . strtolower($product->name) . '.png') }}" 
    alt="{{ $product->name }}"
    class="detail-image"
    onerror="this.src='{{ asset('images/product/default.png') }}'"
>
</div>

    <!-- Product Info -->
    <div class="detail-info">

        <div class="detail-title">{{ $product->name }}</div>
        <div class="detail-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>

        <!-- Notes -->
        <div class="notes-box">
            <div class="notes-title">Top Notes</div>
            <div>{{ $product->top_notes }}</div>
        </div>

        <div class="notes-box">
            <div class="notes-title">Middle Notes</div>
            <div>{{ $product->middle_notes }}</div>
        </div>

        <div class="notes-box">
            <div class="notes-title">Base Notes</div>
            <div>{{ $product->base_notes }}</div>
        </div>

        <!-- Description -->
        <div class="notes-box">
            <div class="notes-title">Deskripsi</div>
            <div>{{ $product->description }}</div>
        </div>

        <a href="{{ route('product.index') }}" class="back-btn">← Kembali ke Produk</a>
    </div>

</div>

@endsection
