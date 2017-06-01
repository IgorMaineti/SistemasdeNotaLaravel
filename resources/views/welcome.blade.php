<!DOCTYPE html>
{{-- Arquivo view da home  --}}
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
    <title>Home - USCS</title>
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
  <li id="tab_home" class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
  <li id="tab_curso"><a href="{{ asset('/sobre') }}"><i class="fa fa-university" aria-hidden="true"></i>Sobre</a></li>
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
                        <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
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
<div class="area-acesso">
@if (Auth::guest())
{{-- SE DESLOGADO, APARECE ESSA HOME --}}
  <div class="cadastrese-home">
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      <h2>Não possui cadastro?</h2><br>
      <h3>Clique <a href="{{ route('register') }}">aqui</a> e faça o seu!</h3>
  </div>
  <div class="separador"></div>
  <div class="login-home">
      <i class="fa fa-sign-in" aria-hidden="true"></i>
      <h2>Faça seu <a href="{{ route('login') }}">login!</a></h2><br>
  </div>
@else
  {{-- SE LOGADO, APARECE ESSA HOME --}}
    <div class="cadastrese-home">
      <i class="fa fa-hand-o-up" aria-hidden="true"></i>
      <h2>Bem Vindo!</h2><br>
      <p>Navegue pelo site através do menu de navegação acima.</p>
  </div>
  <div class="separador"></div>
  <div class="login-home">
      <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
      <h3>Obrigado por acessar o nosso sistema!</h3><br>
  </div>
  @endif
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