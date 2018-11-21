<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vehicles</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Club Title</th>
        <th>Region</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($clubs as $club)
     
      <tr>
        <td>{{$club['id']}}</td>
        <td>{{$club['name']}}</td>
        <td>{{$club['region']}}</td>
        
        <td><a href="{{action('ClubController@edit', $club['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ClubController@destroy', $club['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>