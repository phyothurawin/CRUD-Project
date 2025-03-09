<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-light">
    <h1>You Can Manage Your Proucts Here</h1>
    <div>
    @if(session()->has('success'))
        <div>
            {{session()->get('success')}}
        </div>
    @endif
    </div>
    <br>
    <div class="card">
        <div class="card-header">Shop Management</div>
        <div class="card-body">
            <h5 class="card-title">Create Your Product Here</h5>
            <p class="card-text">You can create, edit, delete your products here.</p>
        <a href="{{route('product.create')}}" class="btn btn-primary">Create a Product</a>
    </div>
    <br>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product) 
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->qty}}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->description}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destory', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-primary" value="Delete" /> 
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>