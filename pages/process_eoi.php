<?php
    require_once('../includes/settings.php');

    $null_exists = false;
    $first_name     = isset($_POST['first_name'])     ? $_POST['first_name']   : $null_exists = true;
    $last_name      = isset($_POST['last_name'])      ? $_POST['last_name']    : $null_exists = true;
    $gender         = isset($_POST['gender'])         ? $_POST['gender']       : $null_exists = true;
    $dob            = isset($_POST['dob'])            ? $_POST['dob']          : $null_exists = true;
    $citizenship    = isset($_POST['citizenship'])    ? 1 : 0;
    $indigenous     = isset($_POST['indigenous'])     ? 1 : 0;
    $work_visa      = isset($_POST['work_visa'])      ? $_POST['work_visa']    : $null_exists = true;
    $street         = isset($_POST['street'])         ? $_POST['street']       : $null_exists = true;
    $suburb         = isset($_POST['suburb'])         ? $_POST['suburb']       : $null_exists = true;
    $state          = isset($_POST['state'])          ? $_POST['state']        : $null_exists = true;
    $postcode       = isset($_POST['postcode'])       ? $_POST['postcode']     : $null_exists = true;
    $phone_number   = isset($_POST['phone_number'])   ? $_POST['phone_number'] : $null_exists = true;
    $email          = isset($_POST['email'])          ? $_POST['email']        : $null_exists = true;
    $SC001keyskill1 = isset($_POST['SC001keyskill1']) ? 1 : 0;
    $SC001keyskill2 = isset($_POST['SC001keyskill2']) ? 1 : 0;
    $SC001keyskill3 = isset($_POST['SC001keyskill3']) ? 1 : 0;
    $SC001keyskill4 = isset($_POST['SC001keyskill4']) ? 1 : 0;
    $SC001keyskill5 = isset($_POST['SC001keyskill5']) ? 1 : 0;
    $SC002keyskill1 = isset($_POST['SC002keyskill1']) ? 1 : 0;
    $SC002keyskill2 = isset($_POST['SC002keyskill2']) ? 1 : 0;
    $SC002keyskill3 = isset($_POST['SC002keyskill3']) ? 1 : 0;
    $SC002keyskill4 = isset($_POST['SC002keyskill4']) ? 1 : 0;
    $SC002keyskill5 = isset($_POST['SC002keyskill5']) ? 1 : 0;
    $other_skills   = isset($_POST['other_skills'])   ? $_POST['other_skills']  : '';

    if (!$null_exists){
        $conn = mysqli_connect("localhost", "root", "", "clownss");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO `oei` (first_name, last_name, gender, dob, aus_citizen, indigenous, work_visa, 
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
    } else if ($null_exists) {
        $applyLink = "apply.php";
        echo "<p>Error: Missing required fields. Please go back to the <a href='$applyLink'>apply page</a>  to fill out the form again.<P>";
    }
?>