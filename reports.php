<?php

    include('library/tcpdf.php');

    if (!empty ($_POST['submit']))

    {
    

        $pdf = new TCPDF('P', 'mm', 'A4');

        

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();


        $tbl1 = <<<EOD
        <table cellpadding="4">
        <tr>
            <td width="156" align="center"><b>CvSU Vision</b><p align="justify">The premier university in historic Cavite recognized for excellence in the development of globally competitive and morally upright individuals.</p></td>
            <td width="255" align="center">Republic of the Philippines <br> <b>CAVITE STATE UNIVERSITY </b> <br>Imus Campus<p align="center">Cavite Civic Center, Palico IV, City of Imus, Cavite
            www.cvsu-imus.edu.ph</p></td>
            <td width="156" align="center"><b>CvSU Mission</b><p align="justify">Cavite State University shall provide excellent, equitable and relevant educational opportunities in the arts, science and technology through quality instruction and relevant research and development activities. It shall produce professional, skilled and morally upright individuals for global competitiveness.</p></td>

        </tr>

        </table>
        EOD;


        $pdf->writeHTML($tbl1, true, false, false, false, 'J');

        $pdf->Ln();


            $pdf->SetFillColor(168, 208, 141);
            $pdf->setFont('Helvetica', 'B', 9);
            $pdf->Cell (0,6,"REPORTS FOR THE MONTH OF JANUARY ",1,1,'C', true, 0, false, true );
            $pdf->SetFont("Helvetica","B",8);


            $tbl1 = <<<EOD
            <table border="1px" cellpadding="20">
            <tr>
                <td width="170" align="center"><b>DEPARTMENT </b></td>
                <td width="184" align="center"><b>REGISTERED INSTRUCTOR  </b></td>
                <td width="184" align="center"><b>SUBMITTED SYLLABUS</b></td>
            </tr>
            <tr>
                <td width="170" align="center">Department of Computer Science</td>
                <td width="184" align="center"><center>1</center></td>
                <td width="184" align="center"><center>0</center></td>
            </tr>

            <tr>
            <td width="170" align="center">Department Of Biological And Physical Sciences</td>
            <td width="184" align="center"><center>0</center></td>
            <td width="184" align="center"><center>0</center></td>
            </tr>

            <tr>
            <td width="170" align="center">Department Of Entrepreneurship</td>
            <td width="184" align="center"><center>0</center></td>
            <td width="184" align="center"><center>0</center></td>
            </tr>
            <tr>
            <td width="170" align="center"> Department Of Hospitality Management</td>
            <td width="184" align="center"><center>0</center></td>
            <td width="184" align="center"><center>0</center></td>
            </tr>

            <tr>
            <td width="170" align="center"> Department Of Languages And Mass Communication</td>
            <td width="184" align="center"><center>0</center></td>
            <td width="184" align="center"><center>0</center></td>
            </tr>

            </table>
            EOD;


            $pdf->writeHTML($tbl1, true, false, false, false, 'J');
        $pdf->Output('cvsu_dcit_syllabus.pdf', 'I');



    }
?>