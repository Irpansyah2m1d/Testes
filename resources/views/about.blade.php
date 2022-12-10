@extends("layouts/main")
@section("container")
<h1>Halaman About</h1>
    <h4>Nama : <?= $nama; ?></h4>
    <h4>NPM : .<?= $NPM; ?></h4>
    <h4>Jurusan : <?= $jurusan; ?></h4>
    <img src="image/<?= $image; ?>" alt="Gambar Bullying" width="150">
@endsection
    
