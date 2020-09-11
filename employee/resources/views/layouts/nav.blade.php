
<!DOCTYPE html>
<html>
<title>JS Employee</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Sidebar -->
<aside class="sidebar-dark-primary">

<div class="w3-sidebar w3-green w3-bar-block" style="width:25%">

  <h3 class="w3-bar-item">Menu</h3>
  <a href="{{ asset('/home') }}" class="w3-bar-item w3-button">
  <i class="fa fa-home"></i> Home 
  </a>

  

  <a href="{{ asset('/empview') }}"class="w3-bar-item w3-button">
  <i class="fa fa-info-circle"></i> 
      Employee Records</a>

  <a href="{{asset('/assignproject')}}" class="w3-bar-item w3-button">
  <i class="fa fa-search"></i> Add Project 
  </a>

  <a href="{{ ('/addproject') }}" class="w3-bar-item w3-button">
  <i class="fa fa-info"></i> Assign Project 
  </a>

  <a href="{{ ('/searchemp') }}"class="w3-bar-item w3-button">
  <i class="fa fa-file-text"></i> 
      Search Project Details</a>
 
  <a href="{{ ('/salary') }}"class="w3-bar-item w3-button">
  <i class="fa fa-rupee"></i> 
      salary For Employee</a>

  <a href="{{ asset('/empleave') }}" class="w3-bar-item w3-button">
  <i class="fa fa-envelope-open"></i> Employee Leaves Records
  </a>


  

  Employee Home Menu 
  <a href="{{ ('/profile')}}" class="w3-bar-item w3-button">
  <i class="fa fa-address-book"></i> Profile
  </a>

  <a href="{{ ('/empstatus')}}" class="w3-bar-item w3-button">
  <i class="fa fa-bell"></i> Assigned Project Details
  </a>

  <a href="{{ ('/leavehistory')}}" class="w3-bar-item w3-button">
  <i class="fa fa-history"></i> Leave History
  </a>

  <a href="{{ asset('/applyleave') }}" class="w3-bar-item w3-button">
  <i class="fa fa-envelope"></i> Apply Leaves
  </a>
 
</div>
</aside>

<!-- Page Content -->




  
</body>
</html>



































