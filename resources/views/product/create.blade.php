<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('POST')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label for="name">Quentity</label>
            <input type="text" name="qty" placeholder="Quentity">
        </div>
        <div>
            <label for="name">Price</label>
            <input type="text" name="price" placeholder="Price">
        </div>
        <div>
            <label for="name">Description</label>
            <input type="text" name="descriptoin" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>