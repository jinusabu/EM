
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
<section class="container">
     
      
         
            <div class="card card-primary card-outline">
            
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="card-header">
            <h3 >
                Applied Leave History
            </h3>
            </div>
            </nav>
          


    <br><br> 
        
<div class="container">
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th>Reason</th>
        <th>Start_Date</th>
        <th>End_Date</th>
        <th>Back_To_Work</th>
        <th>Status(1-Accept/0-Reject)</th>
      </tr>
    </thead>

    @foreach($leavedata as $data)
    @if ($data->user_id==Auth::user()->id)
    <tr>
        <td>{{ $data->reason }}</td>
        <td>{{ $data->start_date }}</td>
        <td>{{ $data->end_date}}</td>
        <td>{{ $data->btw_date}}</td>
        <td>{{ $data->status}}</td>
        
    </tr>
    @endif
    @endforeach
    </table>
 </div>
</div>


<br><br><br>

<center>
@include('layouts.footer')
</center>






