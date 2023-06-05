<?php

include('library/tcpdf.php');

if (!empty($_POST['submit'])) {
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
    $code = $_POST['course_code'];
    $title = $_POST['course_title'];
    $type = $_POST['course_type'];
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



    $pdf = new TCPDF('L', 'mm', 'A4');

    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);

    $pdf->AddPage();
    $pdf->setFont('Helvetica', 'B', 12);
    $pdf->Cell(0, 50, "DEPARTMENT OF INFORMATION TECHNOLOGY", 1, 1, 'C');

    $pdf->setFont('Helvetica', 'B', 10);
    $pdf->Cell(0, 10, "COURSE SYLLABUS $imp", 1, 1, 'C');

    #coursecode
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(25, 10, "Course Code: ", 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(40, 10, $code, 1, 0);
    #coursetitle
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(25, 10, "Course Title: ", 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(61, 10, $title, 1, 0);
    #coursetype
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(21, 10, "Type: ", 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(58, 10, "$type", 1, 0);
    #courseunits
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(20, 10, "Credit Units: ", 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(27, 10, $units, 1, 0);

    $pdf->Ln();

    $html1 = "
            <table>
                <tr>
                    <th>Course Description</th>
                    <td>" . $desc . "</td>
                </tr>
                ";

    $html1 .= "
            </table>
            <style>
            table {
                padding:8,0,0,8;
                border-collapse:collapse;
            }
            th,td {
                border:1px solid #000;
                font-size: 8px;
                border-spacing: 30px;
            }
            th{
                text-align: center;
            }
            table tr th {
                background-color:#fff;
                color:#000;
                font-size: 8px;
                font-weight:bold;
            }
            </style>
        ";

    $pdf->WriteHTMLCell(279, 0, 9, '', $html1, 0);

    $pdf->Ln();

    #coursepre
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(25, 10, "Pre-requisites: ", 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(101, 10, $prereq, 1, 0);

    $txt = "Course Sched Laboratory / Lecture:";

    #coursesched
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(50, 10, $txt, 1, 0);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(101, 10, $sched, 1, 0);
    $pdf->Ln();


    $pdf->setCellPaddings(2, 4, 6, 8);

    $pdf->SetFont("Helvetica", "B", 8);
    $txt = 'Students are expected to live by and stand for the following University tenets:
        TRUTH is demonstrated by the student’s objectivity and honesty during examinations, class activities and in the development of projects.
        EXCELLENCE is exhibited by the students’ self-confidence, punctuality, diligence and commitment in the assigned tasks, class 
        performance and other course requirements. 
        SERVICE is manifested by the students’ respect, rapport, fairness and cooperation in dealing with their peers and members of the 
        community.
        In addition, they should exhibit love and respect for nature and support for the cause of humanity.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    // Vertical alignment
    $pdf->MultiCell(25, 47.3, 'Core Values ', 1, '', 1, 0, '', '', true, 0, false, true, 40, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(252, 46, '' . $txt, 1, '', 1, 0, '', '', true, 0, false, true, 40, 'T');

    $pdf->Ln();

    $pdf->setCellPaddings(2, 4, 6, 8);

    $pdf->SetFont("Helvetica", "B", 8);
    $txt = 'Imus Campus shall endeavor to achieve the following goals:
        1. provide a general education program that will promote national identity, cultural consciousness, moral integrity and spiritual vigor;
        2. train the nation’s manpower in the skills required by the national development;
        3. develop professions that will provide leadership for the nation; an advance knowledge through research work and apply new knowledge for improving the quality of human life;
        4. respond effectively to changing societal needs and conditions;
        5. act in recognition of professional, social and ethical responsibility; and
        6. preserve and promote Filipino historical and culture heritage.
        ';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    // Vertical alignment
    $pdf->MultiCell(25, 40, 'Goals of the College / Campus ', 1, '', 1, 0, '', '', true, 0, false, true, 30, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(252, 40, '' . $txt, 1, '', 1, 0, '', '', true, 0, false, true, 20, 'T');

    $pdf->writeHTML('<br pagebreak="true" />', true, 0, true, 0);


    $pdf->setCellPaddings(2, 4, 6, 8);

    $pdf->SetFont("Helvetica", "B", 8);
    $txt = 'The Department of Information Technology shall endeavor to:
            1. produce skilled professionals;
            2. produce globally competitive and morally upright individuals;
            3. give students advance knowledge through a research work and respond effectively to changing societal needs and conditions;
            4. promote leadership, development and apply IT skills for the improvement of the quality of life; and
            5. provide students both local and international careers not only in the IT industry but in various field such as medicine, arts, entertainment, 
            engineering, communication, and a lot more.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    // Vertical alignment
    $pdf->MultiCell(25, 43.8, 'Objectives of the Department ', 1, '', 1, 0, '', '', true, 0, false, true, 40, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(252, 43.8, '' . $txt, 1, '', 1, 0, '', '', true, 0, false, true, 40, 'T');

    $pdf->Ln();

    $txt = "<b>The BSINFOTECH program aims to produce graduate who can: </b> <br><br>&nbsp;&nbsp;&nbsp;&nbsp; 1.apply knowledge of utilization of both hardware and software technologies involving planning, installing, customizing, operating, managing and administering, and maintaining information technology infrastructure that provide computing solutions to address the needs of an organization;
        <br>&nbsp;&nbsp;&nbsp;&nbsp; 2. conduct relevant researches and extension program activities in the field of information technology;
        <br>&nbsp;&nbsp;&nbsp;&nbsp; 3. promote the development and transfer of appropriate information technology;
        <br>&nbsp;&nbsp;&nbsp;&nbsp; 4. promote environmental preservation and protection on projects and enterprises related to information technology; and
        <br>&nbsp;&nbsp;&nbsp;&nbsp; 5. become morally upright IT professionals with primary and secondary job roles.";

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setCellPaddings(2, 0, 2, 0);
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->Cell(0, 6, "Program Educational Objectives (based on the program CMO)", 1, 1, 'C', true, 0, false, true);

    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(4, 4, 4, 4);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->writeHTMLCell(0, '', '', '', $txt, 1, 1, 1, true, 'J', true);


    $pdf->SetFillColor(168, 208, 141);
    $pdf->setCellPaddings(0, 0, 0, 0);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "Program Educational Objectives (based on the program CMO)", 1, 1, 'C', true, 0, false, true);

    #PROGRAM
    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->Cell(187, 20, "Program/Student Outcomes (based on the program CMO)
        ", 1, 0, 'C');
    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(90, 20, "Program Educational Objectives (based on the 
        program CMO)", 'LRTB', 1, 0, 'C');

    #corevalues
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->Cell(187, 6, "    The students should: ", 1, 0, 'L');

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->Cell(18, 6, "1", 1, 0, 'C');
    $pdf->Cell(18, 6, "2", 1, 0, 'C');
    $pdf->Cell(18, 6, "3", 1, 0, 'C');
    $pdf->Cell(18, 6, "4", 1, 0, 'C');
    $pdf->Cell(18, 6, "5", 1, 0, 'C');

    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'apply knowledge of computing fundamentals, knowledge of a computing specialization, and mathematics, science and domain knowledge appropriate for computing specialization to the abstraction and conceptualization of computing models from defined problems and requirements.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'a.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $cha1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $cha2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $cha3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $cha4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $cha5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');

    $pdf->writeHTML('<br pagebreak="true" />', true, 0, true, 0);

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'identify, analyze, formulate, research literature, and solve complex computing problems and requirements reaching substantiated conclusions using fundamental principles of mathematics, computing science, and relevant domain disciplines.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'b.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chb1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chb2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chb3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chb4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chb5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');

    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'an ability to apply mathematical foundations, algorithm principles and computer science theory in the modeling and design of computer-based systems in a way that demonstrate comprehension of the tradeoffs involved in design choice.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'c.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chc1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chc2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chc3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chc4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chc5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'knowledge and understanding of information security issues in relation to design, development and use of information systems.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'd.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chd1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chd2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chd3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chd4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chd5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'design and Evaluate solutions for complex computing problems, and design and evaluate systems, components, or processes that meet specified needs with appropriate consideration for public health and safety, cultural, societal, and environmental consideration.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'e.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $che1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $che2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $che3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $che4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $che5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'create select, adapt, and apply appropriate techniques, resources and modern computing tools to complex computing activities, with an understanding of the limitations to accomplish a common goal.
        ';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'f.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chf1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chf2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chf3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chf4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chf5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'function effectively as an individual and as a member or leader in diverse teams and in multidisciplinary settings.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'g.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chg1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chg2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chg3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chg4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chg5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->writeHTML('<br pagebreak="true" />', true, 0, true, 0);

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'communicate effectively with the computing community and with the society at large about complex computing activities by being able to comprehend and write effective reports, design documentation, make effective presentations and give and understand clear instruction';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'h.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chh1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chh2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chh3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chh4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chh5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'an ability to recognize the legal, social, ethical and professional issues involved in the utilization of computer technology and be guided by the adaptation of appropriate professional, ethical and legal practices.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'i.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chi1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chi2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chi3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chi4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chi5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');

    $pdf->Ln();

    $pdf->setCellPaddings(2, 2, 4, 4);

    $pdf->SetFont("Helvetica", "", 8);
    $txt = 'recognize the need, and have ability, to engage in independent learning for continual development as a computing professional.';

    // set color for background
    $pdf->SetFillColor(220, 255, 220);

    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(25, 27.2, 'j.', 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->MultiCell(162, 27.2, '' . $txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 28, 'T');
    $pdf->MultiCell(18, 27.2, $chj1, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chj2, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chj3, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chj4, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');
    $pdf->MultiCell(18, 27.2, $chj5, 1, 'C', 1, 0, '', '', true, 0, false, true, 28, 'M');

    $pdf->Ln();

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setCellPaddings(0, 0, 0, 0);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "Course Outcomes and Relationship to Student Outcomes", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFillColor(255, 255, 255);
    #PROGRAM
    $pdf->SetFont("Helvetica", "B", 8);
    $pdf->MultiCell(138.5, 8, 'Program Outcomes Addressed by the Course', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(138.5, 8, 'Program Outcomes Code', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(187, 6, 'After completing this course, the students must be able to:', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->setFont('Helvetica', 'B', 8);
    $pdf->MultiCell(9, 6, 'a', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'b', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'c', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'd', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'e', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'f', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'g', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'h', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'i', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, 'j', 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');

    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->setCellPaddings(6, 0, 0, 0);
    $pdf->MultiCell(187, 6, '1. to equip the students with the technical skills needed in the industry.', 1, 'L', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 6, $a1, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a2, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a3, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a4, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a5, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a6, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a7, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a8, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a9, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $a10, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');

    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(187, 10, '2. to gain understanding about the concepts of the designs and   implementations of system development', 1, 'L', 1, 0, '', '', true, 0, false, false, 10, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b2, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $b1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');


    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->setCellPaddings(6, 0, 0, 0);
    $pdf->MultiCell(187, 6, '3. expose the students in common work practice. ', 1, 'L', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 6, $c1, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c2, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c3, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c4, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c5, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c6, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c7, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c8, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c9, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $c10, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');

    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->setCellPaddings(6, 0, 0, 0);
    $pdf->MultiCell(187, 6, '4. apply all knowledge gain in terms of analysis and development.', 1, 'L', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 6, $d1, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d2, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d3, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d4, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d5, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d6, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d7, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d8, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d9, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $d10, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');

    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->setCellPaddings(6, 0, 0, 0);
    $pdf->MultiCell(187, 6, '5. select appropriate media for a multimedia application ', 1, 'L', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 6, $e1, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e2, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e3, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e4, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e5, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e6, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e7, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e8, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e9, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');
    $pdf->MultiCell(9, 6, $e10, 1, 'C', 1, 0, '', '', true, 0, false, false, 7, 'M');

    $pdf->Ln();
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(187, 10, '6. understand essential concepts that influence authoring multimedia   applications.', 1, 'L', 1, 0, '', '', true, 0, false, false, 10, 'M');
    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(9, 10, $f1, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f2, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f3, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f4, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f5, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f6, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f7, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f8, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f9, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->MultiCell(9, 10, $f10, 1, 'C', 1, 0, '', '', true, 0, false, false, 9, 'M');
    $pdf->Ln();

    $pdf->setFont('Helvetica', '', 8);
    $pdf->MultiCell(0, 10, '*Level:    I-Introductory     E- Enabling      D-Demonstrative
            ', 1, 'L', 1, 0, '', '', true, 0, false, false, 10, 'M');

    $pdf->writeHTML('<br pagebreak="true" />', true, 0, true, 0);

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "COURSE AVERAGE", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);


    $pdf->SetFillColor(255, 255, 255);
    $pdf->MultiCell(25, 15, 'Week No. ', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(40, 15, 'Intended Learning Outcomes (ILO)', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(32, 15, 'Topic', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(40, 15, 'Teaching and Learning Activities (TLA)', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(30, 15, 'Mode of Delivery', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(25, 15, 'Resources Needed ', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(45, 15, 'Outcomes based Assessment (OBA)', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');
    $pdf->MultiCell(40, 15, 'Due Date of Submission of Output', 1, 'C', 1, 0, '', '', true, 0, false, false, 15, 'M');

    $pdf->Ln();


    $pdf->SetFont("Helvetica", "", 8);
    $pdf->setCellPaddings(2, 2, 2, 2);
    $tbl = <<<EOD
            <table border="1px" cellpadding="4">
                <tr>
                    <td width="71" align="center"><b>1</b></td>
                    <td width="113" align="left">$ilo1</td>
                    <td width="90.5" align="left">$topic1</td>
                    <td width="114" align="left">  $tla1</td>
                    <td width="85" align="left">   $mode1 </td>
                    <td width="70.6" align="left">  $res1 </td>
                    <td width="127.5" align="left">  $oba1 </td>
                    <td width="113.5" align="left"> $due1</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>2</b></td>
                    <td width="113" align="left">$ilo2</td>
                    <td width="90.5" align="left">$topic2</td>
                    <td width="114" align="left">  $tla2</td>
                    <td width="85" align="left">   $mode2 </td>
                    <td width="70.6" align="left">  $res2 </td>
                    <td width="127.5" align="left">  $oba2 </td>
                    <td width="113.5" align="left"> $due2</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>3-5</b></td>
                    <td width="113" align="left">$ilo3</td>
                    <td width="90.5" align="left">$topic3</td>
                    <td width="114" align="left">  $tla3</td>
                    <td width="85" align="left">   $mode3 </td>
                    <td width="70.6" align="left">  $res3 </td>
                    <td width="127.5" align="left">  $oba3 </td>
                    <td width="113.5" align="left"> $due3</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>6-8</b></td>
                    <td width="113" align="left">$ilo6</td>
                    <td width="90.5" align="left">$topic6</td>
                    <td width="114" align="left">  $tla6</td>
                    <td width="85" align="left">   $mode6 </td>
                    <td width="70.6" align="left">  $res6 </td>
                    <td width="127.5" align="left">  $oba6 </td>
                    <td width="113.5" align="left"> $due6</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>9</b></td>
                    <td width="714" align="center"><b>MIDTERM EXAMINATION</b></td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>10-12</b></td>
                    <td width="113" align="left">$ilo10</td>
                    <td width="90.5" align="left">$topic10</td>
                    <td width="114" align="left">  $tla10</td>
                    <td width="85" align="left">   $mode10 </td>
                    <td width="70.6" align="left">  $res10 </td>
                    <td width="127.5" align="left">  $oba10 </td>
                    <td width="113.5" align="left"> $due10</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>13-15</b></td>
                    <td width="113" align="left">$ilo13</td>
                    <td width="90.5" align="left">$topic13</td>
                    <td width="114" align="left">  $tla13</td>
                    <td width="85" align="left">   $mode13 </td>
                    <td width="70.6" align="left">  $res13 </td>
                    <td width="127.5" align="left">  $oba13 </td>
                    <td width="113.5" align="left"> $due13</td>
                </tr>
                <tr>
                    <td width="71" align="center"><b>16-17</b></td>
                    <td width="113" align="left">$ilo16</td>
                    <td width="90.5" align="left">$topic16</td>
                    <td width="114" align="left">  $tla16</td>
                    <td width="85" align="left">   $mode16 </td>
                    <td width="70.6" align="left">  $res16 </td>
                    <td width="127.5" align="left">  $oba16 </td>
                    <td width="113.5" align="left"> $due16</td>
                </tr>

                <tr>
                    <td width="71" align="center"><b>9</b></td>
                    <td width="714" align="center"><b>FINAL EXAMINATION</b></td>
                </tr>

            </table>
            EOD;


    $pdf->writeHTML($tbl, true, false, false, false, 'J');

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "COURSE REQUIREMENTS", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);

    $txt = "$course_req";

    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(4, 4, 4, 4);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->writeHTMLCell(0, '', '', '', $txt, 1, 1, 1, true, 'J', true);

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "GRADING SYSTEM", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);

    $txt = "$grading_system";

    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(4, 4, 4, 4);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->writeHTMLCell(0, '', '', '', $txt, 1, 1, 1, true, 'J', true);

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "CLASS POLICIES", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);

    $txt = "$course_policies";

    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(4, 4, 4, 4);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->writeHTMLCell(0, '', '', '', $txt, 1, 1, 1, true, 'J', true);

    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "REFERENCES & SUPPLEMENTARY READINGS
            ", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);

    $txt = "$rep_sup  
            ";

    $pdf->SetFillColor(255, 255, 255);
    $pdf->setCellPaddings(4, 4, 4, 4);
    $pdf->SetFont("Helvetica", "", 8);
    $pdf->writeHTMLCell(0, '', '', '', $txt, 1, 1, 1, true, 'J', true);


    $pdf->SetFillColor(168, 208, 141);
    $pdf->setFont('Helvetica', 'B', 9);
    $pdf->Cell(0, 6, "REVISION HISTORY", 1, 1, 'C', true, 0, false, true);
    $pdf->SetFont("Helvetica", "B", 8);

    $pdf->SetFont("Helvetica", "", 8);
    $pdf->setCellPaddings(2, 2, 2, 2);



    $tbl1 = <<<EOD
            <table border="1px" cellpadding="4">
            <tr>
                <td width="196.3" align="center"><b>Revision Number </b></td>
                <td width="196.3" align="center"><b>Date of Revision </b></td>
                <td width="196.3" align="center"><b>Date of Implementation  </b></td>
                <td width="196.3" align="center"><b>Highlights of Revision</b></td>
            </tr>
            <tr>
                <td width="196.3" align="center">$no</td>
                <td width="196.3" align="center">$date </td>
                <td width="196.3" align="center">$imp</td>
                <td width="196.3" align="center">$highlights</td>
            </tr>
            <tr>
                <td width="196.3" align="left">Prepared by:<br><br><br><b>$insName</b><br>$insRole
                <br>$insNo <br>$insEmail <br>$insDept<br>Consultation Schedule: $insSched1 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$insSched2 <br><br>Date Prepared: <b>$date</b></td>
                <td width="196.3" align="left">Evaluated by:<br><br><br><b>$chaName</b> <br>$chaRole<br>$chaDept
                <br>$chaEmail<br>Date Evaluated: <b>$chaDate</b>  <br> <br>Actual signature:  <br> <hr> <br></td>
                <td width="196.3" align="left">Approved by:<br><br><br><b>MARLON A. MOJICA, PhD</b><br>Campus Administrator Imus Campus<br>Date Approved: $date <br><br><br><br>Actual signature:<br> <hr> <br></td>
            </tr>
            </table>
            EOD;


    $pdf->writeHTML($tbl1, true, false, false, false, 'J');


    // // ---------------------------------------------------------

    // //Close and output PDF document
    $pdf->Output('cvsu_dcit_syllabus.pdf', 'I');
}
