<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>B1_1_機車指南頁_v2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--css-->
        <link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="css/style.less" />
        <!--js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
        <script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
        <script src="js/function.js"></script>
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="menu navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="<?php echo $images_path ?>logo.png" alt="moto7"></a>
                <ul class="mainmenu nav navbar-nav">
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
                <div class="submenu widthType">
                    <a href="#" class="active">國內車廠</a>
                    <a href="#">國外車廠</a>
                    <a href="#">部品</a>
                    <a href="#">活動</a>
                    <a href="#">賽事</a>
                </div>
            </div>
        </nav>
        <!-- Scroll content -->
        <div class="content">
            <div class="headerAD jumbotron"><img src="<?php echo $upload_path ?>ad_970x90.gif"></div>
            <div class="container">
                <div class="two_left">
                    <ol class="breadcrumb">
                        <li><a href="#">首頁</a></li>
                        
                        <li class="active">車款</li>
                    </ol>
                    <div class="carKind">
                        <div class="newCar">
                            <img class="title" src="images/newCarTitle.png">
                            <a class="newCarLink" href="#">更多最新車款</a>
                            <div class="hilightCar">
                                <div>
                                    <img src="../upload/newCarBig_1.jpg">
                                    <span class="tag"><img src="../upload/newCarTag_o.jpg"></span>
                                    <span class="tag"><img src="../upload/newCarTag_logo.jpg"></span>
                                    <span class="headline">V-Strom 650 XT</span>
                                    <a href="#"><span class="more"></span></a>
                                </div>
                                <div>
                                    <img src="../upload/newCarBig_2.jpg">
                                    <span class="tag"><img src="../upload/newCarTag_i.jpg"></span>
                                    <span class="tag"><img src="../upload/newCarTag_logo.jpg"></span>
                                    <span class="headline">Burgman 650</span>
                                    <a href="#"><span class="more"></span></a>
                                </div>
                            </div>
                            <div class="newCarAD">
                                <img src="../upload/ad_644x115.gif">
                            </div>
                        </div>
                    </div>
                    <div class="search_car_form">
                        <div class="search_info">
                            <div class="search input-group">
                                <input type="text" class="form-control" placeholder="請輸入關鍵字查詢">
                                <img src="<?php echo $images_path ?>search_icon.png">
                            </div>
                            <div>熱門搜尋</div>
                            <ul>
                                <li class="active">國產車款</li>
                                <li>女性騎乘</li>
                                <li>重型機車</li>
                            </ul>
                        </div>
                        
                        <div class="title">
                            <div class="line"></div>
                            <span>廠牌</span>
                        </div>
                        <div class="vender">
                            <div class="row">
                                <div class="col-lg-1 left_arrow">
                                    <img src="<?php echo $images_path ?>left_arrow.png">
                                </div>
                                <div class="col-lg-10 vender_list">
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                    <div>
                                        <img src="<?php echo $upload_path ?>bmw.png">
                                    </div>
                                </div>
                                <div class="col-lg-1 right_arrow">
                                    <img src="<?php echo $images_path ?>right_arrow.png">
                                </div>
                            </div>
                        </div>
                        
                        <div class="title">
                            <div class="line"></div>
                            <span>車型</span>
                        </div>
                        <div class="car_type">
                            <div class="row">
                                <div class="col-lg-1 left_arrow">
                                    <img src="<?php echo $images_path ?>left_arrow.png">
                                </div>
                                <div class="col-lg-10 car_type_list">
                                    <div class="active">
                                        <div class="moto">
                                            <img src="<?php echo $upload_path ?>bike5.png">
                                            <div class="clip"></div>
                                            <div class="name">速克達</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="moto">
                                            <img src="<?php echo $upload_path ?>bike2.png">
                                            <div class="clip"></div>
                                            <div class="name">街車</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="moto">
                                            <img src="<?php echo $upload_path ?>bike4.png">
                                            <div class="clip"></div>
                                            <div class="name">跑車</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="moto">
                                            <img src="<?php echo $upload_path ?>bike1.png">
                                            <div class="clip"></div>
                                            <div class="name">美式機車</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="moto">
                                            <img src="<?php echo $upload_path ?>bike3.png">
                                            <div class="clip"></div>
                                            <div class="name">越野車</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 right_arrow">
                                    <img src="<?php echo $images_path ?>right_arrow.png">
                                </div>
                            </div>
                        </div>
                        
                        <div class="title">
                            <div class="line"></div>
                            <span>排氣量</span>
                        </div>
                        
                        <div class="title">
                            <div class="line"></div>
                            <span>年份</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="checkbox active">
                                    <label><input type="checkbox" value="">2000年以前</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2001-2011年</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2012年</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2013年</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2014年</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">2015年</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotKind">
                        <div class="hotCar">
                            <img class="title" src="images/hotKindtitle.png">
                            <a class="hotCarLink" href="#">更多熱門車款</a>
                            <div class="hilightHotCar">
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                                <div>
                                    <img src="../upload/hotCarImg.jpg">
                                    <span class="cc_box">50 cc</span>
                                    <span class="headline">VIR 50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="three_right">
                    <div class="rightAD">
                        <img src="<?php echo $upload_path ?>ad_320x250.gif">
                    </div>
                    <div class="event">
                        <div class="header"><h2>活動特區</h2></div>
                        <div class="content">
                            <div class="item">
                                <a href="#">
                                    <img src="<?php echo $upload_path ?>img_267x178.jpg">
                                    <span class="name">MOTO7 騎乘技術訓練 2013年度開課</span>
                                    <span class="date">報名時間: 即日起到10月底為止</span>
                                    <span class="submit"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="event">
                        <div class="header"><h2>熱門討論串</h2></div>
                        <div class="content">
                            <ul class="disscuss">
                                <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                                <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                                <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                                <li><a href="#">感受速度與聲浪的極限 台灣TMAX 530 GP應援團</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                                <li><a href="#">DUCATI新技術! 可變氣門正時系統 DVT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="addAD">
                        <img src="<?php echo $upload_path ?>ad_320x250.gif">
                    </div>
                    <div class="addAD">
                        <img src="<?php echo $upload_path ?>ad_320x250.gif">
                    </div>
                    <div class="addAD">
                        <img src="<?php echo $upload_path ?>ad_320x250.gif">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div class="qrcode">
                            <img src="<?php echo $images_path ?>qrcode.jpg" alt="http://www.moto7.net">
                            <h5>MOTO7 手機</h5>版掃秒 QR code<br/>加入我的最愛
                        </div>
                    </div>
                    <div class="col-xs-8">
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
                            <dt><a href="#">相簿</a></dt>
                            <ul>
                                <li><a href="#">熱門相簿</a></li>
                                <li><a href="#">新聞相簿</a></li>
                                <li><a href="#">專題相簿</a></li>
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
                    <div class="col-xs-2">
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
            <div class="copyright"></div>
        </div>
    </body>
</html>