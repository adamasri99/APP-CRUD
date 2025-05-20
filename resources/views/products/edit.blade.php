<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Customer</title>
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h1 class="text-center mb-4">Edit a Product</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('product.update', ['product'=>$product]) }}">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $product->name) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ old('gender', $product->gender) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Department</label>
                    <input type="text" name="department" class="form-control" placeholder="Department" value="{{ old('department', $product->department) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label d-block">Title</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="title" value="Mr" {{ old('title', $product->title) == 'Mr' ? 'checked' : '' }}>
                        <label class="form-check-label">Mr</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="title" value="Mrs" {{ old('title', $product->title) == 'Mrs' ? 'checked' : '' }}>
                        <label class="form-check-label">Mrs</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-warning" style="width: 80%">Edit This</button>
                </div>

            </form>
        </div>
    </div>
    </div>

    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
