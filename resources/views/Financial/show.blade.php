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
        $results = array
        (
            $result1 = DB::select('SELECT charge FROM payments'),
            $result2 = DB::select('SELECT charge FROM donations'),
            $result3 = DB::select('SELECT charge FROM sponsors')
        );
        //echo "$" . $result[0]->charge;
        //$fmt = new NumberFormatter('de')

       foreach ($results as $index => $money)
       {  
           //$total += $money[$index]->charge;
           echo "<tr><td>";  
           if ($index + 1 <= count($result1)) {
           echo "$" . $result1[$index]->charge;
            $total += $result1[$index]->charge;}
           echo "</td><td>";
           if ($index + 1 <= count($result2)){
           echo "$" . $result2[$index]->charge;
            $total += $result2[$index]->charge;}
           echo "</td><td>"; 
           if ($index + 1 <= count($result3)){
           echo "$" . $result3[$index]->charge;
            $total += $result3[$index]->charge;}
           echo "</td></tr>";}
       ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td colspan="1"><b><?php echo "$" . $total ?></b></td>
        </tr>
    </tfoot>
  </table>
  </div>
@endsection