
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../img/logo.png" />
    <title>CvSU Syllabus | Generate Syllabus</title>
    <link rel="stylesheet" href="../styling/summer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
<?php
require_once '../session.php';
$sql = "SELECT * FROM createuser where id=$loggedin_id";
$result = mysqli_query($con, $sql);

while ($rows = mysqli_fetch_array($result)) {
  ?>
    <div class="sidebar">
      <div class="logo-details">
        <img class="logo" src="../img/logo.png" alt="logo" style="width: 100px;">
        <span class="logo_name">CvSU <br> Syllabus</span>
      </div>
      <ul class="nav-links">
        <li>
          <br>
          <a href="ChairpersonPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <br>
        <hr>
        <li>
        <a href="#Section1"><span class="links_name"><h6 style="color: white;">Course Info</h6></span></a>
        </li>
        <h6 style="color: white;"><b>COURSE COVERAGE</b></h6>
        <ol>
          <li>
            <a href="#Section2">
              <span class="links_name">Week 1</span>
            </a>
          </li>
          <li>
            <a href="#Section3">
              <span class="links_name">Week 2</span>
            </a>
          </li>
          <li>
            <a href="#Section4">
              <span class="links_name">Week 3-5</span>
            </a>
          </li>
          <li>
            <a href="#Section5">
              <span class="links_name">Week 6-8</span>
            </a>
          </li>
          <li>
            <a href="#Section6">
              <span class="links_name">Week 10-12</span>
            </a>
          </li>
          <li>
            <a href="#Section7">
              <span class="links_name">Week 13-15</span>
            </a>
          </li>
          <li>
            <a href="#Section8">
              <span class="links_name">Week 16-17</span>
            </a>
          </li>
        </ol>
        <li>
          <a href="#Section9"><span class="links_name">Grading System</span></a>
        </li>
        <li>
          <a href="#Section10"><span class="links_name">Revision History</span></a>
        </li>
        <br>
        <li class="log_out">
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span style="color: #25963A;" class="dashboard"><b> Hello, Chairperson!</b></span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <span class="admin_name"><?php echo $rows['name']; ?></span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>
    <?php } ?>

    <div class="home-content">
      <section class="main">

      <br id="Section1">
        <div class="users">
          <div class="card">
            <div class="container">

              <div class="row">

                <form action="../pdf.php" method="POST" style="width: 70vw; min-width: 300px;">

                  <div class="row">

                    <div class="mb-4">
                      <br>
                      <br>
                      <br>
                      <center><h3><b>DEPARTMENT OF INFORMATION TECHNOLOGY</b></h3>
                      <h5>To generate a PDF file version of the syllabus, kindly input all of the necessary informations below.</h5></center>
                      <br>
                      <hr>
                      <br>
                    </div>


                    <br>
                    
                    <div class="col">
                      <label class="form-label" > Course Code </label></td>
                      <br>
                      <select class="form-select" name="course_code" aria-label="Default select example" id="inputGroupSelect02">
                            <option value="ITEC70">ITEC70</option>
                            <option value="ITEC101">ITEC101</option>
                            <option value="DCIT21">DCIT21</option>
                            <option value="DCIT24">DCIT24</option>
                      </select>
                      </br>
                    </div>


                    <div class="col">
                      <label class="form-label"> Course Title </label>
                      <input type="text" class="form-control" name="course_title" placeholder="Subject">
                    </div>

                    <div class="col">
                      <label class="form-label"> Select Type </label>
                      <br>
                      <select class="form-select" name="course_type" aria-label="Default select example" id="inputGroupSelect02">
                        <option value="Lecture">LECTURE</option>
                        <option value="Lecture & Laboratory">LECTURE & LABORATORY</option>
                      </select>
                      </br>
                    </div>
                    <br></br>

                    <div class="col">
                      <label class="form-label"> Credit Units </label>
                      <br>
                      <select class="form-select" name="course_units" aria-label="Default select example">
                        <option value="3 UNITS">3 UNITS</option>
                        <option value="2 UNITS">2 UNITS</option>
                        <option value="11 UNIT">1 UNIT</option>
                      </select>
                      </br>
                    </div>

                  </div>
                  <br>


                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Pre requisites </label>
                      <input type="text" class="form-control" name="course_req" placeholder="Input your answer here">
                    </div>

                    <div class="col">
                      <label class="form-label"> Course Schedules Laboratory / Lecture </label>
                      <br>
                      <select class="form-select" name="course_sched" aria-label="Default select example">
                        <option value="11:00  AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI">11:00 AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI</option>
                        <option value="11:00  AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI">11:00 AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI</option>
                        <option value="11:00  AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI">11:00 AM - 12:00 PM AM WED / 7:00 AM - 12:00 PM FRI</option>
                      </select>
                    </div>
                  </div>

                  </div>
                  <br></br>

                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Course Description </label>
                      <textarea id="desc" class="form-control" name="course_desc" rows="4" placeholder="Input your answer here"></textarea>
                    </div>
                  </div>

                  <br>
                  <br id="Section2">
                  <hr>
                  <br></br>

                  <br></br>
                  <div class="row">
                    <div class="mb-4">
                      <center><h5><b>Student Outcomes and Relationship to Program Educational Objectives</b></h5></center>
                      <center><h6 class="card-title">The students should:</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="card">
                        <h5 class="card-header"><sub>Program/Student Outcomes (based on the program CMO) </sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sub>Program Educational Objectives (based on the program CMO)<sub></h5>
                          <div class="card-body">
                            <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>a.</b> Apply knowledge of computing fundamentals, knowledge of a computing specialization, and mathematics, science and domain knowledge appropriate for computing specialization to the abstraction and conceptualization of computing models from defined problems and requirements.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="cha1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="cha1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="cha2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="cha2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="cha3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="cha3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="cha4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="cha4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="cha5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="cha5"value="/" aria-label="1.">
                                </div>
                              </div>

                              <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>b.</b> identify, analyze, formulate, research literature, and solve complex computing problems and requirements reaching substantiated conclusions using fundamental principles of mathematics, computing science, and relevant domain disciplines.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chb1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chb1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chb2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chb2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chb3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chb3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chb4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chb4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chb5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chb5"value="/" aria-label="1.">
                                </div>
                              </div>

                              <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>c.</b> an ability to apply mathematical foundations, algorithm principles and computer science theory in the modeling and design of computer-based systems in a way that demonstrate comprehension of the tradeoffs involved in design choice.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chc1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chc1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chc2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chc2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chc3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chc3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chc4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chc4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chc5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chc5"value="/" aria-label="1.">
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>d.</b> knowledge and understanding of information security issues in relation to design, development and use of information systems.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chd1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chd1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chd2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chd2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chd3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chd3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chd4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chd4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chd5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chd5"value="/" aria-label="1.">
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>e.</b> design and Evaluate solutions for complex computing problems, and design and evaluate systems, components, or processes that meet specified needs with appropriate consideration for public health and safety, cultural, societal, and environmental consideration.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="che1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="che1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="che2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="che2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="che3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="che3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="che4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="che4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="che5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="che5"value="/" aria-label="1.">
                                </div>
                              </div>
            <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>f.</b> create select, adapt, and apply appropriate techniques, resources and modern computing tools to complex computing activities, with an understanding of the limitations to accomplish a common goal.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chf1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chf1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chf2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chf2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chf3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chf3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chf4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chf4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chf5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chf5"value="/" aria-label="1.">
                                </div>
                              </div>
        <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>g.</b> function effectively as an individual and as a member or leader in diverse teams and in multidisciplinary settings.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chg1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chg1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chg2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chg2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chg3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chg3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chg4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chg4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chg5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chg5"value="/" aria-label="1.">
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>h.</b> communicate effectively with the computing community and with the society at large about complex computing activities by being able to comprehend and write effective reports, design documentation, make effective presentations, and give and understand clear instruction.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chh1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chh1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chh2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chh2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chh3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chh3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chh4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chh4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chh5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chh5"value="/" aria-label="1.">
                                </div>
                              </div>
    <br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>i.</b> an ability to recognize the legal, social, ethical and professional issues involved in the utilization of computer technology and be guided by the adaptation of appropriate professional, ethical and legal practices.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chi1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chi1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chi2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chi2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chi3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chi3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chi4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chi4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chi5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chi5"value="/" aria-label="1.">
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-8">
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title"><b>j.</b> recognize the need, and have ability, to engage in independent learning for continual development as a computing professional.</h6>
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 1 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chj1"value="" aria-label="1.">
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chj1"value="/">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 2 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chj2"value="">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chj2"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 3 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chj3"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chj3"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 4 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chj4"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chj4"value="/" aria-label="1.">
                                </div>
                                <div class="col">
                                      <label class="form-label"> <b> 5 </b></label>
                                      <input class="form-check-input btn btn-success" type="hidden" id="success-outlined" name="chj5"value="" aria-label="1.">  
                                      <input class="form-check-input btn btn-success" type="checkbox" id="success-outlined" name="chj5"value="/" aria-label="1.">
                                </div>
                              </div>
