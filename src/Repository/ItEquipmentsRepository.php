<?php
namespace App\Repository;
use App\Repository\DatabaseRepository;

/**
 * 
 */

class ItEquipmentsRepository {
    public DatabaseRepository $databaseRepository;

    public function __construct(DatabaseRepository $databaseRepository)
    {
        $this->databaseRepository = $databaseRepository;
        
    }

    /**
     *@Array 
     */
    public function getItEquipments()
    {
        $query = "SELECT * FROM ekosystem.it_equipment";
        $db = $this->databaseRepository->getConnection();
        $statement = $db->prepare($query);
        $statement->execute();
        $result =  $statement->fetchAll();
        $statement->closeCursor();
          // Debug output
       
    
        return $result;
    }
    
}