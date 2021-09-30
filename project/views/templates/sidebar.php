<div class="col-md-4 pb--60">
    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Обо мне</h2>

        <!-- About Widget Start -->
        <div class="about--widget pb--3 text-center">
            <div class="img">
                <a href="about.html">
                    <img src="/project/webroot/img/widgets-img/about-avatar.jpg" alt="" class="img-circle">
                </a>
            </div>

            <div class="info">
                <h3 class="name h5 text-primary"><a href="about.html" class="btn-link">Karen Rosalie</a></h3>

                <p class="role">Photographer &amp; Blogger</p>
            </div>

            <div class="social">
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>

            <div class="bio">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi veritatis sapiente emit poribus...</p>

                <p><a href="about.html">Read More</a></p>
            </div>
        </div>
        <!-- About Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Социальные сети</h2>

        <!-- Social Widget Start -->
        <div class="social--widget pb--5 text-center">
            <ul class="nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <!-- Social Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Newsletter</h2>

        <!-- Newsletter Widget Start -->
        <div class="newsletter--widget pb--10 text-center">
            <form action="" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="validate">
                <p class="fs--14">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                <input type="email" name="EMAIL" placeholder="Your E-mail" class="form-control" autocomplete="off" required>

                <button type="submit" class="btn btn-default">Subscribe Now</button>
            </form>
        </div>
        <!-- Newsletter Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Новое</h2>
        <? foreach ($descDate as $date) { ?>
        <!-- Post Widget Start -->
        <div class="post--widget pb--3 text-center">
            <div class="img">
                <a href="<?= "http://frame/article/" . $date['id'] ?>"><img src="/project/webroot/img/widgets-img/editor-pick.jpg" alt=""></a>
            </div>

            <div class="cat text-white" data-overlay="0.5" data-overlay-color="primary">
                <p><a href="#" class="btn-link"><?= $date['category_name'] ?></a></p>
            </div>

            <div class="title">
                <h3 class="h5"><a href="<?= "http://frame/article/" . $date['id'] ?>" class="btn-link"><?= $date['title'] ?></a></h3>
            </div>

            <div class="meta">
                <p><i class="fa fa-clock-o text-primary"></i><?= $date['date'] ?> <a href="#">by John Doe</a></p>
            </div>
        </div>
        <!-- Post Widget End -->
        <? } ?>
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Популярные статьи</h2>

        <!-- Posts Widget Start -->
        <div class="posts--widget pb--10">
            <ul class="nav">
                <? foreach($descArticle as $desc) { ?>
                <li class="clearfix">
                    <div class="img">
                        <a href="<?= "http://frame/article/" . $desc['id'] ?>"><img src="/project/webroot/img/widgets-img/latest-post-01.jpg" alt=""></a>
                    </div>

                    <div class="info">
                        <a href="#" class="cat" data-overlay="0.5" data-overlay-color="primary"><?= $desc['category_name'] ?></a>

                        <h3 class="h5"><a href="<?= "http://frame/article/" . $desc['id'] ?>" class="btn-link"><?= $desc['title'] ?></a></h3>

                        <p class="date"><i class="fa fa-clock-o text-primary"></i> <a href="#" class="btn-link"><?= $desc['date'] ?></a></p>
                    </div>
                </li>
                <? } ?>
            </ul>
        </div>
        <!-- Posts Widget End -->
    </div>
    <!-- Widget End -->

    

    <!-- Widget Start -->
    <div class="widget">
        <h2 class="h4 widget--title">Категории</h2>

        <!-- Links Widget Start -->
        <div class="links--widget pb--10">
            <ul class="nav">
                <? foreach($articles as $article){ ?>
                <li>
                    <a href="#">
                        <span class="text"><?= $article['category_name'] ?></span>
                    </a>
                </li>
               <? } ?>
            </ul>
        </div>
        <!-- Links Widget End -->
    </div>
    <!-- Widget End -->

    <!-- Widget Start -->
    <div class="widget">
        <!-- Ad Widget Start -->
        <div class="ad--widget pb--10">
            <a href="#" target="_blank">
                <img src="/project/webroot/img/widgets-img/ad-widget.jpg" alt="">
            </a>
        </div>
        <!-- Ad Widget End -->
    </div>
    <!-- Widget End -->
</div>