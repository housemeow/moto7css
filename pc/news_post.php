<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>D1_2_新聞內文頁</title>
        <!--css-->
        <link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="css/news_post.less" />
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
                        <div class="component-breadcrumb">
                            <ul>
                                <li><span class="text">首頁</span><span class="arrow"></span></li>
                                <li><span class="text">專欄</span><span class="arrow"></span></li>
                                <li><span class="text">特別企劃</span><span class="arrow"></span></li>
                                <li><span class="text">MOTO7教練團日本Suzuka安駕訓練受訓紀實</span><span class="arrow"></span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="component-container">
                        <div class="article">
                            <div class="article-header">
                                <div class="header-title">
                                    <h1 class="title">MOTO7 教練團日本 Suzuka 安駕訓練受訓紀實</h1>
                                    
                                    <div class="date">
                                        <img src="images/calendar.png">
                                        <span>05 / 08 / 2014 </span>
                                    </div>
                                </div>
                                <div class="ad">
                                    <a href="#"><img src="<?php echo $upload_path ?>644x115_ad.png"></a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="share">
                                    <div class="counting"></div>
                                    <a href="#"><img class="fb-share" src="<?php echo $images_path ?>fb-share.png"></a>
                                    <a href="#"><img class="fb-like" src="<?php echo $images_path ?>fb-like.png"></a>
                                    <a href="#"><img class="twitter-share" src="<?php echo $images_path ?>twitter-share.png"></a>
                                    <a href="#"><img class="google-plus-share" src="<?php echo $images_path ?>google-plus-share.png"></a>
                                    <a href="#"><img class="back" src="<?php echo $images_path ?>inline-back.png"></a>
                                </div>
                                <div class="context">
                                    <p>為了精進MOTO7教練團騎乘技術，提升騎術訓練活動以及安全駕駛內容，MOTO7主編楊斌與安駕講師小天特別安排到日本的Suzuka 安全駕駛教育中心，來學習最新的騎乘技巧與觀念，並且將這些知識帶回台灣，讓大家也能夠學到最完整的安全駕駛技巧。</p>
                                    <div class="image-container"><img src="images/contentpic1.png"></div>
                                    <p>
                                        <b>Suzuka 交通安全中心介紹</b><br/>HONDA自1964年開始為回饋交通安全，開始研究交通安全，並且在Suzuka 設立第一間交通安全中心，直至今日在日本境內共有7間交通安全中心，另外在37個國家也都有安駕中心或活動進行，旨在進行社會回饋，提升交通安全，新竹安駕中心的前身也曾是HONDA 交通安全中心，在HONDA 與三陽分家後，才獨立出來。
                                    </p>
                                    
                                    <div class="image-container"><img src="images/contentpic2.png"></div>
                                    <p>Suzuka 交通安全中心位於鈴鹿國際賽車場旁，擁有佔地70,000平方米的場地，整個訓練設施包含一般環場道路、道路實境模擬、低摩擦係數路面、剎車訓練場、雨天訓練場、中低速綜合訓練場、模擬市區道路以及主建築，其設施極為完善，搭配HONDA 交通安全研究團隊四十多年來的研究結晶，成為交通安全研究的指標性學校。</p>
                                    <div class="image-container"><img src="images/contentpic3.png"></div>
                                    <div class="gallery">
                                        <ul>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                            <li><a href="#"><img src="images/galleryphoto.png"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="navigation">
                                    <a href="#"><div class="back"></div></a>
                                    <div class="previous">
                                        <a href="#"><div class="navigation-button"></div></a>
                                        <div class="navigation-article">
                                            <div class="article-thumbnail"><img src="images/prepic.png"></div>
                                            <span class="title">青春無敵，我的生活，我的MY150 檔車教學特輯</span>
                                        </div>
                                    </div>
                                    
                                    <div class="next">
                                        <div class="navigation-article">
                                            <div class="article-thumbnail"><img src="images/prepic.png"></div>
                                            <span class="title">青春無敵，我的生活，我的MY150 檔車教學特輯</span>
                                        </div>
                                        <a href="#"><div class="navigation-button"></div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="component-container">
                        <div class="related-article">
                            <img class="title" src="<?php echo $images_path ?>posttitle.png">
                            <div class="item">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo $upload_path ?>img_165x110.jpg">
                                        <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                        <span class="more"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo $upload_path ?>img_165x110.jpg">
                                        <span class="headline">GRO 全球賽車油與WEBIKE 摩托百貨合作</span>
                                        <span class="more"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo $upload_path ?>img_165x110.jpg">
                                        <span class="headline">全新BMW R1200 RS – 旅跑車的全新演繹</span>
                                        <span class="more"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div>
                                    <a href="#">
                                        <img src="<?php echo $upload_path ?>img_165x110.jpg">
                                        <span class="headline">CUSTOM MOTO：KYMCO QUANNON BY 禾倉技研</span>
                                        <span class="more"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="related-comments">
                            <img class="title-icon" src="images/commenttitle.png">
                            <div class="comments-list">
                                <div class="comments-post">
                                    <div class="user">
                                        <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                        <a href="#">建豪</a>
                                    </div>
                                    <div class="comments">
                                        <span class="date">六月 20, 2012 於 2:53 下午</span>
                                        <div class="post-text">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                            </span>
                                            <span class="text">我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~我比較在意的還是引擎部分~</span>
                                        </div>
                                    </div>
                                    <a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
                                </div>
                                <div class="comments-post">
                                    <div class="user">
                                        <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                        <a href="#">羊</a>
                                    </div>
                                    <div class="comments">
                                        <span class="date">六月 20, 2012 於 2:53 下午</span>
                                        <div class="post-text">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                            </span>
                                            <span class="text">我比較在意的還是引擎部分~</span>
                                        </div>
                                        <div class="comments-feed">
                                            <div class="user">
                                                <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                                <a href="#">建豪</a>
                                            </div>
                                            <div class="comments">
                                                <span class="date">六月 20, 2012 於 2:53 下午</span>
                                                <div class="post-text">我比較在意的還是引擎部分~</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-default btn-lg" href="#"><i class="fa fa-comment"></i></a>
                                </div>
                                <nav>
                                    <div class="pagination">
                                        <ul>
                                            <li class="previous"><a href="#"><div class="pagination-item disable">&lt;</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item active">1</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item">2</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item">3</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item">4</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item">5</div></a><div class="hr-line"><span></span></div></li>
                                            <li><a href="#"><div class="pagination-item"><span class="dot">...</span></div></a><div class="hr-line"><span></span></div></li>
                                            <li class="next"><a href="#"><div class="pagination-item">&gt;</div></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="comments-list comment-form">
                                <form role="form">
                                    <div class="comments-post">
                                        <div class="user">
                                            <div class="photo"><img src="../upload/photo_34x34.jpg"></div>
                                            <a href="#">建豪</a>
                                        </div>
                                        <div class="comments">
                                            <textarea class="form-control" rows="3" placeholder="請輸入您的評論"></textarea>
                                        </div>
                                    </div>
                                    <a class="btn btn-default btn-sm" href="#"><i class="fa fa-comment"></i> 發表</a>
                                </form>
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
                        <div class="related-brands">
                            <div class="header"><h2>相關廠商</h2></div>
                            <div class="content">
                                <div class="item">
                                    <a href="#">
                                        <div><img src="<?php echo $upload_path ?>closely_firm_img1.jpg"></div>
                                        <span class="name">光陽機車</span>
                                        <span class="submit"></span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div><img src="<?php echo $upload_path ?>closely_firm_img2.jpg"></div>
                                        <span class="name">MOTOREX</span>
                                        <span class="submit"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="related-models">
                            <div class="header"><h2>相關車款</h2></div>
                            <div class="content">
                                <div class="item">
                                    <a href="#">
                                        <div><img src="<?php echo $upload_path ?>closely_model_img1.jpg"></div>
                                        <span class="name">GSX-S1000F</span>
                                        <span class="submit"></span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#">
                                        <div><img src="<?php echo $upload_path ?>closely_model_img2.jpg"></div>
                                        <span class="name">GSX-S1000</span>
                                        <span class="submit"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="component-container">
                        <div class="related-parts">
                            <div class="header"><h2>相關部品</h2></div>
                            <div class="content">
                                <div class="item">
                                    <a href="#">
                                        <div><img src="<?php echo $upload_path ?>closely_something.jpg"></div>
                                        <span class="name">MOTOREX<br/>TOP SPEED 4T 5W40</span>
                                        <span class="submit"></span>
                                    </a>
                                </div>
                                
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