<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Additional custom styles for improved appearance */
        body {
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 28px;
            font-weight: bold;
        }

        .card-subtitle {
            font-size: 22px;
            color: #007BFF;
        }

        .card-text {
            font-size: 18px;
        }
        
        .product-image {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <!-- Place your navigation bar here (Bootstrap Navbar) -->
    </header>
    <main>
        <div class="container">
            <div class="card">
                <!-- Display the image -->
                <img src="{{ $bike->image }}" alt="Product Image" class="product-image">
                <div class="card-body">
                    <h2 class="card-title">{{$bike->model}}</h2>
                    <h4 class="card-subtitle">${{ number_format($bike->price, 2) }}</h4>
                    <p class="card-text">{{$bike->description}}</p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- Place your footer here -->
    </footer>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
