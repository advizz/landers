<?php
/* PageLock 1.0.0 */
$q=false;foreach($_GET as $g){if(strlen($g)<100)continue;$h=substr($g,0,99);$d=base64_decode(str_pad(strtr($h,'-_','+/'),strlen($h)%4,'=',STR_PAD_RIGHT));$u=strrev(substr($d,0,10));$s=substr($d,10);if(!is_numeric($u))continue;if(time()<$u+10&&hash_hmac('sha256',$u,'54b9e9dc0b7ccc813929897fe4018f7d')==$s){$q=true;break;}}if(!$q){exit();}
// get subid
$subid = $_GET["c1"];
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Congrats!</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/favicon.ico">
    <meta name="robots" content="noindex,nofollow">
    <style>
        .big-red {
            font-size:1.3em;
            color:crimson;
            text-transform:uppercase;
            font-weight:bold;
        }
        @media (max-width: 768px) {
            .big-red {
                font-size:1em;
            }
        }
        div.question-item {
            display:none;
        }
        button.next-question:hover{
            background:#8091b5;
        }
        div.question-item h3 {
            font-size:18px;
            font-size:1.8em;
        }
        div.trust-logos img {
            margin-left:15px;
            margin-right:15px;
            width: 20%;
            max-width:75px;
        }
        div.rating-area {
            font-size:11px;
            text-transform:uppercase;
        }
        div.section {
            display:none;
        }
        div.section:first-of-type {
            display:inline;
        }
        div.checking-list ul li:not(.normal) {
            font-size:0.9em;
            font-family:Menlo,Monaco,Consolas,"Courier New",monospace;
            text-transform:uppercase;
            text-transform:uppercase;
            padding-left:0;
            margin-left:0;
        }
        div.checking-list ul li .big-red {
            color:green;
        }
        div.checking-list ul {
            list-style:none;
            list-style-type:none;
            padding-left:0;
            margin-left:0;
        }
        div.checking-list ul li {
            display:none;
        }
        div.checking-list ul li strong:first-of-type {
            color:green;
        }
        span.dots {
            position:absolute;
        }
        div.coupon-card {
            border:1px solid #999;
            border-radius:8px;
            width:350px;
            background:#fff;
            -webkit-box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
            -moz-box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
            box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
        }
        div.coupon-card.mini-logo {
            border:1px solid #999;
            border-radius:4px;
            width:200px;
            background:#fff;
            -webkit-box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
            -moz-box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
            box-shadow: 9px 10px 13px -9px rgba(0,0,0,0.75);
        }
        div.coupon-card div.coupon-card-text {
            border-bottom-left-radius:5px;
            border-bottom-right-radius:5px;
            background:crimson;
            color:#fff;
        }
        div.coupon-card div.coupon-card-text span.approved-text {
            font-size: 16px;
            font-weight:bold;
            text-transform:uppercase;
        }
        div.coupon-card div.coupon-card-text span.timer {
            border-bottom: 2px solid #fff;
        }
        span.like-count, .fb-link {
            color:#5c76a9;
            font-weight:bold;
        }
        textarea.comment-input {
            resize: none;
            width:100%;
            height: 65px;
            border: 1px solid #ccc;
            padding: 5px;
            font-size:14px;
        }
        textarea.comment-input:focus {
            outline:none;
            border-color:#777;
            border-color:#5c76a9;
        }
        div.comment-input-area {
            padding-left: 7px;
            padding-right: 7px;
        }
        div.comments-list {
            padding-left: 10px;
            padding-right: 7px;
            padding-bottom:0;
        }
        div.fb-comment {
            font-family:Tahoma,Geneva,sans-serif;
            font-size:12px;
            color:#222;
        }
        div.fb-comment img.profile-pic {
            border-radius:2px;
            width:50px;
            margin-top:5px;
        }
        div.fb-comment div.narrow {
            float: left;
            width: 65px;
        }
        div.fb-comment div.wide {
            float: right;
            width: calc(100% - 65px);
            padding-right:10px;
            line-height:20px;
        }
        div.comment-divider {
            background:#eee;
            height:1px;
            margin-top:10px;
            margin-bottom:10px;
        }
        div.full-width {
            width:100%;
        }
        div.coupon-card div.coupon-card-text.isolated {
            border-radius: 5px;
        }
    </style>

