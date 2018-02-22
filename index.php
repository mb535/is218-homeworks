<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";

	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
  
  $date = str_replace("-","/",$date);
  echo "<br><br>2) \$date with - replaced with $date<br>";
  
  if($date > $tar){
    echo "3)the future<br>";}
  elseif($date==$tar){
    echo "<br>Oops<br>";}  
    
  $p = -1;  
  $positions = "";
  while(($p = strpos($date, "/", $p+1)) !== false){
    $positions = $positions.$p." ";}
  echo "4)The positions are $positions<br>";
  
  echo "5) Number of Words in \$date: ".count(explode("/",$date))."<br>";
  
  echo "6) Length of \$date String: ".strlen($date)."<br>";
  
  echo "7) ASCII value of first char in \$date string: ".ord(substr($date,0,1))."<br>";
  
  echo "8) Last two Chars in \$date: ".substr($date,-2)."<br>";
  
  echo "9) Data Array: ";
  print_r(explode("/",$date));
  echo"<br>";
  echo "10)Leap Years  <br>";
  foreach($year as $value){
    $leapYears = "";
     if(((($value%4)==0) && (($value%100)!=0))|| (($value%400)==0)){
      echo $value.": True | ";}
    else{
      echo $value.": False | ";}
  }

?>