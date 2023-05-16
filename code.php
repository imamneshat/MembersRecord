<?php
    session_start();
    include('Database.php');
    include('Member.php');

    $db = new Database;
  
    if(isset($_POST['save_member']))
    {
       $MperentStatus = $_POST['MperentStatus'] = 0;
       $memberP = $_POST['memberP'] = $_POST['MperentId'];
       
        $inputData = [
            'Mname' => mysqli_real_escape_string($db->conn,$_POST['Mname']),
            'memberP' => mysqli_real_escape_string($db->conn,$memberP),
            'MperentStatus' => mysqli_real_escape_string($db->conn,$MperentStatus)
        ];

        $Members = new Member;
        $result = $Members->create($inputData);
        
        if($result)
        {
            $_SESSION['message'] = "Member add Successfully";
            header("Location: index.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Member not add";
            header("Location: index.php");
            exit(0);
        }
    }
?>