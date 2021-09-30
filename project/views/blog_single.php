<?
require_once 'templates/header.php';
?>
 <!-- Blog Section Start -->
 <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item post--single text-center">
                            <!-- Post Slider Start -->
                            <div class="post--slider owl-carousel" data-owl-nav="true" data-owl-dots="true" data-owl-margin="10">
                                <img src="/project/webroot/img/posts-img/post-slider-01.jpg" alt="">
                                <img src="/project/webroot/img/posts-img/post-slider-02.jpg" alt="">
                                <img src="/project/webroot/img/posts-img/post-slider-03.jpg" alt="">
                            </div>
                            <!-- Post Slider End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span><?= $sin['date']?></span>
                                    <a href="author.html"><?= $sin['category_name']; ?></a>
                                </p>
                                <p class="float--right">
                                <i class="fa fa-eye text-primary"></i>
                                    <span><? echo $counter; ?></span>
                                    
                                </p>
                            </div>
                            <!-- Post Meta End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h2"><?= $sin['title']?></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Content Start -->
                            <div class="post--content clearfix">
                                <p><?= $sin['text']?></p>

                              
                            </div>
                            <!-- Post Content End -->

                            <!-- Post Footer Start -->
                            <div class="post--footer clearfix pt--40">
                                

                                

                                <!-- Post Social Start -->
                                <ul class="post--social nav float--right">
                                    <li><strong>Share On:</strong></li>
                                    <li>
                                        <a href="#" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Share on Instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                                <!-- Post Social End -->
                            </div>
                            <!-- Post Footer End -->
                        </div>
                        <!-- Post Item End -->

                        <!-- Pager Start -->
                        <div class="pager--wrapper pt--50">
                            <ul class="pager nav ff--primary">
                                <li><a href="#"><i class="fa fa-long-arrow-left"></i>Older Posts</a></li>
                                <li><a href="#">Newer Posts<i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pager End -->


                        <!-- Related Posts Start -->
                        <div class="related--posts pt--50">
                            <div class="related--posts-title text-uppercase text-center">
                                <h2 class="h5">Вам может понравиться</h2>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="#"><img src="/project/webroot/img/posts-img/post-slider-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Title Start -->
                                        <div class="post--title text-center">
                                            <h3 class="h5"><a href="#" class="btn-link">Love Is Everything</a></h3>
                                        </div>
                                        <!-- Post Title End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="#"><img src="/project/webroot/img/posts-img/post-slider-02.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Title Start -->
                                        <div class="post--title text-center">
                                            <h3 class="h5"><a href="#" class="btn-link">Interview with Paris Girl on Monmartre</a></h3>
                                        </div>
                                        <!-- Post Title End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-sm-4 col-xs-6 col-xxs-12 pt--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="#"><img src="/project/webroot/img/posts-img/post-slider-03.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Title Start -->
                                        <div class="post--title text-center">
                                            <h3 class="h5"><a href="#" class="btn-link">Girl Love Music At Home</a></h3>
                                        </div>
                                        <!-- Post Title End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                            </div>
                        </div>
                        <!-- Related Posts End -->

                        
                    </div>

                    <? require 'templates/sidebar.php'; ?>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->

       
<?
    require 'templates/footer.php';
?>