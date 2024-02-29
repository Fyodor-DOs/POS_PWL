<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Menampilkan halaman awal website</h1>

    <h2>Halaman Products</h2>
     <button onclick="window.location='{{ route('food-beverage') }}'">Food & Beverage</button>
     <button onclick="window.location='{{ route('beauty-health') }}'">Beauty & Health</button>
     <button onclick="window.location='{{ route('home-care') }}'">Home Care</button>
     <button onclick="window.location='{{ route('baby-kid') }}'">Baby & Kid</button>

    <h2>Halaman User</h2>
     <button onclick="window.location='{{ route('user', ['id' => 2, 'name' => 'Fathir']) }}'">Halaman User</button>

    <h2>Halaman Penjualan</h2>
     <button onclick="window.location='{{ route('sales') }}'">Halaman Penjualan</button>

</body>
</html>
