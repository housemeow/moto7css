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
                    <div class="component-breadcrumb">
                        <ul>
                            <li><span class="text">首頁</span><span class="arrow"></span></li>
                            <li><span class="text">廠商</span><span class="arrow"></span></li>
                        </ul>
                    </div>
                    <div class="dot-splitter"></div>
                    <div class="component-container">
                        <div class="brands-content">
                            <div class="brands">
                                <div class="content-header">
                                    <a href="#"><img src="<?php echo $images_path ?>taiwan-brands.png"></a>
                                    <span><b>TAIWAN BRANDS</b></span>
                                </div>
                                <div class="content-block">
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>kymco.jpg"></a>
                                        <span>光陽</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>tw-yamaha.jpg"></a>
                                        <span>台灣YAMAHA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>sym.jpg"></a>
                                        <span>三陽</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>suzuki.jpg"></a>
                                        <span>鈴木</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>aeon.jpg"></a>
                                        <span>宏佳騰</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>motive.jpg"></a>
                                        <span>摩特動力</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>hartford.jpg"></a>
                                        <span>哈特佛</span>
                                    </div>
                                </div>
                            </div>
                            <div class="brands">
                                <div class="content-header">
                                    <a href="#"><img src="<?php echo $images_path ?>world-brands.png"></a>
                                    <span><b>WORLD BRANDS</b></span>
                                </div>
                                <div class="content-block">
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>yamaha.jpg"></a>
                                        <span>YAMAHA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>honda.jpg"></a>
                                        <span>HONDA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>ducati.jpg"></a>
                                        <span>DUCATI</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>kawasaki.jpg"></a>
                                        <span>KAWASAKI</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>triuph.jpg"></a>
                                        <span>TRIUMPH</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>ktm.jpg"></a>
                                        <span>KTM</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>aprilia.jpg"></a>
                                        <span>APRILIA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>bmw.jpg"></a>
                                        <span>BMW</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>mv.jpg"></a>
                                        <span>MV AGUSTA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>husqvarna.jpg"></a>
                                        <span>HUSQVARNA</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>harley.jpg"></a>
                                        <span>HARLEY-DAVIDSON</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clothing-brands">
                                <div class="content-header">
                                    <a href="#"><img src="<?php echo $images_path ?>clothing-brands.png"></a>
                                    <span><b>PART&CLOTHING BRANDS</b></span>
                                </div>
                                <div class="content-block">
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>motorex.jpg"></a>
                                        <span>MOTOREX</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>brembo.jpg"></a>
                                        <span>BREMBO</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>dainese.jpg"></a>
                                        <span>DAINESE</span>
                                    </div>
                                    <div class="block">
                                        <a href="#"><img src="<?php echo $images_path ?>frando.jpg"></a>
                                        <span>FRANDO</span>
                                    </div>
                                    <div class="pagination-bar">
                                        <ul>
                                            <li><a href="#" class="active"></a></li>
                                            <li><a href="#"></a>&nbsp;</li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="ad-article-header clearfix">
                                <div class="redbox"></div>
                                <span>活動特區</span>
                                <div class="splitter"></div>
                            </div>
                            <div class="ad-article-content">
                                <div class="article-thumbnail">
                                    <img src="<?php echo $images_path ?>moto7.jpg">
                                    <div class="description">
                                        MOTO7 騎乘技術訓練 2013年度開課
                                    </div>
                                </div>
                                <div class="signup">
                                    <span>報名時間: 即日起到10月底為止</span>
                                    <img src="<?php echo $images_path ?>signup.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="hot-article">
                            <div class="hot-article-header">
                                <div class="icon"></div>
                                <span class="title">熱門話題</span>
                                <div class="splitter"></div>
                            </div>
                            <div class="hot-article-content">
                                <ul>
                                    <li><a href="#">
                                        <div class="icon hot"></div>
                                        <div class="title">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon hot"></div>
                                        <div class="title">劃時代三腳獸！TRICITY 125 海外試駕分享</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon hot"></div>
                                        <div class="title">DUCATI新技術! 可變氣門正時系統 DVT</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">[2014 科隆車展] DUCATI 玩樂至上主義 Scrambler</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">SMAX的台北十大美食小吃之旅</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">注意，必看！水冷速克達版規 V1.4</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">相同的DNA、不同的精采靈魂［跨界跑旅SMAX小劇場］</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">SMAX155 DIY系列 傳動拆裝過程分享</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">SMAX 155 清完節流閥怠速問題</div></a>
                                    </li>
                                    <li><a href="#">
                                        <div class="icon"></div>
                                        <div class="title">smax大燈問題</div></a>
                                    </li>
                                </ul>
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