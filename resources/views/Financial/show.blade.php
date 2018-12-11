@extends('layouts.app')
@section('content')
<div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <?php $total = 0; $totale = 0; $totald = 0; $totals = 0?>
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
        $count = 0;
        if (count($result1) > $count)
        {
            $count = count($result1);
        }
        if (count($result2) > $count)
        {
            $count = count($result2);
        }
        if (count($result3) > $count)
        {
            $count = count($result3);
        }

       for ($index = 0; $index < $count; $index++)
       {  
           //$total += $money[$index]->charge;
           echo "<tr><td>";  
           if ($index + 1 <= count($result1)) {
           echo "$" . $result1[$index]->charge;
            $total += $result1[$index]->charge;
            $totale += $result1[$index]->charge;}
           echo "</td><td>";
           if ($index + 1 <= count($result2)){
           echo "$" . $result2[$index]->charge;
            $total += $result2[$index]->charge;
            $totald += $result2[$index]->charge;}
           echo "</td><td>"; 
           if ($index + 1 <= count($result3)){
           echo "$" . $result3[$index]->charge;
            $total += $result3[$index]->charge;
            $totals += $result3[$index]->charge;}
           echo "</td></tr>";}
       ?>
    </tbody>
    <tfoot>
        <tr>
            <td><b><?php echo "$" . $totale ?></b></td>
            <td><b><?php echo "$" . $totald ?></b></td>
            <td><b><?php echo "$" . $totals ?></b></td>
            <td><b><u><?php echo "$" . $total ?></u></b></td>
        </tr>
    </tfoot>
  </table>
  </div>
@endsection