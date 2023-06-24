<?php

   $tab = array("Mohamed"=>50000, "Ali"=>40000, "Fahima"=>30000);
   //asort($tab);
   arsort($tab);
   ksort($tab);
   krsort($tab);
   foreach($tab as $key=>$value) {
      echo "<li>tab[$key]=$value</li>";
   }

   echo json_encode($tab); // variable -> json
   $emp = json_decode('{"id":1, "nom":"Mohamedi"}');
   echo $emp->nom;

   echo date("d-m-Y H:i:s", time()+3600);