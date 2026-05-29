<main>
    <?php
        if ($update):
    ?>
    <div class="comparison">
        <div class="old_data">
    <?php
        endif;
    ?>
    <h2 
        id="headings"> <?php if (!$update) {echo "You Have Saved These Details";} else {echo "These Are Your New Saved Details";}; ?>
    </h2>
    <p>
        <label for="jobref">
            Job Reference Number
        </label> 
        <input type="text" name= "jobref" id="jobref" value="<?php {echo $job_ref_num;}; ?>" disabled/>
    </p>
    <fieldset>
        <legend>
            Applicant Details
        </legend>
        <p>
            <label for="first_name">
                First Name
            </label> 
            <input type="text" name= "first_name" id="first_name" value="<?php echo $first_name; ?>" disabled/>
        </p>
        <p>
            <label for="last_name">
               Last Name
            </label> 
            <input type="text" name= "last_name" id="last_name" value="<?php echo $last_name; ?>" disabled/>
        </p>
        <p>
            <label for="gender">
                Gender
            </label> 
            <select name="gender" id="gender" disabled>
                <?php if ($gender == "female") {
                    echo "<option value='female'>Female</option>";
                } else if ($gender == "male") {
                    echo "<option value='male'>Male</option>";
                } else if ($gender == "other") {
                    echo "<option value='other'>Other</option>";
                } else{
                    echo "<option value='prefernot'>Prefer not to Say</option>";
                }; ?>                  
            </select>
        </p>
        <p>
            <label for="dob">
                Date of Birth
            </label> 
            <input type="date" name= "dob" id="dob" value="<?php echo $dob; ?>" disabled/>
        </p>
    </fieldset>
    <fieldset>
        <legend>    
            Right to Work Status
        </legend>
        <p>
            <label for="citizen">
                Australian Citizen
            </label> 
            <input type="checkbox" id="citizen" name="citizenship" value="citizen" <?php if ($citizenship) {echo "checked";}; ?> disabled/>
        </p>
        <p>
            <label for="indigenous">
                Indigenous Australian
            </label> 
            <input type="checkbox" id="indigenous" name="citizenship" value="indigenous" <?php if ($indigenous) {echo "checked";}; ?> disabled/>
        </p>
        <hr>
            <p>
                <label for="work_visa">
                    Work Visa
                </label> 
                <select name="work_visa" id="work_visa" disabled>
                    <?php if ($work_visa == "citizen") {
                        echo "<option value='citizen'>Not Applicable</option>";
                    } else if ($work_visa == "temporary_6_Months") {
                        echo "<option value='temporary_6_Months'>Temporary: 6 Months</option>";
                    } else if ($work_visa == "temporary_1_Year") {
                        echo "<option value='temporary_1_Year'>Temporary: 1 Year</option>";
                    } else if ($work_visa == "table") {
                        echo "<option value='table'>Temporary: 4 Years</option>";
                    } else if ($work_visa == "permanent_visa") {
                        echo "<option value='permanent_visa'>Permanent Work Visa</option>";
                    }; ?>
                </select>
            </p>
        </hr>
    </fieldset>
    <fieldset>
        <legend>    
            Address Information
        </legend>
        <p> 
            Provide Your Address Information Below
        </p>
        <p> 
            <label for="street">
                Street Address
            </label> 
            <input type="text" id="street" name="street" value="<?php echo $street; ?>"disabled/>
        </p>
        <p>
            <label for="suburb">
                Suburb/Town
            </label> 
            <input type="text" id="suburb" name="suburb" value="<?php echo $suburb; ?>"disabled/>
        </p>
        <p>
            <label for="state">
                State/Territory
            </label> 
            <select name="state" id="state" disabled>
                <?php if ($state == "victoria") {
                    echo "<option value='victoria'>VIC</option>";
                } else if ($state == "newsouthwales") {
                    echo "<option value='newsouthwales'>NSW</option>";
                } else if ($state == "queensland") {
                    echo "<option value='queensland'>QLD</option>";
                } else if ($state == "northernterritory") {
                    echo "<option value='northernterritory'>NT</option>";
                } else if ($state == "westernaustralia") {
                    echo "<option value='westernaustralia'>WA</option>";
                } else if ($state == "southaustralia") {
                    echo "<option value='southaustralia'>SA</option>";
                } else if ($state == "tasmania") {
                    echo "<option value='tasmania'>TAS</option>";
                } else if ($state == "australiancapitalterritory") {
                    echo "<option value='australiancapitalterritory'>ACT</option>";
                }; ?>
            </select>
        </p>
        <p> 
            <label for="postcode">
                Postcode
            </label> 
            <input type="text" id="postcode" name="postcode" value="<?php echo $postcode; ?>"disabled/>
        </p>
    </fieldset>
    <fieldset>
        <legend>
            Contact Details
        </legend>
        <p> 
            Provide Your Contact Details Below
        </p>
        <p>
            <label for="phone_number">  
                Phone Number
            </label>
            <input type="text" id="phone_number" name="phone_number" value="<?php echo $phone_number; ?>"disabled/>
        </p>
        <p>
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>"disabled/>
        </p>
    </fieldset> 
    <fieldset>
        <legend>
            Skills
        </legend>
        <fieldset>
            <legend>
                SC001
            </legend>
            <p>
                <label for="SC001keyskill1">
                    Bachelor's degree in Transport Planning, Data Science, Urban Studies, or a related field.
                </label>
                <input type="checkbox" name="SC001keyskill1" id="SC001keyskill1" <?php if ($SC001keyskill1) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill2">
                    Minimum 2 years' experience working with transport or geospatial data professionally.
                </label>
                <input type="checkbox" name="SC001keyskill2" id="SC001keyskill2" <?php if ($SC001keyskill2) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill3">
                    Proficiency in Python or R for data processing and analysis.
                </label>  
                <input type="checkbox" name="SC001keyskill3" id="SC001keyskill3" <?php if ($SC001keyskill3) {echo "checked";}; ?> disabled>
            </p>                     
            <p>
                <label for="SC001keyskill4">
                    Experience with SQL databases and ETL processes.
                </label>
                <input type="checkbox" name="SC001keyskill4" id="SC001keyskill4" <?php if ($SC001keyskill4) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill5">
                    Strong written communication skills; ability to present technical content to non-technical audiences.
                </label>
                <input type="checkbox" name="SC001keyskill5" id="SC001keyskill5" <?php if ($SC001keyskill5) {echo "checked";}; ?> disabled>
            </p>         
        </fieldset>
        <fieldset>
            <legend>
                SC002
            </legend>
            <p>
                <label for="SC002keyskill1">
                    Bachelor's degree in Transport Planning, Data Science, Urban Studies, or a related field.
                </label>
                <input type="checkbox" name="SC002keyskill1" id="SC002keyskill1" <?php if ($SC002keyskill1) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill2">
                    Minimum 2 years' experience working with transport or geospatial data professionally.
                </label>
                <input type="checkbox" name="SC002keyskill2" id="SC002keyskill2" <?php if ($SC002keyskill2) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill3">    
                    Proficiency in Python or R for data processing and analysis.
                </label>     
                <input type="checkbox" name="SC002keyskill3" id="SC002keyskill3" <?php if ($SC002keyskill3) {echo "checked";}; ?> disabled>
            </p>                  
            <p>
                <label for="SC002keyskill4">
                    Experience with SQL databases and ETL processes.
                </label>
                <input type="checkbox" name="SC002keyskill4" id="SC002keyskill4" <?php if ($SC002keyskill4) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill5">
                    Strong written communication skills; ability to present technical content to non-technical audiences.
                </label>
                <input type="checkbox" name="SC002keyskill5" id="SC002keyskill5" <?php if ($SC002keyskill5) {echo "checked";}; ?> disabled>
            </p>
        </fieldset>
        <p>
            <label for="other_skills">
                Other Skills
            </label>
            <textarea id="other_skills" name="other_skills" rows="4" cols="40" placeholder="<?php echo $other_skills; ?>" disabled></textarea>
        </p>
    </fieldset>
    <?php
        if ($update):
    ?>
    </div>
    <div class="new_data">
    <h2 
        id="headings"><?php if (!$update) {echo "You Have Submitted These Details";} else {echo "These Are Your Old Details";}; ?>
    </h2>
    <p>
        <label for="jobref">
            Job Reference Number
        </label> 
        <input type="text" name= "jobref" id="jobref" value="<?php {echo $old_row['job_ref_num'];}; ?>" disabled/>
    </p>
    <fieldset>
        <legend>
            Applicant Details
        </legend>
        <p>
            <label for="first_name">
                First Name
            </label> 
            <input type="text" name= "first_name" id="first_name" value="<?php echo $old_row['first_name']; ?>" disabled/>
        </p>
        <p>
            <label for="last_name">
               Last Name
            </label> 
            <input type="text" name= "last_name" id="last_name" value="<?php echo $old_row['last_name']; ?>" disabled/>
        </p>
        <p>
            <label for="gender">
                Gender
            </label> 
            <select name="gender" id="gender" disabled>
                <?php if ($old_row['gender'] == "female") {
                    echo "<option value='female'>Female</option>";
                } else if ($old_row['gender'] == "male") {
                    echo "<option value='male'>Male</option>";
                } else if ($old_row['gender'] == "other") {
                    echo "<option value='other'>Other</option>";
                } else{
                    echo "<option value='prefernot'>Prefer not to Say</option>";
                }; ?>                  
            </select>
        </p>
        <p>
            <label for="dob">
                Date of Birth
            </label> 
            <input type="date" name= "dob" id="dob" value="<?php echo $old_row['dob']; ?>" disabled/>
        </p>
    </fieldset>
    <fieldset>
        <legend>    
            Right to Work Status
        </legend>
        <p>
            <label for="citizen">
                Australian Citizen
            </label> 
            <input type="checkbox" id="citizen" name="citizenship" value="citizen" <?php if ($old_row['aus_citizen']) {echo "checked";}; ?> disabled/>
        </p>
        <p>
            <label for="indigenous">
                Indigenous Australian
            </label> 
            <input type="checkbox" id="indigenous" name="citizenship" value="indigenous" <?php if ($old_row['indigenous']) {echo "checked";}; ?> disabled/>
        </p>
        <hr>
            <p>
                <label for="work_visa">
                    Work Visa
                </label> 
                <select name="work_visa" id="work_visa" disabled>
                    <?php if ($old_row['work_visa'] == "citizen") {
                        echo "<option value='citizen'>Not Applicable</option>";
                    } else if ($old_row['work_visa'] == "temporary_6_Months") {
                        echo "<option value='temporary_6_Months'>Temporary: 6 Months</option>";
                    } else if ($old_row['work_visa'] == "temporary_1_Year") {
                        echo "<option value='temporary_1_Year'>Temporary: 1 Year</option>";
                    } else if ($old_row['work_visa'] == "table") {
                        echo "<option value='table'>Temporary: 4 Years</option>";
                    } else if ($old_row['work_visa'] == "permanent_visa") {
                        echo "<option value='permanent_visa'>Permanent Work Visa</option>";
                    }; ?>
                </select>
            </p>
        </hr>
    </fieldset>
    <fieldset>
        <legend>    
            Address Information
        </legend>
        <p> 
            Provide Your Address Information Below
        </p>
        <p> 
            <label for="street">
                Street Address
            </label> 
            <input type="text" id="street" name="street" value="<?php echo $old_row['street_addr']; ?>"disabled/>
        </p>
        <p>
            <label for="suburb">
                Suburb/Town
            </label> 
            <input type="text" id="suburb" name="suburb" value="<?php echo $old_row['suburb']; ?>"disabled/>
        </p>
        <p>
            <label for="state">
                State/Territory
            </label> 
            <select name="state" id="state" disabled>
                <?php if ($old_row['state'] == "victoria") {
                    echo "<option value='victoria'>VIC</option>";
                } else if ($old_row['state'] == "newsouthwales") {
                    echo "<option value='newsouthwales'>NSW</option>";
                } else if ($old_row['state'] == "queensland") {
                    echo "<option value='queensland'>QLD</option>";
                } else if ($old_row['state'] == "northernterritory") {
                    echo "<option value='northernterritory'>NT</option>";
                } else if ($old_row['state'] == "westernaustralia") {
                    echo "<option value='westernaustralia'>WA</option>";
                } else if ($old_row['state'] == "southaustralia") {
                    echo "<option value='southaustralia'>SA</option>";
                } else if ($old_row['state'] == "tasmania") {
                    echo "<option value='tasmania'>TAS</option>";
                } else if ($old_row['state'] == "australiancapitalterritory") {
                    echo "<option value='australiancapitalterritory'>ACT</option>";
                }; ?>
            </select>
        </p>
        <p> 
            <label for="postcode">
                Postcode
            </label> 
            <input type="text" id="postcode" name="postcode" value="<?php echo $old_row['postcode']; ?>"disabled/>
        </p>
    </fieldset>
    <fieldset>
        <legend>
            Contact Details
        </legend>
        <p> 
            Provide Your Contact Details Below
        </p>
        <p>
            <label for="phone_number">  
                Phone Number
            </label>
            <input type="text" id="phone_number" name="phone_number" value="<?php echo $old_row['phone_number']; ?>"disabled/>
        </p>
        <p>
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email" value="<?php echo $old_row['email']; ?>"disabled/>
        </p>
    </fieldset> 
    <fieldset>
        <legend>
            Skills
        </legend>
        <fieldset>
            <legend>
                SC001
            </legend>
            <p>
                <label for="SC001keyskill1">
                    Bachelor's degree in Transport Planning, Data Science, Urban Studies, or a related field.
                </label>
                <input type="checkbox" name="SC001keyskill1" id="SC001keyskill1" <?php if ($old_row['SC001_skill_1']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill2">
                    Minimum 2 years' experience working with transport or geospatial data professionally.
                </label>
                <input type="checkbox" name="SC001keyskill2" id="SC001keyskill2" <?php if ($old_row['SC001_skill_2']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill3">
                    Proficiency in Python or R for data processing and analysis.
                </label>  
                <input type="checkbox" name="SC001keyskill3" id="SC001keyskill3" <?php if ($old_row['SC001_skill_3']) {echo "checked";}; ?> disabled>
            </p>                     
            <p>
                <label for="SC001keyskill4">
                    Experience with SQL databases and ETL processes.
                </label>
                <input type="checkbox" name="SC001keyskill4" id="SC001keyskill4" <?php if ($old_row['SC001_skill_4']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC001keyskill5">
                    Strong written communication skills; ability to present technical content to non-technical audiences.
                </label>
                <input type="checkbox" name="SC001keyskill5" id="SC001keyskill5" <?php if ($old_row['SC001_skill_5']) {echo "checked";}; ?> disabled>
            </p>         
        </fieldset>
        <fieldset>
            <legend>
                SC002
            </legend>
            <p>
                <label for="SC002keyskill1">
                    Bachelor's degree in Transport Planning, Data Science, Urban Studies, or a related field.
                </label>
                <input type="checkbox" name="SC002keyskill1" id="SC002keyskill1" <?php if ($old_row['SC002_skill_1']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill2">
                    Minimum 2 years' experience working with transport or geospatial data professionally.
                </label>
                <input type="checkbox" name="SC002keyskill2" id="SC002keyskill2" <?php if ($old_row['SC002_skill_2']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill3">    
                    Proficiency in Python or R for data processing and analysis.
                </label>     
                <input type="checkbox" name="SC002keyskill3" id="SC002keyskill3" <?php if ($old_row['SC002_skill_3']) {echo "checked";}; ?> disabled>
            </p>                  
            <p>
                <label for="SC002keyskill4">
                    Experience with SQL databases and ETL processes.
                </label>
                <input type="checkbox" name="SC002keyskill4" id="SC002keyskill4" <?php if ($old_row['SC002_skill_4']) {echo "checked";}; ?> disabled>
            </p>
            <p>
                <label for="SC002keyskill5">
                    Strong written communication skills; ability to present technical content to non-technical audiences.
                </label>
                <input type="checkbox" name="SC002keyskill5" id="SC002keyskill5" <?php if ($old_row['SC002_skill_5']) {echo "checked";}; ?> disabled>
            </p>
        </fieldset>
        <p>
            <label for="other_skills">
                Other Skills
            </label>
            <textarea id="other_skills" name="other_skills" rows="4" cols="40" placeholder="<?php echo $old_row['other_skills']; ?>" disabled></textarea>
        </p>
    </fieldset>
    </div>
    </div>
    <?php
        endif;
    ?>
</main>