<br></br>
                            </div>
                          </div>
                        </div>
                      </div>    
<br></br>
<br></br>
<hr>
<br></br>                       
                  <div class="row">
                    <div class="mb-4">
                      <center><h5><b>Course Outcomes and Relationship to Student Outcomes</b></h5></center>
                      <center><h6 class="card-title">After completing this course, the students must be able to:</h6>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <div class="card">
                        <h5 class="card-header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *Level: <b>I</b>-Introductory <b>E</b>- Enabling <b>D</b>-Demonstrative</h5>
                          <div class="card-body">
                          <br></br>
                              <div class="row">
                                <div class="col-4">
                                  <br>
                                  <!-- <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description">1. to equip the students with the technical skills needed in the industry.</textarea> -->
                                  <h6 class="card-title">1. to equip the students with the technical skills needed in the industry.</h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="a1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="a2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="a3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="a4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="a5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="a6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="a7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="a8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="a9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="a10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-4">
                                  <br>
                                  <h6 class="card-title">2. to gain understanding about the concepts of the designs and implementations of system development</h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="b1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="b2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="b3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="b4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="b5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="b6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="b7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="b8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="b9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="b10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-4">
                                  <br>
                                  <h6 class="card-title">3. expose the students in common work practice. </h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="c1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="c2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="c3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="c4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="c5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="c6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="c7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="c8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="c9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="c10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
                              <div class="row">
                                <div class="col-4">
                                  <br>
                                  <h6 class="card-title">4. apply all knowledge gain in terms of analysis and development. </h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="d1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="d2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="d3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="d4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="d5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="d6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="d7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="d8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="d9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="d10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
