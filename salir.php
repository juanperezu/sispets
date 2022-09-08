<?
   session_start ();
   include 'head.php';
   if (isset($_SESSION["usuario_valido"]))
      {
      session_destroy ();
      print ("<br><br><p class='btn btn-light btn-xl'>
         <center>Session finalizada</center></p>");
      print("<meta http-equiv='refresh' 
            content='0;url=index.php'>");
      }else{
      print ("<div></div>");
      print ("<p class='btn btn-light btn-xl'>
       <center>No existe una Session activa</center></p>");
     }
    ?>

