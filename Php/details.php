<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/details.css">
    <title>Details</title>
</head>
<body>
    <div class="container">

    <!-- Header Start -->
        <header>
            <h2>Subjects :</h2>
            <form action="" method="post"> 
                <select name="subject">
                    <option>Select The Option</option>
                    <option value="PMSE">Project Management & Software Engineering</option>             
                    <option value="ESRTOS">Embedded System & Real Time Operating System</option>        
                    <option value="OS">Operating System</option>                                        
                    <option value="AIML">Artifical Intelligence & Machine Learing</option>
                    <option value="ESRTOSLAB">Embedded System & Real Time Operating System Lab</option> 
                    <option value="SALAB">System Administration Lab</option>                            
                    <option value="AIMLLAB">Artifical Intelligence & Machine Learing Lab</option>       
                    <option value="Seminar">Seminar</option>                                            
                    <option value="MP">Major Project</option>                                          
                </select>
                <input type="submit" name="submit">
                <button><a href="../HomePage/Home.html">Back</a></button>
            </form>
        </header>
    <!-- Header Ends -->

        <!-- Table Data -->
        <div class="Tbody">
            <table>
                <caption>Details</caption>
                <tr>
                    <th>Date          </th>
                    <th>Subject       </th>
                    <th>Student Status</th>
                    <th>Teacher Status</th>
                </tr>
                <?php require '../Php/connection.php';?>
                <?php
                if (isset($_POST['submit'])) {
                    $sub = $_POST['subject'];
                    if ($sub == "PMSE") {
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from pmse";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif($sub == "ESRTOS"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from esrtos";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "Seminar"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from seminar";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "AIML") {
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from aiml";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "OS"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from operatingsystem";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "ESRTOSLAB"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from esrtoslab";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "SALAB"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from salab";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "AIMLLAB"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from aimllab";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                    elseif ($sub == "MP"){
                        $qur = "select Date ,Subject ,StudentLeave ,TeacherLeave from majorproject";
                        $result = mysqli_query($conn,$qur);
                        if ($result->num_rows > 0) {
                            while ($row =  mysqli_fetch_assoc($result)) {
                                echo"<tr><td>" .$row['Date']. "</td><td>" .$row['Subject']. "</td><td>" .$row['StudentLeave']. "</td><td>" .$row['TeacherLeave']. "</td><td></tr>";
                            }
                            echo"</table>";
                        }
                        else {
                            echo" 0 Result";
                        }
                    }
                }
                mysqli_close($conn);
                ?>
        </div>
        <!-- Tabel Data End -->
    </div>
</body>
</html>