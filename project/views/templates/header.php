 
 <!-- Preloader Start -->
 <div id="preloader" class="bg-primary">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar text-center text-white bg-dark fs--14">
                <div class="container">
                    <!-- Header Date Start -->
                    <div class="header--date">
                        <p><? echo mainDate(); ?></p>
                    </div>
                    <!-- Header Date End -->

                    <!-- Header Search Bar Start -->
                    <div class="header--search-bar">
                        <form action="#" data-form="validate">
                            <input type="search" name="search" placeholder="Поиск..." class="form-control" required>

                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search Bar End -->

                    <!-- Header Social Start -->
                    <div class="header--social">
                        <span>Связь со мной:</span>

                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Social End -->
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <!-- Header Logo End -->

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse text-center">
                        <!-- Header nav Links Start -->
                        <ul class="header--nav-links nav">
                            <li class="dropdown active">
                                <a href="/" class="dropdown-toggle">Главная</a>
                            </li>
                            <li><a href="about.html">Обо мне</a></li>
                            <li class="dropdown">
                                <a href="#">Блог</a>
                            </li>
                            <li><a href="contact.html">Контакты</a></li>
                            <li>
                            <? 
                            if(isset($_SESSION['email']))
                            { 
                                echo '<a href="http://frame/unset/">Выйти</a>'; 
                            } else echo '<a href="http://frame/login/">Войти</a>';
                                
                            ?>
                            </li>
                        </ul>
                        <!-- Header nav Links End -->
                    </div>
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->