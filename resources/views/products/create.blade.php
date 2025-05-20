<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center fw-bold fst-italic text-info bg-dark">
                        <h1>Hi, Welcome to Our Store</h1>
                        <h5>Please Enter Your Detail</h5>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('product.store') }}">
                            @csrf
                            @method('POST')

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Enter your gender" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <input type="text" name="department" class="form-control" placeholder="Enter your department" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-block">Title</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mr" {{ old('title') == 'Mr' ? 'checked' : '' }}>
                                    <label class="form-check-label">Mr</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mrs" {{ old('title') == 'Mrs' ? 'checked' : '' }}>
                                    <label class="form-check-label">Mrs</label>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Save Your Detail</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

