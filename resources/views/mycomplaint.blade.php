<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <title>Document</title>
</head>
<body>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Trash</span>-Transfer</a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('dashboard')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('add-complaint')}}">Add Complaints</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/resolvedcomplaints">Resolved Complaints</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mycomplaints">My Complaints</a>
            </li>
            <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
<div class="container mt-3">
  <table  class="table table-hover table-fixed table-stripped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Area</th>
        <th>Complaint</th>
        <th>Image</th>
        {{-- @can('isAdmin',record::class) --}}
        <th>Edit</th>

        <th>Status</th>

        {{-- @endcan   --}}
    </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody class="table-striped">
      <?php $counter=1 ?>
     @foreach($mycomplaint as $users)
    <tr>
        @if($users->isResolved==0)
        <th scope="row">{{$users['id']}}</th>

    <td>{{$users['type']}}</td>
    <td>{{$users['area']}}</td>
    <td>{{$users['description']}}</td>
    {{-- <td>{{asset('storage/images/'.$users['image_path'])}}</td> --}}

    <td><img src="{{asset('storage/images/'.$users['image'])}}" alt="Not available" width="100px" height=100px /></td>



    {{-- <td><a href={{"update-complaint/".$users['id']}}>Update</a> --}}
      <td><button type="button" class="btn" style="background-color:#07be94;"><a href={{"update-complaint/".$users['id']}} style="color:black">Edit</a></button>

   <td><button type="button" class="btn" style="background-color:#07be94;"><a href="resolvedmycomplaints/{{$users['id']}}" style="color:black">Resolved</a></button>

   @endif
  </tr>

    @endforeach<tr class="table-info">



    </tbody>
    </table>
  </div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>










