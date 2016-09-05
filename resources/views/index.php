<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>map_top</title>

    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css"/> -->
    <script src="/js/jquery-1.12.0.min.js"></script>
    <script src="/js/jquery.imagemapster.js"></script>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            /*font-weight: 100;*/
            /*font-family: 'Lato';*/
        }

        #map-container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .img-wrap {
            text-align: center;
            display: inline-block;
        }

        .prefecture-wrap {
            position: absolute;
        }
        .prefecture {
            position: relative;
            font-size: 10px;
            font-weight:bold;
        }
        .num  {
            position: absolute;
            color: red;
            font-size: 8px;
            font-weight:bold;

        }
    </style>
</head>
<body>
    <div id="map-container">
        <div class="content">
            <div class="img-wrap" style="position:relative;">
                <img src="/images/top.png" alt="日本地図" usemap="#map" id="map" style="z-index:100;">
                <!-- <img src="/images/top2.png" alt="日本地図" usemap="#map" id="map" style="z-index:100;width:1200px;"> -->
                <map name="map">
                    <area shape="rect" coords="185, 132, 531, 188" href="/map" alt="成人気管喘息" region="adult"/>
                    <area shape="rect" coords="184, 191, 532, 249" href="/map" alt="小児気管支喘息" region="children"/>
                    <area shape="rect" coords="185, 252, 530, 306" href="/map" alt="食物アレルギー" region="allergy" />
                    <area shape="rect" coords="184, 310, 530, 365" href="/map" alt="アトピー性皮膚炎" region="atopy"/>
                    <area shape="rect" coords="183, 369, 531, 425" href="/map" alt="アレルギー性鼻炎" region="rhinitis"/>
                </map>
                <div class="score">

                    <div class="prefecture-wrap" style="top:153px;left:940px;">
                        <div class="prefecture">北海道</div>
                    </div>
                    <div class="prefecture-wrap" style="top:262px;left:880px;">
                        <div class="prefecture">青森</div>
                    </div>
                    <div class="prefecture-wrap" style="top:290px;left:912px;">
                        <div class="prefecture">岩手</div>
                    </div>
                    <div class="prefecture-wrap" style="top:340px;left:887px;">
                        <div class="prefecture">宮城</div>
                    </div>
                    <div class="prefecture-wrap" style="top:290px;left:854px;">
                        <div class="prefecture">秋田</div>
                    </div>
                    <div class="prefecture-wrap" style="top:340px;left:838px;">
                        <div class="prefecture">山形</div>
                    </div>
                    <div class="prefecture-wrap" style="top:393px;left:834px;">
                        <div class="prefecture">福島</div>
                    </div>
                    <div class="prefecture-wrap" style="top:432px;left:863px;">
                        <div class="prefecture">茨城</div>
                    </div>
                    <div class="prefecture-wrap" style="top:427px;left:825px;">
                        <div class="prefecture">栃木</div>
                    </div>
                    <div class="prefecture-wrap" style="top:427px;left:785px;">
                        <div class="prefecture">群馬</div>
                    </div>
                    <div class="prefecture-wrap" style="top:466px;left:775px;">
                        <div class="prefecture">埼玉</div>
                    </div>
                    <div class="prefecture-wrap" style="top:487px;left:850px;">
                        <div class="prefecture">千葉</div>
                    </div>
                    <div class="prefecture-wrap" style="top:493px;left:781px;">
                        <div class="prefecture">東京</div>
                    </div>
                    <div class="prefecture-wrap" style="top:515px;left:773px;">
                        <div class="prefecture">神奈川</div>
                    </div>
                    <div class="prefecture-wrap" style="top:390px;left:773px;">
                        <div class="prefecture">新潟</div>
                    </div>
                    <div class="prefecture-wrap" style="top:423px;left:705px;">
                        <div class="prefecture">富山</div>
                    </div>
                    <div class="prefecture-wrap" style="top:428px;left:658px;">
                        <div class="prefecture">石川</div>
                    </div>
                    <div class="prefecture-wrap" style="top:456px;left:635px;">
                        <div class="prefecture">福井</div>
                    </div>
                    <div class="prefecture-wrap" style="top:490px;left:748px;">
                        <div class="prefecture">山梨</div>
                    </div>
                    <div class="prefecture-wrap" style="top:455px;left:722px;">
                        <div class="prefecture">長野</div>
                    </div>
                    <div class="prefecture-wrap" style="top:475px;left:674px;">
                        <div class="prefecture">岐阜</div>
                    </div>
                    <div class="prefecture-wrap" style="top:525px;left:662px;">
                        <div class="prefecture">愛知</div>
                    </div>
                    <div class="prefecture-wrap" style="top:530px;left:704px;">
                        <div class="prefecture">静岡</div>
                    </div>
                    <div class="prefecture-wrap" style="top:516px;left:617px;">
                        <div class="prefecture">三重</div>
                    </div>
                    <div class="prefecture-wrap" style="top:487px;left:627px;">
                        <div class="prefecture">滋賀</div>
                    </div>
                    <div class="prefecture-wrap" style="top:483px;left:558px;">
                        <div class="prefecture">京都</div>
                    </div>
                    <div class="prefecture-wrap" style="top:504px;left:556px;">
                        <div class="prefecture">大阪</div>
                    </div>
                    <div class="prefecture-wrap" style="top:489px;left:522px;">
                        <div class="prefecture">兵庫</div>
                    </div>
                    <div class="prefecture-wrap" style="top:526px;left:580px;">
                        <div class="prefecture">奈良</div>
                    </div>
                    <div class="prefecture-wrap" style="top:563px;left:548px;">
                        <div class="prefecture">和歌山</div>
                    </div>
                    <div class="prefecture-wrap" style="top:470px;left:485px;">
                        <div class="prefecture">鳥取</div>
                    </div>
                    <div class="prefecture-wrap" style="top:471px;left:440px;">
                        <div class="prefecture">島根</div>
                    </div>
                    <div class="prefecture-wrap" style="top:498px;left:475px;">
                        <div class="prefecture">岡山</div>
                    </div>
                    <div class="prefecture-wrap" style="top:498px;left:430px;">
                        <div class="prefecture">広島</div>
                    </div>
                    <div class="prefecture-wrap" style="top:493px;left:390px;">
                        <div class="prefecture">山口</div>
                    </div>



                    <div class="prefecture-wrap" style="top:572px;left:450px;">
                        <div class="prefecture">徳島</div>
                    </div>
                    <div class="prefecture-wrap" style="top:556px;left:456px;">
                        <div class="prefecture">香川</div>
                    </div>
                    <div class="prefecture-wrap" style="top:567px;left:387px;">
                        <div class="prefecture">愛媛</div>
                    </div>
                    <div class="prefecture-wrap" style="top:588px;left:377px;">
                        <div class="prefecture">高知</div>
                    </div>


                    <div class="prefecture-wrap" style="top:518px;left:297px;">
                        <div class="prefecture">福岡</div>
                    </div>
                    <div class="prefecture-wrap" style="top:521px;left:265px;">
                        <div class="prefecture">佐賀</div>
                    </div>
                    <div class="prefecture-wrap" style="top:521px;left:234px;">
                        <div class="prefecture">長崎</div>
                    </div>
                    <div class="prefecture-wrap" style="top:569px;left:282px;">
                        <div class="prefecture">熊本</div>
                    </div>
                    <div class="prefecture-wrap" style="top:537px;left:329px;">
                        <div class="prefecture">大分</div>
                    </div>
                    <div class="prefecture-wrap" style="top:573px;left:315px;">
                        <div class="prefecture">宮崎</div>
                    </div>
                    <div class="prefecture-wrap" style="top:613px;left:258px;">
                        <div class="prefecture">鹿児島</div>
                    </div>
                    <div class="prefecture-wrap" style="top:564px;left:140px;">
                        <div class="prefecture">沖縄</div>
                    </div>
            </div>
            </div>
        </div>
    </div>

<script>
$(function (){
    $('#map').mapster({
        singleSelect : true,
        clickNavigate : true,
        render_highlight : { altImage : '/images/top_active.png' },
        mapKey: 'region',
        fill : true, altImage : '/images/top_active.png',
        fillOpacity : 1,
    });
});
</script>
</body>
</html>
