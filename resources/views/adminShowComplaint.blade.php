<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    </style>

</head>

<body>
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
                    <th colspan="3">Buttons</th>
                    @can('isAdmin', record::class)
                        <th>DOWNLOAD</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    @endcan
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
                        {{-- <td>{{asset('storage/images/'.$users['image_path'])}}</td> --}}

                        <td><img src="{{ asset('storage/images/' . $users['image']) }}" alt="Not available"
                                width="100px" height=100px /></td>

                        {{-- <td><a href={{"download/".$users['id']}}><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
              </svg>Download</a></td> --}}

                        {{-- <td><a href={{"update-complaint/".$users['id']}}>Update</a> --}}

                        {{-- <td><a href={{"delete-complaint/".$users['id']}}>Delete</a> --}}
                        <td><a href={{ 'resolved-complaint/' . $users['id'] }}><button type="button"
                                    class="btn btn-success">Resolved</button></a></td>
                    </tr>
                @endforeach
                <tr class="table-info">



            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
