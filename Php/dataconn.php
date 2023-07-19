<?php require '../Php/connection.php';?>
<?php
if (isset($_POST["submit"])) {
    $date = $_POST["date"];
    $sub = $_POST["subject"];
    $Sleave = $_POST["Studentstatus"];
    $reason = $_POST["Reason"];
    $Tleave = $_POST["Teacherstatus"];

    // Artifical Intelligence & Machine Learing
    if ($sub == "AIML") {
        $sql = "insert into aiml values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    } 

    // Embedded System & Real Time Operating System
    elseif ($sub == "ESRTOS") {
        $sql = "insert into esrtos values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // Seminar
    elseif ($sub == "Seminar") {
        $sql = "insert into seminar values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }
    
    // Project Management & Software Engineering
    elseif ($sub == "PMSE") {
        $sql = "insert into pmse values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // Operating System
    elseif ($sub == "OS") {
        $sql = "insert into operatingsystem values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // Embedded System & Real Time Operating System Lab
    elseif ($sub == "ESRTOSLAB") {
        $sql = "insert into esrtoslab values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // System Administration Lab
    elseif ($sub == "SALAB") {
        $sql = "insert into salab values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // Artifical Intelligence & Machine Learing Lab
    elseif ($sub == "AIMLLAB") {
        $sql = "insert into aimllab values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

    // Major Project
    elseif ($sub == "MP") {
        $sql = "insert into majorproject values('$date','$sub','$Sleave','$reason','$Tleave')";
        if (mysqli_query($conn,$sql)) {
            echo"<script>alert('Value inserted Succesfully')</script>";
        }else{
            echo"<script>alert('Error in value insertion')</script>";
        }
    }

}
mysqli_close($conn);
?>