<?php

    for ($x = 1, $i = 1; $x <= 5; $x++, $i++) {
        $GLOBALS['cha' . $i] = $_POST['cha' . $x]; //cha1 is classname $cha1 is the php holder
        $GLOBALS['chb' . $i] = $_POST['chb' . $x];
        $GLOBALS['chc' . $i] = $_POST['chc' . $x];
        $GLOBALS['chd' . $i] = $_POST['chd' . $x];
        $GLOBALS['che' . $i] = $_POST['che' . $x];
        $GLOBALS['chf' . $i] = $_POST['chf' . $x];
        $GLOBALS['chg' . $i] = $_POST['chg' . $x];
        $GLOBALS['chh' . $i] = $_POST['chh' . $x];
        $GLOBALS['chi' . $i] = $_POST['chi' . $x];
        $GLOBALS['chj' . $i] = $_POST['chj' . $x];
    }


    #CourseOutcome

    for ($x = 1, $i = 1; $x <= 10; $x++, $i++) {
        $GLOBALS['a' . $i] = $_POST['a' . $x];
        $GLOBALS['b' . $i] = $_POST['b' . $x];
        $GLOBALS['c' . $i] = $_POST['c' . $x];
        $GLOBALS['d' . $i] = $_POST['d' . $x];
        $GLOBALS['e' . $i] = $_POST['e' . $x];
        $GLOBALS['f' . $i] = $_POST['f' . $x];
    }

    #Couse INFO
    $codes = $_POST['course_code'];
    $titles = $_POST['course_title'];
    $types = $_POST['course_type'];
    $units = $_POST['course_units'];
    $desc = $_POST['course_desc'];
    $prereq = $_POST['course_req'];
    $sched = $_POST['course_sched'];

    #Weeks INFO

    for ($x = 1, $i = 1; $x <= 16; $x++, $i++) {
        $GLOBALS['ilo' . $i] = $_POST['course_ilo' . $x];
        $GLOBALS['topic' . $i] = $_POST['course_topic' . $x];
        $GLOBALS['tla' . $i] = $_POST['course_tla' . $x];
        $GLOBALS['mode' . $i] = $_POST['course_mode' . $x];
        $GLOBALS['res' . $i] = $_POST['course_res' . $x];
        $GLOBALS['oba' . $i] = $_POST['course_oba' . $x];
        $GLOBALS['due' . $i] = $_POST['course_duedate' . $x];
        if ($x == 3) {
            $i += 2;
            $x += 2; //x = 6
        } else if ($x == 6) {
            $i += 3;
            $x += 3; //x = 10
        } else if ($x == 10) {
            $i += 2;
            $x += 2; //x = 13
        } else if ($x == 13) {
            $i += 2;
            $x += 2; //x = 16
        }
    }

    #-------------------------------------------

    // #Couse Coverage : Course Requirements | Grading System 
    // #Class Policies | References

    #lAB REQUIREMENTS
    $course_req = $_POST['course_requir'];


    #-------------------------------------------

    $grading_system = $_POST['grading_system'];

    $course_policies = $_POST['class_policies'];

    $rep_sup = $_POST['rep_sup'];


    #-------------------------------------------


    #-------------------------------------------



    #Revision History
    $no = $_POST['rev_no'];
    $date = $_POST['rev_date'];
    $imp = $_POST['rev_imp'];
    $highlights = $_POST['rev_highlights'];

    #Revision History | Instructor
    $insName = $_POST['ins_name'];
    $insRole = $_POST['ins_role'];
    $insNo = $_POST['ins_no'];
    $insEmail = $_POST['ins_email'];
    $insDept = $_POST['ins_dept'];
    $insSched1 = $_POST['ins_sched1'];
    $insSched2 = $_POST['ins_sched2'];

    #Revision History | Chairperson
    $chaName = $_POST['cha_name'];
    $chaRole = $_POST['cha_role'];
    $chaEmail = $_POST['cha_email'];
    $chaDate = $_POST['cha_date'];
    $chaDept = $_POST['cha_dept'];


    // -----------------------------------------------------------------------------
    // --------------------------------- Check a-j ------------------------------------
    $Newcheck_a = '';
    $Newcheck_b = '';
    $Newcheck_c = '';
    $Newcheck_d = '';
    $Newcheck_e = '';
    $Newcheck_f = '';
    $Newcheck_g = '';
    $Newcheck_h = '';
    $Newcheck_i = '';
    $Newcheck_j = '';
    for ($x = 1, $i = 1; $x <= 5; $x++, $i++) {

        if ($x == 1) {
            $Oldcheck_a = '[' . $_POST['cha' . $x] . ']';
            $Oldcheck_b = '[' . $_POST['chb' . $x] . ']';
            $Oldcheck_c = '[' . $_POST['chc' . $x] . ']';
            $Oldcheck_d = '[' . $_POST['chd' . $x] . ']';
            $Oldcheck_e = '[' . $_POST['che' . $x] . ']';
            $Oldcheck_f = '[' . $_POST['chf' . $x] . ']';
            $Oldcheck_g = '[' . $_POST['chg' . $x] . ']';
            $Oldcheck_h = '[' . $_POST['chh' . $x] . ']';
            $Oldcheck_i = '[' . $_POST['chi' . $x] . ']';
            $Oldcheck_j = '[' . $_POST['chj' . $x] . ']';
        } else {
            $Oldcheck_a = ', [' . $_POST['cha' . $x] . ']';
            $Oldcheck_b = ', [' . $_POST['chb' . $x] . ']';
            $Oldcheck_c = ', [' . $_POST['chc' . $x] . ']';
            $Oldcheck_d = ', [' . $_POST['chd' . $x] . ']';
            $Oldcheck_e = ', [' . $_POST['che' . $x] . ']';
            $Oldcheck_f = ', [' . $_POST['chf' . $x] . ']';
            $Oldcheck_g = ', [' . $_POST['chg' . $x] . ']';
            $Oldcheck_h = ', [' . $_POST['chh' . $x] . ']';
            $Oldcheck_i = ', [' . $_POST['chi' . $x] . ']';
            $Oldcheck_j = ', [' . $_POST['chj' . $x] . ']';
        }
        $Newcheck_a .= $Oldcheck_a;
        $Newcheck_b .= $Oldcheck_b;
        $Newcheck_c .= $Oldcheck_c;
        $Newcheck_d .= $Oldcheck_d;
        $Newcheck_e .= $Oldcheck_e;
        $Newcheck_f .= $Oldcheck_f;
        $Newcheck_g .= $Oldcheck_g;
        $Newcheck_h .= $Oldcheck_h;
        $Newcheck_i .= $Oldcheck_i;
        $Newcheck_j .= $Oldcheck_j;

        $GLOBALS['check_a'] = $Newcheck_a;
        $GLOBALS['check_b'] = $Newcheck_b;
        $GLOBALS['check_c'] = $Newcheck_c;
        $GLOBALS['check_d'] = $Newcheck_d;
        $GLOBALS['check_e'] = $Newcheck_e;
        $GLOBALS['check_f'] = $Newcheck_f;
        $GLOBALS['check_g'] = $Newcheck_g;
        $GLOBALS['check_h'] = $Newcheck_h;
        $GLOBALS['check_i'] = $Newcheck_i;
        $GLOBALS['check_j'] = $Newcheck_j;
    }
    // --------------------------------- Level a-f ------------------------------------
        $Newlevel_a = '';
        $Newlevel_b = '';
        $Newlevel_c = '';
        $Newlevel_d = '';
        $Newlevel_e = '';
        $Newlevel_f = '';
    for ($x = 1, $i = 1; $x <= 10; $x++, $i++) {

        if ($x == 1) {
            $Oldlevel_a = '[' . $_POST['a' . $x] . ']';
            $Oldlevel_b = '[' . $_POST['b' . $x] . ']';
            $Oldlevel_c = '[' . $_POST['c' . $x] . ']';
            $Oldlevel_d = '[' . $_POST['d' . $x] . ']';
            $Oldlevel_e = '[' . $_POST['e' . $x] . ']';
            $Oldlevel_f = '[' . $_POST['f' . $x] . ']';
        } else {
            $Oldlevel_a = ', [' . $_POST['a' . $x] . ']';
            $Oldlevel_b = ', [' . $_POST['b' . $x] . ']';
            $Oldlevel_c = ', [' . $_POST['c' . $x] . ']';
            $Oldlevel_d = ', [' . $_POST['d' . $x] . ']';
            $Oldlevel_e = ', [' . $_POST['e' . $x] . ']';
            $Oldlevel_f = ', [' . $_POST['f' . $x] . ']';
        }
        $Newlevel_a .= $Oldlevel_a;
        $Newlevel_b .= $Oldlevel_b;
        $Newlevel_c .= $Oldlevel_c;
        $Newlevel_d .= $Oldlevel_d;
        $Newlevel_e .= $Oldlevel_e;
        $Newlevel_f .= $Oldlevel_f;

        $GLOBALS['level_a'] = $Newlevel_a;
        $GLOBALS['level_b'] = $Newlevel_b;
        $GLOBALS['level_c'] = $Newlevel_c;
        $GLOBALS['level_d'] = $Newlevel_d;
        $GLOBALS['level_e'] = $Newlevel_e;
        $GLOBALS['level_f'] = $Newlevel_f;
    }
    // --------------------------------- Course ------------------------------------
   
    $week_a =  '[' . $ilo1 . ']' .  ', [' . $topic1 . ']' . ', [' . $tla1 . ']' . ', [' . $mode1 . ']' . ', [' . $res1 . ']' . ', [' . $oba1 . ']' . ', [' . $due1 . ']';
    $week_b =  '[' . $ilo2 . ']' .  ', [' . $topic2 . ']' . ', [' . $tla2 . ']' . ', [' . $mode2 . ']' . ', [' . $res2 . ']' . ', [' . $oba2 . ']' . ', [' . $due2 . ']';
    $week_c =  '[' . $ilo3 . ']' .  ', [' . $topic3 . ']' . ', [' . $tla3 . ']' . ', [' . $mode3 . ']' . ', [' . $res3 . ']' . ', [' . $oba3 . ']' . ', [' . $due3 . ']';
    $week_d =  '[' . $ilo6 . ']' .  ', [' . $topic6 . ']' . ', [' . $tla6 . ']' . ', [' . $mode6 . ']' . ', [' . $res6 . ']' . ', [' . $oba6 . ']' . ', [' . $due6 . ']';
    $week_e =  '[' . $ilo10 . ']' .  ', [' . $topic10 . ']' . ', [' . $tla10 . ']' . ', [' . $mode10 . ']' . ', [' . $res10 . ']' . ', [' . $oba10 . ']' . ', [' . $due10 . ']';
    $week_f =  '[' . $ilo13 . ']' .  ', [' . $topic13 . ']' . ', [' . $tla13 . ']' . ', [' . $mode13 . ']' . ', [' . $res13 . ']' . ', [' . $oba13 . ']' . ', [' . $due13 . ']';
    $week_g =  '[' . $ilo16 . ']' .  ', [' . $topic16 . ']' . ', [' . $tla16 . ']' . ', [' . $mode16 . ']' . ', [' . $res16 . ']' . ', [' . $oba16 . ']' . ', [' . $due16 . ']';

    // --------------------------------- Rev ------------------------------------
    $rev =  '[' . $no . ']' .  ', [' . $date . ']' . ', [' . $imp . ']' . ', [' . $highlights . ']';
    // --------------------------------- Instructor ------------------------------------
    $instructor =  '[' . $insName . ']' .  ', [' . $insRole . ']' . ', [' . $insNo . ']' . ', [' . $insEmail . ']' . ', [' . $insDept . ']' . ', [' . $insSched1 . ']' . ', [' . $insSched2 . ']';
    // --------------------------------- chairperson ------------------------------------
    $chairperson =  '[' . $chaName . ']' .  ', [' . $chaRole . ']' . ', [' . $chaEmail . ']' . ', [' . $chaDate . ']' . ', [' . $chaDept . ']';
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "university";  
    $id = $_GET['id'];  
    $con = mysqli_connect($host, $user, $password, $db_name);  

    $sql = "INSERT INTO `syllabus`(`course_code`, `course_title`, `course_type`, 
    `course_units`, `course_pre-req`, `course_shced`, `course_description`, `check_a`, 
    `check_b`, `check_c`, `check_d`, `check_e`, `check_f`, 
    `check_g`, `check_h`, `check_i`, `check_j`, `level_a`, 
    `level_b`, `level_c`, `level_d`, `level_e`, `level_f`, 
    `week_a`, `week_b`, `week_c`, `week_d`, `week_e`, `week_f`, 
    `week_g`, `course_req`, `grading_system`, `class_policies`, 
    `ref_sup`, `rev`, `instructor`, `chairperson`, `Instr_ID`) 
    VALUES ('$codes','$titles','$types','$units','$prereq','$sched','$desc',\"" . $check_a . "\",\"" . $check_b . "\",\"" . $check_c . "\",\"" . $check_d . "\",\"" . $check_e . "\",\"" . $check_f . "\",\"" . $check_g . "\",\"" . $check_h . "\",\"" . $check_i . "\",\"" . $check_j . "\",\"" . $level_a . "\",\"" . $level_b . "\",\"" . $level_c . "\",\"" . $level_d . "\",\"" . $level_e . "\",\"" . $level_f . "\",\"" . $week_a . "\",\"" . $week_b . "\",\"" . $week_c . "\",\"" . $week_d . "\",\"" . $week_e . "\",\"" . $week_f . "\",\"" . $week_g . "\",\"" . $course_req . "\",\"" . $grading_system . "\",\"" . $course_policies. "\",\"" . $rep_sup . "\",\"" . $rev . "\",\"" . $instructor . "\",\"" . $chairperson . "\", $id)";

mysqli_query($con, $sql);

    echo("<script>alert('Form successful Inserted!')</script>");
    echo("<script>window.location = 'CvSU_Instructor/InstructorPage.php';</script>");

