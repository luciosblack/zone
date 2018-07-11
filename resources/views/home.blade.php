<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="{{ asset ('img/apple-icon.png')}}">
  <link rel="icon" href="{{ asset('img/favicon.png')}}">
  
  <title> @section('titulo') @show </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ asset('css/material-dashboard.css')}}">
  <!-- Documentation extras -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets-for-demo/demo.css')}}" rel="stylesheet" type="text/css" />
  <!-- iframe removal -->

  <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}">
  @stack('css')

  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">

</head>

<body class="sidebar-mini">
  
    {{-- Menu Lateral --}}
    @include('includes.layouts.sidebar')

    <div class="main-panel">
      
      {{-- Menu Superior --}}
      @include('includes.layouts.topbar')

      <div id="map"></div>
      
      {{-- Conteúdo principal --}}
      @yield('content')

      

      {{-- Rodapé --}}
      @include('includes.layouts.footer')

    </div>
  
</body>
<!--   Core JS Files   -->
<script src="{{ asset ('js/core/jquery.min.js')}}"></script>
<script src="{{ asset ('js/core/popper.min.js')}}"></script>
<script src="{{ asset ('js/bootstrap-material-design.js')}}"></script>
<script src="{{ asset ('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin  -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDcdW2PsrS1fbsXKmZ6P9Ii8zub5FDu3WQ"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="{{ asset ('js/plugins/moment.min.js')}}"></script>
<!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ asset ('js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset ('js/plugins/nouislider.min.js')}}"></script>
<!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset ('js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="{{ asset ('js/plugins/bootstrap-tagsinput.js')}}"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('js/plugins/jasny-bootstrap.min.js')}}"></script>
<!-- Plugins for presentation and navigation  -->
<script src="{{ asset('assets-for-demo/js/modernizr.js')}}"></script>
<script src="{{ asset('assets-for-demo/js/vertical-nav.js')}}"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{ asset('js/material-dashboard.js?v=2.0.1')}}"></script>
<!-- Dashboard scripts -->
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('js/plugins/arrive.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('js/plugins/jquery.validate.min.js')}}"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ asset('js/plugins/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('js/plugins/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ asset('js/plugins/nouislider.min.js')}}"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('js/plugins/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ asset('js/plugins/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ asset('js/plugins/sweetalert2.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('js/plugins/fullcalendar.min.js')}}"></script>
<!-- demo init -->
<script src="{{ asset('js/plugins/demo.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>
<script src="{{ asset("js/geoxml3/polys/geoxml3.js") }}" type="text/javascript"></script>
<script type="text/javascript">
  $().ready(function() {
    demo.checkFullPageBackgroundImage();

    setTimeout(function() {
      // after 1000 ms we add the class animated to the login/register card
      $('.card').removeClass('card-hidden');
    }, 700)
  });
</script>

<script>

</script>

@stack('scripts')

</html>