<div class="row">
                                <div class="col-4">
                                  <br>
                                  <h6 class="card-title">5. select appropriate media for a multimedia application</h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="e1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="e2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="e3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="e4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="e5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="e6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="e7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="e8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="e9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="e10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
<div class="row">
                                <div class="col-4">
                                  <br>
                                  <h6 class="card-title">6. understand essential concepts that influence authoring multimedia 
applications.</h6>
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> a </b></label></center>
                                      <select class="form-select" name="f1" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> b </b></label></center>
                                      <select class="form-select" name="f2" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> c </b></label></center>
                                      <select class="form-select" name="f3" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> d </b></label></center>
                                      <select class="form-select" name="f4" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> e </b></label></center>
                                      <select class="form-select" name="f5" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> f </b></label></center>
                                      <select class="form-select" name="f6" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> g </b></label></center>
                                      <select class="form-select" name="f7" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> h </b></label></center>
                                      <select class="form-select" name="f8" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                                <div class="col">
                                      <center><label class="form-label"> <b> i </b></label></center>
                                      <select class="form-select" name="f9" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>                                <div class="col">
                                      <center><label class="form-label"> <b> j </b></label></center>
                                      <select class="form-select" name="f10" aria-label="Default select example">
                                      <option value="I">I</option>
                                      <option value="E">E</option>
                                      <option value="D">D</option>
                                    </select>   
                                </div>
                              </div>
