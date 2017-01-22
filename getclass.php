<?php


  include 'simple_html_dom.php';

  $link=$_REQUEST['disc1'];
  $html=file_get_html($link."/notas");
  $nrow_1=0;
  $i=0;
  $j=0;
  foreach ($html->find('tr') as $row) {
    $ncell=0;
    $nrow_1++;
    foreach($row->find('td') as $cell){
      if($ncell==1){
        $num_1[$i] = $cell->innertext;
        $i++;
      }
      if($ncell==2){
        $name_1[$j] = $cell->innertext;
        $j++;
      }
      $ncell++;
    }
  }
  echo("<h2>{$link}</h2>");
  for ($i=0; $i < $nrow_1; $i++) {
    echo("<p>{$num_1[$i]} {$name_1[$i]}</p>");
  }

  $link=$_REQUEST['disc2'];
  $html=file_get_html($link."/notas");
  $nrow_2=0;
  $i=0;
  $j=0;
  foreach ($html->find('tr') as $row) {
    $ncell=0;
    $nrow_2++;
    foreach($row->find('td') as $cell){
      if($ncell==1){
        $num_2[$i] = $cell->innertext;
        $i++;
      }
      if($ncell==2){
        $name_2[$j] = $cell->innertext;
        $j++;
      }
      $ncell++;
    }
  }
  echo("<h2>{$link}</h2>");
  for ($i=0; $i < $nrow_2; $i++) {
    echo("<p>{$num_2[$i]} {$name_2[$i]}</p>");
  }

  echo("<h2>Alunos a ter as duas cadeiras</h2>");
  for ($i=0; $i < $nrow_1; $i++) {
    for ($j=0; $j < $nrow_2; $j++) {
      if(strcmp($num_1[$i],$num_2[$j])==0)
        echo("<p>{$num_1[$i]} {$name_1[$i]}</p>");
    }
  }



?>
