@extends('welcome')

@section('titulo')

Mapa

@endsection

@section('content')

<div id="teste" class="card box roxo col-md-4">
	<div class="card">
		<div class="card-header card-header-cinza card-header-icon">
			<div class="card-icon">
				<i class="material-icons">search</i>
			</div>
			<h6 class="card-title">Pesquisa avançada</h6>
			<div class="card-body"></div>
		</div>
	<a href="#teste" class="btn btn-lg showBox roxo interno">teste</a>
	</div>
</div>

<a href="#teste" class="btn btn-lg showBox" style="z-index: 11; top: 120px; position: absolute;">teste</a>

<div class="page-header login-page header-filter" filter-color="black" style="background-image: url('/../img/login.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->    		
</div>

@endsection

@push('scripts')

@endpush