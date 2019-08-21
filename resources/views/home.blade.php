<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - Sadam</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style_dashboard.css')}}">
</head>
<body>
    
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="col-lg-6 text-center">
                    <!--logo do sadam-->
                    <img src="{{asset('img/logo01.png')}}" alt="perfil" class="rounded-circle" width="270px" height="90px">
                    <!--imagem de perfil-->
                    <img src="{{asset('imagem-perfil/'. basename($user->perfil->imagem))}}" alt="perfil" class="rounded-circle" id="foto" width="100px" height="100px">
                </div> 
            </div>

            <div class="perfil text-center"><strong>{{$user->name}}</strong></div>

            <ul class="list-unstyled components text-center">
                <li class="text-center" id="biografia">
                    <i class="fas fa-map-marker-alt"></i> <strong>Endereço: {{$user->perfil->endereco}}, {{$user->perfil->cidade}}</strong>
                </li>
                <li><strong>CPF: {{$user->perfil->cpf}}</strong></li>
            </ul>
            
            @if($mes == 1)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1" selected>Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 2)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2"  selected>Fevereiro  de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 3)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3" selected>Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 4)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4"  selected>Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 5)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5" selected>Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 6)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6"  selected>Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 7)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7" selected>Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 8)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8" selected>Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>       
                <button type="submit" class="btn btn-data">></button>         
            </form>
            @elseif($mes == 9)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9" selected>Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 10)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10" selected>Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 11)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11" selected>Novembro de {{$data}}</option>
                        <option value="12">Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @elseif($mes == 12)
            <form method="POST" action="{{route('filtrar')}}">
                @csrf
                <i class="fas fa-calendar-alt"></i> <strong class="mes">Selecione um mês</strong>
                <div class="form-group col-md-10">
                    <select class="custom-select" id="inputGroupSelect01" name="valor">
                        <option value="1">Janeiro de {{$data}}</option>
                        <option value="2">Fevereiro de {{$data}}</option>
                        <option value="3">Março de {{$data}}</option>
                        <option value="4">Abril de {{$data}}</option>
                        <option value="5">Maio de {{$data}}</option>
                        <option value="6">Junho de {{$data}}</option>
                        <option value="7">Julho de {{$data}}</option>
                        <option value="8">Agosto de {{$data}}</option>
                        <option value="9">Setembro de {{$data}}</option>
                        <option value="10">Outubro de {{$data}}</option>
                        <option value="11">Novembro de {{$data}}</option>
                        <option value="12" selected>Dezembro de {{$data}}</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-data">></button>
            </form>
            @endif
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" id="sair">Sair <i class="fas fa-sign-out-alt"></i> 
                    </a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-outline-warning">
                        <i class="fas fa-angle-double-left"></i>
                    </button>

                    <button class="btn btn-outline-warning d-inline-block d-lg-none ml-auto" id="collapse-menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                               <button type="button" id="menu-item-um" class="btn btn-outline-warning ml-auto" data-toggle="modal" data-target="#modal">Consulta Conta</button>  
                            </li>
                            <li class="nav-item">
                               <a href="#" id="menu-item-dois" class="btn btn-outline-warning">Minimizar Gastos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Modal do consultar conta-->
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="TituloModalCentralizado">Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><strong>Nome: </strong>{{$user->perfil->nome}}</p>
                    <p><strong>Cidade: </strong>{{$user->perfil->cidade}}</p>
                    <p><strong>Estado: </strong>{{$user->perfil->estado}}</p>
                    <p><strong>Data: </strong>{{$dataF}}</p>
                    <p><strong>Consumo (kwh/R$): </strong>{{$consumo}} R$</p>
                    <p><strong>ICMS: </strong>{{$consumoICMS}} R$</p>
                    <p><strong>PIS: </strong>{{$consumoPIS}} R$</p>
                    <p><strong>CONFINS: </strong>{{$consumoCONFINS}} R$</p>
                    <p><br></p>
                    <p><strong>Valor a Pagar: {{$total}} R$</strong></b></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success">Pagar Conta</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h3 class="display-5">Gráfico de 
                            @if($mes == 1)
                                {{'Janeiro'}}
                            @elseif($mes == 2)
                                {{'Fevereiro'}}
                            @elseif($mes == 3)
                                {{'Março'}}
                            @elseif($mes == 4)
                                {{'Abril'}}
                            @elseif($mes == 5)
                                {{'Maio'}}
                            @elseif($mes == 6)
                                {{'Junho'}}
                            @elseif($mes == 7)
                                {{'Julho'}}
                            @elseif($mes == 8)
                                {{'Agosto'}}
                            @elseif($mes == 9)
                                {{'Setembro'}}
                            @elseif($mes == 10)
                                {{'Outubro'}}
                            @elseif($mes == 11)
                                {{'Novembro'}}
                            @elseif($mes == 12)
                                {{'Dezembro'}}
                            @endif
                        </h3>
                        <hr>
                        <!--Aqui vai ficar os gráficos-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grafico">
                                    <canvas id="myChart" height="125px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Chart CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!--Importação do script do chart-->
    <!-- <script src="{{asset('js/chart.js')}}"></script> -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        var mes = {{$mes}};

        if(mes == 1){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 2){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 3){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 4){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 5){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 6){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 7){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 8){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 9){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 10){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 11){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28','Dia 29', 'Dia 30'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }else if(mes == 12){
            var ctx = document.getElementById('myChart').getContext('2d'); 
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Dia 1', 'Dia 2', 'Dia 3', 'Dia 4', 'Dia 5', 'Dia 6', 'Dia 7', 'Dia 8', 'Dia 9', 'Dia 10', 'Dia 11', 'Dia 12', 'Dia 13', 'Dia 14', 'Dia 15', 'Dia 16', 'Dia 17', 'Dia 18', 'Dia 19', 'Dia 20', 'Dia 21', 'Dia 22', 'Dia 23', 'Dia 24', 'Dia 25', 'Dia 26', 'Dia 27', 'Dia 28', 'Dia 29', 'Dia 30', 'Dia 31'], 
                    datasets: [{
                        label: 'Consumo em R$',
                        data: [
                            {{$dia[0]}}, {{$dia[1]}}, {{$dia[2]}}, {{$dia[3]}}, {{$dia[4]}}, {{$dia[5]}}, {{$dia[6]}}, {{$dia[7]}}, {{$dia[8]}}, {{$dia[9]}}, {{$dia[10]}}, {{$dia[11]}}, {{$dia[12]}}, {{$dia[13]}}, {{$dia[14]}}, {{$dia[15]}}, {{$dia[16]}}, {{$dia[17]}}, {{$dia[18]}}, {{$dia[19]}}, {{$dia[20]}}, {{$dia[21]}}, {{$dia[22]}}, {{$dia[23]}}, {{$dia[24]}}, {{$dia[25]}}, {{$dia[26]}}, {{$dia[27]}}, {{$dia[28]}}, {{$dia[29]}}, {{$dia[30]}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }
    </script>
   
</body>
</html>


