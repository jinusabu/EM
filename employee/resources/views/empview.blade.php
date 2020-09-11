
@include('layouts.app')
@section('content')



<section class="container">
     
      
         
            <div class="card card-primary card-outline">
            
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="card-header">
                <h3 >
                Employee Record Details
                </h3>
            </div>
            </nav>
          


    <br><br> 
        
<div class="container">
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th>Emp_id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Date_of_Birth</th>
        <th>Department_Name</th>
        <th>Qualification</th>
        <th>E-mail</th>
        <th>Phone No.</th>
        <th>Operations</th>
      </tr>
    </thead>

    @foreach($empdatas as $empdata)
    <tr>
        <td>{{ $empdata->id }}</td>
        <td>{{ $empdata->name }}</td>
        <td>{{ $empdata->gender}}</td>
        <td>{{ $empdata->dob }}</th>
        <td>{{ $empdata->dep }}</td>
        <td>{{ $empdata->qualification }}</td>
        <td>{{ $empdata->email }}</td>
        <td>{{ $empdata->phone }}</td>
        
        <td>  
        <a href="edit/{{ $empdata->id }}" class="btn btn-success">Edit</a> 
       </td>

        <td> 
        <a href="/delete/{{ $empdata->id }}" class="btn btn-danger"> Delete </a>  </td>
        </td>
    </tr>
    @endforeach
    </table>
 </div>
</div>



<br><br><br>

<center>
@include('layouts.footer')
</center>


