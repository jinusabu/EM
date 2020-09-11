@extends('home')
@section('content')

<html>
<body>  
    
    
    <div class="row justify-content-center">
        <div class="col-sm-4">   

           <div class="card card-primary"> 
           <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
             
                <h3 class="title">Edit Employee Details </h3>
             
              </nav>  
              <form action="/update/{{ $empdatas[0]->id }}" method="post">
                {{ csrf_field() }}
                
                  <div class="form-group">
                    <label> <h5> Employee Name </h5> </label> <br>
                    <input type="text" class="form-control" id="employeename" name="name" value="{{ $empdatas[0]->name }}">
                  </div>

                  <div class="form-group">
                    <label> <h5> Gender </h5> </label>
                    <input type="text" class="form-control" id="employeegender" name="gender" value="{{ $empdatas[0]->gender }}">
                  </div>

                  <div class="form-group">
                    <label> <h5> Date of Birth </h5> </label>
                    <input type="date" class="form-control" id="employeedob" name="dob" value="{{ $empdatas[0]->dob }}">
                  </div>

                  <div class="form-group">
                    <label> <h5> Department </h5> </label>
                    <input type="text" class="form-control" id="employeedept" name="dep" value="{{ $empdatas[0]->dep }}">
                  </div>

                  <div class="form-group">
                    <label> <h5> Qualification </h5> </label>
                    <input type="text" class="form-control" id="employeedegree" name="qualification" value="{{ $empdatas[0]->qualification }}">
                  </div>
                  
                  <div class="form-group">
                    <label> <h5> Email address </h5> </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $empdatas[0]->email }}">
                  </div>

                  <div class="form-group">
                    <label> <h5> Phone Number </h5> </label>
                    <input type="numeric" class="form-control" id="employeephone" name="phone" value="{{ $empdatas[0]->phone }}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary" name="submit">Update</button> 
                  &nbsp &nbsp &nbsp
                  <a href="{{ asset('empview') }}" class="btn btn-primary">Back</a> 


              </form>
            
            </div>
        </div>
    </div>    

<br>
<center>
@include('layouts.footer')
</center>
@endsection  

</body>
</html>


