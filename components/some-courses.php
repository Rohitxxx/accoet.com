
<section class="section-padding popular-courses">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Trending Courses</span>
                        <h3>Our Popular Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
    require_once('./apis/Courses.php');

    $courses = new Courses();

    $result = $courses->get4Courses();
    
    while($row=mysqli_fetch_assoc($result)){
    ?>
                <div class="col-lg-3 col-md-6">
                    <div class="course-block style-5">
                        <div class="course-img">
                            <a href="course-details.php?url=java-development"> <img src="assets/images/course/<?php echo $row['image'] ?>" alt="" class="img-fluid"></a>
                        </div>

                        <div class="course-content">

                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="<?php echo $row['stars'] ?>"></i></a>
                                <span>(<?php echo $row['ratings'] ?>)</span>
                            </div>
                            <h5><a href="course-details.php?url=<?php echo $row['url'] ?>"><?php echo $row['name'] ?></a></h5>

                            <div class="course-meta">
                                <span class="course-student"><i class="bi bi-group"></i><?php echo $row['students_enrolled'] ?> Students</span>
                                <span class="course-duration"><i class="bi bi-badge3"></i><?php echo $courses->getLessons($row['id']) ?> Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php  } ?>
            </div>
        </div>
    </section>
