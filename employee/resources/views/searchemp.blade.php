<!DOCTYPE html>
<html lang="en">
<head>
<title>JS Employee</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>
    

    <div class="container">
    <div class="row">
    <div class="panel panel-default">
    <a href="{{ asset('home') }}" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Back</a>
    <div class="panel-heading">
    <h3>Project Information </h3>
    </div><br><br>
    <div class="panel-body">
    <div class="form-group">
    <form action="/searchemp" method="GET" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search"
            placeholder="Search by project name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
    <br><br>
</form>
    </div>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
         <th>Emp_id</th>
         <th>Emp_Name</th>
         <th>Department</th>
         <th>Project Name</th>
         <th>Description</th>
         <th>Emp_Due_Date</th>
         <th>Submission Date</th>
      </tr>
    </thead>
    <tbody>
    
    @foreach ($data as $product) 
      
     <tr>
         <td>{{$product->user_id }}</td>
         <td>{{$product->name}}</td>
         <td>{{$product->dep }}</td>
         <td>{{$product->prctname}}</td>
         <td>{{$product->Description }}</td>
         <td>{{$product->psd }}</td>
         <td>{{$product->sub_date }} </td>

      </tr>
    </tbody>
    
    @endforeach
    </table>
    </div>
             

    </div>
    </div>
    </div>
    
