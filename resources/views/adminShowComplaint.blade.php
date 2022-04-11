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
    
            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
              </div>
            </form>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="doctors.html">Doctors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-dark ml-lg-3" href="">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-dark ml-lg-3" href="">Register</a>
                </li>
                
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
    <h1>Admin Complaint Show</h1>
    <nav class="nav">
        <a class="nav-link active" href="/adminComplaint"><button type="button" class="btn btn-info">New Complaint Recieved</button></a>
        <a class="nav-link" href="/adminResolvedComplaint"><button type="button" class="btn btn-info">Resolved Complaint Recieved</button></a>

    </nav>
    <div class="container">
        <table class="table table-hover table-fixed table-striped" border="2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>Image Photo</th>
                    
                    @if($resolved == false)
                    <th >Buttons</th>
                    @endif
                   <th>Last updated at </th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                @foreach ($data as $users)
                    <tr>
                        <th scope="row">{{ $users['id'] }}</th>

                        <td>{{ $users['type'] }}</td>
                        <td>{{ $users['area'] }}</td>
                        <td>{{ $users['description'] }}</td>
                     

                        <td><img src="{{ asset('storage/images/' . $users['image']) }}" alt="Not available"
                                width="100px" height=100px /></td>
                      
                        @if($users['isResolved'] == 0)
                        <td><a href={{ 'resolved-complaint/' . $users['id'] }}><button type="button"
                            class="btn btn-success">Resolved</button></a></td>
                        @endif
                            <td>{{$users['updated_at']}}</td>
                    </tr>
                @endforeach
                <tr class="table-info">



            </tbody>
        </table>
    </div>
    <div class="container">
        {{$data->links()}}
    </div>
    <style>
        .w-5{
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