<br></br>
                          </div>
                      </div>  
                  </div>
                </div> 

                  <br></br>
                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <hr>
                      <br></br>
                      <center><h5><b>COURSE COVERAGE</b></h5></center>
                      <br></br>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week1" placeholder="Week 1" >
                      <br>
                    </div>
                  </div>


                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week1A" class="form-control" name="course_ilo1" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week1B" class="form-control" name="course_topic1" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week1C" class="form-control" name="course_tla1" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week1D" class="form-control" name="course_mode1" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">

                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week1E" class="form-control" name="course_res1" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week1F" class="form-control" name="course_oba1" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">

                    <div class="col">
                      <label id="Section3" class="form-label"> Due Date of Submission of Output </label>
                      <textarea id="Week1G" class="form-control" name="course_duedate1" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>

                  <br>
                  <br>

                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week2" placeholder="Week 2" >
                      <br>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week2A" class="form-control" name="course_ilo2" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week2B" class="form-control" name="course_topic2" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week2C" class="form-control" name="course_tla2" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week2D" class="form-control" name="course_mode2" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week2E" class="form-control" name="course_res2" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week2F" class="form-control" name="course_oba2" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col">
                      <label id="Section4" class="form-label"> Due Date of Submission of Output </label>
                      <textarea id="Week2G" class="form-control" name="course_duedate2" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week3" placeholder="Week 3-5" >
                      <br>
                    </div>
                  </div>
                  <br>
                  <div class="row">

                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week3A"class="form-control" name="course_ilo3" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week3B" class="form-control" name="course_topic3" rows="4" placeholder="Type Description"></textarea>
                    </div>


                  </div>
          <br>

          <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week3C" class="form-control" name="course_tla3" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea  id="Week3D" class="form-control" name="course_mode3" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
          <br>

                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week3E" class="form-control" name="course_res3" rows="4" placeholder="Type Description"></textarea>
                    </div>

                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week3F" class="form-control" name="course_oba3" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
          <br>
                  <div class="row">

                    <div class="col">
                      <label id="Section5" class="form-label"> Due Date of Submission of Output </label>
                      <textarea class="form-control" id="Week3G" name="course_duedate3" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>
                  <br>

                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week6" placeholder="Week 6-8" >
                      <br>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week6A" class="form-control" name="course_ilo6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week6B" class="form-control" name="course_topic6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>
        <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week6C" class="form-control" name="course_tla6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week6D" class="form-control" name="course_mode6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
        <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week6E" class="form-control" name="course_res6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week6F" class="form-control" name="course_oba6" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
        <br>
                <div class="row">
                  <div class="col">
                      <label id="Section6" class="form-label"> Due Date of Submission of Output </label>
                      <textarea class="form-control" id="Week6G" name="course_duedate6" rows="4" placeholder="Type Description"></textarea>
                  </div>
                </div>
      <br>
      <br>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week1" placeholder="Week 10-12" >
                      <br>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week10A"class="form-control" name="course_ilo10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week10B" class="form-control" name="course_topic10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
                  <br>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week10C" class="form-control" name="course_tla10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week10D" class="form-control" name="course_mode10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
        <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week10E" class="form-control" name="course_res10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week10F" class="form-control" name="course_oba10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
        <br>
                  <div class="row">
                    <div class="col">
                      <label id="Section7" class="form-label"> Due Date of Submission of Output </label>
                      <textarea id="Week10G" class="form-control" name="course_duedate10" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
        <br>
        <br>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week1" placeholder="Week 13-15" >
                      <br>
                    </div>
                  </div>
        <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week13A" class="form-control" name="course_ilo13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week13B" class="form-control" name="course_topic13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week13C" class="form-control" name="course_tla13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week13D" class="form-control" name="course_mode13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week13E" class="form-control" name="course_res13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week13F" class="form-control" name="course_oba13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label id="Section8" class="form-label"> Due Date of Submission of Output </label>
                      <textarea id="Week13G" class="form-control" name="course_duedate13" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
      <br>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="course_week1" placeholder="Week 16-17" >
                      <br>
                    </div>
                  </div>
    <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Intended Learning Outcomes (ILO) </label>
                      <textarea id="Week16A" class="form-control" name="course_ilo16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Topic </label>
                      <textarea id="Week16B" class="form-control" name="course_topic16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Teaching and Learning Activities (TLA) </label>
                      <textarea id="Week16C" class="form-control" name="course_tla16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label class="form-label"> Mode of Delivery </label>
                      <textarea id="Week16D" class="form-control" name="course_mode16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Resources Needed</label>
                      <textarea id="Week16E" class="form-control" name="course_res16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                    <div class="col">
                      <label id="Section9" class="form-label"> Outcomes based Assessment (OBA) </label>
                      <textarea id="Week16F" class="form-control" name="course_oba16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>
                  <div class="row">
                    <div class="col">
                      <label class="form-label"> Due Date of Submission of Output </label>
                      <textarea id="Week16G" class="form-control" name="course_duedate16" rows="4" placeholder="Type Description"></textarea>
                    </div>
                  </div>
      <br>

                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <center><h5><b>COURSE REQUIREMENTS</b></h5></center>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <textarea id="course_requir" class="form-control" name="course_requir" rows="4" placeholder="Type Description"><br><b>Suggested Lecture Requirements:</b> <br> 1. Mid-Term Examination <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Final Examination <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Quizzes/Seat works/Recitations <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Video presentation <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Fact Sheet <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Class Reporting/Reaction Paper <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. Assignments <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Class or Group Project (Term Paper/Project Design/Case Study/Feasibility Study/Culminating Activity/Portfolio) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9. Class Attendance <br></br> <b>Suggested Laboratory Requirements:</b> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Laboratory Reports <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. Individual Performance <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. Quizzes <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4. Mid-Term Examination <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5. Final Examination <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6. Video presentation <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 7. Fact Sheet <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8. Attendance <br></br> *All exams must follow a Table of Specifications (TOS) and Rubrics for evaluation of student performance or projects.</textarea>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <center><h5 id="#Section9"><b>GRADING SYSTEM</b></h5></center>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <textarea id="grading_system" class="form-control" name="grading_system" rows="4"><br><b>A. Grading system for 2 units lecture and 1 unit laboratory</b> (i.e. DCIT 21; 3 units; Lec - 2 hrs & Lab - 3 hrs) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Lecture – 60% <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laboratory – 40% <br></br> <b>B. Grading system for 1 unit lecture and 2 units laboratory</b> (i.e. DCIT 22; 3 units; Lec -1 hr & Lab - 6 hrs) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lecture – 40% <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laboratory – 60% <br></br> <b>C. Grading system for 2 units lecture and 3 units laboratory</b> (i.e. ELEX 50; 5 units; Lec – 2 hrs & Lab – 9 hrs) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lecture – 30% <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laboratory – 70%</textarea>
                    </div>
                  </div>
                  <br></br>

                 
                  <br></br>
                  <hr>
                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <center><h5 id="#Section9"><b>CLASS POLICIES</b></h5></center>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <textarea id="class_policies" class="form-control" name="class_policies" rows="4" placeholder="Input your answer here"><br> <b>A. Attendance</b> <br><b>&nbsp;B. Classroom Decorum</b> <br> <b>C. Examination/ Evaluation</b> </textarea>
                    </div>
                  </div>
                  <br>
                  <hr>
                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <center><h5><B>REFERENCES & SUPPLEMENTARY READINGS</b></h5></center>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <textarea id="ref_sup" class="form-control" name="rep_sup" rows="4" placeholder="Type Description"><br><b>A. Laboratory Manual (if with laboratory)</b> <br></br> <b>B. Reference Books</b> <br></br> <b>C. Electronic References( E-books/Websites)</b></textarea>
                    </div>

                  </div>
                  <br>
                  <br>
                  <hr>
                  <br>
                  <div class="row">
                    <div class="mb-4">
                    <br></br>
                      <center><h5><b>REVISION HISTORY</b></h5></center>
                      <center><h5>Kindly input all of the necessary informations below.</h5></center>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col">
                      <label class="form-label" id="Section10"> Revision Number</label>
                      <input type="text" class="form-control" name="rev_no">
                    </div>
                    <div class="col">
                      <label for="formFileSm" class="form-label">Date of Revision</label>
                      <br>
                      <input class="form-control form-control-Sm" id="formFileLg" type="date" name="rev_date" placeholder="dd-mm-yyyy">
                    </div>

                    <div class="col">
                      <label class="form-label">Date of Implementation</label>
                      <select class="form-select" name="rev_imp" aria-label="Default select example">
                        <option value="2nd Semester AY2022-2023">Select Semester</option>
                        <option value="1st Semester AY2020-2021">1st Semester AY 2020-2021</option>
                        <option value="2nd Semester AY2020-2021">2nd Semester AY 2020-2021</option>
                        <option value="1st Semester AY2022-2023">1st Semester AY 2022-2023</option>
                        <option value="2nd Semester AY2022-2023">2nd Semester AY 2022-2023</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col">
                      <br></br>
                        <label class="form-label"> Highlights of Revision </label>
                        <textarea class="form-control" name="rev_highlights" rows="4" placeholder="Type Description"></textarea>
                      </div>
                  </div> 
                  <br></br>

                  <div class="row">
                    <div class="mb-4">
                      <hr>
                      <br></br>
                      <h5><b>PREPARED BY: </b></h5>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col">
                      <label class="form-label" id="Section10"> Full Name</label>
                      <input type="text" class="form-control" name="ins_name" placeholder="Enter your Full name" >
                    </div>

                    <div class="col">
                      <label class="form-label">Select Your Role</label>
                      <select class="form-select" name="ins_role" aria-label="Default select example" >
                        <option value="Instructor 1">Instructor 1</option>
                      </select>
                    </div>

                    <div class="col">
                      <label class="form-label" id="Section10"> Contact No.</label>
                      <input type="text" class="form-control" name="ins_no" placeholder="#" >
                    </div>

                    <div class="col">
                      <label class="form-label" id="Section10"> Email</label>
                      <input type="text" class="form-control" name="ins_email" placeholder="@" >
                    </div>

                  </div>
                  <br></br>
                  
                  <div class="row">

                    <div class="col">

                      <label class="form-label">Consultation Schedule </label>
                      <select class="form-select" name="ins_sched1" aria-label="Default select example" >
                        <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                        <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                      </select>
                    </div>

                    <div class="col">
                      <label class="form-label">Consultation Schedule (Alternative)</label>
                      <select class="form-select" name="ins_sched2" aria-label="Default select example" >
                        <option value="Tue 6:00 -7:00 pm">Tue 6:00 -7:00 pm</option>
                        <option value="Mon 6:00 -7:00 pm"> Mon 6:00 -7:00 pm</option>
                      </select>

                    </div>

                    <div class="col">
                      <label class="form-label">Select Your Department</label>
                      <select class="form-select" name="ins_dept" aria-label="Default select example" >
                        <option value="Department of Information Technology">Department of Information Technology</option>
                        <option value="Department of Computer Science">Department of Computer Science</option>
                      </select>
                    </div>
                  </div> 
                  <br></br>
                  <hr>


                  <div class="row">
                    <div class="mb-4">
                      <br></br>
                      <h5><b>EVALUATED BY: </b></h5>
                    </div>
                  </div>


                  <div class="row">

                    <div class="col">
                      <label class="form-label" id="Section10"> Full Name</label>
                      <input type="text" class="form-control" name="cha_name" placeholder="Enter your Full name" >
                    </div>

                    <div class="col">
                      <label class="form-label">Select Your Role</label>
                      <select class="form-select" name="cha_role" aria-label="Default select example" >
                        <option value="Chairperson">Chairperson</option>
                      </select>
                    </div>

                    <div class="col">
                      <label class="form-label" id="Section10"> Email</label>
                      <input type="text" class="form-control" name="cha_email" placeholder="@" >
                    </div>

                  </div>

                  
                  <div class="row">

                    <div class="col">

                      <br></br>

                      <label class="form-label">Select Your Department</label>
                      <select class="form-select" name="cha_dept" aria-label="Default select example" >
                        <option value="Department of Information Technology">Department of Information Technology</option>
                        <option value="Department of Computer Science">Department of Computer Science</option>
                      </select>

                    </div>

                    <div class="col">

                      <br></br>

                      <label for="formFileSm" class="form-label">Date of Revision</label>
                      <br>
                      <input class="form-control form-control-Sm" id="datePickerId" type="date" name="cha_date" placeholder="dd-mm-yyyy" >
                    </div>
                  </div> 
                  <br></br>
                  <div style="color:green;text-align:right;">
                    <td colspan="2" align-="right"><input type="submit" id="button" name="submit" class="btn btn-warning" value="Generate Syllabus"></td>
                  </div>
                  <hr>

                  <br>
                </form>
              </div>
            </div>

            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <script>

