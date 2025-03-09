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
    <h1>Create a Product</h1>
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
    <form method="post" action="{{route('product.store')}}" class="card-body">
        
        @csrf 
        @method('post')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="Name"/>
        </div>
        <div>
            <label for="qty">Quentity</label>
            <input type="text" name="qty" id="qty" class="form-control" aria-describedby="Quentity"/>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" aria-describedby="Price" />
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="Description"/>
        </div>
        <div>
            <input type="submit" class="btn btn-primary mt-3" value="Save a New Product" />
        </div>
        <div>
            <a href="{{route('product.index')}}" class="btn btn-primary mt-3">Back</a>
        </div>
    </form>
    </div>
</body>
</html>