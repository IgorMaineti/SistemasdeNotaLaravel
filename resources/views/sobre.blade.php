<!DOCTYPE html>
{{-- Arquivo view da sessao sobre  --}}
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Igor Trindade, Igor Fernando, Jonathan Reis, Lucas Leandro, Luiz Eduardo, Renan Spiller">

    <!-- Referência ao css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="/font-awesome/font-awesome/css/font-awesome.min.css">

    <!-- Fonte do site -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
    <title>Sobre - USCS</title>
  </head>
  <body>
<header>
</header>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.drop')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>
<script>
$(function(){

    //seleciona a aba baseando-se na URL atual
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show');
    } 

    //muda a url ao clicar numa aba
    $('.nav-tabs a').on('shown', function (e) {
        window.location.hash = e.target.hash;
    })
});
</script>
<nav>
<ul id="menu">
  <li id="tab_home"><a href="{{ asset('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
  <li id="tab_curso" class="active"><a href="#"><i class="fa fa-university" aria-hidden="true"></i>Sobre</a></li>
  <li id="tab_mercado"><a href="{{ asset('/mercado') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>O Mercado</a></li>
  <li id="tab_materias"><a href="{{ asset('/materias') }}"><i class="fa fa-book" aria-hidden="true"></i>Matérias</a></li>

  <!-- <li><a href="menor-media.php">Página 4</a></li> -->
  <li class="drop" onclick="myFunction()">Painel<i class="fa fa-angle-down" aria-hidden="true"></i></li>
    <div class="dropdown-content" id="myDropdown">
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif
    </div>
    </div>
{{--     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif
    </div> --}}
</ul>
</nav>

<section>
	<div class="about grid">
    <h2>O Curso</h2>
<!--       <h3>Sistemas da Informação</h3> -->

        <p>O curso busca a formação de recursos humanos para empregar a computação como atividade meio para automação dos sistemas de informação das organizações. Os egressos do curso poderão contribuir para a melhoria do desempenho, da eficiência e da racionalização dos serviços administrativos das organizações.

        Busca-se a aquisição do conhecimento relativo à tecnologia da informação e à aplicação deste conhecimento no desenvolvimento de sistemas e infraestrutura para uso em processos organizacionais. A função de sistemas de informação tem responsabilidade geral de desenvolver, implementar e gerenciar uma infra-estrutura de tecnologia de informação e sistemas visando o aumento da produtividade, eficiência, segurança e redução de custos nos processos organizacionais da empresa.

        A atividade também envolve o uso criativo de tecnologia da informação para atividades de consultoria e análise de apoio à decisão. Espera-se que o profissional assuma uma postura de agente transformador, sendo capaz de provocar mudanças com aplicação da tecnologia da informação na solução de problemas.</p>
  </div>
</section>

<footer>
  <div class="footer-top">
   <div class="col-md-6 centralizado">
    <div class="integrantes-footer-title">
    <h2> Integrantes </h2>
    </div>
    <div class="integrantes-footer">
      <ul id="integrantes">
        <li> Igor Trindade </li>
        <li> Igor Fernando </li>
        <li> Jonathan Reis </li>
        <li> Lucas Pereira </li>
        <li> Luiz Eduardo </li>
        <li> Renan Spiller </li>
      </ul>
    </div>
   </div>
   <div class="col-md-6 centralizado">
<!--     <div class="materias-footer-title">
      <h2> Materias </h2>
    </div>
    <div class="materias-footer">
      <ul id="materias">
        <li> Prática de Programação </li>
        <li> Fundamentos da Computação </li>
        <li> Estrutura de Dados </li>                        
    </div>  -->
    <img class="logo-footer" src="img/indice.fw.png">
   </div>
  </div>
  <div class="footer-bottom">
    <div class="col-md-3">
<!--       <span style="padding: 0px 10px;line-height: 47px;vertical-align: middle;">|</span>  -->
        © USCS 2017 - Todos os direitos reservados. 
<!--       <span style="padding: 0px 10px;">|</span> -->
    </div>
    <div class="col-md-3 col-md-offset-6">
    <div> Design With <i class="fa fa-heart" aria-hidden="true"></i> by Developers</div>
  </div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>