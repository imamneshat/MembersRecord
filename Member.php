<?php 

    class Member {
        
        public function __construct()
        {
            $db = new Database;
            $this->conn = $db->conn;
        }

        public function create($inputData)
        {

            $Mname = $inputData['Mname'];
            $memberP = $inputData['memberP'];
            $MperentStatus = $inputData['MperentStatus'];

            $membersQuery = "INSERT INTO members (Mname,ParentId,statusParent) VALUES ('$Mname','$memberP','$MperentStatus')";
            $result = $this->conn->query($membersQuery);
            
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }

?>