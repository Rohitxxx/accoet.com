<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="accoet,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

    <meta name="author" content="accoet.com">

    <title>Accoet - Contact Us</title>

    <?php include_once "./components/style.php"  ?>

</head>

<body id="top-header">

    <?php include_once "./components/nav-bar.php" ?>



    <!--search overlay start-->
    <div class="search-wrap">
        <div class="overlay">
            <form action="#" class="search-form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-9">
                            <h3>Search Your keyword</h3>
                            <input type="text" class="form-control" placeholder="Search..." />
                        </div>
                        <div class="col-md-2 col-3 text-right">
                            <div class="search_toggle toggle-wrap d-inline-block">
                                <img class="search-close" src="assets/images/close.png" srcset="assets/images/close@2x.png 2x" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--search overlay end-->


    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-header-content">
                        <div class="bannerTitle">Contact Us</div>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Contact us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-info section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading center-heading">
                        <span class="subheading">Contact Us</span>
                        <h3>Have any query?</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Email Us</p>
                                <h4>info@accoet.com</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Make a Call</p>
                                <h4>+91 85 888 91017</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Corporate Office</p>
                                <h4>
                                    3rd Floor, Bhavani Market,
                                    Sector-27,Noida-201304.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form class=" form-row " method="POST" action="#">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="course" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea id="message" name="msg" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mt-4 text-right">
                                <input type="submit" value="Send Message" class="btn btn-main" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST['submit'])) {
        include_once "./apis/Courses.php";
        $insertObj = new Courses();
        $status = $insertObj->insertData($_POST);
    }
    ?>

    <?php include_once "./components/footer.php" ?>

    <!-- 
    Essential Scripts
    =====================================-->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WZG0K26HXF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WZG0K26HXF');
</script>
    <?php include_once "./components/javascript.php" ?>


</body>

</html>