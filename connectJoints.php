<?php

    if(isset($_POST['Base_M1']) || isset($_POST['Shoulder_M2']) || isset($_POST['Elbow_M3']) || isset($_POST['Wrist_M4']) || isset($_POST['Grapper_M5']) || isset($_POST['Engine_M6'])) {
        $Base_M1 = $_POST["Base_M1"];
        $Shoulder_M2 = $_POST["Shoulder_M2"];
        $Elbow_M3 = $_POST["Elbow_M3"];
        $Wrist_M4 = $_POST["Wrist_M4"];
        $Grapper_M5 = $_POST["Grapper_M5"];
        $Engine_M6 = $_POST["Engine_M6"];
    }
    

    $conn = new mysqli('localhost', 'root', '', 'robotarm');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into motors(Base_M1,Shoulder_M2,Elbow_M3,Wrist_M4,Grapper_M5,Engine_M6) values(?,?,?,?,?,?)");
        $stmt->bind_param("iiiiii", $Base_M1, $Shoulder_M2, $Elbow_M3, $Wrist_M4, $Grapper_M5, $Engine_M6);
        $stmt->execute();
        echo "Done";
        $stmt->Close();
        //$conn->Close();
    }

    $sql = "SELECT * FROM motors";
    $result = $conn->query($sql);

    while ($fetch = mysqli_fetch_assoc($result)) {

        echo "<br> Base_M1: ".$fetch['Base_M1'];
        echo " Shoulder_M2: ".$fetch['Shoulder_M2'];
        echo " Elbow_M3: ".$fetch['Elbow_M3'];
        echo " Wrist_M4: ".$fetch['Wrist_M4'];
        echo " Grapper_M5: ".$fetch['Grapper_M5'];
        echo " Engine_M6: ".$fetch['Engine_M6'];
    }
    

?>