<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item Management</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <header>
        <!-- Bootstrap Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ route('bikes.index') }}">Item Management</a>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Item Management</h2>
            </div>
            <div class="col text-end">
                <a href="{{ route('bikes.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <form method="POST" action="{{ route('search') }}" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="text" placeholder="Search" id="search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Model</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bikes as $bike)
                        <tr>
                            <td>
                                @if ($bike->image)
                                    <img src="{{ asset('storage/' . $bike->image) }}" alt="{{ $bike->model }}" class="img-thumbnail" width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('bikes.show', $bike->id) }}">{{ $bike->model }}</a>
                            </td>
                            <td>{{ $bike->price }}</td>
                            <td>{{ $bike->description }}</td>
                            <td>
                                <a href="{{ route('bikes.edit', $bike->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('bikes.destroy', $bike->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <div class="text-center p-3" style="background-color: #f8f9fa">
            &copy; {{ date('Y') }} Your Bike Shop
        </div>
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
