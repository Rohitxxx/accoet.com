<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="accoet,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

    <meta name="author" content="accoet.com">
    <?php
    require_once('./apis/Courses.php');

    $courses = new Courses();
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    } else {
        $url = 'java-development';
    }

    $result = $courses->getCourseDetailByUrl($url);
    if ($result != false) {
        if (mysqli_num_rows($result) < 1)
            echo "<script>window.location.href = '404.php'</script>";
        $courseRow = mysqli_fetch_assoc($result);
    } else {
        // header('location:index.php');
    }

    ?>
    <title>Accoet Courses - <?php echo $courseRow['name'] ?></title>

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


    <section class="page-wrapper edutim-course-single course-single-style-3">
        <div class="course-single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-single-header white-text">
                            <span class="subheading"></span>
                            <h3 class="single-course-title"><?php echo $courseRow['name'] ?></h3>
                            <p><?php echo substr($courseRow['description'], 0, 180) . "..." ?></p>
                            <div class="d-flex align-items-center ">
                                <div class="single-top-meta">
                                    <i class="fa fa-user"></i><span> <?php echo $courseRow['students_enrolled'] ?> Students Enrolled</span>
                                </div>
                                <div class="single-top-meta">
                                    <div class="rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="<?php echo $courseRow['stars'] ?>"></i></a>
                                        <span><?php echo $courseRow['ratings'] ?> (<?php echo $courseRow['total_students'] ?> ratings)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <nav class="course-single-tabs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                            <a class="nav-item nav-link" id="nav-topics-tab" data-toggle="tab" href="#nav-topics" role="tab" aria-controls="nav-profile" aria-selected="false">Topics</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="single-course-details ">
                                <h4 class="course-title">Description</h4>
                                <p><?php echo $courseRow['description'] ?></p>


                                <div class="course-widget course-info">
                                    <h4 class="course-title">What You will Learn?</h4>
                                    <ul>
                                        <?php
                                        $detailsResult = $courses->getCourseContentDetail($courseRow['id']);
                                        if (mysqli_num_rows($detailsResult) < 0)
                                            echo "<script>window.location.href = 'index.php'</script>";

                                        if ($detailsResult != false) {
                                            while ($detailsRow = mysqli_fetch_assoc($detailsResult)) {
                                        ?>
                                                <li>
                                                    <i class="fa fa-check"></i>
                                                    <?php echo $detailsRow['chapter_name'] ?>
                                                </li>
                                        <?php
                                            }
                                        } else {
                                            // echo "<script>window.location.href = 'index.php'</script>";
                                        }
                                        ?>
                                        <li>
                                            <i class="fa fa-check"></i>
                                            And much more...
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-topics" role="tabpanel" aria-labelledby="nav-topics-tab">
                            <!--  Course Topics -->
                            <div class="edutim-single-course-segment  edutim-course-topics-wrap">
                                <div class="edutim-course-topics-header d-lg-flex justify-content-between">
                                    <div class="edutim-course-topics-header-left">
                                        <h4 class="course-title">Topics for this course</h4>
                                    </div>
                                    <div class="edutim-course-topics-header-right">
                                        <span> Total learning: <strong><?php echo mysqli_num_rows($detailsResult) ?> Lessons</strong></span>
                                        <span> Time: <strong><?php echo $courseRow['duration'] ?></strong> </span>
                                    </div>
                                </div>

                                <div class="edutim-course-topics-contents">
                                    <div class="edutim-course-topic ">
                                        <div class="accordion" id="accordionExample">


                                            <?php
                                            $detailsResult = $courses->getCourseContentDetail($courseRow['id']);
                                            $accordionId = 0;
                                            while ($detailsRow = mysqli_fetch_assoc($detailsResult)) {
                                                $accordionId++;
                                            ?>
                                                <div class="card">
                                                    <div class="card-header" id="<?php echo "acc" . $accordionId ?>">
                                                        <h2 class="mb-0">
                                                            <button class="btn-block text-left collapsed curriculmn-title-btn" type="button" data-toggle="collapse" data-target="#<?php echo "coll" . $accordionId ?>" aria-expanded="false" aria-controls="<?php echo "coll" . $accordionId ?>">
                                                                <h4 class="curriculmn-title"><?php echo $detailsRow['chapter_name'] ?></h4>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="<?php echo "coll" . $accordionId ?>" class="collapse" aria-labelledby="<?php echo "acc" . $accordionId ?>" data-parent="#accordionExample">
                                                        <div class="course-lessons">
                                                            <?php $topicArr = explode('#', $detailsRow['topics']);
                                                            for ($i = 1; $i < count($topicArr); $i++) {
                                                            ?>
                                                                <div class="single-course-lesson">
                                                                    <div class="course-topic-lesson">
                                                                        <i class="fa fa-book"></i>
                                                                        <span><?php echo $topicArr[$i] ?></span>
                                                                    </div>

                                                                </div>
                                                            <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  COurse Topics End -->

                        </div>
                        <div class="tab-pane fade" id="nav-instructor" role="tabpanel" aria-labelledby="nav-instructor-tab">
                            <div class="course-widget course-info">
                                <h4 class="course-title">About the instructors</h4>
                                <div class="instructor-profile">
                                    <div class="profile-img">
                                        <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="profile-info">
                                        <h5>Meraz Ahmed</h5>
                                        <div class="rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star-half"></i></a>
                                            <span>3.79 ratings (29 )</span>
                                        </div>
                                        <p>I'm a developer with a passion for teaching. I'm the lead instructor at the London App Brewery, London's leading Programming Bootcamp. I've helped hundreds of thousands of students learn to code and change their lives by becoming a developer </p>
                                        <div class="instructor-courses">
                                            <span><i class="bi bi-folder"></i>4 Courses</span>
                                            <span><i class="bi bi-group"></i>400 Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-feedback" role="tabpanel" aria-labelledby="nav-feedback-tab">
                            <div class="course-widget course-info">
                                <h4 class="course-title">Students Feedback</h4>

                                <div class="course-review-wrapper">
                                    <div class="course-review">
                                        <div class="profile-img">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="review-text">
                                            <h5>Mehedi Rasedh <span>26th june 2020</span></h5>

                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                            </div>
                                            <p>Great course. Well structured, paced and I feel far more confident using this software now then I did back in school when I was learning. And the guy doing the voice over really is great at what he does</p>
                                        </div>
                                    </div>


                                    <div class="course-review">
                                        <div class="profile-img">
                                            <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="review-text">
                                            <h5>Rasedh raj <span>1 Year Ago</span></h5>
                                            <div class="rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half"></i></a>
                                            </div>
                                            <p>Very deep course for a beginner, enjoyed everything from the very start and every detail is vastly investigated and discussed. A nice choice for those, who are enrolling Python. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="course-sidebar">
                        <div class="course-single-thumb">
                            <img src="assets/images/course/<?php echo $courseRow['image'] ?>" alt="" class="img-fluid w-100">

                            <div class="course-price-wrapper">
                                <div class="buy-btn"><button type='button' data-toggle="modal" data-target="#regstration-Modal" href="contact.php" class="btn btn-main btn-block">Enroll Now</button></div>
                            </div>
                        </div>

                        <div class="course-widget course-details-info">
                            <h4 class="course-title">This Course Includes</h4>
                            <ul>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-graph-bar"></i>Skill level : </span>
                                        Beginner, Intermediate, Expert
                                    </div>
                                </li>


                                <li>
                                    <div class="">
                                        <span><i class="bi bi-flag"></i>Duration :</span>
                                        <?php echo $courseRow['duration'] ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-paper"></i>Lessons :</span>
                                        <?php echo mysqli_num_rows($detailsResult); ?>
                                    </div>
                                </li>
                                <li>
                                    <div class="">
                                        <span><i class="bi bi-forward"></i>Language :</span>
                                        Hindi, English
                                    </div>
                                </li>

                                <li>
                                    <div class="">
                                        <span><i class="bi bi-madel"></i>Certificate :</span>
                                        yes
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="course-widget course-share d-flex justify-content-between align-items-center">
                            <span>Share</span>
                            <ul class="social-share list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>

                        <div class="course-widget">
                            <h4 class="course-title">Tags</h4>
                            <div class="single-course-tags">
                                <a href="#">Web Deisgn</a>
                                <a href="#">Development</a>
                                <a href="#">Html</a>
                                <a href="#">css</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--<section class="section-padding related-course">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="section-heading">-->
    <!--                    <h4>Related Courses You may Like</h4>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="course-block style-5">-->
    <!--                    <div class="course-img">-->
    <!--                        <a href="course-details.php?id=1"><img src="assets/images/course/java.png" alt="" class="img-fluid"></a>-->
    <!--                    </div>-->

    <!--                    <div class="course-content">-->

    <!--                        <div class="rating">-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <span>(5.00)</span>-->
    <!--                        </div>-->
    <!--                        <h5><a href="course-details.php?id=1"> Fullstack Development in Java</a></h5>-->

    <!--                        <div class="course-meta">-->
    <!--                            <span class="course-student"><i class="bi bi-group"></i>57 Students</span>-->
    <!--                            <span class="course-duration"><i class="bi bi-badge3"></i>16 Lessons</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="course-block style-5">-->
    <!--                    <div class="course-img">-->
    <!--                        <a href="course-details.php?id=2"> <img src="assets/images/course/laravel.png" alt="" class="img-fluid"></a>-->
    <!--                    </div>-->

    <!--                    <div class="course-content">-->

    <!--                        <div class="rating">-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <span>(5.00)</span>-->
    <!--                        </div>-->

    <!--                        <h5><a href="course-details.php?id=2">Fullstack with Laravel </a></h5>-->

    <!--                        <div class="course-meta">-->
    <!--                            <span class="course-student"><i class="bi bi-group"></i>57 Students</span>-->
    <!--                            <span class="course-duration"><i class="bi bi-badge3"></i>16 Lessons</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="course-block style-5">-->
    <!--                    <div class="course-img">-->
    <!--                        <a href="course-details.php?id=3"><img src="assets/images/course/react.png" alt="" class="img-fluid"></a>-->
    <!--                    </div>-->

    <!--                    <div class="course-content">-->
    <!--                        <div class="rating">-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <span>(5.00)</span>-->
    <!--                        </div>-->

    <!--                        <h5><a href="course-details.php?id=3">React Js</a></h5>-->

    <!--                        <div class="course-meta">-->
    <!--                            <span class="course-student"><i class="bi bi-group"></i>57 Students</span>-->
    <!--                            <span class="course-duration"><i class="bi bi-badge3"></i>16 Lessons</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-md-6">-->
    <!--                <div class="course-block style-5">-->
    <!--                    <div class="course-img">-->
    <!--                        <a href="course-details.php?id=4"><img src="assets/images/course/digital.png" alt="" class="img-fluid"></a>-->
    <!--                    </div>-->

    <!--                    <div class="course-content">-->
    <!--                        <div class="rating">-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <a href="#"><i class="fa fa-star"></i></a>-->
    <!--                            <span>(5.00)</span>-->
    <!--                        </div>-->

    <!--                        <h5><a href="course-details.php?id=4">Digital Marketing</a></h5>-->

    <!--                        <div class="course-meta">-->
    <!--                            <span class="course-student"><i class="bi bi-group"></i>57 Students</span>-->
    <!--                            <span class="course-duration"><i class="bi bi-badge3"></i>16 Lessons</span>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
        <?php require_once "./components/some-courses.php" ?>



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