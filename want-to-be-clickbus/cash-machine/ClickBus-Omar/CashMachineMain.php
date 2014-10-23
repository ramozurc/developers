<?php

include("Readme.txt");

/** 
 * CashMachineMain.php
 * Class to handle delivery of notes given a particular amount.
 * 
 */

class CashMachine
{
 
  public $notesAllowed = [100.00, 50.00, 20.00, 10.00]; // already sorted desc so no need to re sort 
  

  public function determineNotes($amount){
   $amount = $this->amount;
 	
    if($amount == NULL){
      return array();
    }
    
    if($amount < 0){
      throw new InvalidArgumentException('no can not do');
    }  
   
     $breakdown = array();
      foreach($this->notesAllowed as $note){
       /* this is to get divisibility per note starting from the biggest note
         down to the smallest allowable note */
       $quotient = intval($amount/$note); 
      
	  if($quotient > 0){
        $breakdown = array_merge($breakdown, array_fill(0, $quotient, $note));
         /* as the loop goes in it amount should decrease and repeat process. */
        $amount -= $times * $note; 
		 /* is amount already zero? if yes, exit. */
        if($amount == 0) 
		  break;
       }

    if($amount != 0){ 
     /* there's a remainder (ca % as well) */
     throw new NoteUnavailableException('Nope');
     }

      
    }
	return $breakdown;
 
  }
  

  	
  }


?>