<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="accoet,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

    <meta name="author" content="accoet.com">

    <title>Certification</title>

    <?php include_once "./components/style.php"  ?>

</head>
<style>
    #sholarship-box {
        display: flex;
        margin: 40px;
    }

    .scholarship-detail {
        padding: 20px;
    }

    .m-btn {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }

    .scholarship-form h3 {
        text-align: center;
    }

    .mtable {
        align-self: center;
    }

    .mtable input {
        width: 80%;
    }

    .mtable input {
        margin-bottom: 20px;
    }

    .mtable select {
        margin-bottom: 20px;
        width: 80%;
        padding: 10px;
        border-radius: 6px;
    }

    .mtable td {
        color: white;
        /* font-weight: bold; */
    }

    @media(max-width:700px) {
        .mtable select {
            width: 100%;
        }

        .mtable input {
            width: 100%;
        }

        .scholarship-details2 {
            width: 100%;
        }
    }

    .scholarship-details2 {
        text-align: center;
        width: 70%;
        margin: auto;

    }

    .benifits {
        background-color: #fff;
        border-radius: 8px;
    }
</style>

<body id="top-header">

    <?php include_once "./components/nav-bar.php" ?>

    <section id="sholarship-box" class="row">
        <div class="scholarship-detail col-md-6 ">
            <h2>Get scholarship for
                every bright student</h2>
            <p>
                Acquiring a scholarship will eventually uplift your academic and career objectives by diminishing any financial fence. Obtaining a scholarship will help your financial concerns. Thus, it will offer you more time to study, acquire knowledge and secure better marks.
            </p>
            <div class='m-btn'>
                <a href="contact.php" class="btn btn-primary">Explore Courses</a>
                <img src="./assets/images/scholarship.png" alt="">
            </div>
        </div>
        <div class="scholarship-form col-md-6" style="background-color: rgb(51,144,211); padding:20px">
            <h3><i class="fa fa-graduation-cap"></i> Scholarship</h3>
            <form action="" class="form">
                <table class="mtable">
                    <tr>
                        <td>Name :</td>
                        <td><input type="text" class="form-control" placeholder="Enter your name" /> </td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td><input type="text" placeholder="Enter your email" /> </td>
                    </tr>
                    <tr>
                        <td>Mobile :</td>
                        <td><input type="text" placeholder="Enter your mobile no." /> </td>
                    </tr>
                    <tr>
                        <td>Education :</td>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="" id="">
                                <option value="">Select your course</option>
                                <option value="B.TECH">B.TECH</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                                <option value="B.Sc(IT)">B.Sc(IT)</option>
                                <option value="M.Sc(IT)">M.Sc(IT)</option>
                                <option value="BBA">BBA</option>
                                <option value="MBA">MBA</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>College Name :</td>
                        <td><input type="text" placeholder="Enter your college name" /> </td>
                    </tr>
                    <tr>
                        <td>Technology :</td>
                        <td>


                            <select class="form-select" aria-label="Default select example" name="" id="">
                                <option value="">Select your technology</option>
                                <option value="Java Fullstack development course">Java Fullstack development course</option>
                                <option value="Python Fullstack development course">Python Fullstack development course</option>
                                <option value="PHP Fullstack development course">PHP Fullstack development course</option>
                                <option value="Mobile application development course">Mobile application development course</option>
                                <option value="React Fullstack development course">React Fullstack development course</option>
                                <option value="Auto cad certification course">Auto cad certification course</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="1">
                            <input type="submit" width="100%" name="" id="">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <section>
        <div class="scholarship-details2">

            <h2>The Benefits of Getting a Scholarship</h2>
            <p>
                Nowadays, education has become one of the most costly assets & important. Accoet India helps students to cover their financial aid who are looking for financial help to pursue the career of their dreams that needs numerous years of education and counseling assistance.
            </p>
            <div class="row" style="margin-top: 25px;">
                <div class="col-lg-4 col-md-6 col-sm-12 benifits">
                    <img src="./assets/images/benifit-1.png" alt="benifit 1">
                    <h3>Gives you a Career Advantage</h3>
                    <p>Acquiring a scholarship will enhance your resume, and help you get your desired job.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 benifits">
                    <img src="./assets/images/benifit-2.png" alt="benifit 1">
                    <h3>Saves you from Debt</h3>
                    <p>Obtaining a scholarship will eventually save you from taking education loans.</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 benifits">
                    <img src="./assets/images/benifit-3.png" alt="benifit 1">
                    <h3>Opportunity to earn education</h3>
                    <p>You choose your desired field as per your abilities.</p>
                </div>
            </div>
        </div>

    </section>

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