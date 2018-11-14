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
        <th>Name</th>
        <th>Date</th>
        <th>Early Cost</th>
        <th>Regular Cost</th>
        <th>Date Created</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($events as $event)
     
      <tr>
        <td>{{$event['id']}}</td>
        <td>{{$event['name']}}</td>
        <td>{{$event['date']}}</td>
        <td>{{$event['early_cost']}}</td>
        <td>{{$event['reg_cost']}}</td>
        
        <td><a href="{{action('EventController@edit', $event['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EventController@destroy', $event['id'])}}" method="post">
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