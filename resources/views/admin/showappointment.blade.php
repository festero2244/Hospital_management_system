


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
          
        <div align="center" style="padding-top: 100px;">
            <table>
            <tr style="background-color: black;">
                <th style="padding: 10px;">Customer Name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Phone</th>
                <th style="padding: 10px;">Doctor Name</th>
                <th style="padding: 10px;">Date</th>
                <th style="padding: 10px;">Message</th>
                <th style="padding: 10px;">Status</th>
                <th style="padding: 10px;">Approved</th>
                <th style="padding: 10px;">Cancelled</th>
            </tr>

            @foreach ($data as $appoint)
                
            
            <tr align="center" style="background-color: orange;">
                <td>{{ $appoint->name }}</td>
                <td>{{ $appoint->email }}</td>
                <td>{{ $appoint->phone }}</td>
                <td>{{ $appoint->doctor }}</td>
                <td>{{ $appoint->date }}</td>
                <td>{{ $appoint->message }}</td>
                <td style="background-color: red; color:white;">{{ $appoint->status }}</td>
                <td><a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a> </td>
                <td><a class="btn btn-danger" href="{{ url('cancel',$appoint->id) }}">Canceled</a> </td>
            </tr>
            @endforeach
        </table>
        </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.styles')
</body>

</html>