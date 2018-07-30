<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="{{ asset ('img/apple-icon.png')}}">
  <link rel="icon" href="{{ asset('img/favicon.png')}}">
  <title>
    Relatório de Zoneamento
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ asset('css/material-dashboard.css')}}">
  <!-- Documentation extras -->
  <!-- CSS Just for demo purpose, dont include it in your project -->
  <link href="{{ asset('assets-for-demo/demo.css')}}" rel="stylesheet" />
  <!-- iframe removal -->

  <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{ asset('css/print.css')}}">
</head>

<body>

			<div id="relatorio" class="card col-sm-11">
				<div class=" card-header text-center d-flex flex-wrap">    
					<div class="col-sm-12">
						<img src="img/brasao.png">
					</div>
				  <p class="col-sm-12 category text-center">
				  	Estado do Rio de Janeiro <br>
				  	Prefeitura Municipal de Mesquita <br>
				  	Secretária Municipal de Meio Ambiente e Urbanismo<br>
				  	Departamento de Edificações<br>
				  </p>
				</div>
        <div class="card-body">
          <h4 class="card-header printBG-neutral text-center">Certidão de Zoneamento</h4>
          {{-------------- Primeira tabela --------------------------------------- --}}
          <table id="table1" class="table">
            <thead>
              <tr>
                <th class="text-left">1 - Identificação da Consulta</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Endereço:</td>
                <td>{{ $logradouro }}</td>
              </tr>
            </tbody>
          </table>
          {{-------------- Segunda tabela --------------------------------------- --}}
          <table id="table 2" class="table">
            <thead>
              <tr>
                <th class="text-left">2 - Zoneamento</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Zona:</td>
                <td>{{ $zona->sigla }}</td>
                <td>{{ $zona->nome }}</td>
              </tr>
              <tr>
                <td>Uso:</td>
              </tr>
              @foreach($zona->usos as $uso)
                <tr>
                  <td>{{ $uso->codigo }}</td>
                  <td>{{ $uso->descricao }}</td>
                  <td>{{ $uso->pivot->uso }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{-------------- Terceira tabela --------------------------------------- --}}
          <table id="table3" class="table">
            <thead>
              <tr>
                <th class="text-left">3 - Dados Informados pelo Técnico</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Testada Mínima:</td>
                <td>{{ $zona->testada }}</td>
              </tr>
              <tr>
                <td>Área Total Mínima do Lote:</td>
                <td>{{ $zona->area }}</td>
              </tr>
              <tr>
                <td>Coeficiente de Aprovamento Mínimo:</td>
                <td>{{ $zona->coeficiente_min }}</td>
              </tr>
              <tr>
                <td>Coeficiente de Aprovamento Básico:</td>
                <td>{{ $zona->coeficiente_bas }}</td>
              </tr>
              <tr>
                <td>Coeficiente de Aprovamento Máximo:</td>
                <td>{{ $zona->coeficiente_max }}</td>
              </tr>
              <tr>
                <td>Afastamento Frontal:</td>
                <td>{{ $zona->afastamento }}</td>
              </tr>
              <tr>
                <td>Taxa de Ocupação:</td>
                <td>{{ $zona->tx_ocupacao }}</td>
              </tr>
              <tr>
                <td>Taxa de Permeabilidade:</td>
                <td>{{ $zona->tx_permeabilidade }}</td>
              </tr>
              <tr>
                <td>Vagas de Estacionamento:</td>
                <td>{{ $zona->vagas_estacionamento }}</td>
              </tr>
            </tbody>
          </table>
          <footer class="card-footer text-muted d-flex flex-wrap">
            <p class="col-sm-12">
              - A quantidade de pavimento é obtida através da relação de metros quadrados passíveis de construção com a taxa de ocupação<br>
              OBS: (AT: Área do terreno) x (CAT Máximo) = quantidade total de metros quadrados passíveis de construção
            </p>
            <p class="col-sm-12">- Para uso residencial considera-se uma vaga de estacionamento por unidade </p>
            <p class="col-sm-12">- Esta certidão tem sua informações extraídas da lei de Uso, ocupão e parcelamento do solo urbano de nº 015 de 14 de fevereiro de 2001 e do Plano Diretor Municipal de lei nº355 de 25 de outubro de 2006</p>
          </footer>
        </div>
			</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset ('js/core/jquery.min.js')}}"></script>
<script src="{{ asset ('js/core/popper.min.js')}}"></script>
<script src="{{ asset ('js/bootstrap-material-design.js')}}"></script>
<script src="{{ asset ('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
</html>