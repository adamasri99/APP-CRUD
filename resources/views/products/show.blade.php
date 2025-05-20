<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow px-5 py-4"> <!-- padding only left-right and small top-bottom -->
                    
                    <h1 class="text-center text-info bg-dark fw-bold fst-italic mb-4">Customer Details</h1>
    
                    <div class="mx-auto" style="max-width: 500px;"> <!-- center the content inside -->
                        <p class="mb-2"><strong>Name:</strong> {{ $product->name }}</p>
                        <p class="mb-2"><strong>User ID:</strong> {{ 'Z_' . str_pad($product->id, 3, '0', STR_PAD_LEFT) }}</p>
                        <p class="mb-2"><strong>Gender:</strong> {{ $product->gender }}</p>
                        <p class="mb-2"><strong>Department:</strong> {{ $product->department }}</p>
                        <p class="mb-2"><strong>Title:</strong> {{ $product->title }}</p>
                    </div>
    
                    <div class="text-center mt-4">
                        <a href="{{ route('products.index') }}" class="btn btn-primary">
                            Back to List
                        </a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
