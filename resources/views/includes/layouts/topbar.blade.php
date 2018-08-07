<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top back-branco hide" id="top-bar" color-on-scroll="500">

	<a href="http://www.mesquita.rj.gov.br/pmm/" target="_blank" class="btn btn-link">
		<img class="logo" src="{{ asset("img/Logotipo-Horizontal-Colorido-PMM.png") }}">
 	</a>
  
  <div class="col-sm flex-item">
    <div id="pac-card" class="input-group has-success">
    	<button id="pac-button" type="submit" class="btn btn-success btn-round btn-link btn-just-icon">
      	<i class="material-icons">search</i>
        <div class="ripple-container"></div>
      </button>
      <input id="pac-input" type="text" class="form-control" placeholder="Clique aqui e digite o endereço">
    </div>
  </div>

  <a class="btn btn-link flex-item">
		<img class="logo360" src="{{ asset("img/loading.gif") }}">
	</a>

</nav>
<!-- End Navbar -->

@push('scripts')

<script type="text/javascript">
	$("#pac-button").click(function(e) {

		$("#pac-input").trigger("select");

	});
</script>

@endpush