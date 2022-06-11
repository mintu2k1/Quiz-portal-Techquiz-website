<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <Link rel="stylesheet" href="style.css"></Link>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- ============================Header Start=================================================== -->

    <nav class="navbar navbar-expand-lg navbar-light bg-gray">
        <!-----------Logo------------------>
        <a class="navbar-brand" href="index.php"><img src="logo.png" style="width:100px;height: auto;"></a>
        <a class="navbar-brand" href="index.php">
            <h3 style="font-family: cursive;">Tech Quiz</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="adminpage.php">Home <span class="sr-only">(current)</span></a>
                </li>

                
                  
                <li class="nav-item">
                    <a class="nav-link text-dark" href="upload.php">View Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="Contact.html">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="About us.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="logout.php">Logout</a>
                </li>


            </ul>
        </div>


      

    </nav>
    <!-- ==========================================Header End====================================================== -->


    <!-- ============================================5 images sliding=================================================== -->
    <div class="container-fluid sliding">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.png" alt="Los Angeles" width="1000" height="400">
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" alt="Chicago" width="1000" height="400">
                </div>
                <div class="carousel-item">
                    <img src="images/3.png" alt="New York" width="1000" height="400">
                </div>
                <div class="carousel-item">
                    <img src="images/4.png" alt="New York" width="1000" height="400">
                </div>
                <div class="carousel-item">
                    <img src="images/5.png" alt="New York" width="1000" height="400">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!--=========================================Sliding End===================================================-->


    <!--=========================================description===================================================-->
    <br>
    <div class="container-fluid description mt-0 mb-0" style="background-color: whitesmoke;height: 500px;">
        <div class="row">
            <div class="col-12">
                <p> An Online Exam Portal is a technology based assessment creation that allows you to give exams anywhere.

                </p>
                <p>When it comes to online assessment, it’s important that you have the right platform. Examinations today are taken digitally, and it’s super crucial that you’re able to find the right software to conduct them.</p>
                <p>It consists of a variety of objective, subjective and practical questions just like you have in your offline examination. Deliver any type of test or assessment to meet your specific testing requirements, including school or institution
                    exams, tests for assessment tasks, certifications, pre-hire assessment, and creating professionals and evaluations, among other things. If you’re part of a school or coaching institution, and want to conduct a quick and seamless class
                    test, mid-term or semester examination, you can choose a test series that works best for you Keeping in mind different exam trends, any question type - MCQs, objective questions, essay short answers, skills-based questions, computation
                    questions, and personality tests, among others - can be easily integrated into a single assessment by taking into consideration the different exam patterns. Organize all of your exams, quizzes, and assessments in one convenient location.
                    It's all done from a single administrative console: you can create exams, register students, allocate students, and check reports.</p>
                <p>The Online Exam Website allows for adaptive scoring algorithms to assess students' responses and decides the appropriate level of difficulty for each question, ensuring that the test result is an accurate reflection of the individual's
                    abilities. Provides an immediate report upon completion of each exam to assist you in understanding the topics in which you are having difficulty, as well as ideas on how you may better them.</p>
                <p>There are numerous benefits of an online exam portal that will make your examination experience hassle-free. It will help you with formatting in time management, performance tracking for students and faculty with test manager, analyzing
                    your results graphically with the help of charts and graphs, accessible pertinent information for parents, faculties and students and many more advantages.</p>

                <p>With the most advanced, creative, and user-friendly Online Exam Portal available, we will assist students and examiners in totally automating their online examination procedure. Everything, from the student attendance to registration to
                    the creation of test papers for them to the uploading of question papers on their own, is within the authority of our clients.</p>
            </div>

        </div>

    </div>
    <!--=========================================description End===================================================-->


    <!---Copyright Section-->
    <footer>
    	<center>
        <p class="copyright">Copyright Tech Quiz 2022<br>
            <a href="index.php">Home |</a>
            <a href="Contact.html">Contact Us |</a>
            <a href="About us.html">About us </a>
        </p>
    </center>
    </footer>
