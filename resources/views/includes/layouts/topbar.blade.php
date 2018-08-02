<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top back-branco hide" id="top-bar" color-on-scroll="500">
	<div class="container-fluid">
 	<a href="http://www.mesquita.rj.gov.br/pmm/" target="_blank">
		<img class="logo" src="{{ asset("img/Logotipo-Horizontal-Colorido-PMM.png") }}">
 	</a>

 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
		<span class="sr-only">Toggle navigation</span>
		<span class="navbar-toggler-icon icon-bar"></span>
		<span class="navbar-toggler-icon icon-bar"></span>
		<span class="navbar-toggler-icon icon-bar"></span>
 	</button>

 	<div class="collapse navbar-collapse justify-content-end">
    <div class="navbar-form">
      <div id="pac-card" class="input-group has-success">
        <input id="pac-input" type="text" class="form-control" placeholder="Clique aqui e digite o endereço">
      </div>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item"></li>
    </ul>
	</div>

	
		<img class="logo360" src="{{ asset("img/loading.gif") }}">
 	
</nav>
<!-- End Navbar -->

@push('scripts')

@endpush