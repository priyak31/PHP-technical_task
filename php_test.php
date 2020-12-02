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
    if ($server_load[$i] < 50) {
      if ($i == 5) {
        $no_of_server_running = $no_of_server/2;
        break;
      }
     }
      else {
        $no_of_server_running = 2 * $no_of_server + 1;
      }
  }
  
  echo $no_of_server_running." (After 5 minute, ".$no_of_server_running." server is running)";
}  

$server_load = array("1"=>"10", "2"=>"60", "3"=>"50", "4"=>"15", "5"=>"20",); //server load every minutes
$no_of_server = 2;
$interval = count($server_load);
get_no_of_server($server_load, $no_of_server, $interval);


?>
