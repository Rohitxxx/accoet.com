<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="accoet,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

    <meta name="author" content="accoet.com">

    <title>Certification</title>

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
                        <h1>Get your certificate</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="https://accoet.com">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Certificate
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
                        <span class="subheading">Get your certificate</span>
                        <h3>Enter your details</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">


                <div>
                    <form class="contact__form form-row justify-content-center " method="POST" action="#" id="" onsubmit="showMessage()">

                        <div class="row col-lg-12">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Enrollment">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>



                        </div>

                        <div class="col-lg-12">
                            <div class="mt-4 text-center">
                                <span style="color:red" id="msg"></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mt-4 text-center">
                                <button class="btn btn-main" type="submit">Submit <i class="fa fa-angle-right ml-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
    <?php include_once "./components/footer.php" ?>

    <!-- 
    Essential Scripts
    =====================================-->

    <?php include_once "./components/javascript.php" ?>


</body>

</html>
<script>
    function showMessage() {
        document.getElementById('msg').innerHTML = 'No record found :(';
    }
</script>