<!doctype html>
<html lang="en">

<head>
    <?php require_once 'includes/head.php'; ?>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="modalCrochet" tabindex="-1" role="dialog" aria-labelledby="modalCrochetTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Crochet blankets made by Zachary donated to
                        Project Linus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--image carousel-->
                    <div id="carouselBlankets" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/lib/img/blanket-1.jpg"
                                    alt="First slide, crochet blanket">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/lib/img/blanket-2.jpg"
                                    alt="Second slide, crochet blanket">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselBlankets" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselBlankets" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--navbar-->
    <?php require_once 'includes/nav.php'; ?>
    <div class="container-fluid">
        <!--banner-->
        <div class="row bg-main">
            <div class="col d-flex justify-content-center">
                <div class="card shadow p-3 mb-5 mt-5 bg-white rounded main-card">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img class="card-img img-fluid" src="/lib/img/Zachary.jpg" alt="Zachary Schultz's Picture">
                        </div>
                        <div class="col-sm-12 col-md-6 d-flex align-items-center">
                            <div class="card-body">
                                <p class="h1 text-center">Zachary Schultz</h1>
                                    <p class="z-text-small text-center">Diligent • Detail-Oriented • Innovative</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg id="edu" class="slant-gray" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" /></svg>
        </div>
        <!--education-->
        <div class="row bg-secondary">
            <div class="col">
                <h2 class="text-center my-2">Education</h2>
            </div>
        </div>
        <div class="row bg-secondary">
            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 edu-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between">
                            <div class="col-sm-12 col-md-6">
                                <div>
                                    <p>Michigan State University, East Lansing, MI</p>
                                </div>
                                <div>
                                    <p>Bachelor of Arts in Information Science</p>
                                </div>
                                <div>
                                    <p>GPA: 4.0</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex flex-md-row-reverse flex-sm-row">
                                <p>Expected Graduation 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 edu-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between">
                            <div class="col-sm-12 col-md-6">
                                <div>
                                    <p>Oakland University, Rochester, MI</p>
                                </div>
                                <div>
                                    <p>GPA: 3.91</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex flex-md-row-reverse flex-sm-row">
                                <p>2019 to 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--education OCC card-->
            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 edu-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between">
                            <div class="col-sm-12 col-md-6">
                                <div>
                                    <p>Oakland Community College, Royal Oak, MI</p>
                                </div>
                                <div>
                                    <p>GPA: 3.852</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-flex flex-md-row-reverse flex-sm-row">
                                <p>2017 to 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg id="exp" class="slant-exp" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,0 0,100 100,100" /></svg>
        </div>
        <!--experiences-->
        <div class="row bg-exp">
            <div class="col">
                <h2 class="text-center my-2">Experiences</h2>
            </div>
        </div>
        <div class="row bg-exp">
            <!--work experiences-->
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">Volunteer</p>
                            <p>International Conference on Meaningful Play, East Lansing, MI</p>
                            <p>October 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">College Advisory Council: Undergraduate Representative</p>
                            <p>Michigan State University College of Communication Arts and Sciences, East Lansing, MI</p>
                            <p>August 2022 to Present</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">Undergraduate Committee - Dept. of Media & Information: Undergraduate Representative</p>
                            <p>Michigan State University College of Communication Arts and Sciences, East Lansing, MI</p>
                            <p>September 2022 to Present</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">CSE 102 Undergraduate Learning Assistant</p>
                            <p>Michigan State University Department of Computer Science and Engineering, East Lansing,
                                MI</p>
                            <p>January 2022 to Present</p>
                            <ul>
                                <li>Answers questions for students learning the high-level programming language Python
                                    leading to a more meaningful understanding for the students</li>
                                <li>Presents announcements from the class professors to 30 students helping them
                                    understand how to succeed in the class</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">Undergraduate Research Assistant</p>
                            <p>Michigan State University College of Communication Arts and Sciences, East Lansing, MI
                            </p>
                            <p>October 2021 to Present</p>
                            <ul>
                                <li>Develops virtual reality experiences for a research experiment</li>
                                <li>Actively participates in lab meetings in-person and digitally utilizing Zoom and Discord</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">IT Help Desk Student Technician</p>
                            <p>Oakland University School of Business Administration, Rochester, MI</p>
                            <p>May 2019 to September 2020</p>
                            <ul>
                                <li>Collaborated with colleagues to problem solve by discussing potential issues and
                                    resolutions, updating and maintaining the computer labs on a weekly basis</li>
                                <li>Counseled faculty, staff, and students with computer problems utilizing software and
                                    hardware consultation, diagnosis, and troubleshooting techniques, resolving client
                                    issues in a timely manner</li>
                                <li>Communicated with faculty and staff using a ticketing system to schedule assistance
                                    appointments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body row d-flex justify-content-between">
                        <div class="col">
                            <p class="font-weight-bold">Volunteer</p>
                            <p>Project Linus</p>
                            <p>2016 to Present</p>
                            <ul>
                                <li>Project Linus is a charity organization that distributes homemade blankets to kids
                                    in need</li>
                                <li>Zachary crochets blankets to be donated to Project Linus</li>
                                <a class="btn btn-secondary btn-sm mt-3" role="button" data-toggle="modal"
                                    data-target="#modalCrochet">View crochet blankets Zachary has made and
                                    donated</a>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <svg id="act" class="slant-gray" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" /></svg>
        </div>
        <!--activities-->
        <div class="row bg-secondary">
            <div class="col">
                <h2 class="text-center my-2">Activities</h2>
            </div>
        </div>
        <div class="row bg-secondary">
            <div class="col-sm-12 col-lg-4 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Spartan Linux Users Group</li>
                            <li>Treasurer and Vice President</li>
                            <li>October 2021 to Present</li>
                        </ul>
                        <ul>
                            <li>Co-found Spartan Linux Users Group with people who are enthusiastic about Linux by
                                developing the group’s constitution/bylaws, establishing the organization within one
                                month</li>
                            <li>Effectively communicate with e-board and members in group chats and at bi-monthly
                                meetings to plan group activities and discussion topics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Beta Gamma Sigma</li>
                            <li>May 2020 to Present</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>Detroit Chapter:</li>
                            <li>2021 to Present</li>
                            <li>Member</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>Oakland University Chapter:</li>
                            <li>Member</li>
                            <li>May 2020 to June 2021</li>
                            <li>Student Officer</li>
                            <li>July 2020 to June 2021</li>
                        </ul>
                        <ul>
                            <li>Communicated with e-board members over digital meetings to plan group events increasing
                                the benefits offered to members</li>
                            <li>Promoted volunteering opportunities to members resulting in increased community
                                involvement</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center" data-aos="fade-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow mb-4 exp-card">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="font-weight-bold">Association for Information Systems</li>
                            <li>2019 to 2020</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>Oakland University Chapter:</li>
                            <li>Member</li>
                        </ul>
                        <ul>
                            <li>Networked with peers while increasing knowledge of technology related topics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg id="cert" class="slant-certs" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,0 0,100 100,100" /></svg>
        </div>
        <!--certifications-->
        <div class="row bg-certs">
            <div class="col">
                <h2 class="text-center my-2">Certifications</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-around bg-certs card-deck">
            <!--MTA Networking Fundamentals-->
            <div class="col-sm-6 col-md-4 m-4 d-flex justify-content-center" data-aos="zoom-in"
                data-aos-duration="1500">
                <div class="card border-dark shadow">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>MTA Networking Fundamentals - Microsoft</li>
                            <li>Issued October 2018</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--MTA Security Fundamentals-->
            <div class="col-sm-6 col-md-4 m-4 d-flex justify-content-center" data-aos="zoom-in"
                data-aos-duration="1500">
                <div class="card border-dark shadow">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>MTA Security Fundamentals - Microsoft</li>
                            <li>Issued October 2018</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--CompTIA A+-->
            <div class="col-sm-6 col-md-4 m-4 d-flex justify-content-center" data-aos="zoom-in"
                data-aos-duration="1500">
                <div class="card border-dark shadow">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>CompTIA A+ ce Certification - CompTIA</li>
                            <li>Issued May 2018 - Expires May 2024</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--MTA Windows Operating System Fundamentals-->
            <div class="col-sm-6 col-md-4 m-4 d-flex justify-content-center" data-aos="zoom-in"
                data-aos-duration="1500">
                <div class="card border-dark shadow">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>MTA Windows Operating System Fundamentals - Microsoft</li>
                            <li>Issued October 2017</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--MSU Undergrad Researchers RCR Progam-->
            <div class="col-sm-6 col-md-4 m-4 d-flex justify-content-center" data-aos="zoom-in"
                data-aos-duration="1500">
                <div class="card border-dark shadow">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>MSU Undergrad Researchers RCR Program - CITI Program</li>
                            <li>Issued October 2021</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg id="skill" class="slant-gray" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" /></svg>
        </div>
        <!--Skills-->
        <div class="row bg-secondary">
            <div class="col">
                <h2 class="text-center my-2">Skills</h2>
            </div>
        </div>
        <div class="row bg-secondary">
            <div class="col-sm-12 col-md-4 col-lg-12 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Python</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Sewing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>CSS</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Machine Embroidery Digitizing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Virtual Reality Technologies</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Information Technology</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Crochet</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>HTML</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-12 d-flex justify-content-center" data-aos="flip-up"
                data-aos-duration="1500">
                <div class="card border-dark shadow m-2">
                    <div class="card-body text-center">
                        <ul class="list-unstyled">
                            <li>Linux</li>
                        </ul>
                    </div>
                </div>
            </div>
            <svg id="contact" class="slant-exp mt-4" xmlns="http:www.w3.org/2000/svg" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <polygon points="0,0 0,100 100,100" /></svg>
        </div>
        <!--contact me-->
        <div class="row bg-exp">
            <div class="col d-flex justify-content-center">
                <div class="card border-dark shadow my-4 main-card">
                    <div class="card-body p-4">
                        <p class="h2 text-center">Let's Talk<p>
                                <?php
                                    $msg = "";
                                    if(isset($_GET['errorblank'])){
                                        $msg = 'Please fill in all the inputs.';
                                        echo '<div class="alert alert-danger alert-dismissable fade show">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"> × </span>
                                      </button></div>';
                                    }
                                    if(isset($_GET['invalidemail'])){
                                        $msg = 'Please enter a valid email address.';
                                        echo '<div class="alert alert-danger alert-dismissable fade show">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"> × </span>
                                      </button>'.'</div>';
                                    }
                                    if(isset($_GET['success'])){
                                        $msg = 'Thank you sending a message, it has successfully been sent!';
                                        echo '<div class="alert alert-success alert-dismissable fade show">'.$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"> × </span>
                                      </button></div>';
                                    }
                                ?>
                                <form id="contactform" action="/lib/scripts/contact.php" method="post">
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input class="form-control" id="name" type="text" name="name" placeholder=""
                                            required="">
                                        <label for="email">Email*</label>
                                        <input class="form-control" id="email" type="email" name="email" placeholder=""
                                            required="">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" rows="7" id="message" name="message"
                                            required=""> </textarea>
                                        <div class="d-flex justify-content-center"><button name="btn-send"
                                                class="btn btn-lg btn-primary mt-3">Send</button></div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="row">
            <div class="col">
                <?php require_once 'includes/footer.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>