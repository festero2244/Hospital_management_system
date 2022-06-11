


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

    <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
    </style>
    <base href="/public">
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
        <div class=" container-fluid " align="center" style="padding: 100px;">

          @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">
            X
          </button>

          {{ session()->get('message') }}

        </div>


        @endif
          
          <form action="{{ url('editdoctor',$data->id) }}" method="Post" enctype="multipart/form-data">

            @csrf

              <div style="padding: 15px;">
                  <label>Doctor Name</label>
                  <input type="text" name="name" value="{{ $data->name }}">
              </div>

              <div style="padding: 15px;">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $data->phone }}">
            </div>

            <div style="padding: 15px;">
                <label>Speciality</label>
                <input type="text" name="speciality" value="{{ $data->speciality }}">
            </div>

            <div style="padding: 15px;">
                <label>Room</label>
                <input type="text" name="room" value="{{ $data->room }}">
            </div>

            <div style="padding: 15px;">
                <label>Old Image</label>
                <img height="150px" width="150px" src="doctorimage/{{ $data->image }}" alt="">
            </div>

            <div style="padding: 15px;">
                <label>Change Image</label>
                <input type="file" name="file">
            </div>

            <div style="padding: 15px;">              
              <input type="submit" class="btn btn-primary" style="background-color: red;">
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.styles')
</body>

</html>