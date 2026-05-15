@extends('layout.main')

@section('content')
<style>
    body {
        background: #0e0e0e;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .product-section {
        padding: 140px 60px 80px;
        display: flex;
        gap: 40px;
    }

    /* SIDEBAR FILTER */
    .filter-box {
        width: 260px;
        background: #111;
        padding: 20px;
        border-radius: 16px;
        border: 1px solid rgba(217,178,76,0.25);
        height: fit-content;
    }

    .filter-title {
        font-size: 20px;
        font-weight: 600;
        color: #d9b24c;
        margin-bottom: 16px;
        text-align: center;
    }

    .filter-box label {
        font-size: 14px;
        color: #e8e8e8;
        margin-top: 10px;
        display: block;
    }

    .filter-box input,
    .filter-box select {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border-radius: 8px;
        border: none;
        background: #222;
        color: #fff;
    }

    .filter-btn {
        width: 100%;
        margin-top: 18px;
        padding: 10px;
        background: transparent;
        border: 1px solid #d9b24c;
        color: #d9b24c;
        border-radius: 30px;
        transition: 0.3s;
    }

    .filter-btn:hover {
        background: #d9b24c;
        color: #000;
    }

    /* PRODUCT GRID */
    .product-grid {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(3, minmax(260px, 1fr));
        gap: 45px;
    }

    .product-card {
        background: linear-gradient(145deg, #111, #181818);
        border-radius: 22px;
        padding: 20px;
        border: 1px solid rgba(217,178,76,0.18);
        transition: 0.4s ease;
        position: relative;
    }

    .product-card img {
        width: 100%;
        height: 330px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 16px;
        border: 1px solid rgba(255,255,255,0.04);
    }

    .product-name {
        font-size: 22px;
        font-weight: 600;
    }

    .product-price {
        color: #e5c573;
        font-size: 18px;
        margin-top: 6px;
        margin-bottom: 18px;
    }

    .btn-detail {
        display: block;
        width: 100%;
        text-align: center;
        background: transparent;
        border: 1px solid #d9b24c;
        padding: 11px 0;
        border-radius: 30px;
        color: #d9b24c;
        margin-top: 15px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-detail:hover {
        background: #d9b24c;
        color: #000;
    }

    /* ================= MOBILE RESPONSIVE ================= */

@media (max-width: 992px) {

    .product-section {
        padding: 120px 30px 60px;
        gap: 30px;
    }

    .product-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
    }

    .product-card img {
        height: 250px;
    }

}


@media (max-width: 768px) {

    .product-section {
        flex-direction: column;
        padding: 110px 20px 50px;
    }

    /* Sidebar jadi full width */
    .filter-box {
        width: 100%;
        margin-bottom: 30px;
    }

    /* Produk jadi 1 kolom biar elegan */
    .product-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .product-card img {
        height: 260px;
    }

}


@media (max-width: 480px) {

    .product-section {
        padding: 100px 16px 40px;
    }

    .product-name {
        font-size: 18px;
    }

    .product-price {
        font-size: 16px;
    }

    .product-card img {
        height: 220px;
    }

}

</style>

<section class="product-section">

    <!-- SIDEBAR FILTER -->
    <div class="filter-box">
        <div class="filter-title">Filter Produk</div>

        <form action="{{ route('product.index') }}" method="GET">

    <label>Nama Produk</label>
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama...">

    <label>Harga</label>

    <!-- MENAMPILKAN RANGE -->
    <div id="priceValue" style="margin: 8px 0; color:#d9b24c;">
        Rp {{ number_format(request('min_price', 0), 0, ',', '.') }} 
        - 
        Rp {{ number_format(request('max_price', $maxPriceDB ?? 1000000), 0, ',', '.') }}
    </div>

    <!-- SLIDER -->
    <input type="range" 
        min="0" 
        max="{{ $maxPriceDB }}" 
        value="{{ request('min_price', 0) }}" 
        name="min_price"
        id="minSlider"
        style="width:100%; margin-bottom:10px;">

    <input type="range"
        min="0"
        max="{{ $maxPriceDB }}"
        value="{{ request('max_price', $maxPriceDB) }}"
        name="max_price"
        id="maxSlider"
        style="width:100%;">

    <label>Filter Notes</label>
    <select name="notes">
        <option value="">Semua Notes</option>
        <option value="top" {{ request('notes')=='top' ? 'selected' : '' }}>Top Notes</option>
        <option value="middle" {{ request('notes')=='middle' ? 'selected' : '' }}>Middle Notes</option>
        <option value="base" {{ request('notes')=='base' ? 'selected' : '' }}>Base Notes</option>
    </select>

    <button type="submit" class="filter-btn">Terapkan Filter</button>

</form>

    </div>

    <!-- PRODUK -->
    <div class="product-grid">

        @foreach($products as $product)
        <div class="product-card">

            <img 
                src="{{ asset('images/product/' . strtolower($product->name) . '.png') }}" 
                alt="{{ $product->name }}"
                onerror="this.src='{{ asset('images/product/default.png') }}'"
            >

            <div class="product-name">{{ $product->name }}</div>
            <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>

            <a href="{{ route('product.detail', $product->id) }}" class="btn-detail">
                Detail Produk
            </a>

        </div>
        @endforeach

    </div>

</section>

<script>
const minSlider = document.getElementById('minSlider');
const maxSlider = document.getElementById('maxSlider');
const priceValue = document.getElementById('priceValue');

function updatePrice() {
    let min = parseInt(minSlider.value);
    let max = parseInt(maxSlider.value);

    if (min > max) {
        let temp = min;
        min = max;
        max = temp;
    }

    priceValue.innerHTML = "Rp " + min.toLocaleString('id-ID') + 
                           " - Rp " + max.toLocaleString('id-ID');
}

minSlider.addEventListener('input', updatePrice);
maxSlider.addEventListener('input', updatePrice);
</script>

@endsection
