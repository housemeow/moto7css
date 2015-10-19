<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>K1_1_廠商專區頁</title>
        <!--css-->
        <link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="css/brands.less" />
        <!--js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
        <script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
        <script src="js/function.js"></script>
    </head>
    <body>
        <nav role="navigation" class="header navbar-fixed-top navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $images_path ?>logo.png" alt="moto7">
                </a>
                <ul class="header-menu nav navbar-nav">
                    <li><a href="#">首頁</a></li>
                    <li class="active"><a href="#">新聞</a></li>
                    <li><a href="#">專欄</a></li>
                    <li><a href="#">相簿</a></li>
                    <li><a href="#">車廠</a></li>
                    <li><a href="#">車款</a></li>
                    <li><a href="#">部品</a></li>
                    <li><a href="#">報名</a></li>
                    <li><a href="#">討論</a></li>
                </ul>
                <ul class="member nav navbar-nav">
                    <li><a href="#">登入</a></li>
                    <li><a href="#">註冊</a></li>
                </ul>
                <ul class="contact nav navbar-nav">
                    <li><a href="#">車迷信箱</a></li>
                </ul>
                <div class="search input-group">
                    <input type="text" class="form-control" placeholder="請輸入關鍵字查詢">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"></button>
                    </span>
                </div>
                <div class="submenu">
                    <a href="#" class="active">國內車廠</a>
                    <a href="#">國外車廠</a>
                    <a href="#">部品</a>
                    <a href="#">活動</a>
                    <a href="#">賽事</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="header-banner">
                <div class="banner-ad">
                    <ul class="banner-ad-left">
                        <a href="#"><li class="active">SYM野狼SB300CR 暨<br>重車聯盟發表會</li></a>
                        <hr>
                        <a href="#"><li>YAHAMA 發表智慧休眠版<br>CUXi IS</li></a>
                    </ul>
                    <div class="banner-ad-center">
                        <img src="<?php echo $upload_path ?>ad_830x90.jpg"/>
                    </div>
                    <ul class="banner-ad-right">
                        <a href="#"><li >YAMAHA MT-07：<br>初次機旅的感動</li></a>
                        <hr>
                        <a href="#"><li clas>2015 Team SUZUKI<br>HCSTAR 發表</li></a>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="two-left">
                    <div class="component-container">
                    </div>
                </div>
                <div class="two-right">
                    <div class="component-container">
                        <div class="300x250_ad">
                            <a href=""><img src="<?php echo $upload_path ?>300x250_ad.png"></a>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="ad-article">
                            <div class="activity">
                                <div class="redbox"></div>
                                <p>活動特區 <img src="images/dotline.png"></p>
                                <div class="moto">
                                    <img src="images/moto7.png">
                                </div>
                                <div class="text"><p>MOTO7 騎乘技術訓練 2013年度開課</p></div>
                                <div class="signup">
                                    <p>報名時間: 即日起到10月底為止</p>
                                </div>
                                <div class="signupclick"><a href=""><img src="images/signup.png"> </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="300x250_ad">
                            <a href=""><img src="<?php echo $upload_path ?>300x250_ad.png"></a>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="300x250_ad">
                            <a href=""><img src="<?php echo $upload_path ?>300x250_ad.png"></a>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="300x250_ad">
                            <a href=""><img src="<?php echo $upload_path ?>300x250_ad.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="qrcode">
                            <img src="<?php echo $images_path ?>qrcode.jpg" alt="http://www.moto7.net">
                            <h5>MOTO7 手機版</h5>
                            <span>掃描 QR code<br/>加入我的最愛</span>
                        </div>
                    </div>
                    <div class="col-xs-7">
                        <dl>
                            <dt><a href="#">首頁</a></dt>
                            <ul>
                                <li><a href="#">關於MOTO7</a></li>
                                <li><a href="#">會員說明</a></li>
                                <li><a href="#">隱私權政策</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">報名</a></li>
                            </ul>
                        </dl>
                        <dl>
                            <dt><a href="#">新聞</a></dt>
                            <ul>
                                <li><a href="#">國內車廠</a></li>
                                <li><a href="#">國外車廠</a></li>
                                <li><a href="#">部品</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">活動</a></li>
                                <li><a href="#">賽事</a></li>
                            </ul>
                        </dl>
                        <dl>
                            <dt><a href="#">專欄</a></dt>
                            <ul>
                                <li><a href="#">特別企劃</a></li>
                                <li><a href="#">安全駕駛</a></li>
                                <li><a href="#">騎乘技術</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">機械原理</a></li>
                                <li><a href="#">機車旅遊</a></li>
                            </ul>
                        </dl>
                        <dl>
                            <dt><a href="#">社群</a></dt>
                            <ul>
                                <li><a href="#">車廠</a></li>
                                <li><a href="#">車款</a></li>
                                <li><a href="#">部品</a></li>
                            </ul>
                        </dl>
                        <dl>
                            <dt><a href="#">討論</a></dt>
                        </dl>
                    </div>
                    <div class="col-xs-3">
                        <div class="fbfans">
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                                <h5>MOTO7<br/>官方粉絲團</h5>
                            </a>
                        </div>
                        <div class="share">
                            <h5>分享MOTO7</h5>
                            <ul>
                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright"></div>
        </div>
    </body>
</html>