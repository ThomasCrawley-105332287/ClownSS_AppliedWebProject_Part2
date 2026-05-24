<?php
    require_once('../includes/settings.php');

    $pageTitle = "Expression of Interest Processing";
    $metaKeywords = "Smart City, ClownSS, Web Development, HTML5, tags, application, eoi";
    $metaAuthor = "Thomas Crawley";
    $mainCSS = "../styles/main_style_sheet.css";
    $extraCSS = "";

    $logoSrc = "../images/clownSS_logo_simple.png";
    $indexLink = "../index.php";
    $aboutLink = "about.php";
    $jobsLink = "jobs.php";
    $applyLink = "apply.php";

    $selfLink = "process_eoi.php";

    $null_exists = false;
    $first_name     = isset($_POST['first_name'    ]) ? $_POST['first_name'  ] : $null_exists = true;
    $last_name      = isset($_POST['last_name'     ]) ? $_POST['last_name'   ] : $null_exists = true;
    $gender         = isset($_POST['gender'        ]) ? $_POST['gender'      ] : $null_exists = true;
    $dob            = isset($_POST['dob'           ]) ? $_POST['dob'         ] : $null_exists = true;
    $citizenship    = isset($_POST['citizenship'   ]) ? 1 : 0;
    $indigenous     = isset($_POST['indigenous'    ]) ? 1 : 0;
    $work_visa      = isset($_POST['work_visa'     ]) ? $_POST['work_visa'   ] : $null_exists = true;
    $street         = isset($_POST['street'        ]) ? $_POST['street'      ] : $null_exists = true;
    $suburb         = isset($_POST['suburb'        ]) ? $_POST['suburb'      ] : $null_exists = true;
    $state          = isset($_POST['state'         ]) ? $_POST['state'       ] : $null_exists = true;
    $postcode       = isset($_POST['postcode'      ]) ? $_POST['postcode'    ] : $null_exists = true;
    $phone_number   = isset($_POST['phone_number'  ]) ? $_POST['phone_number'] : $null_exists = true;
    $email          = isset($_POST['email'         ]) ? $_POST['email'       ] : $null_exists = true;
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
    $other_skills   = isset($_POST['other_skills'  ]) ? $_POST['other_skills'] : '';
    $job_ref_num    = isset($_POST['jobref'        ]) ? $_POST['jobref'      ] : $null_exists = true;

    if (!$null_exists){
        $conn = mysqli_connect("localhost", "root", "", "clownss");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $reference_exists = "SELECT EXISTS (SELECT 1 FROM `eoi` WHERE phone_number = $phone_number)";
        $check_result = mysqli_query($conn, $reference_exists);
        if (mysqli_num_rows($check_result) > 0) {
            $update = true;
            $old_data = "SELECT * FROM `eoi` WHERE phone_number = $phone_number";
            $result = mysqli_query($conn, $old_data);
            $old_row = mysqli_fetch_assoc($result);
            $upadate_status = "UPDATE `eoi` SET first_name = '$first_name', last_name = '$last_name',
                                                gender = '$gender', dob = '$dob', aus_citizen = $citizenship, 
                                                indigenous = $indigenous, work_visa = '$work_visa', 
                                                street_addr = '$street', suburb = '$suburb', state = '$state',
                                                postcode = $postcode, phone_number = $phone_number, email = '$email',
                                                SC001_skill_1 = $SC001keyskill1, SC001_skill_2 = $SC001keyskill2, 
                                                SC001_skill_3 = $SC001keyskill3, SC001_skill_4 = $SC001keyskill4, 
                                                SC001_skill_5 = $SC001keyskill5, SC002_skill_1 = $SC002keyskill1, 
                                                SC002_skill_2 = $SC002keyskill2, SC002_skill_3 = $SC002keyskill3, 
                                                SC002_skill_4 = $SC002keyskill4, SC002_skill_5 = $SC002keyskill5,
                                                other_skills = '$other_skills', status = 'current' 
                                            WHERE phone_number = '$phone_number';";
            mysqli_query($conn, $upadate_status);
            mysqli_close($conn);

            require_once('../includes/header.inc');
            require_once('../includes/nav.inc');
            require_once('../includes/application.inc');
            require_once('../includes/footer.inc');
        } else {
            $sql = "INSERT INTO `eoi` (first_name, last_name, gender, dob, aus_citizen, indigenous, work_visa, 
                                    street_addr, suburb, state, postcode, phone_number, email, 
                                    SC001_skill_1, SC001_skill_2, SC001_skill_3, SC001_skill_4, SC001_skill_5, 
                                    SC002_skill_1, SC002_skill_2, SC002_skill_3, SC002_skill_4, SC002_skill_5, 
                                    other_skills, job_ref_num)
                                    VALUES
                                    ('$first_name', '$last_name', '$gender', '$dob', $citizenship, $indigenous, 
                                    '$work_visa', '$street', '$suburb', '$state', $postcode, $phone_number, '$email',
                                    $SC001keyskill1, $SC001keyskill2, $SC001keyskill3, $SC001keyskill4, $SC001keyskill5,
                                    $SC002keyskill1, $SC002keyskill2, $SC002keyskill3, $SC002keyskill4, $SC002keyskill5,
                                    '$other_skills', '$job_ref_num')";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);

            require_once('../includes/header.inc');
            require_once('../includes/nav.inc');
            require_once('../includes/application.inc');
            require_once('../includes/footer.inc');
        }
    } else if ($null_exists) {
        $applyLink = "apply.php";
        echo "<p>Error: Missing required fields. Please go back to the <a href='$applyLink'>apply page</a>  to fill out the form again.<P>";
    }
?>