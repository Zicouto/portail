<?php

class reservationComponents extends sfComponents
{

  public function executeCalendarMenu()
  {
  }
  
  public function executeListeSalles()
  {    
    $this->salles = SalleTable::getInstance()->getSalleByPole()->execute();
  }
  
  
}

