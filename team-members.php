<?php
   session_start();

   var_dump($_SESSION['done']);
   if( !isset($_SESSION['done']))
  { 
     header("Location:php/failed.php");
    
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title Page-->
  <title>Team Members' Registration</title>
  <link rel="icon" href="assests/stp_logo.png">

  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <div id="page-wrapper" class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
      <div class="card card-4">
        <div id="cardbody" class="card-body login-box">
          <img id="logo-header" src="assests/stp_logo.png" style="display: none;">
          <form method="POST" action="php/memeber.php" id="form" style="display: none;">
            <a class="title">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Team Members' Registration Form</a>

            <section id="section2">
              <a class="title member">
                First Member's information</a>
              <div class="row row-space">
                <div class="input-group width100">
                  <label class="label">Name</label>
                  <input class="input--style-4" type="text" name="name1" id="name1">
                  <small id="error-name1"></small>
                </div>
              </div>
              <div class="row row-space">
                <div class="input-group">
                  <label class="label">E-mail</label>
                  <input class="input--style-4" type="text" id="email1" name="email1">
                  <small id="error-email1"></small>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Phone Number</label>
                    <input class="input--style-4" type="tel" id="phone1" name="tel1" placeholder="01XXXXXXXXX">
                      <small id="error-phone1"></small>
                  </div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">University</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="uni1" id="uni1">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Ain Shams University">Ain Shams University</option>
                    <option value="Al-Azhar University">Al-Azhar University</option>
                    <option value="Al-Matarya University">Al-Matarya University</option>
                    <option value="Helwan University">Helwan University</option>
                    <option value="Banha University">Banha University</option>
                    <option value="Other">Other..</option>
                  </select>
                  <input class="input--style-4 other-input" id="otherUni1" type="text" name="other-uni1" placeholder="Enter university.." style="display: none;">
                  <small id="error-university1"></small>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">Faculty</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="faculty1" id="fac1">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Agriculture">Faculty of Agriculture</option>
                    <option value="Alsun">Faculty of Alsun</option>
                    <option value="Archaeology">Faculty of Archaeology</option>
                    <option value="Arts">Faculty of Arts</option>
                    <option value="Commerce">Faculty of Commerce</option>
                    <option value="Computers and Information System">Faculty of Computers and
                      Information System</option>
                    <option value="Dar El-Ulum">Faculty of Dar El-Ulum</option>
                    <option value="Economics and Political Science">Faculty of Economics and Political
                      Science</option>
                    <option value="Kindergarten">Faculty of Kindergarten</option>
                    <option value="Law">Faculty of Law</option>
                    <option value="Mass Communication">Faculty of Mass Communication</option>
                    <option value="Medicine">Faculty of Medicine</option>
                    <option value="Nursing">Faculty of Nursing</option>
                    <option value="Oral and Dental Medicine">Faculty of Oral and Dental Medicine
                    </option>
                    <option value="Pharmacology">Faculty of Pharmacology</option>
                    <option value="Physiotherapy">Faculty of Physiotherapy</option>
                    <option value="Science">Faculty of Science</option>
                    <option value="Specialized Education">Faculty of Specialized Education</option>
                    <option value="Veterinary Medicine">Faculty of Veterinary Medicine</option>
                    <option value="Other">Other..</option>
                    
                  </select>
                  <input class="input--style-4 other-input" type="text" id="otherFac1" name="other-fac1" placeholder="Enter faculty.." style="display: none;">
                  <small id="error-faculty1"></small>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Department</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="department1" id="depart1">
                                <option disabled="disabled" selected="selected" value="">Choose option
                                </option>
                                <option value="no-department1">No Department</option>
                                <option value="undeclared1">Undeclared</option>
                                <option value="Other1">Enter Department..</option>
                            </select>
                            <div class="select-dropdown"></div>
                            <input class="input--style-4 other-input" id="otherDepart1" type="text" name="other-dep1" placeholder="Enter department.." style="display: none;" >
                            <small id="error-department1"></small>
                        </div>
                </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Graduation Year</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                      <select name="grad1" id="grad1">
                        <option disabled="disabled" selected="selected" value="">Choose option
                        </option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                      </select>
                      <small id="error-grad1"></small>
                      <div class="select-dropdown"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group">
                  <label class="label">CV</label>
                  <input type="file" name="cv1" id="cv1">
                  <input type="button" class="clickCV" value="Choose CV" id="clickCV1" title="CV" onclick="document.getElementById('cv1').click()">
                  <small id="error-cv1"></small>
              </div>
              <div class="row row-space">
                <div class="p-t-15 width100">
                  <div class="input-group width50">
                      <input type="checkbox" id="check1" name="check1" value="check1" class="input--style-4 checkmark" onclick="if (this.checked) {disabledAll(1)} else {abledAll(1)}">
                      <label class="label" for="check-if-memeber2">No more members</label> 
                </div>
              </div>
              <div class="p-t-15 width100">
                <a id="next2" class="buttons" >
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Next
                </a>
                <a id="prev1" onclick="goBack()" class="buttons">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Previous
                </a>
                <br>
                <br>
                <br>
              </div>
            </section>

            <section id="section3">
              <a class="title member">
                Second Member's information</a>
              <div class="row row-space">
                <div class="input-group width100">
                  <label class="label">Name</label>
                  <input class="input--style-4" type="text" name="name2" id="name2">
                  <small id="error-name2"></small>
                </div>
              </div>
              <div class="row row-space">
                <div class="input-group">
                  <label class="label">E-mail</label>
                  <input class="input--style-4" type="text" name="email2" id="email2">
                  <small id="error-email2"></small>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Phone Number</label>
                    <input class="input--style-4" type="tel" name="tel2" placeholder="01XXXXXXXXX" id="phone2">
                      <small id="error-phone2"></small>
                  </div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">University</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="uni2" id="uni2">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Ain Shams University">Ain Shams University</option>
                    <option value="Al-Azhar University">Al-Azhar University</option>
                    <option value="Al-Matarya University">Al-Matarya University</option>
                    <option value="Helwan University">Helwan University</option>
                    <option value="Banha University">Banha University</option>
                    <option value="Other">Other..</option>
                    
                  </select>
                  <input class="input--style-4 other-input" type="text" name="other-uni2" id="otherUni2" placeholder="Enter university.." style="display: none;">
                  <small id="error-university2"></small>

                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">Faculty</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="faculty2" id="fac2">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Agriculture">Faculty of Agriculture</option>
                    <option value="Alsun">Faculty of Alsun</option>
                    <option value="Archaeology">Faculty of Archaeology</option>
                    <option value="Arts">Faculty of Arts</option>
                    <option value="Commerce">Faculty of Commerce</option>
                    <option value="Computers and Information System">Faculty of Computers and
                      Information System</option>
                    <option value="Dar El-Ulum">Faculty of Dar El-Ulum</option>
                    <option value="Economics and Political Science">Faculty of Economics and Political
                      Science</option>
                    <option value="Kindergarten">Faculty of Kindergarten</option>
                    <option value="Law">Faculty of Law</option>
                    <option value="Mass Communication">Faculty of Mass Communication</option>
                    <option value="Medicine">Faculty of Medicine</option>
                    <option value="Nursing">Faculty of Nursing</option>
                    <option value="Oral and Dental Medicine">Faculty of Oral and Dental Medicine
                    </option>
                    <option value="Pharmacology">Faculty of Pharmacology</option>
                    <option value="Physiotherapy">Faculty of Physiotherapy</option>
                    <option value="Science">Faculty of Science</option>
                    <option value="Specialized Education">Faculty of Specialized Education</option>
                    <option value="Veterinary Medicine">Faculty of Veterinary Medicine</option>
                    <option value="Other">Other..</option>
                    
                  </select>
                  <input class="input--style-4 other-input" type="text" id="otherFac2" name="other-fac2"  placeholder="Enter faculty.." style="display: none;">
                  <small id="error-faculty2"></small>
                  <div class="select-dropdown"></div>
                </div>
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Department</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="department2" id="depart2">
                                <option disabled="disabled" selected="selected" value="">Choose option
                                </option>
                                <option value="no-department2">No Department</option>
                                <option value="undeclared2">Undeclared</option>
                                <option value="Other2">Enter Department..</option>
                            </select>
                            <div class="select-dropdown"></div>
                            <input class="input--style-4 other-input" type="text" id="otherDepart2" name="other-dep2" placeholder="Enter department.." style="display: none;" >
                            <small id="error-department2"></small>
                        </div>
                </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Graduation Year</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                      <select name="grad2" id="grad2">
                        <option disabled="disabled" selected="selected" value="">Choose option
                        </option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                      </select>
                      <div class="select-dropdown"></div>
                      <small id="error-grad2"></small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group">
                  <label class="label">CV</label>
                  <input type="file" name="cv2" id="cv2">
                  <input type="button" class="clickCV" value="Choose CV" id="clickCV2" title="CV" onclick="document.getElementById('cv2').click()">
                  <small id="error-cv2"></small>
              </div>
              <div class="row row-space">
                <div class="p-t-15 width100">
                  <div class="input-group width50">
                      <input type="checkbox" id="check2" name="check2" value="check2" class="input--style-4 checkmark" onclick="if (this.checked) {disabledAll(2)} else {abledAll(2)}">
                      <label class="label" for="check-if-memeber2">No more members</label> 
                </div>
              </div>
              <div class="p-t-15 width100">
                <a id="next3" class="buttons" >
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Next
                </a>
                <a id="prev2" class="buttons">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Previous
                </a>
              </div>
            </section>

            <section id="section4">
              <a class="title member">
                Third Member's information</a>
              <div class="row row-space">
                <div class="input-group width100">
                  <label class="label">Name</label>
                  <input class="input--style-4" type="text" name="name3" id="name3">
                  <small id="error-name3"></small>
                </div>
              </div>
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">E-mail</label>
                    <input class="input--style-4" type="text" name="email3" id="email3">
                    <small id="error-email3"></small>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Phone Number</label>
                    <input class="input--style-4" type="tel" name="tel3" placeholder="01XXXXXXXXX"
                      id="phone3">
                      <small id="error-phone3"></small>
                  </div>
                </div>
              </div>
              <div class="input-group">
                <label class="label">University</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="uni3" id="uni3">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Ain Shams University">Ain Shams University</option>
                    <option value="Al-Azhar University">Al-Azhar University</option>
                    <option value="Al-Matarya University">Al-Matarya University</option>
                    <option value="Helwan University">Helwan University</option>
                    <option value="Banha University">Banha University</option>
                    <option value="Other">Other..</option>
                  </select>
                  <input class="input--style-4 other-input" type="text" name="other-uni3" id="otherUni3" placeholder="Enter university.." style="display: none;">
                  <small id="error-university3"></small>
                  <div class="select-dropdown"></div>
                </div>
              </div>

              <div class="input-group">
                <label class="label">Faculty</label>
                <div class="rs-select2 js-select-simple select--no-search">
                  <select name="faculty3" id="fac3">
                    <option disabled="disabled" selected="selected" value="">Choose option</option>
                    <option value="Agriculture">Faculty of Agriculture</option>
                    <option value="Alsun">Faculty of Alsun</option>
                    <option value="Archaeology">Faculty of Archaeology</option>
                    <option value="Arts">Faculty of Arts</option>
                    <option value="Commerce">Faculty of Commerce</option>
                    <option value="Computers and Information System">Faculty of Computers and
                      Information System</option>
                    <option value="Dar El-Ulum">Faculty of Dar El-Ulum</option>
                    <option value="Economics and Political Science">Faculty of Economics and Political
                      Science</option>
                    <option value="Kindergarten">Faculty of Kindergarten</option>
                    <option value="Law">Faculty of Law</option>
                    <option value="Mass Communication">Faculty of Mass Communication</option>
                    <option value="Medicine">Faculty of Medicine</option>
                    <option value="Nursing">Faculty of Nursing</option>
                    <option value="Oral and Dental Medicine">Faculty of Oral and Dental Medicine
                    </option>
                    <option value="Pharmacology">Faculty of Pharmacology</option>
                    <option value="Physiotherapy">Faculty of Physiotherapy</option>
                    <option value="Science">Faculty of Science</option>
                    <option value="Specialized Education">Faculty of Specialized Education</option>
                    <option value="Veterinary Medicine">Faculty of Veterinary Medicine</option>
                    <option value="Other">Other..</option>
                    
                  </select>
                  <input class="input--style-4 other-input" id="otherFac3" type="text" name="other-fac3" placeholder="Enter faculty.." style="display: none;">
                  <small id="error-faculty3"></small>
                  <div class="select-dropdown"></div>
                </div>
              </div>

              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Department</label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="department3" id="depart3">
                                <option disabled="disabled" selected="selected" value="">Choose option
                                </option>
                                <option value="no-department3">No Department</option>
                                <option value="undeclared3">Undeclared</option>
                                <option value="Other3">Enter Department..</option>
                            </select>
                            <div class="select-dropdown"></div>
                            <input class="input--style-4 other-input" id="otherDepart3" type="text" name="other-dep3" placeholder="Enter department.." style="display: none;">
                            <small id="error-department3"></small>
                        </div>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group">
                    <label class="label">Graduation Year</label>
                    <div class="rs-select2 js-select-simple select--no-search">
                      <select name="grad3" id="grad3">
                        <option disabled="disabled" selected="selected" value="">Choose option
                        </option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                      </select>
                      <small id="error-grad3"></small>
                      <div class="select-dropdown"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group">
                  <label class="label">CV</label>
                  <input type="file" name="cv3" id="cv3">
                  <input type="button" class="clickCV" value="Choose CV" id="clickCV3" title="CV" onclick="document.getElementById('cv3').click()">
                  <small id="error-cv3"></small>
              </div>

              <div class="p-t-15">
                <input type="submit" id="submit-button-b" name="submit" style="display: none;">

                <a id="submit-button-a" class="buttons">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Submit
                </a>
                <a id="prev3" class="buttons">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Previous
                </a>
                <br>
                <br>
                <br>
              </div>
            </section>

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Vendor JS-->
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/datepicker/moment.min.js"></script>
  <script src="vendor/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>
  <script type="text/javascript" src="js/team_members.js"></script>
  <script type="text/javascript" src="js/animation.js"></script>
</body>

</html>