datePickerId.max = new Date().toLocaleDateString('en-ca')

              $('#desc').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week1A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week1B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week1C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week1D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week1E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week1F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week1G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week1H').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              //--------------------------------------------------//

              $('#Week2A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week2B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week2C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week2D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week2E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week2F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week2G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });


              //--------------------------------------------------//

              $('#Week3A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week3B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week3C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week3D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week3E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week3F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week3G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              //--------------------------------------------------//

              $('#Week6A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week6B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week6C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week6D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week6E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week6F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week6G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              //--------------------------------------------------//

              $('#Week10A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week10B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week10C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week10D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week10E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week10F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week10G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              //--------------------------------------------------//

              $('#Week13A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week13B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week13C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week13D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week13E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week13F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week13G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              //--------------------------------------------------//

              $('#Week16A').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week16B').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#Week16C').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week16D').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week16E').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week16F').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              
              $('#Week16G').summernote({
                placeholder: 'Type your message here',
                tabsize: 2,
                height: 80,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              //----------------------------------------------------//

              $('#course_requir').summernote({
                placeholder: 'Suggested Lecture & Laboratory Requirements Here',
                tabsize: 2,
                height: 600,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });

              $('#grading_system').summernote({
                placeholder: 'Type your Description Here',
                tabsize: 2,
                height: 350,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });


              $('#class_policies').summernote({
                placeholder: 'Type your Description Here',
                tabsize: 2,
                height: 200,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });


              $('#ref_sup').summernote({
                placeholder: 'Type your Description Here',
                tabsize: 2,
                height: 200,
                toolbar: [
                  ['style', ['style']],
                  ['font', ['bold', 'underline', 'clear']],
                  ['color', ['color']],
                  ['para', ['ul', 'ol', 'paragraph']],
                  ['table', ['table']],
                  ['insert', ['link', 'picture', 'video']],
                  ['view', ['fullscreen', 'codeview', 'help']]
                ]
              });
              
            </script>

            




            <script>
              const one = document.querySelector(".one");
              const two = document.querySelector(".two");
              const three = document.querySelector(".three");
              const four = document.querySelector(".four");
              const five = document.querySelector(".five");

              one.onclick = function() {
                one.classList.add("active");
                two.classList.remove("active");
                three.classList.remove("active");
                four.classList.remove("active");
                five.classList.remove("active");
              }

              two.onclick = function() {
                one.classList.add("active");
                two.classList.add("active");
                three.classList.remove("active");
                four.classList.remove("active");
                five.classList.remove("active");
              }
              three.onclick = function() {
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");
                four.classList.remove("active");
                five.classList.remove("active");
              }
              four.onclick = function() {
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");
                four.classList.add("active");
                five.classList.remove("active");
              }
              five.onclick = function() {
                one.classList.add("active");
                two.classList.add("active");
                three.classList.add("active");
                four.classList.add("active");
                five.classList.add("active");
              }
            </script>
</body>

</html>