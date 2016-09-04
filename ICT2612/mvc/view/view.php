<?php
//The view presents the data sent to it.  This is what the user see when a link is clicked in index.php

  function polParties($partName) { // in controller.php, this function was used as follows "polParties($parties);"
    $page = htmlHeader() . 'Prominent political parties, in order of National Assembly seats held, are the '.$partName.htmlFooter().'<br><br><a href=../index.php>Return to menu</a>';
    echo $page;
  }
  
  function noSeats($noOfSeats) {
    $page = htmlHeader() . 'The National Assembly seats per political party are: '.$noOfSeats.htmlFooter().'<br><br><a href=../index.php>Return to menu</a>';
    echo $page;    
  }
  

  function htmlHeader() { // just to give the page a HTML header
    return "<!doctype html><html><head><meta charset=\"utf-8\"><title>SA political parties</title>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/bootstrap.css\"></head><body>";
  }
  
  function htmlFooter() { // just to give the page a HTML footer
    return '</body></html>';  
  }
?>