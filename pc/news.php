<?php
$images_path="images/";
$upload_path="../upload/"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>D1_1_新聞區列表頁</title>
        <!--css-->
        <link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="js_fk/bxslider/jquery.bxslider.css" rel="stylesheet">
        <link rel="stylesheet/less" type="text/css" href="css/news.less" />
        <!--js-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.5/less.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://rawgit.com/leafo/sticky-kit/v1.0.4/jquery.sticky-kit.min.js"></script>
        <script src="js_fk/bxslider/jquery.bxslider.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
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
                    <div class="banner-ad-center">
                        <img src="<?php echo $upload_path ?>ad_830x90.jpg"/>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="two-left">
                    <div class="component-breadcrumb">
                        <ul>
                            <li><span class="text">首頁</span><span class="arrow"></span></li>
                            <li><span class="text">新聞</span><span class="arrow"></span></li>
                            <li><span class="text">全部新聞</span><span class="arrow"></span></li>
                        </ul>
                    </div>
                    <div class="dot-splitter"></div>
                    <div class="news">
                        <div class="news-menu">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-filter fa-lg"></i>
                                <span>全部新聞</span>
                                <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">部品</a></li>
                                    <li><a href="#">活動</a></li>
                                    <li><a href="#">賽事</a></li>
                                    <li><a href="#">國內車廠</a></li>
                                </ul>
                            </div>
                            
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
                        </div>
                        
                        <div id="news-masonry" class="news-masonry">
                            <div class="newsItem">
                                <a href="#">
                                    <h4>GRO 全球賽車油與WeBike 摩托百貨合作</h4>
                                    <img src="<?php echo $upload_path ?>img_175x117.jpg">
                                    <span class="tag">部品</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 126</span>
                                    <p>摩托車綜合購物網站「Webike」自2000年在日本開幕，14年來已成為日本最大的摩托車改裝部品及精品的......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>2014 Bikertopia Taiwan Rally 亞洲騎士烏托邦</h4>
                                    <img src="<?php echo $upload_path ?>img_175x117.jpg">
                                    <span class="tag">活動</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
                                    <p>哈雷重機年度盛會「Bikertopia Taiwan Rally 亞洲騎士烏托邦」是哈雷台灣總代理 太古鼎翰從「台灣哈雷狂熱搖滾......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>台灣山葉機車再度榮獲103年體育推手獎肯定！</h4>
                                    <img src="<?php echo $upload_path ?>img_175x245.jpg">
                                    <span class="tag">國內車廠</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
                                    <p>台灣山葉機車工業股份有限公司於九月九日體育節所舉辦的體育推手獎表揚典禮上，獲頒教育部體育署103年度「體育推手獎」贊助類長期贊助獎！這是繼去年榮獲銅質獎後，再一次獲得教育部的肯定。......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>2014 VESPA 946 Bellissima 跨世代頂級收藏</h4>
                                    <img src="<?php echo $upload_path ?>img_175x117.jpg">
                                    <span class="tag">國內車廠</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
                                    <p>VESPA 946，義大利精品工藝的極致展現，2013年黑白兩色限定版「Ricardo Italiano」在其成功問世一年後，已成絕響！經典美學，傳世工藝，雋永品味，2014年跨世代的頂級收藏車款 ─ VESPA 946「Bellissima」將再度展現其經典與時尚完美結合的絕世工藝！......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem w2">
                                <a href="#">
                                    <h4>ADC 捷報，台灣車手莊安育站上亞洲夢想盃頒獎台</h4>
                                    <img src="<?php echo $upload_path ?>img_384x256.jpg">
                                    <span class="tag">賽事</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
                                    <p>9月7日在日本鈴鹿賽車場舉行的亞洲夢想盃（ADC）第四站的賽事，台灣車手莊安育在上午第一回合與頒獎台擦身而過，下午的第二回合一舉奪得亞軍站上頒獎台，是自2012年亞洲夢想盃開辦以來，第一位站上頒獎台的台灣車手。......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>全新BMW S1000R 強勢登場</h4>
                                    <img src="<?php echo $upload_path ?>img_175x245.jpg">
                                    <span class="tag">國內車廠</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
                                    <p>承襲S1000RR 的光榮傳統，但不安於現況，更勝以往。量身打造性能街車，精心調教不同引擎特性，輸出更線性、操控性更大幅提升。標配賽道版ABS 與ASC，令人肆無忌憚；輕鬆愜意面對任何路況......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>國際級藝術大師傑作，哈雷改裝、彩繪車創作鑑賞會</h4>
                                    <img src="<?php echo $upload_path ?>img_175x117.jpg">
                                    <span class="tag">活動</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 126</span>
                                    <p>HARLEY-DAVIDSON 台灣總代理太古鼎翰有限公司自2008年起不僅致力於騎士文化推廣，同時也與在地產業結合，創造更多騎士驚喜,繼去年成功與國際級彩繪大師合作推出限量彩繪車款，今年更加入改裝文化展現獨家手藝，創哈雷改裝彩繪新亮點。......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>台灣山葉機車再度榮獲103年體育推手獎肯定！</h4>
                                    <img src="<?php echo $upload_path ?>img_175x245.jpg">
                                    <span class="tag">國內車廠</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 3,011</span>
                                    <p>台灣山葉機車工業股份有限公司於九月九日體育節所舉辦的體育推手獎表揚典禮上，獲頒教育部體育署103年度「體育推手獎」贊助類長期贊助獎！這是繼去年榮獲銅質獎後，再一次獲得教育部的肯定。......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem">
                                <a href="#">
                                    <h4>2014 VESPA 946 Bellissima 跨世代頂級收藏</h4>
                                    <img src="<?php echo $upload_path ?>img_175x117.jpg">
                                    <span class="tag">國內車廠</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
                                    <p>VESPA 946，義大利精品工藝的極致展現，2013年黑白兩色限定版「Ricardo Italiano」在其成功問世一年後，已成絕響！經典美學，傳世工藝，雋永品味，2014年跨世代的頂級收藏車款 ─ VESPA 946「Bellissima」將再度展現其經典與時尚完美結合的絕世工藝！......<span>[ more ]</span></p>
                                </a>
                            </div>
                            <div class="newsItem w2">
                                <a href="#">
                                    <h4>ADC 捷報，台灣車手莊安育站上亞洲夢想盃頒獎台</h4>
                                    <img src="<?php echo $upload_path ?>img_384x256.jpg">
                                    <span class="tag">賽事</span>
                                    <span class="comment"><i class="fa fa-comment fa-lg"></i> 1,456</span>
                                    <p>9月7日在日本鈴鹿賽車場舉行的亞洲夢想盃（ADC）第四站的賽事，台灣車手莊安育在上午第一回合與頒獎台擦身而過，下午的第二回合一舉奪得亞軍站上頒獎台，是自2012年亞洲夢想盃開辦以來，第一位站上頒獎台的台灣車手。......<span>[ more ]</span></p>
                                </a>
                            </div>
                        </div>
                        
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
    <script>
    jQuery(function(){
    $('#news-masonry').masonry({
    "columnWidth": 195,
    itemSelector: '.newsItem',
    "gutter": 14,
    animate:true
    
    });
    });
    </script>
</html>