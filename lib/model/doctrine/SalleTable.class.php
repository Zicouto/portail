<?php

/**
 * SalleTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SalleTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SalleTable
     */
    public static function getInstance()
    {
    	return Doctrine_Core::getTable('Salle');
    }
    
    public function getAllSalles()
    {
      return $this->createQuery('s')
                  ->leftJoin('s.Pole p')
                  ->addOrderBy('p.id ASC');
    }
    
    public function getSalleById($id)
    {
      $q = $this->createQuery('q')->where('q.id=?',$id)->limit(1);
        
      return $q;
    }
    
    public function deleteSalle($id)
    {
      $q = $this->createQuery()
                ->delete()
                ->where('id=?',$id);
        
      return $q;
    }
    
    public function isSalleExist($id)
    {
      $salle = $this->getSalleById($id)->execute();
        
      return (count($salle) > 0);
    }
    
    public function getSalleByPole($poleid)
    {
      $q = $this->createQuery('q')
                ->leftJoin('q.Pole p')
                ->leftJoin('p.Asso a')
                ->where('id_pole=?',$poleid);
        
      return $q;
    }

    /* Statistiques Reservations Salles */
    public function getStatSalle()
    {
      $q = $this->createQuery('s')
                ->select('s.*, r.*, p.*, count(r.id) as count_resa')
                ->leftJoin('s.Reservation r')
                ->leftJoin('s.Pole p')
                ->groupBy('s.id')
                ->addOrderBy('p.id ASC');
      return $q;
    }
    
}