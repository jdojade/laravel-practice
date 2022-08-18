<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Practice crud using eloquent</h1>
    @foreach ($productList as $productListItem)
        <p>{{ $productListItem->name }}</p>
        <p>{{ $productListItem->age }}</p>
        <p>{{ $productListItem->address }}</p>
    @endforeach
</body>
</html>