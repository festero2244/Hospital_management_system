


<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
</head>

<body class="">
  <div class="wrapper ">
  @include('admin.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('admin.navbar')
      <!-- End Navbar -->
      <div class="container-fluid page-body-wrapper">
     
        <div class=" container-fluid ">
          
            <div align="center" style="padding-top: 100px;">

                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px;">Doctor Name</th>
                        <th style="padding: 10px;">Phone</th>
                        <th style="padding: 10px;">Speciality</th>
                        <th style="padding: 10px;">Room No</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delete</th>
                        <th style="padding: 10px;">Update</th>
                        
                    </tr>
                    @foreach ($data as $doctor)
                        
                    <tr align="center" style="background-color: orange;">
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img height="100px" width="100px" src="doctorimage/{{ $doctor->image }}"></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a></td>
                        <td><a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a></td>
                    </tr>

                    @endforeach

            </div>
          
        </div>
    </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.styles')
</body>

</html>