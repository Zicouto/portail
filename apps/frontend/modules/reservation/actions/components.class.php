<?php

class reservationComponents extends sfComponents
{

  
  public function executeCalendarMenu()
  {
    /*$assos = AssoTable::getInstance()->getAssosAndNotPolesList();

    foreach($assos as $asso)
    {
      $poles[$asso->getPoleId()][] = $asso;
    }
    $this->poles = $poles;*/
  }
  
  public function executeListeSalle()
  {
    $salles = SalleTable::getInstance()->getAllSalles();
  }
  
}

