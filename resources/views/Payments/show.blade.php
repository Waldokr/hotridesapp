<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Approved Payments</title>
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
        <th>Card Type</th>
        <th>Card Number</th>
        <th>Expiry Date</th>
        <th>Carholder Name</th>
        <th>Amount Charged</th>
        <th>Date Created</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($payments as $payment)
     
      <tr>
        <td>{{$payment['id']}}</td>
        <td>{{$payment['type']}}</td>
        <td>{{$payment['number']}}</td>
        <td>{{$payment['expiry']}}</td>
        <td>{{$payment['name']}}</td>
        <td>{{$payment['charge']}}</td>
        
        <td><a href="{{action('PaymentController@edit', $payment['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PaymentController@destroy', $payment['id'])}}" method="post">
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