<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Trash</span>-Control</a>

                <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-primary" href="/adminComplaint">Home</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/adminComplaint">New Complaint</a>
                        </li> --}}

                        <li class="nav-item mr-5">
                            <a class="nav-link " href="/adminResolvedComplaint">Resolved Complaint</a>
                        </li>

                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>


    @if (Session()->has('status'))
        <div class="container">
            <div class="alert alert-info" role="alert">
                {{ Session()->get('status') }}

            </div>
        </div>
    @endif

    <div class="container mt-3">
        <table  class="table table-hover table-fixed table-stripped">
            <thead class="thead-dark">        <tr>
                    <th>ID</th>
                    <th>Complaint Type</th>
                    <th>Area</th>
                    <th>Description</th>
                    <th>Image Photo</th>

                    @if ($resolved == false)
                        <th>Buttons</th>
                    @endif
                    <th>Last updated at </th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <?php $counter = 1; ?>
                @foreach ($data as $users)
                    <tr>
                        <th scope="row">{{ $counter++ }}</th>

                        <td>{{ $users['type'] }}</td>
                        <td>{{ $users['area'] }}</td>
                        <td>{{ $users['description'] }}</td>


                        <td><img src="{{ asset('storage/images/' . $users['image']) }}" alt="Not available"
                                width="100px" height=100px /></td>

                        @if ($users['isResolved'] == 0)
                            <td><a href={{ 'resolved-complaint/' . $users['id'] }}><button type="button"
                                        class="btn btn-success">Resolved</button></a></td>
                        @endif
                        <td>{{ $users['updated_at'] }}</td>
                    </tr>
                @endforeach
                <tr class="table-info">



            </tbody>
        </table>
    </div>
    <div class="container">
        {{ $data->links() }}
    </div>
    <style>
        .w-5 {
            display: none;
        }

    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>

</html>
