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
        $result =  $statement->fetchAll(\PDO::FETCH_ASSOC);
        $statement->closeCursor();
          // Debug output
       
    
        return $result;
    }

    public function getSecretaries():?array 
    {
        $query = "SELECT * FROM ekosystem.secretaries";
        $db = $this->databaseRepository->getConnection();
        $statement = $db->prepare($query);
        $statement->execute();
        $secretaries = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $statement->closeCursor();
        if (is_array($secretaries)) {
           
            return $secretaries;
        
        }
        return null;
        'required' => true
        
        
    }
    
}