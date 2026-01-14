<?php
namespace models;

use models\Person;

class Huissier extends Person {

    private bool $types_actes;
    
    
    public function CreateHuissier($name,$anne_experience,$types_actes,$ville_id){
        $stmt = $this->connection->prepare("INSERT INTO huissiers SET name=:name,types_actes=:type,annee_experience=:annee,ville_id=:ville");
        $result = $stmt->execute([':name'=>$name,
                                               ':type'=>$types_actes,
                                               ':annee'=>$anne_experience,
                                               ':ville'=>$ville_id ]);
        return $result;
    }    
}