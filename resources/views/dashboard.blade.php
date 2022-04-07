<table  class="table table-hover table-fixed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>PASSWORD</th>
        <th>PHOTO</th>
        @can('isAdmin',record::class)
        <th>DOWNLOAD</th>
        <th>EDIT</th>
        <th>DELETE</th>
        @endcan  
    </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>
     @foreach($data as $users)
    <tr>
    <th scope="row">{{$users['id']}}</th>
    
    <td>{{$users['type']}}</td>
    <td>{{$users['area']}}</td>
    <td>{{$users['description']}}</td>
    {{-- <td>{{asset('storage/images/'.$users['image_path'])}}</td> --}}
    <td><img src="{{asset('storage/images/'.$users['image'])}}" alt="Not available" width="100px" height=100px /></td>
    
    <td><a href={{"download/".$users['id']}}><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
      </svg>Download</a></td>

    <td><a href={{"update-complaint/".$users['id']}}>Update</a>
    
    <td><a href={{"delete-complaint/".$users['id']}}>Delete</a>
    </tr>
   
    @endforeach<tr class="table-info">
      
        
    
    </tbody>
    </table>