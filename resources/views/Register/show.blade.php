<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Events</title>
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
        <th>Model</th>
        <th>Make</th>
        <th>Year</th>
        <th>Color</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($vehicles as $vehicle)
     
      <tr>
        <td>{{$vehicle['vehicle_id']}}</td>
        <td>{{$vehicle['model_id']}}</td>
        <td>{{$vehicle['make']}}</td>
        <td>{{$vehicle['year']}}</td>
        <td>{{$vehicle['color']}}</td>
        
        <td><a href="{{action('RegistrationController@edit', $vehicle['vehicle_id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('RegistrationController@destroy', $vehicle['vehicle_id'])}}" method="post">
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