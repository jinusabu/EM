<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>JS</title>
</head>
<body>
    
<section class="container">
     
      
         
            <div class="card card-primary card-outline">
            
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            <div class="card-header">
            <h3 >
                Assigned Projects Details
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
        <th>Project Name</th>
        <th>Description</th>
        <th>Submission Date</th>
        <th>Status of the Project</th>
      </tr>
    </thead>

    @foreach($data as $data)
    @if ($data->user_id==Auth::user()->id)
    <tr>
        <td>{{ $data->prctname }}</td>
        <td>{{ $data->Description }}</td>
        <td>{{ $data->psd }}</td>

        <form method='post' action="{{route('empStatuUpdate',$data->user_id) }} ">
        @method('PUT') 
        @csrf
        
        <td>  
        <button class="btn btn-success" name='status' value=1>Completed</button></td>
        <td>
        <button class="btn btn-danger" name='status' value=0>Pending</button>
        </td>  
        </form>  
       
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

</body>

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
</html> 
</html>