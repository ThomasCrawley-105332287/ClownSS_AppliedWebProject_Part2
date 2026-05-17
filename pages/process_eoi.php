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
    if(isset($_POST['citizenship'])) {
        $citizenship = 1;
    } else {
        $citizenship = 0;
    }
    if(isset($_POST['indigenous'])) {
        $indigenous = 1;
    } else {
        $indigenous = 0;
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
        $SC001keyskill1 = 1;
    } else {
        $SC001keyskill1 = 0;
    }
    if(isset($_POST['SC001keyskill2'])) {
        $SC001keyskill2 = 1;
    } else {
        $SC001keyskill2 = 0;
    }
    if(isset($_POST['SC001keyskill3'])) {
        $SC001keyskill3 = 1;
    } else {
        $SC001keyskill3 = 0;
    }
    if(isset($_POST['SC001keyskill4'])) {
        $SC001keyskill4 = 1;
    } else {
        $SC001keyskill4 = 0;
    }
    if(isset($_POST['SC001keyskill5'])) {
        $SC001keyskill5 = 1;
    } else {
        $SC001keyskill5 = 0;
    }
    if(isset($_POST['SC002keyskill1'])) {
        $SC002keyskill1 = 1;
    } else {
        $SC002keyskill1 = 0;
    }
    if(isset($_POST['SC002keyskill2'])) {
        $SC002keyskill2 = 1;
    } else {
        $SC002keyskill2 = 0;
    }
    if(isset($_POST['SC002keyskill3'])) {
        $SC002keyskill3 = 1;
    } else {
        $SC002keyskill3 = 0;
    }
    if(isset($_POST['SC002keyskill4'])) {
        $SC002keyskill4 = 1;
    } else {
        $SC002keyskill4 = 0;
    }
    if(isset($_POST['SC002keyskill5'])) {
        $SC002keyskill5 = 1;
    } else {
        $SC002keyskill5 = 0;
    }
    if(isset($_POST['other_skills'])) {
        $other_skills = $_POST['other_skills'];
    }

    $conn = mysqli_connect("localhost", "root", "", "clownss");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `apply` (first_name, last_name, gender, dob, aus_citizen, indigenous, work_visa, 
                                street_addr, suburb, state, postcode, phone_number, email, 
                                SC001_skill_1, SC001_skill_2, SC001_skill_3, SC001_skill_4, SC001_skill_5, 
                                SC002_skill_1, SC002_skill_2, SC002_skill_3, SC002_skill_4, SC002_skill_5, 
                                other_skills)
                                VALUES
                                ('$first_name', '$last_name', '$gender', '$dob', $citizenship, $indigenous, '$work_visa',
                                '$street', '$suburb', '$state', $postcode, $phone_number, '$email',
                                $SC001keyskill1, $SC001keyskill2, $SC001keyskill3, $SC001keyskill4, $SC001keyskill5,
                                $SC002keyskill1, $SC002keyskill2, $SC002keyskill3, $SC002keyskill4, $SC002keyskill5,
                                '$other_skills')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
?>