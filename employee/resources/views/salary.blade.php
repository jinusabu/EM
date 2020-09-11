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
    
<div class=container>
<div class="row justify-content-center">
        <div class="col-sm-4">   

           <div class="card card-primary"> 
           <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
             <h3 class="title">Add Salary For Employee</h3>
           </nav>  
           <form action="{{ route('salary') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
              <label> <h5> User_id </h5> </label> <br>
              <input type="text" class="form-control" id="userid" name="user_id" >
              </div>  

              <div class="form-group">
              <label> <h5> Department Name </h5> </label> <br>
              <input type="text" class="form-control" id="depname" name="depname" >
              </div>

              <div class="form-group">
              <label> <h5>Base Salary </h5> </label> <br>
              <input type="text" class="form-control" id="bsalary" name="bsalary" >
              </div>
                
              <div class="form-group">
                <label> <h5> Bonous</h5> </label> <br>
                <input type="text" class="form-control" id="bonous" name="bonous" >
              </div>

              <div class="form-group">
                <label> <h5> Profident Fund</h5> </label> <br>
                <input type="text" class="form-control" id="pfund" name="pfund" >
              </div>

              <div class="form-group">
                <label> <h5> Total</h5> </label> <br>
                <input type="text" class="form-control" id="total" name="total" >
              </div>
                  
              <button type="submit" class="btn btn-success" name="submit">Submit</button> 
                &nbsp &nbsp &nbsp
              <a href="{{ asset('home') }}" class="btn btn-info">Back</a> 

            </form>
            
        </div>
</div>        
</div>

</body>
</html>