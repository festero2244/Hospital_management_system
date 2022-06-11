


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

  <style type="text/css">

  label{
    display: inline-block;
    width: 200px;
  }

  </style>
</head>

<body class="">
  <div class="wrapper ">
  @include('admin.sidebar')
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      
      <!-- End Navbar -->
      
      <div class="container-fluid page-body-wrapper">


        

        <div class="container" align="center" style="padding-top: 100px;">

          @if(session()->has('message'))

        <div class="alert alert-success">

          <button type="button" class="close" data-dismiss="alert">
            X
          </button>

          {{ session()->get('message') }}

        </div>


        @endif
      <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

        @csrf

          <div style="padding:20px">
              <label>Doctor Name</label>
              <input type="text" name="name" placeholder="Write name" required="">
          </div>

          <div style="padding:20px">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Enter Phone number" required="">
        </div>

        <div style="padding:20px">
          <label>Speciality</label>
          <select name="speciality" style="width: 200px;" required="">
            <option value="">--Select--</option>
            <option value="skin">Skin</option>
            <option value="heart">Heart</option>
            <option value="eye">Eye</option>
            <option value="nose">Nose</option>
          </select>
      </div>

      <div style="padding:20px">
        <label>Room No</label>
        <input type="text" name="room" placeholder="Doctor Room Number" required="">
    </div>

    <div style="padding:20px">
      <label>Doctor Image</label>
      <input type="file" name="file" required="">
  </div>

  <div style="padding:20px">
    <input type="submit" class="btn btn-success" required="">
</div>

      </form>

        </div>
      </div>
     
      <footer class="footer">
        <div class=" container-fluid ">
          
          
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.styles')
</body>

</html>