<?
require 'templates/header.php';  
?>

        <!-- Banner Section Start -->
        <section class="banner--section">
            
            <!-- Banner Slider Start -->
            <div class="banner--slider owl-carousel" data-owl-dots="true" data-owl-center="true" data-owl-responsive='{"0": {"autoWidth": false}, "768": {"autoWidth": true}}'>
            <? foreach($articles as $article){ ?>
                <div class="container">
                    <!-- Banner Item Start -->
                    <div class="banner--item style--2" data-bg-img="project/webroot/img/banner-img/slider-bg-01.jpg" data-overlay="0.5">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- Banner Content Start -->
                                
                                <div class="banner--content pt--180 pb--180 text-white text-center">
                                    <div class="tag" data-overlay="0.5" data-overlay-color="primary">
                                        <p><a href="category.html" class="btn-link"><? echo $article['category_name']; ?></a></p>
                                    </div>

                                    <div class="title">
                                        <h2 class="h2 text-white"><a href="<?= "http://frame/article/" . $article['id'] ?>" class="btn-link"><? echo $article['title']; ?></a></h2>
                                    </div>

                                    <div class="desc">
                                        <p><? echo $article['description']; ?></p>
                                    </div>

                                    <div class="action">
                                        <a href="<?= "http://frame/article/" . $article['id'] ?>" class="btn btn-white">Читать далее...</a>
                                    </div>
                                </div>
                                
                                <!-- Banner Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Banner Item End -->
                </div>
                <? } ?>
            </div>
            <!-- Banner Slider End -->
        </section>
        <!-- Banner Section End -->

        <!-- Featured Section Start -->
        <section class="section pt--60 pb--30">
            <div class="container">
                <!-- Featured Posts Start -->
                <div class="featured--posts owl-carousel" data-owl-autoplay="false" data-owl-margin="30" data-owl-nav="true" data-owl-loop="false" data-owl-responsive='{"0": {"items": "1"}, "481": {"items": "2"}, "992": {"items": "3"}}'>
                    <!-- Category Item Start -->
                    <? foreach ($articles as $article){ ?>
                    <div class="category--item">
                        <a href="" data-overlay="0.7" data-overlay-color="primary">
                            <img src="project/webroot/img/category-img/01.jpg" alt="">
                            <span><?= $article['category_name']?></span>
                        </a>
                    </div>
                    <? } ?>
                    <!-- Category Item End -->

                   
                </div>
                <!-- Featured Posts End -->
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Blog Section Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 pb--60">
                        <!-- Sticky Post Item Start -->
                        
                        <!-- Sticky Post Item End -->
                        <? foreach($articl as $art) { ?>
                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="<?= "http://frame/article/" . $art['id'] ?>"><img src="project/webroot/img/posts-img/post-img-01.jpg" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary"><? echo $art['category_name']; ?></a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="<?= "http://frame/article/" . $art['id'] ?>" class="btn-link"><? echo $art['title']; ?></a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p><? echo $art['description']; ?></p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="<?= "http://frame/article/" . $art['id'] ?>" class="btn btn-default">Читать далее...</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span><? echo $art['date']; ?></span>
                                    <a href="#">Автор: ЕСО</a>
                                </p>
                                <p class="float--right">
                                    <a href="blog-details.html#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                        <? } ?>

                        <!-- Pager Start -->
                        <? require 'templates/pagination.php'; ?>
                        <!-- Pager End -->
                    </div>

                   <? require 'templates/sidebar.php'; ?>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->


<?
    require 'templates/footer.php';
?>
    
