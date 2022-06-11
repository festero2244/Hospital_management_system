<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        Admin Section
      </a>
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Design Steam
      </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="./dashboard.html">
            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li>
          <a href="{{ url('add_doctor_view') }}">
            <i class="now-ui-icons education_atom"></i>
            <p>Add Doctors</p>
          </a>
        </li>

        <li>
          <a href="{{ url('showappointment') }}">
            <i class="now-ui-icons education_atom"></i>
            <p>Appointments</p>
          </a>
        </li>

        <li>
          <a href="{{ url('showdoctor') }}">
            <i class="now-ui-icons education_atom"></i>
            <p>All Doctors</p>
          </a>
        </li>

      </ul>
    </div>
  </div>