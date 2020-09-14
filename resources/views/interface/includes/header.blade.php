<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الرئيسيه</title>
    <!-- Bootstrap font-aweasome css -->
    <link href="interface/font-awesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="interface/css/bootstrap.css">
    <link rel="stylesheet" href="interface/css/style.css">
    <link rel="stylesheet" href="interface/css/responsive.css">
    <link rel="stylesheet" href="interface/css/owl.carousel.css">
</head>
<body>


<div class='contain'>
    <img src="{{ asset('interface/images/logo-2.png') }}" alt="">
</div>

<div class="the-after"></div>
<div class="header">
    <div class="container">
        <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <div class="logo">
                        <a href=""><img src="{{ asset('interface/images/logo.png') }}"></a>
                    </div>
                </div><!--col-sm-2-->

                <div class="col-sm-6 col-xs-12">
                    <div class="main-menu">
                        <ul>
                            <li class="open-part-shoes">الأحذيه
                                <i class="fas fa-caret-down"></i>
                            </li>

                            <li class="open-part-bag">الشنط
                                <i class="fas fa-caret-down"></i>
                            </li>

                            <li class="open-part-accessoires">الاكسسوارات
                                <i class="fas fa-caret-down"></i>
                            </li>

                            <li><a href="shoes-section.html">قسم الأحذيه</a></li>

                            <li><a href="shoes-section.html">قسم الشنط</a>

                            <li><a href="">اتصل بنا</a>
                            </li>
                        </ul>
                    </div><!--main-menu-->


                    <div class="hidden-xx" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </div><!--hidden-xx-->
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <ul>
                                <li class="open-part-shoes">  الأحذيه<i class="fas fa-caret-down"></i></li>

                                <li class="open-part-bag">الشنط  <i class="fas fa-caret-down"></i></li>

                                <li class="open-part-accessoires">الاكسسوارات <i class="fas fa-caret-down"></i></li>

                                <li><a href="">خدمه العملاء</a></li>

                                <li><a href="">اتصل بنا</a></li>
                            </ul>
                        </div><!--overlay-content-->
                    </div><!--overlay-->
                </div><!--col-sm-8-->

            <div class="col-sm-3 col-xs-12">
                <div class="more">
                    <button class="account" type="button" data-toggle="dropdown" data-hover="dropdown"><span>حساابي</span><i class="fas fa-user" aria-hidden="true"></i></button>
                    <ul class="dropdown-menu">
                        <p><a href="">تسجيل الدخول</a></p>
                        <p><a href="">عضو جديد</a></p>
                    </ul>

                    <button class="shopping " type="button" data-toggle="dropdown-2" data-hover ="drop-2"><span>عربه التسوق</span><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    <ul class="drop-2">
                        <p>لايوجد شئ </p>
                    </ul>
                </div>
            </div><!--col-sm-3-->
            
            <div class="part-child-shoes">
                <div class="col-sm-7 col-xs-12">
                    <ul>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                    </ul>
                </div>

                <div class="col-sm-5 col-xs-12">
                    <div class="new-offer">
                    <img src=" {{ asset('interface/images/shoes.png') }}" alt="">
                        <ul>
                            <li><a href=""><span><i class="fas fa-eye"></i></span></a></li>
                            <li><a href=""><span><i class="fas fa-cart-plus"></i></span></a></li>
                        </ul>
                    </div><!--new-offer-->
                </div><!--col-sm-5-->
                <div class="closeing">
                    <i class="far fa-times-circle"></i>
                </div>
            </div>

            <div class="part-child-bag">
                <div class="col-sm-7 col-xs-12">
                    <ul>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                    </ul>
                </div>

                <div class="col-sm-5 col-xs-12">
                    <div class="new-offer">
                    <img src=" {{ asset('interface/images/bag.png') }}" alt="">
                        <ul>
                            <li><a href=""><span><i class="fas fa-eye"></i></span></a></li>
                            <li><a href=""><span><i class="fas fa-cart-plus"></i></span></a></li>
                        </ul>
                    </div><!--new-offer-->
                </div><!--col-sm-5-->
                <div class="closeing">
                    <i class="far fa-times-circle"></i>
                </div>
            </div>

            <div class="part-child-accessoires">
                <div class="col-sm-7 col-xs-12">
                    <ul>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">نـايك</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">دينر</a></li>
                        <li><i class="fas fa-caret-left"></i> <a href="">اندر ارمر</a></li>
                    </ul>
                </div>

                <div class="col-sm-5 col-xs-12">
                    <div class="new-offer">
                        <img src=" {{ asset('interface/images/accessoire.png') }}" alt="">
                        <ul>
                            <li><a href=""><span><i class="fas fa-eye"></i></span></a></li>
                            <li><a href=""><span><i class="fas fa-cart-plus"></i></span></a></li>
                        </ul>
                    </div><!--new-offer-->
                </div><!--col-sm-5-->
                <div class="closeing">
                    <i class="far fa-times-circle"></i>
                </div>
            </div>
                
        </div>
    </div>
</div>