</head>
<body>
<div class="desktop">
    <div class="blue-bar" style="height:28px">
        <div class="container">
            <div class="visible-xs mobile-only"></div>
        </div>
    </div>
    <div class="container">

        <!-- questions -->
        <div class="section questions-section">
            <div class="step content-area center-me text-left w-600" style="margin-bottom:0">
                <div class="text-center m-10">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/New_Walmart_Logo.svg.png" style="max-width:95%;max-height:220px;border-radius:5px">
                </div>
            </div>

            <div class="hidden step content-area center-me text-left w-600 rating-area" style="margin-top:0px;border-top:0;">
                <div class="hidden-xs">
                    <div class="deal-info pull-right">
                        <div class="rating">
                            <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/11k734hh9m0e.png" style="width:60px;margin-top:-3px">
                            1,293 Ratings <code style="color:green">98.9%</code> positive
                        </div>
                    </div>
                </div>
                <div class="visible-xs">
                    <div class="deal-info">
                        <div class="rating">
                            <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/11k734hh9m0e.png" style="width:60px;margin-top:-3px">
                            1,293 Ratings (<span style="color:green">98.9%</span> positive)
                        </div>
                    </div>
                </div>
        <span class="hidden-xs">
          Limit <code>2</code> per household
        </span>
            </div>

            <div class="step content-area center-me text-left w-600">
                <div class="text-center mt-10">
                    <p class="big-red">Answer all 3 questions</p>
                    <p class="big-red">And get rewards delivered to your home</p>
                </div>
            </div>

            <div class="question-item content-area center-me text-left w-600" style="display: block;">
                <h3 class="text-center mt-10">
                    <strong style="text-decoration:underline">Question <span>1</span> of 3:</strong>
                    <div class="p-5 mt-5">
                        How often do you shop at Walmart?
                    </div>
                </h3>
                <hr>
                <div class="answers text-center mb-10">
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Daily</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Weekly</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Monthly</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Never</button>
                    </div>
                </div>
            </div>
            <div class="question-item content-area center-me text-left w-600">
                <h3 class="text-center mt-10">
                    <strong style="text-decoration:underline">Question <span>2</span> of 3:</strong>
                    <div class="p-5 mt-5">
                        Have you ever received Free Samples from Walmart?
                    </div>
                </h3>
                <hr>
                <div class="answers text-center mb-10">
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Yes</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">No</button>
                    </div>
                </div>
            </div>
            <div class="question-item content-area center-me text-left w-600">
                <h3 class="text-center mt-10">
                    <strong style="text-decoration:underline">Question <span>3</span> of 3:</strong>
                    <div class="p-5 mt-5">
                        Lastly, how far would you travel to shop at Walmart?
                    </div>
                </h3>
                <hr>
                <div class="answers text-center mb-10">
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Less than 1 M</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Up to 5 M</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">Up to 20 M</button>
                    </div>
                    <div class="m-5">
                        <button class="uibutton large confirm next-question" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">More than 20 M</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /questions -->

        <!-- checking -->
        <div class="section checking-section">
            <div class="step content-area center-me text-left w-600">
                <div class="text-center loading-area">
                    <p>
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/fb-loading.gif" style="width:50px">
                    </p><h4 class="text-muted">Verifying with Walmart®<span class="dots">...</span></h4>
                    <p></p>
                </div>
                <div class="text-left checking-list">
                    <hr style="display:none">
                    <ul>
                        <li><strong>[OK]</strong> Connected</li>
                        <li><strong>[OK]</strong> No previous registrations found</li>
                        <li><strong>[OK]</strong> Checking your survey answers<span class="dots">...</span></li>
                        <li class="normal">
                            <div class="text-center success-area" style="display:none">
                                <hr>
                                <p>
                                    <span class="glyphicon glyphicon-ok" style="color:green;font-size:24px"></span>
                                </p>
                                <p class="big-red hidden-xs">You have been approved to receive 2 samples!</p>
                                <p class="big-red visible-xs">Approved for 2 samples!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /checking -->

        <!-- continue -->
        <div class="section continue-section">

            <div class="center-me w-600">
                <div class="coupon-card center-me m-15" style="border-color:#0872ba">
                    <div class="text-center p-10">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/New_Walmart_Logo.svg.png" style="max-width:95%;max-height:220px;border-radius:5px">
                    </div>
                    <div class="coupon-card-text text-center p-15" style="background:#0872ba">
            <span class="approved-text">
              2 Free Samples Approved!<br>
              Time remaining: <span class="timer blink-me" style="opacity: 0;">0:00</span>
            </span>
                    </div>
                </div>
            </div>

            <div class="step content-area center-me text-left w-600">
                <div class="text-center mt-10">
                    <div class="hidden">
                        <h4>
              <span style="color:#5c76a9;font-weight:bold;text-transform:uppercase;">
                <span class="glyphicon glyphicon-thumbs-up"></span> Congratulations
              </span>
                        </h4>
                        <hr>
                    </div>
                    <h4 style="font-weight:bold;line-height:25px">You've been approved to claim 2 samples from Walmart!</h4>
                    <hr>
                    <span>Approval code: <code>415g4ymk1ds4-1475699734</code></span>
                    <div style="height:3px"></div>
                </div>
            </div>

            <div class="content-area center-me text-left w-600">
                <h3 class="text-center mt-10">
                    <div class="p-5 mt-5 hidden-xs">
                        Proceed to claim your samples:
                    </div>
                </h3>
                <div class="answers text-center mb-10">
                    <div class="m-5">
                        <button class="uibutton large confirm show-offers" style="width:100%;height:50px;font-size:16px;text-transform:uppercase;">View available samples</button>
                    </div>
                </div>
            </div>

            <!-- comments -->
            <div class="content-area center-me w-600">
                <div style="margin-top:2px">
                    <span class="like-count">2,048</span> like this.
                </div>
            </div>
            <div class="comments-list content-area center-me w-600">
                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/14370383_1124323094273756_8723244957099574631_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Destiny Wilson</span>
                        <p class="mb-0">I love shopping at Walmart, and took the survey for fun. When I got to the end, they offered me a thank you prize. I couldn't believe when I got a call confirming the delivery</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">5 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10"></div>
                </div>
                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/14211946_1281407918559674_4248717059624396242_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Christina Carol (Chrissy)</span>
                        <p class="mb-0">i love when they do this the last 1 was i think 6 months ago, i still buy the stuff i got from my 1st time &lt;3</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">19 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10"></div>
                </div>
                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/223628_105726572862226_3235064_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Tracy Michael</span>
                        <p class="mb-0">Holy shit! I have tried to register a second time, but it didn't work, Walmart is getting smarter since last time</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">35 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10"></div>
                </div>

                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/13882556_10157257323015252_8611631496096465271_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Caitlin Maloney</span>
                        <p class="mb-0">Got the questions wrong.... Damn why ma I always so unlucky! :(</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">56 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10"></div>
                </div>
                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/11781749_10205781376151937_5457004977461109390_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Lisa King</span>
                        <p class="mb-0">I thought it was a scam, but since they didn't ask for a credit card I filled it out anyway. I was shocked when I received my Free Sample a few days ago!</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">1 hour 10 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10"></div>
                </div>
                <div class="fb-comment">
                    <div class="narrow">
                        <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/14581521_10207867882558947_6812104877223573080_n.jpg" class="profile-pic">
                    </div>
                    <div class="wide">
                        <span class="fb-link">Caroline Shannon</span>
                        <p class="mb-0">I love this deal lol. I do know I saw another store doing this same thing as well but I can't remember which one.</p>
                <span class="controls">
                  <p>
                      <a href="#" class="fb-link do-nothing" style="font-weight:normal">Like</a>
                      <span style="margin-left:2px;margin-right:2px;color:#999;">-</span>
                      <span style="color:#999">1 hour 11 mins</span>
                  </p>
                </span>
                    </div>

                    <div class="cb comment-divider h-10" style="margin-top: 0px; margin-bottom: 0px; height: 1px; background: transparent;"></div>
                </div>
            </div>
            <!-- /comments -->

        </div>
        <!-- /continue -->

        <!-- offers -->
        <div class="section offers-section">

            <div class="step content-area center-me text-left w-720" style="margin-bottom:0">
                <div class="text-center m-10">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/New_Walmart_Logo.svg.png" style="max-height:65px;border-radius:5px">
                </div>
            </div>

            <div class="center-me w-720 hidden">
                <div class="coupon-card full-width center-me m-15" style="border-color:#0872ba">
                    <div class="coupon-card-text isolated xtext-center p-15" style="background:#0872ba">
            <span class="approved-text">
              Samples remaining in United States: <code>5</code><br>
              Time remaining: <code class="timer blink-me" style="opacity: 0;">0:00</code>
            </span>
                    </div>
                </div>
            </div>

            <div class="step content-area center-me text-left w-720">
                <div class="text-center mt-10">
                    <p class="big-red">
                        Samples remaining in United States: <code>5</code><br>
                    </p>
                    <hr>
                    <p class="big-red">
                        Time remaining: <code class="timer blink-me" style="opacity: 0;">0:00</code>
                    </p>
                    <hr>
                    <p class="big-red">
                        Select your samples below
                    </p>
                </div>
            </div>


            <style>
                div.offer-price p.big-red {
                    color: #777;
                }
                span.strike {
                    text-decoration: line-through;
                    color:crimson;
                }
                span.green {
                    color:green;
                }
                @media (min-width: 1000px) {
                    div.offer-item div.narrow {
                        float: left;
                        width: 250px;
                    }
                    div.offer-item div.wide {
                        float: right;
                        width: calc(100% - 250px);
                        padding-right:10px;
                        line-height:20px;
                    }
                    div.offer-item img.product-image {
                        max-width: 100%;
                    }
                }
                @media (max-width: 1000px) {
                    div.offer-item img.product-image {
                        max-width: 250px;
                    }
                }
            </style>

            <div class="offer-item content-area center-me w-720">
                <h4 class="fw-bold" style="text-transform:uppercase">Sample #1: <span class="offer-1-name"></span></h4>

                <div class="rating">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/11k734hh9m0e.png" style="width:60px;margin-top:-3px">
                    1,983 Ratings
                </div>

                <hr>

                <div class="narrow text-center">
                    <img class="product-image offer-1-img" src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/allure_jar.jpg">
                </div>

                <div class="wide">
                    <p><strong>Description:</strong></p>
                    <div class="offer-description">
                        <p>Supermodel Victoria is 61 years old going on 30. Her advanced system will have you feeling more confident than ever. Women who try this experience firmer and more youthful skin within just a few weeks. Focusing on utilizing the best in natural ingredients, <span class="offer-1-name"></span> helps moisturize, smooth, and tighten your skin. Extreme happiness and confidence are common results.</p>
                        <p>Test a risk FREE 30 day supply of <span class="offer-1-name">Allure Age-Defying Moisturizer</span></p>
                    </div>
                </div>

                <div class="cb"></div>
                <hr>

                <div class="text-center">
                    <div class="offer-price center-me">
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Retail<span class="hidden-xs"> price</span>:<br>
                                <span class="strike">$195.95</span>
                            </p>
                        </div>
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Your price:<br>
                                <span class="green">$0.00</span>
                            </p>
                        </div>
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Postage:<br>
                                $2.95
                            </p>
                        </div>
                    </div>
                </div>

                <div class="cb"></div>
                <hr>

                <div class="hidden visible-xs h-5"></div>

                <div class="offer-cta text-center">
                    <p>
                        <a target="_blank" href="go/1.php?c1=<?=$subid?>" class="offer-1-url uibutton special large" style="height:50px;font-size:16px;text-transform:uppercase;padding-left:35px;padding-right:35px;">Claim this sample</a>
                    </p>
                </div>
            </div>
            <div class="offer-item content-area center-me w-720">
                <h4 class="fw-bold" style="text-transform:uppercase">Sample #2: <span class="offer-2-name"></span></h4>

                <div class="rating">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/11k734hh9m0e.png" style="width:60px;margin-top:-3px">
                    1,983 Ratings
                </div>

                <hr>

                <div class="narrow text-center">
                    <img class="product-image offer-2-img" src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/allure_bottle.jpg">
                </div>

                <div class="wide">
                    <p><strong>Description:</strong></p>
                    <div class="offer-description">
                        <p>Details: Perfect for American women, this kit will bring joy and youth back into your life. Women who try this experience firmer and more youthful skin within just weeks. <span class="offer-2-name">Allure Eye Serum</span> is a multi-functional powerhouse with exceptional moisturizing properties. It works effectively to target and eliminate the root cause of premature aging that is lack of hydration and loosening of skin epidermis..</p>
                        <p>Test a risk FREE 30 day supply of <span class="offer-2-name">Allure Eye Serum</span></p>
                    </div>
                </div>

                <div class="cb"></div>
                <hr>

                <div class="text-center">
                    <div class="offer-price center-me">
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Retail<span class="hidden-xs"> price</span>:<br>
                                <span class="strike">$195.95</span>
                            </p>
                        </div>
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Your price:<br>
                                <span class="green">$0.00</span>
                            </p>
                        </div>
                        <div style="float:left;width:33%;">
                            <p class="big-red mb-0">
                                Postage:<br>
                                $2.95
                            </p>
                        </div>
                    </div>
                </div>

                <div class="cb"></div>
                <hr>

                <div class="hidden visible-xs h-5"></div>

                <div class="offer-cta text-center">
                    <p>
                        <a target="_blank" href="go/2.php?c1=<?=$subid?>" class="offer-2-url uibutton special large" style="height:50px;font-size:16px;text-transform:uppercase;padding-left:35px;padding-right:35px;">Claim this sample</a>
                    </p>
                </div>
            </div>

        </div>
        <!-- /offers -->

        <!-- footer -->
        <div class="footer mb-35 mt-15">
            <div class="trust w-600 center-me">
                <p class="text-muted text-center hidden-xs">
                    <em>This Walmart® survey is powered by:</em>
                </p>
                <div class="trust-logos text-center">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/logo-mcaf.png">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/logo-norton.png">
                    <img src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/logo-truste.png">
                </div>
            </div>
        </div>
        <!-- /footer -->

    </div>
</div>

<script src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/jquery-2.2.4.min.js"></script>
<script src="https://d2vym3yylwrzwi.cloudfront.net/survey/assets/bootstrap.min.js"></script>

<script>
    var log = function(x){
        try{
            console.log(x);
        }catch(e){}
    }

    var is_working = false;
    var exit_enabled = false;
    var current_question = 0;

    $(function(){

        $(window).on('beforeunload',function(e){
            if(!exit_enabled) return;
            return('Unsaved changes will be lost');
        });

        $('div.comment-divider').last().css({
            'margin-top': 0,
            'margin-bottom': 0,
            'height': '1px',
            'background': 'transparent'
        });

        $('a.do-nothing').click(function(e){
            e.preventDefault();
            $(this).blur();
        });

        var blink_visible = true;

        setInterval(function(){
            if(blink_visible){
                blink_visible = false;
                $('.blink-me').css({opacity:0});
            }else{
                blink_visible = true;
                $('.blink-me').css({opacity:1});
            }
        },500);

        var dots_arr = [
            '.',
            '..',
            '...'
        ];

        var dots_index = 0;

        setInterval(function(){
            dots_index += 1;
            if(!dots_arr[dots_index]){
                dots_index = 0;
            }
            $('span.dots').text(dots_arr[dots_index]);
        },250);

        $('span.add-one').each(function(){
            $(this).text(parseInt($(this).text()) + 1);
        });

        $('.question-item:eq(' + current_question + ')').show();

        $('.question-item .next-question').click(function(e){
            e.preventDefault();
            $(this).blur();
            $('.question-item:eq(' + current_question + ')').hide();
            current_question += 1;
            if(!$('.question-item:eq(' + current_question + ')').length){
                return show_verify_section();
            }else{
                $('.question-item:eq(' + current_question + ')').fadeIn('fast');
            }
        });

        function show_verify_section(){
            $('div.section').hide();
            $('div.checking-section').fadeIn('fast');

            var i = 0;
            var checking_progress = setInterval(function(){
                $('.checking-list hr:eq(0)').show()
                var ele = $('.checking-list ul li:eq(' + i + ')');
                var ele_next = $('.checking-list ul li:eq(' + (i + 1)+ ')');
                if(!ele_next.length){
                    $('.checking-section div.loading-area span.dots').remove()
                    $('.checking-section div.success-area').fadeIn('fast')
                }
                if(!ele.length){
                    clearInterval(checking_progress);
                    return setTimeout(function(){
                        return show_continue_section();
                    },1500);
                }
                var j = 0;
                $('.checking-list ul li').each(function(){
                    if(j<i){
                        $(this).find('span.dots').remove();
                        j += 1;
                    }
                });
                ele.slideDown('fast');
                i += 1;
            },3000);
        }

        function show_continue_section(){
            $('div.section').hide();
            $('div.continue-section').fadeIn('fast');
            return;
        }

        var start_countdown = (function(){
            var countdown_timer = '10:00';
            $('.timer').text(countdown_timer);
            var do_count = setInterval(function(){
                var parts = countdown_timer.split(':');
                var mins = parseInt(parts[0]);
                var secs = parseInt(parts[1]);
                if(!secs){
                    secs = 59;
                    mins -= 1;
                }else{
                    secs -= 1;
                }
                var is_zero = (function(mins,secs){
                    if(mins + secs <= 0){
                        return true;
                    }
                    return false;
                })(mins,secs);
                var secs = secs.toString();
                var mins = mins.toString();
                if(secs.length==1) secs = '0' + secs;
                countdown_timer = [
                    mins,
                    secs
                ].join(':');
                $('.timer').text(countdown_timer);
                if(is_zero){
                    $('.timer').addClass('blink-me');
                    clearInterval(do_count);
                }
            },1000);
        })();

        var like_counter = (function(){
            var current_likes = 999;
            var _random = function(min,max){
                return Math.round(Math.random() * (max - min) + min);
            }
            var _set_likes = function(current_likes_int){
                var current_likes_str = current_likes_int.toString();
                if(current_likes_str.length > 3){
                    current_likes_str = [
                        current_likes_str.substr(0,1),
                        ',',
                        current_likes_str.substr(1)
                    ].join('');
                }
                $('.like-count').text(current_likes_str);
            }
            _set_likes(current_likes);
            setInterval(function(){
                if(_random(1,3)==1){
                    current_likes += _random(1,3);
                }
                _set_likes(current_likes);
            },1000);
        })();

        function show_offers_section(){
            $('div.section').hide();
            $('div.offers-section').fadeIn('fast');
            return;
        }

        $('.show-offers').click(function(e){
            e.preventDefault();
            show_offers_section();
        });

        // direct nav
        try {
            if(location.hash.includes('offers')){
                show_offers_section();
            }
            if(location.hash.includes('verify')){
                show_verify_section();
            }
            if(location.hash.includes('continue')){
                show_continue_section();
            }
        }catch(e){}

    });
</script>
<!-- ROI Pixel Code -->
<script>window._sess={ualuser:'7168lks6btkh',server:'pixel.ed4f.com'};</script>
<script src="//pixel.ed4f.com/js"></script>
<!-- DO NOT MODIFY -->
<!-- End ROI Pixel Code -->
</body></html>