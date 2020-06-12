<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <meta
            name="viewport"
            content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,minimal-ui"
        />
       
        <style type="text/css">
            body,
            div {
                margin: 0;
                padding: 0;
            }
            html,
            body {
               min-height: 100%;
               height: 100%;
            }
            body {
                
            }
            #wrap {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: relative;
                border: 1px solid re;
                background: #379eb6;
            }
            #imgs {
                position: relative;
                width: 100%;
                height: 100%;
                margin: 0 auto;
                overflow: hidden;
                border-radius: 15p;
                top: 0px;
                z-index: 1;
                background: url(loading.gif) no-repeat center
                    center;
            }
            #imgs.visible {
                overflow: visible;
            }
            #imgs div {
                overflow: hidden;
            }
            #imgs img {
                width: 100%;
                height: 100%;
                display: block;
            }
           
            #navs {
                z-index: 10;
                position: absolute;
                left:46.5% ;
               bottom:5px; 
               width: 7%;
            text-align: center;
               }
            #navs a {
               
                overflow: hidden;
                border-radius: 50px;
                width: 20px;
                height: 20px;
                background-color: gray;
            float: left;
            margin: 2%;
                transition: background 600ms ease;
            }
            #navs .active {
                background: #fff;
            }
            @media screen and (max-width: 600px) {
                
                #navs {
                    left: 0;
                    width: 100%;
                    }

                     #navs a{
                     	margin: 0 .5% 0px;
                     }
                #imgs {
                    position: absolute;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    margin: 0;
                    border-radius: 0;
                }
                #imgs img {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    -moz-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
                    min-height: 100%;
                    height: auto;
                    
                }
                #tssel {
                    top: auto;
                    bottom: 10px;
                }
                #navs {
                    left:42% ;
                width: 27%;
                
                }
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <div id="imgs">

                <div>
                 <img src="images/banner1.jpg"/>
                </div>

                <div>
                 <img src="images/banner2.jpg"/>
                </div>

                <div>
                 <img src="images/banner3.jpg"/>
                </div>

                <div>
                 <img src="images/banner4.png"/>
                </div>

                

                 


                

                
                
               
               
            </div>
            <div id="navs">

                <a href="javascript:;" class="active"></a><a href="javascript:;"></a><a href="javascript:;"></a
                ><a href="javascript:;"></a>
            </div>

          

        </div>
        <script type="text/javascript" src="script/script.js"></script>
            

<script>
        	
           

                a = new pageSwitch('imgs', {
                    duration: 1000,
                    start: 0,
                    direction: 1,
                    loop: true,
                    ease: 'bounce',  // easing function: linear ease ease-in ease-out ease-in-out bounce.
                    transition: 'scrollCoverInX',
                    mouse: true,
                    mousewheel: false,
                    arrowkey: true,
                    autoplay:true,
                    interval: 5000,
                    arrow:true
                }),
                navs = document.getElementById('navs').getElementsByTagName('a');

            a.on('before', function(m, n) {
                navs[m].className = '';
                navs[n].className = 'active';
            });

              i = 0;
            for (; i < navs.length; i++) {
                !(function(i) {
                    navs[i].onclick = function() {
                        a.slide(i);
                    };
                })(i);
            }

</script>

<!--

Transition Effects Included:

    fade
    scroll
    scroll3d
    scrollCover
    scrollCoverReverse
    scrollCoverIn
    scrollCoverOut
    scrollX
    scroll3dX
    scrollCoverX
    scrollCoverReverseX
    scrollCoverInX
    scrollCoverOutX
    scrollY
    scroll3dY
    scrollCoverY
    scrollCoverReverseY
    scrollCoverInY
    scrollCoverOutY
    slide
    slideCover
    slideCoverReverse
    slideCoverIn
    slideCoverOut
    slideX
    slideCoverX
    slideCoverReverseX
    slideCoverInX
    slideCoverOutX
    slideY
    slideCoverY
    slideCoverReverseY
    slideCoverInY
    slideCoverOutY
    flow
    flowCover
    flowCoverReverse
    flowCoverIn
    flowCoverOut
    flowX
    flowCoverX
    flowCoverReverseX
    flowCoverInX
    flowCoverOutX
    flowY
    flowCoverY
    flowCoverReverseY
    flowCoverInY
    flowCoverOutY
    slice
    sliceX
    sliceY
    zoom
    zoomCover
    zoomCoverReverse
    zoomCoverIn
    zoomCoverOut
    zoomX
    zoomCoverX
    zoomCoverReverseX
    zoomCoverInX
    zoomCoverOutX
    zoomY
    zoomCoverY
    zoomCoverReverseY
    zoomCoverInY
    zoomCoverOutY
    skew
    skewCover
    skewCoverReverse
    skewCoverIn
    skewCoverOut
    skewX
    skewCoverX
    skewCoverReverseX
    skewCoverInX
    skewCoverOutX
    skewY
    skewCoverY
    skewCoverReverseY
    skewCoverInY
    skewCoverOutY
    flip
    flip3d
    flipClock
    flipPaper
    flipCover
    flipCoverReverse
    flipCoverIn
    flipCoverOut
    flipX
    flip3dX
    flipClockX
    flipPaperX
    flipCoverX
    flipCoverReverseX
    flipCoverInX
    flipCoverOutX
    flipY
    flip3dY
    flipClockY
    flipPaperY
    flipCoverY
    flipCoverReverseY
    flipCoverInY
    flipCoverOutY
    bomb
    bombCover
    bombCoverReverse
    bombCoverIn
    bombCoverOut
    bombX
    bombCoverX
    bombCoverReverseX
    bombCoverInX
    bombCoverOutX
    bombY
    bombCoverY
    bombCoverReverseY
    bombCoverInY
    bombCoverOutY


-->       
    </body>
</html>
