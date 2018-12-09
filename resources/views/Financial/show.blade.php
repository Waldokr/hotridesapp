@extends('layouts.app')
@section('content')
<div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <?php $total = 0; ?>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Event Revenue</th> 
        <th>Donations</th>
        <th>Sponsors</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        $result1 = DB::select('SELECT charge FROM payments');
        $result2 = DB::select('SELECT charge FROM donations');
        $result3 = DB::select('SELECT charge FROM sponsors');
       //echo "$" . $result[0]->charge;

        //$fmt = new NumberFormatter('de')

       foreach ($result1 as $index => $money)
       {  $total += $money->charge;
            $total += $result2[$index]->charge;
            $total += $result3[$index]->charge;
           echo "<tr><td>$" . $money->charge . "</td><td>$" . $result2[$index]->charge . "</td><td>" . $result3[$index]->charge ."</td></tr>";}
       ?>
       <tr>
       <td></td>
       <td></td>
       <td></td>
       <td><?php echo "$" . $total ?></td>
       </tr>
    </tbody>
  </table>
  </div>
@endsection