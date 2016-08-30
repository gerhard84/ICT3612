<?php
//  the controller is in-between the Model and the View. It organizes how these two pages will be used, depending on what was requested.  

  include_once('../model/model.php');  //include the model.php page
  include_once('../view/view.php'); //include the view.php page
   
  $page = fetchPage(); //set $page to the function fetchPage, which is defined next 
  
   
  function fetchPage() { // to find what key/value pairs were sent from index.php
    
     if (isset($_GET["page"])) { //  the function isset is used to ask the question  if a key "page" was sent when a link was clicked on index.php
		
		 $pageReq = $_GET["page"]; // if it was, get the value of the key
       
	   switch($pageReq) { //let's decide which "page" was requested, and the call the correct function from view.php
        case "parties":// If the link "<a href="controller/controller.php?page=car">Show me a car</a>"was clicked on the index.php page, then
           $page = "PARTIES"; // give a variable named $page a value of "PARTIES", which we will use at the bottom of this page
         break;
		 
		  case "seats": //PHP is case sensitive, so price and SEATS (in the line below is not the same). If the link "<a href="controller/controller.php?page=seats">Show me it's price</a>" was clicked on the index.php page, then
           $page = "SEATS"; // give a $page a value of "SEATS", which we will use at the bottom of this page
         break;
         
		 default: // If the link "<a href="controller/controller.php?page=not sure">Unsure what I want to see</a>"was clicked on the index.php page, then
           $page = "PARTIES"; // let us give $page a value of "PARTIES". Of course, we could have added this as another case, but one should always have a default to cover for unexpected problems
         break;
       }
     } else { // The link <a href="controller/controller.php">Just let me in!</a> was sent, so there was no key. Let's show them PARTIES.
       $page = "PARTIES";
     }
     
     return $page; // show the function
    
  }
  
  
  if ($page=="SEATS") { //if $page is set to SEATS
    $seats = seats(); //  get the data on the seats by using the seats()function in model.php
    noSeats($seats);  // then call the function noSeats in view.php
  } elseif($page=="PARTIES") { //if $page is set to PARTIES
    $parties = parties();//  get the data on the parties by using the car()function in model.php
    polParties($parties);   // then then call the function polParties in view.php  to present the parties data to the user.
  }
  
?>