<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>

    <div class="card">
    <form method="post" action="{{route('product.update', ['product' => $product])}}" class="card-body">
        @csrf 
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" id="qty" class="form-control" placeholder="Qty" value="{{$product->qty}}"/>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Price" value="{{$product->name}}"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary mt-3" value="Update" />
        </div>
        <div>
            <a href="{{route('product.index')}}" class="btn btn-primary mt-3">Back</a>
        </div>
    </form>
    </div>
</body>
</html>