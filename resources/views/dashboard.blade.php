@extends('layouts.appdashboard')
@section('title', 'Dashboard')

@section('content')



<!-- Card View untuk Status Server -->
<div class="card">
    <div class="card-header">
        <strong>Status Server</strong>
        <button id="closeStatusCard" class="btn btn-danger btn-sm float-right">Tutup</button>
    </div>
    <!-- Status Server di atas card view -->
<div class="status">
    @if(isset($status))
    {{ $status}}
    @else
    <strong>Checking server status...</strong>
    @endif
</div>
    <div class="card-body">
        <!-- Tampilkan pesan status server di sini -->
        @if(isset($status))
        <strong>Status:</strong> {{ $status }}
        @else
        <strong>Checking server status...</strong>
        @endif
    </div>
</div>

<div class="container">
    <header>
        <!-- Header dashboard, seperti judul dan menu navigasi -->
        <img src="{{ asset('images/logoyarsi.png') }}" alt="Layar Logo" class="logo-header">
    </header>
    <!-- Card view khusus untuk input dan tombol "Cek Sekarang" -->
    <div class="card-new">
        <div class="card-header">
            Custom Check Interval
        </div>
        <div class="card-body">
            <label for="interval">Interval Pengecekan (detik):</label>
            <input type="number" id="interval" name="interval" min="1" step="1">
            <button class="btncheck1">Cek Sekarang</button>
        </div>
    </div>
    <section>
        <h2>LAYAR</h2>
        <p>E-Learning YARSI</p>
    </section>
    <section>
        <h2>Grafik Statistik</h2>
        <div id="grafik"></div>
    </section>
    <section>
        <h2>Ringkasan</h2>
        <div class="ringkasan-item">
            <h3>Total Pendapatan</h3>
            <p>Rp 10.000.000</p>
        </div>
    </section>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('server-online') <!-- Include card view server online -->
        </div>
        <div class="col-md-6">
            @include('server-offline') <!-- Include card view server offline -->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            @include('server-card-alt1') <!-- Gunakan card view alternatif 1 -->
        </div>
        <div class="col-md-6">
            @include('server-card-alt2') <!-- Gunakan card view alternatif 2 -->
        </div>
    </div>
</div>

<script>
    // Tampilkan popup secara otomatis saat halaman dimuat
    window.addEventListener("load", function() {
        document.getElementById("statusPopup").style.display = "block";
    });

    // Tutup card view status server saat tombol close di klik
    document.getElementById("closeStatusCard").addEventListener("click", function() {
        var card = document.querySelector(".card");
        card.style.display = "none";
    });
</script>
@endsection
