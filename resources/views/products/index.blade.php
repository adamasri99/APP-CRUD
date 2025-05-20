<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Database</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">

        <h1 class="text-center text-info bg-dark display-5 fw-bold fst-italic mb-4">Customer Databases</h1>


        <div class="text-center mb-4">
            <a href="{{ route('product.create') }}" class="btn btn-primary btn-sm px-4 py-2">
                Click Here to Add more Customer
            </a>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>User ID</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Title</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ 'Z_' . str_pad($product->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $product->gender }}</td>
                            <td>{{ $product->department }}</td>
                            <td>{{ $product->title }}</td>
                            <td>
                                <a href="{{ route('product.show', ['product' => $product]) }}" class="btn btn-info btn-sm">
                                    Show
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('product.gone', ['product' => $product]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
