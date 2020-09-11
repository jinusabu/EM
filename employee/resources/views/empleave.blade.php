<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>JS</title>
</head>
<body>

<section class="container">
     
      
         
            <div class="card card-primary card-outline">
            
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="card-header">
                <h3 >
                Employees Leave Details
                </h3>
            </div>
            </nav>
          


    <br><br> 


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        
<div class="container">
  <br><br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Emp_id</th>
        <th>Name</th>
        <th>Department</th>
        <th>Reason</th>
        <th>Start_Date</th>
        <th>End_Date</th>
        <th>Back_To_Work</th>
        <th>Status</th>
      </tr>
    </thead>

    @foreach($leavedetails as $leavedetail)
    <tr>
        <td>{{ $leavedetail->id}}</td>
        <td>{{ $leavedetail->name }}</td>
        <td>{{ $leavedetail->dep}}</td>
        <td>{{ $leavedetail->reason }}</th>
        <td>{{ $leavedetail->start_date }}</td>
        <td>{{ $leavedetail->end_date }}</td>
        <td>{{ $leavedetail->btw_date }}</td>
        
        <form method='post' action="{{route('leaveStatuUpdate',$leavedetail->id) }} ">
        @method('PUT') 
        @csrf
        <!-- you can do it by 3 methods ..1 normal, ajax, -->
        <td>  
        <!-- <a href="" class="btn btn-success" value=0>Accept</a>  -->
        <button class="btn btn-success" name='status' value=1>Accept</button>
        </td>

        <td> 
        <!-- <a href="" class="btn btn-danger"> Reject </a>   -->
        <button class="btn btn-danger" name='status' value=0>Reject</button>
        </td>
        </form>
    </tr>
    @endforeach
    </table>
 </div>
</div>

</body>
</html>