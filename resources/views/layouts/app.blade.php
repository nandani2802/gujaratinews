<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    
    <title>Gujarati News 24 - દરેક ગુજરાતી જાણશે સત્ય</title>
    
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/Gujarati-News-24.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

   <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="topbar">
                <div class="content-topbar container h-100">
                    <div class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                India
                            </span>

                        </span>

                        <a href="about" class="left-topbar-item">
                            About
                        </a>

                        <a href="contact" class="left-topbar-item">
                            Contact
                        </a>

                        
                    </div>

                    <div class="right-topbar">
                        <a href="https://www.facebook.com/GujaratiNews24" target="_blank">
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="https://twitter.com/Gujaratinews_24" target="_blank">
                            <span class="fab fa-twitter"></span>
                        </a>
                       <a href="https://www.instagram.com/gujaratinews24/?hl=en" class="fs-18 cl11 hov-cl10 trans-03 m-r-8" target="_blank">
                                    <img src="images/icons/instagram.png" height="20" width="20">
                                </a>
                    </div>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap-header-mobile">
                <!-- Logo moblie -->        
                <div class="logo-mobile">
                    <a href="index"><img src="images/icons/Gujarati-News-24.png" alt="IMG-LOGO" height="100"></a>
                </div>

                <!-- Button show menu -->
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="menu-mobile">
                <ul class="topbar-mobile">
                    <li class="left-topbar">
                        <span class="left-topbar-item flex-wr-s-c">
                            <span>
                                India
                            </span>

                            
                        </span>
                    </li>

                    <li class="left-topbar">
                        <a href="about" class="left-topbar-item">
                            About
                        </a>

                        <a href="contact" class="left-topbar-item">
                            Contact
                        </a>

                        
                    </li>

                    <li class="right-topbar">
                        <a href="https://www.facebook.com/GujaratiNews24" target="_blank" >
                            <span class="fab fa-facebook-f"></span>
                        </a>

                        <a href="https://twitter.com/Gujaratinews_24" target="_blank">
                            <span class="fab fa-twitter"></span>
                        </a>

                        <a href="https://www.instagram.com/gujaratinews24/?hl=en" target="_blank">
                                <img src="images/icons/instagram.png" height="20" width="20">
                        </a>
