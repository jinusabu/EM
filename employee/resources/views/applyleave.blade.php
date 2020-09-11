<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>JS</title>
</head>
<body>      
 <form action="{{ route('applyleave') }}" method="post">  
 <!-- use named routes in views -->
 {{csrf_field()}}
    <div class="container">
    <div class="col-sm-4"> 
    <div class="card card-secondary"> 
           <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
             <h3 class="title">Apply For Leave </h3>
           </nav>

        <div class="form-group">
            <label> <h5> Reason </h5> </label>
            <input type="text" class="form-control" id="reason" name="reason">
        </div>

        <div class="form-group">
            <label> <h5> Start Date </h5> </label>
            <input type="date" class="form-control" id="startdate" name="start_date">
        </div>

        <div class="form-group">
            <label> <h5> End Date </h5> </label>
            <input type="date" class="form-control" id="enddate" name="end_date">
        </div>

        <div class="form-group">
            <label> <h5> Back To work on </h5> </label>
            <input type="date" class="form-control" id="btwdate" name="btw_date">
        </div>
        <br>
  
        <button type="submit" class="btn btn-success" name="submit">Apply</button> 
        &nbsp &nbsp &nbsp
        <a href="/home" class="btn btn-info">Back</a> 
    </div>
    </div> 
    </div>   
</form>
</body>
</html>        


     