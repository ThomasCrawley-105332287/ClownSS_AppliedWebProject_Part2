<?php
    require_once('../includes/settings.php');

    if(isset($_POST['first_name'])) {
        $first_name = $_POST['first_name'];
    }
    if(isset($_POST['last_name'])) {
        $last_name = $_POST['last_name'];
    }
    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }
    if(isset($_POST['dob'])) {
        $dob = $_POST['dob'];
    }
    if(isset($_POST['citizen'])) {
        $citizen = $_POST['citizen'];
    }
    if(isset($_POST['indigenous'])) {
        $indigenous = $_POST['indigenous'];
    }
    if(isset($_POST['work_visa'])) {
        $work_visa = $_POST['work_visa'];
    }
    if(isset($_POST['street'])) {
        $street = $_POST['street'];
    }
    if(isset($_POST['suburb'])) {
        $suburb = $_POST['suburb'];
    }
    if(isset($_POST['state'])) {
        $state = $_POST['state'];
    }
    if(isset($_POST['postcode'])) {
        $postcode = $_POST['postcode'];
    }
    if(isset($_POST['phone_number'])) {
        $phone_number = $_POST['phone_number'];
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if(isset($_POST['SC001keyskill1'])) {
        $SC001keyskill1 = $_POST['SC001keyskill1'];
    }
    if(isset($_POST['SC001keyskill2'])) {
        $SC001keyskill2 = $_POST['SC001keyskill2'];
    }
    if(isset($_POST['SC001keyskill3'])) {
        $SC001keyskill3 = $_POST['SC001keyskill3'];
    }
    if(isset($_POST['SC001keyskill4'])) {
        $SC001keyskill4 = $_POST['SC001keyskill4'];
    }
    if(isset($_POST['SC001keyskill5'])) {
        $SC001keyskill5 = $_POST['SC001keyskill5'];
    }
    if(isset($_POST['SC002keyskill1'])) {
        $SC002keyskill1 = $_POST['SC002keyskill1'];
    }
    if(isset($_POST['SC002keyskill2'])) {
        $SC002keyskill2 = $_POST['SC002keyskill2'];
    }
    if(isset($_POST['SC002keyskill3'])) {
        $SC002keyskill3 = $_POST['SC002keyskill3'];
    }
    if(isset($_POST['SC002keyskill4'])) {
        $SC002keyskill4 = $_POST['SC002keyskill4'];
    }
    if(isset($_POST['SC002keyskill5'])) {
        $SC002keyskill5 = $_POST['SC002keyskill5'];
    }
    if(isset($_POST['otherskills'])) {
        $otherskills = $_POST['otherskills'];
    }

    $conn = mysqli_connect("localhost", "root", "", "clownss");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO apply (first_name, 
                                last_name, 
                                gender, 
                                dob, 
                                citizen, 
                                indigenous, 
                                work_visa, 
                                street, 
                                suburb, 
                                state, 
                                postcode, 
                                phone_number, 
                                email, 
                                SC001keyskill1, 
                                SC001keyskill2, 
                                SC001keyskill3, 
                                SC001keyskill4, 
                                SC001keyskill5, 
                                SC002keyskill1, 
                                SC002keyskill2, 
                                SC002keyskill3, 
                                SC002keyskill4, 
                                SC002keyskill5, 
                                otherskills)";
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
?>