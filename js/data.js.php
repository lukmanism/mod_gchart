function data_temp1(){
     return "" +
     "Date,Fund,Benchmark\n" +
<?php
  $jsonurl = "https:spreadsheets.google.com/feeds/list/0An9EMa5Y6wiXdFdOZXdScTZsN0RWSVFZUXBDU2wzTkE/od6/public/values?alt=json";
  $json = file_get_contents($jsonurl,0,null,null);
  $json_output = json_decode($json, true);

  $entry = $json_output['feed']['entry'];
  print_r($json);
  exit;
  // $count = count($entry);
   $count = 50;

  for($i=0; $i<$count;$i++){
    echo '"'.date('Ymd',strtotime($entry[$i]['gsx$date']['$t'])).','.$entry[$i]['gsx$fund']['$t'].','.$entry[$i]['gsx$benchmark']['$t'].'\n"';
    if($i<$count-1){
      echo ' +'."</br>";
    }
  }
  echo ';';
  // exit;
?>    
}