<!-- 
                        <a href="#">
                            <span class="fab fa-youtube"></span>
                        </a> -->
                    </li>
                </ul>

                <ul class="main-menu-m">
                    
                    <li class="main-menu-active" >
                                <a href="{{ route('index') }}" style="color: white">HOME</a>
                               
                    </li>

                             @if(count($Catdata)>0)
                            
                            <li class="mega-menu-item">
                                <a href="news" style="color: white">ન્યૂઝ</a>
                                <ul class="sub-menu-m">

                                    @foreach($Catdata as $row)
                                        <li>
                                        <a class="nav-link"  href="CatWiseNews?cid=<?php echo $row->id; ?>"  style="margin-bottom: 2px;font-family: 'Baloo Bhai 2', cursive;"><?php echo $row->cname; ?></a></li>
                                    @endforeach
                                        
                                    
                                </ul>
                                <span class="arrow-main-menu-m">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </span>
                            </li>
                            
                            @endif


                             @if(count($Catdata)>0)
                            @foreach($Catdata as $row)
                            <li class="mega-menu-item">
                                <a href="CatWiseNews?cid=<?php echo $row->id; ?>" style="color: white"><?php echo $row->cname; ?></a>

                               
                                    <ul class="sub-menu-m">
                                    @foreach($Adata as $scat)
                                    @if($scat->cid == $row->id)
                                        <li>
                                        <a href="SubCatWiseNews?scid=<?php echo $scat->id;?>" class="nav-link " ><?php echo $scat->scategory; ?></a>
                                        </li>
                                    @endif
                                    @endforeach
                                    </ul>
                                    <span class="arrow-main-menu-m">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>

                                   
                            </li>
                            @endforeach
                            @endif



                             @if(count($Coviddata)>0)
                            
                            <li class="mega-menu-item" >
                                <a href="" style="color: white">COVID - 19<img src="images/covid/new.gif" height="20"> </a>
                                
                                    
                                    <ul class="sub-menu-m">
                                    @foreach($Coviddata as $CovData)
                                        <li>
                                        <a href="covidarea?anm=<?php echo $CovData->area; ?>" class="nav-link " ><?php echo $CovData->area; ?></a>

                                        </li>
                                    @endforeach
                                    </ul>
                                     <span class="arrow-main-menu-m">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </span>
                                
                            </li>
                            @endif
                            
                </ul>
            </div>
            
            <!--  -->
            <div class="wrap-logo container" >
                <!-- Logo desktop -->       
                <div class="logo">
                    <a href="index"><img src="images/icons/Gujarati-News-24.png" alt="LOGO" height="150px" width="100%" ></a>
                </div>  

                <!-- Banner -->
                <div class="banner-header">
                    <a href="#"><img src="images/banner-01.jpg" alt="IMG"></a>
                </div>
            </div>  
            
            <!-- Main Menu -->
            <div class="wrap-main-nav" style="margin-top: 20px">
                <div class="main-nav"  style="background-color: #2d3945; ">
                    <!-- Menu desktop -->
                    <nav class="menu-desktop" >
                        <a class="logo-stick" href="index">
                            <img src="images/icons/Gujarati-News-24.png" alt="LOGO">
                        </a>
                        <ul class="main-menu" >
                            <li class="mega-menu-item" >
                                <a href="index" style="color: white">HOME</a>
                                <!--<ul class="sub-menu">
                                    <li><a href="index.html">Homepage v1</a></li>
                                    <li><a href="home-02.html">Homepage v2</a></li>
                                    <li><a href="home-03.html">Homepage v3</a></li>
                                </ul>-->
                            </li>
                            
                             @if(count($Catdata)>0)
                            
                            <li class="mega-menu-item">
                                <a href="news" style="color: white">ન્યૂઝ</a>

                                <div class="sub-mega-menu">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        @foreach($Catdata as $row)
                                        <a class="nav-link" href="CatWiseNews?cid=<?php echo $row->id; ?>" style="margin-bottom: 2px;font-family: 'Baloo Bhai 2', cursive;"><?php echo $row->cname; ?></a>
                                        @endforeach
                                        
                                    </div>

                                </div>
                            </li>
                            
                            @endif



                            @if(count($Catdata)>0)
                            @foreach($Catdata as $row)
                            <li class="mega-menu-item">
                                <a href="CatWiseNews?cid=<?php echo $row->id; ?>" style="color: white"><?php echo $row->cname; ?></a>

                                <div class="sub-mega-menu">
                                    
                                    <div class="nav flex-column nav-pills" role="tablist">
                                    @foreach($Adata as $scat)
                                    @if($scat->cid == $row->id)
                                        <a href="SubCatWiseNews?scid=<?php echo $scat->id;?> " class="nav-link " ><?php echo $scat->scategory; ?></a>

                                    @endif
                                    @endforeach
