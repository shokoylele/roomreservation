<!--START OF HEADER-->
  <nav class="navbar navbar-static-top">
    <div class="container-fluid">
      <!--NAVBAR LOGO-->
      <div class="navbar-header"> 
        <a href={{ URL::route('Dashboard') }} class="navbar-brand" style="font-size: 20px; margin-left: 0.3rem;">
          <img src="img/iacademy_shield.png" style="width: 24px; display: inline-block;">
          iRESERVE
        </a>
      </div>
      <!--END OF NAVBAR LOGO-->
      
      <!--NAVBAR MENU-->
      @yield('menu')
      
      <!--NAVBAR RIGHT SIDE-->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!--NOTIFICATIONS-->
          @if ($role == 0 or $role == 1 )
          <!--NOTIFICATIONS-->
          @include('layouts.inc.notifications')
          <!--END OF NOTIFICATIONS-->
          @endif
          <!--USER INFO-->
          @include('layouts.inc.info')
        </ul>      
      </div> <!--END OF NAVBAR RIGHT SIDE-->
    </div> <!--END OF CONTAINER-->
  </nav> <!--END OF NAV-->