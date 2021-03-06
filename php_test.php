Problem Statement 1:
There are a number of servers running our application.
Given N servers, in 5 minutes interval, every minute, the load is checked and if load is
less than 50%, the servers are either reduced to N/2 else they are increased to
2N + 1
Input : No. of servers (N), server load every minute
Output : The number of servers running at the end of 5 minutes
Example:
Input:
2 (2 servers)
10 60 50 15 20 (On 1st minute - 10% load, on 2nd minute - 60% load & so on)
Output:
1 (After 5 minute, 1 server is running)

Ans =>

<?php

function get_no_of_server($server_load, $no_of_server, $interval) {  
  for ($i = 1; $i <= $interval; $i++) {
     if ($i == 5) {
       if ($server_load[$i] < 50) {
          $no_of_server_running = $no_of_server/2;
        }
       else {
          $no_of_server_running = 2 * $no_of_server + 1;
       }
     }
  }
  echo $no_of_server_running." (After 5 minute, ".$no_of_server_running." server is running)";
}  

$server_load = array("1"=>"10", "2"=>"60", "3"=>"50", "4"=>"15", "5"=>"20",); //server load every minutes
$no_of_server = 2;
$interval = count($server_load);
get_no_of_server($server_load, $no_of_server, $interval);


?>

Problem Statement 2:
Everyday, the restaurant has a limited number of breads, vadas and samosas. The
restaurant needs to optimise orders in a way that they can generate maximum profit.
Vadapav needs two bread and a vada
Samosapav needs two bread and a samosa
Input:
First input is: no. of breads, no. of vadas and no. of samosas available in the
restaurant
Second input is: Price of Vadapav & price of Samosapav set by the restaurant
Output:
Maximum profit possible
Example:
Input:
9 2 3 (9 breads, 2 vada, 3 samosa)
10 15 (Rs.10 - Vadapav, Rs.15 - Samosapav)
Output:
55 (Maximum profit possible is Rs.55)


Ans =>

<?php
  
 function get_maximum_profit($item, $price) {  
    $total_no_days = 6;// excluding 1 holiday
    $bread_for_samosa = $item['samosa'] * 2;
    $bread_for_vada = $item['vada'] * 2;
    $total_bread_need = $bread_for_samosa + $bread_for_vada;
    $available_bread=$item['bread'] - $total_bread_need;
     if ($available_bread < 0) {
         $total_vadapav = $item['vada'] - 1;
         $total_samosapav = $item['samosa'];
     }
     else if ($available_bread > 0) {
          $total_vadapav = $item['vada'];
          $total_samosapav = $item['samosa'];
     }else {
           $total_vadapav = $item['vada'];
           $total_samosapav = $item['samosa'];
     }
   
   $total_price_vadapav = $total_vadapav * $price['vadapav'];
   $total_price_samosapav = $total_samosapav * $price['samosapav'];
   $max_profit = $total_price_vadapav + $total_price_samosapav;
   
    echo $max_profit." (Maximum profit possible is Rs.".$max_profit." )";
   
}  

$item = array("bread"=>"9", "vada"=>"2", "samosa"=>"3");
$price = array("vadapav"=>"10", "samosapav"=>"15");
get_maximum_profit($item,$price);

?>

