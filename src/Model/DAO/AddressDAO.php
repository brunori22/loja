<?php
<<<<<<< HEAD

=======
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
namespace APP\Model\DAO;

use APP\Model\Connection;
use PDO;

class AddressDAO implements DAO{

    public function insert($object){
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("INSERT INTO address VALUES (null,?,?,?,?,?,?,?);");
<<<<<<< HEAD
        
        $stmt->bindParam(1, $object->publc_place);
        $stmt->bindParam(2, $object->street_name);
        $stmt->bindParam(3, $object->number_of_street);
        $stmt->bindParam(4, $object->complement);
        $stmt->bindParam(5, $object->neighborhod);
        $stmt->bindParam(6, $object->city);
        $stmt->bindParam(7, $object->zipcode);
        return $stmt->execute();
    }
    public function findOne($id){}
    public function findAll(){}
    public function update($object){}
    public function delete($id){}

    public function __get($attribute){
        return $this->$attribute;
}
public function findId(){
    $connection = Connection:: getConnection();
    $result = $connection->query("SELECT max (adress_code) as Id FROM address;");
    return $result->fetch();

    
}




}



=======
        $stmt->bindParam(1, $object->publicPlace);
        $stmt->bindParam(2, $object->streetName);
        $stmt->bindParam(3, $object->numberOfStreet);
        $stmt->bindParam(4, $object->complement);
        $stmt->bindParam(5, $object->neighborhood);
        $stmt->bindParam(6, $object->city);
        $stmt->bindParam(7, $object->zipCode);
        return $stmt->execute();
    }

    public function findOne($id){}

    public function findAll(){}

    public function update($object){}

    public function delete($id){}

    public function findId()
    {
        $connection = Connection::getConnection();
        $result = $connection->query("SELECT max(address_code) as id FROM address;");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
>>>>>>> 9eb0ee9817dc9b668218981b4445bf94c801119c
