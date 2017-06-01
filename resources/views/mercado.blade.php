<!DOCTYPE html>
{{-- Arquivo view da sessao mercado  --}}
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
  <li id="tab_home"><a href="{{ asset('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
  <li id="tab_curso"><a href="{{ asset('/sobre') }}"><i class="fa fa-university" aria-hidden="true"></i>Sobre</a></li>
  <li id="tab_mercado" class="active"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>O Mercado</a></li>
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
<h2>O Mercado de trabalho</h2>
<p>
O mercado de trabalho para o setor de Tecnologia da Informação (TI) está aquecido e continua em expansão. Os sistemas informatizados estão presentes em empresas de qualquer tipo e tamanho e isto representa boas oportunidades de trabalho nesta área.

O profissional de Sistemas de Informação pode atuar em diferentes segmentos de TI, tais como:

Administração de Redes
Análise e Desenvolvimento de Software
Análise de Sistemas
Arquitetura e Administração de Sistemas
Gestão de Banco de Dados
Gestão de Projetos de TI
Consultoria Estratégica em TI
<p>
<h2>A carreira em Sistemas de Informação</h2>
<p>
  O profissional de Sistemas de informação administra fluxos de informação em qualquer rede de computadores, seja de empresas ou particulares. Ele desenvolve sistemas de armazenamento e recuperação de dados.

  Empresas de qualquer tamanho e de diversos setores da economia fazem uso dos serviços deste profissional.

  Uma das principais áreas em que este profissional atua é no desenvolvimento de software. Ele projeta e desenvolve sistemas a partir das necessidades dos usuários. Também cuida da funcionalidade de sites, garantindo que as informações possam ser acessadas de forma correta e organizada.

  Como administrador de fluxo de informações, este profissional atua na modernização e agilidade dos processos de comunicação de uma organização. Ele cria programas para facilitar a comunicação interna, adapta-os às necessidades de uma determinada empresa e também é responsável pela instalação do sistema.

  Alguns profissionais da área de Sistemas de Informação trabalham com modelagem, criando modelos matemáticos que são capazes de simular situações reais. Esses modelos são utilizados para prever e prevenir problemas.

  O conhecimento em sistemas permite ao profissional de Sistemas de Informação compreender a lógica de funcionamento de equipamentos, periféricos e software, identificando quais os mais adequados para cada situações ou necessidade. Por isso, ele pode atuar na área de marketing e vendas desses produtos.

  O analista de sistemas também pode atuar na área de suporte técnico, realizando manutenções de sistemas, banco de dados e de redes de computadores.

  Outra área que pode ser explorada por esse profissional é da educação. Quem se forma em Sistemas de Informação pode trabalhar como professor em escolas de informática, cursos técnicos e profissionalizantes e até universidades.

  Perfil do profissional formado em Sistemas de Informação

  Afinidade com Matemática e gosto por tecnologia são características importantes para  o profissional de Sistemas de Informação. Isso acontece porque o desenvolvimento de programas e sistemas exige habilidades de manipulação de algoritmos matemáticos, aliados a novas tecnologias.

  Trabalhar bem sob pressão e com prazos curtos é uma característica importante para quem atua na área.

  É desejável que este profissional tenha conhecimentos em inglês, uma vez que grande parte da linguagem de programação está neste idioma.

</p>
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
