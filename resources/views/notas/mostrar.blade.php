@extends('layouts.app')

@section('content')
<?php 



?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Resultados
                </div>

                <div class="panel-body">
                    <table border="1" style="width: 100%;" class="tabela-notas">
                        <th>ID</th>
                        <th>Disciplina</th>
                        <th>Media</th>
                        <th>Resultado</th>
                        <th>Materias aprovadas</th>
                        <th>Materias reprovadas</th>
                        <th>Maior Nota</th>
                        <th>Menor nota</th>
                        <th>Aproveitamento</th>
                        <tbody>
                            <?php $maiornota = null;
                            $menornota = 10;
                            $nomemaiornota="Nenhuma";
                            $nomemenornota="Nenhuma";
                            $aprov = 0;
                            $reprov = 0;
                            ?>
                            @foreach($notas as $nota) <?php

                            $d1_p1 = $nota->d1_p1;
                            $d1_atv = $nota->atv_d1;
                            $d1_p2 = $nota->d1_p2;
                            $d1_p3 = $nota->d1_p3;
                            $total = $d1_atv + $d1_p2; 
                            $materia = $nota->materia;

                            if(($d1_p1<$total) && ($d1_p1<$d1_p3)) {
                              $media = ($total + $d1_p3) / 2;
                          }
                          if(($total<$d1_p1) && ($total<$d1_p3)) {
                              $media = ($d1_p1 + $d1_p3) / 2;
                          }
                          if (($d1_p3<$d1_p1) && ($d1_p3<$total)) {
                              $media = ($d1_p1 + $total) / 2;
                          }




                          if($media>$maiornota) {
                            $maiornota = $media;
                            $nomemaiornota = $materia;
                        } 
                        if($media<$menornota) {
                            $menornota = $media;
                            $nomemenornota = $materia;
                        }
                        
                        ?>
                        @endforeach
                        @foreach($notas as $nota)
                        <?php  $d1_p1 = $nota->d1_p1;
                        $d1_atv = $nota->atv_d1;
                        $d1_p2 = $nota->d1_p2;
                        $d1_p3 = $nota->d1_p3;
                        $total = $d1_atv + $d1_p2; 
                        $materia = $nota->materia;

                        if(($d1_p1<$total) && ($d1_p1<$d1_p3)) {
                          $media = ($total + $d1_p3) / 2;
                      }
                      if(($total<$d1_p1) && ($total<$d1_p3)) {
                          $media = ($d1_p1 + $d1_p3) / 2;
                      }
                      if (($d1_p3<$d1_p1) && ($d1_p3<$total)) {
                          $media = ($d1_p1 + $total) / 2;
                      }
                      
                      

                      if($media>=6) {
                        $aprov = $aprov + 1;
                    }
                    else {
                        $reprov = $reprov + 1;
                    } 
                    
                    $aproveitamento = $media*10;

                    $media_falta = 0;
                    $media_padrao = 6;
                    if($media<6) {
                        $media_falta = $media_padrao - $media;
                    }
                    ?>





                    <tr>
                        <td>{{ $nota->id_usuario }}</td>
                        <td>{{ $nota->materia }}</td>
                        <td><?php echo "$media"; ?></td>
                        <td><?php if($media>=6){echo "Aprovado!";} else {echo "Reprovou :( "."Faltou $media_falta pontos";}?></td>
                        <td><?php echo "$aprov"; ?></td>
                        <td><?php echo "$reprov";?></td>
                        <td><?php echo "$maiornota "."$nomemaiornota"; ?></td>
                        <td><?php   echo "$menornota "."$nomemenornota";  ?></td>
                        <td><?php  echo "$aproveitamento"."%"; ?></td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
    </div>
</div>
</div>
</div>
@endsection
