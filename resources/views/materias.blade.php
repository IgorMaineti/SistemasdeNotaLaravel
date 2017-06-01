<!DOCTYPE html>
{{-- Arquivo view da sessao materias  --}}
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
    <title>Materias - USCS</title>
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
  <li id="tab_mercado"><a href="{{ asset('/mercado') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>O Mercado</a></li>
  <li id="tab_materias" class="active"><a href="#"><i class="fa fa-book" aria-hidden="true"></i>Matérias</a></li>

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
  <div class="subjects-grid">
    <h3>Núcleo Comum</h3>
    <hr><br>
    <h4>Grupo 01 </h4>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Disciplinas </th>
        <th>Carga Horária</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Algoritmos e Estrutura de Dados - I</td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Comunicação e Expressão </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Lógica Aplicada à Computação</td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Matemática </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Fundamentos da Computação </td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Prática de Programação </td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Projeto Integrado - I   </td>
        <td>40h</td>
      </tr>
    </tbody>
  </table>
                
    <br><br>
    <h4>Grupo 02  </h4>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Disciplinas </th>
        <th>Carga Horária</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Algoritmos e Estrutura de Dados - II </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Psicologia Aplicada </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Estatística Aplicada à Computação </td>
        <td>80h</td>
      </tr>

      <tr>
        <td>Sistemas Digitais </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Matemática Aplicada</td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Projeto Integrado - II  </td>
        <td>40h</td>
      </tr>
    </tbody>
  </table>
          
    <br>
    <h4>Grupo 03 </h4>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Disciplinas </th>
        <th>Carga Horária</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Algoritmos e Estrutura de Dados - III </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Arquitetura de Computadores - I</td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Cálculo Diferencial e Integral - I  </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Teoria da Computação</td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Interação Humano-Computador  </td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Laboratório de Arquitetura de Computadores</td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Projeto Integrado - III </td>
        <td>40h</td>
      </tr>
    </tbody>
  </table>
          
    <br>
    <h4>Grupo 04 </h4>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Disciplinas </th>
        <th>Carga Horária</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Algoritmos e Estrutura de Dados - IV  </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Sistemas Operacionais - I </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Cálculo Diferencial e Integral - II </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Redes de Computadores </td>
        <td>80h</td>
      </tr>
      <tr>
        <td>Arquitetura de Computadores - II  </td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Laboratório de Redes</td>
        <td>40h</td>
      </tr>
      <tr>
        <td>Projeto Integrado - IV</td>
        <td>40h</td>
      </tr>
    </tbody>
  </table>

    <br>
    <h4>Grupo 05 </h4>

           <table class="table table-bordered">
            <thead>
              <tr>
                <th>Disciplinas </th>
                <th>Carga Horária</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Engenharia de Software - I   </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Sistemas Operacionais - II  </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Cálculo Numérico </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Banco de Dados - I</td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Programação Orientada a Objetos </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Teoria dos Grafos</td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Projeto Integrado - V </td>
                <td>40h</td>
              </tr>
  
            </tbody>
            </table>

             <br>
           <h4>Grupo 06 </h4>

           <table class="table table-bordered">
            <thead>
              <tr>
                <th>Disciplinas </th>
                <th>Carga Horária</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Engenharia de Software - II   </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Sistemas Distribuidos </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Métodos de Pesquisa Operacional </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Banco de Dados - II </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Qualidade de Software  </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Metodologia da Pesquisa Científica </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Projeto Integrado - VI </td>
                <td>40h</td>
              </tr>
  
            </tbody>
          </table>


             <br>
          <h3>Núcleo Específico</h3>
          <hr>
          <br>

              <br>
           <h4>Grupo 07 </h4>

           <table class="table table-bordered">
            <thead>
              <tr>
                <th>Disciplinas </th>
                <th>Carga Horária</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Gerenciamento de Serviços de TI </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Sistemas de Apoio a Decisão </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Administração - I</td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Tópicos Especiais em Computação - I  </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Gerência de Projetos  </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Empreendedorismo </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>TCC - I</td>
                <td>150h</td>
              </tr>

  
            </tbody>
            </table>

              <br>
           <h4>Grupo 08 </h4>

           <table class="table table-bordered">
            <thead>
              <tr>
                <th>Disciplinas </th>
                <th>Carga Horária</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Atividades Acadêmicas Curriculares Complementares</td>
                <td>160h</td>
              </tr>
              <tr>
                <td>Estágio Supervisionado</td>
                <td>200h</td>
              </tr>
              <tr>
                <td>Auditoria, segurança e avaliação de sistemas </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Planejamento de Sistemas de Informação </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Administração – II </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>Tópicos Especiais em Computação – II </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Métodos ágeis de desenvolvimento de sistemas  </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Metodologias, técnicas e ferramentas de APTD  </td>
                <td>40h</td>
              </tr>
              <tr>
                <td>Governança em TI  </td>
                <td>80h</td>
              </tr>
              <tr>
                <td>TCC - II  </td>
                <td>150h</td>
              </tr>
  
            </tbody>
          </table>
          <br>
          <br>
<!--           <h4>Grades anteriores</h4>

           <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Ingressantes a partir 2º semestre de 2013 </td>
                <td> <a href="http://www.uscs.edu.br/vestibular/matriz/MatrizComputacaoCCSI2013-2Adaptada22junho2014.pdf" target="_blank">Conferir</a> </td>
              </tr>
              <tr>
                <td>  Ingressantes a partir 1º semestre de 2013</td>
                <td> <a href="http://www.uscs.edu.br/vestibular/matriz/MatrizComputacaoCCSI2013-1Adaptada22junho2014.pdf" target="_blank">Conferir</a> </td>
              </tr>
              <tr>
                <td> Ingressantes a partir 2º semestre de 2012  </td>
                <td> <a href="http://www.uscs.edu.br/vestibular/matriz/MatrizComputacaoCCSI2012-2Adaptada22junho2014.pdf" target="_blank">Conferir</a> </td>
              </tr>

              <tr>
                <td> Ingressantes a partir 1º semestre de 2012  </td>
                <td> <a href="http://www.uscs.edu.br/vestibular/matriz/MatrizComputacaoCCSI2012-1Adaptada22junho2014.pdf" target="_blank">Conferir</a> </td>
              </tr> -->
            </tbody>
          </table>
          <br>
        </div>

        <div class="descriptionBlock">
            <h4>Informações</h4>
            <br>
            <p><b>Duração: </b> 4 anos</p>
            <br>
            <p><strong>O que são os grupos?</strong></p>
            <p>Cada grupo representa o conjunto de matérias que serão lecionadas  dentro de um período semestral. Portanto, cada grupo representa um semestre do curso</p>
            <br>
            <p><strong>O que é Núcleo Comum?</strong></p>
            <p>Os grupos que fazem parte do Núcleo Comum são aqueles em que as aulas podem ser divididas com outros cursos da mesma Escola, que possuem matérias em comum.</p>
            <br>
            <p><strong>E Núcleo Específico?</strong></p>
            <p>Já os grupos que fazem parte do Núcleo Específico são aqueles nos quais as matérias pertencem exclusivamente ao curso em questão.</p>
          </div>
        
          <div class="alert alert-warning" role="alert">
            <p class="text-center">Observação: grade curricular sujeita a alteração.</p>
          </div>
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