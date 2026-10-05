<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Producten</title>
</head>

<body>
    <h1>Producten</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }}: €{{ number_format($product['price'], 2, ',', '.') }}</li>
        @endforeach
    </ul>
</body>

</html>