<!--                                         <a class="nav-link" data-toggle="pill" href="#news-1" role="tab">Entertaiment</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-2" role="tab">Fashion</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-3" role="tab">Life Style</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-4" role="tab">Technology</a>
                                        <a class="nav-link" data-toggle="pill" href="#news-5" role="tab">Travel</a> -->
                                    </div>
                                   

                                </div>
                            </li>
                            @endforeach
                            @endif

                            @if(count($Coviddata)>0)
                            
                            <li class="mega-menu-item" >
                                <a href="" style="color: white">COVID - 19<img src="images/covid/live.gif" height="30"></a>
                                <div class="sub-mega-menu">
                                    
                                    <div class="nav flex-column nav-pills" role="tablist">
                                    @foreach($Coviddata as $CovData)
                                    
                                        <a href="covidarea?anm=<?php echo $CovData->area; ?>" class="nav-link " ><?php echo $CovData->area; ?></a>

                                    
                                    @endforeach
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>  
        </div>
    </header>

    <!-- Headline -->






    <div>
  
        <main class="py-4">
            @yield('content')
        </main>
    </div>




    <!-- Footer -->
    <footer>
        <div class="bg2 p-t-40 p-b-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <a href="index.html">
                                <img class="max-s-full" src="images/icons/Gujarati-News-24.png" alt="LOGO" height="100">
                            </a>
                        </div>

                        <div>
                            <p class="f1-s-1 cl11 p-b-16">
                                દેશ અને દુનિયામાં વસતા ગુજરાતીઓ અને ગુજરાતી ભાષા પ્રેમીઓ માટે ખુબજ સચોટ, નિષ્પક્ષ અને વિશ્લેષણાત્મક ખબરો,માહિતીને ચિત્રો, કેરેક્ટરો અને પુરાવા સહીત રજુ કરતુ એકમાત્ર સોશિયલ મીડિયા પોર્ટલ. આ સાથે આપ જાણી શકશો આરોગ્ય, એજ્યુકેશન, ટેકનોલોજી, અવનવા અને અજબ-ગજબના અહેવાલો આપની પોતાની ગુજરાતી ન્યુઝ ૨૪ પર.
                            </p>

                            <p class="f1-s-1 cl11 p-b-3">
                                Any questions? Contact us on Mail Id
                                
                                <p style="color: #17b978;font-size: 12px">gujaratinews24network@gmail.com</p>
                            </p>

                            <div class="p-t-15">
                                <a href="https://www.facebook.com/GujaratiNews24" class="fs-18 cl11 hov-cl10 trans-03 m-r-8" target="_blank">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <a href="https://twitter.com/Gujaratinews_24" class="fs-18 cl11 hov-cl10 trans-03 m-r-8" target="_blank">
                                    <span class="fab fa-twitter"></span>
                                </a>
                                <a href="https://www.instagram.com/gujaratinews24/?hl=en" class="fs-18 cl11 hov-cl10 trans-03 m-r-8" target="_blank">
                                    <img src="images/icons/instagram.png" height="20" width="20">
                                </a>

                               <!--  <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-pinterest-p"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-vimeo-v"></span>
                                </a>

                                <a href="#" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
                                    <span class="fab fa-youtube"></span>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Popular Posts
                            </h5>
                        </div>

                        <ul>
                            @if(count($FData)>0)
                            @foreach($FData as $FootNews)
                            <li class="flex-wr-sb-s p-b-20">
                                <?php 
                                    $images = json_decode($FootNews->image,true);
                                ?>
                                <a href="blogview?nid=<?php echo $FootNews->id; ?>" class="size-w-4 wrap-pic-w hov1 trans-03">
                                    <img src="../storage/app/public/{{$images[0]}}" alt="IMG" height="50" width="40">
                                </a>

                                <div class="size-w-5">
                                    <h6 class="p-b-5">
                                        <a href="blogview?nid=<?php echo $FootNews->id; ?>" class="f1-s-5 cl11 hov-cl10 trans-03">
                                            <?php echo $FootNews->heading; ?>
                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">
                                        <?php 
                                        $format = "d M Y H:i:s";
                                        echo date($format,strtotime($FootNews->created_at)); ?>
                                        
                                    </span>
                                </div>
                            </li>
                            @endforeach
                            @endif

                            
                        </ul>
                    </div>

                    <div class="col-sm-6 col-lg-4 p-b-20">
                        <div class="size-h-3 flex-s-c">
                            <h5 class="f1-m-7 cl0">
                                Category
                            </h5>
                        </div>

                        <ul class="m-t--12">
                            @if(count($Catdata)>0)
                            @foreach($Catdata as $row)
                            <li class="how-bor1 p-rl-5 p-tb-10">
                                <a href="CatWiseNews?cid=<?php echo $row->id; ?>" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
                                    <?php echo $row->cname?>
                                </a>
                            </li>
                            @endforeach

                            
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg11">
            <div class="container size-h-4 flex-c-c p-tb-15">
                <span class="f1-s-1 cl0 txt-center">
                    Copyright © 2018 

                    <a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </span>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>
</html>
