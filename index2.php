<html>
<head>
<meta charset="utf-8">
    <title>Art Gallery</title>
    <link rel="shortcut icon" href="img/iocn.png" type="favicon/ico" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
    <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
 
 </head>
<body>
<ul>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
<li><a href="register.php"><span class="glyphicon glyphicon-user"></span>Sign-Up</a></li>
</ul>
<div class="body">
    <div class="content">
    <div class="col-3" style="text-shadow: 2px 7px 7px #000fff;">
        Welcome...<br>To DebArts- The Art Gallery.!!!!<hr><hr>
        Login & Upload Your Own Art...The World Awaits A new artist... ;)

    </div>
        <div class="col-8">
        <div id="jssor_1" style="position: relative; margin: 0 auto; top: -320px; left: 400px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e; display: inline-block;">
        <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
             </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
                <div data-p="144.50">
                    <img data-u="image" src="img/01.jpg" />
                    <img data-u="thumb" src="img/thumb-01.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/02.jpg" />
                    <img data-u="thumb" src="img/thumb-02.jpg" />
                </div>
                <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/03.jpg" />
                    <img data-u="thumb" src="img/thumb-03.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/04.jpg" />
                    <img data-u="thumb" src="img/thumb-04.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/05.jpg" />
                    <img data-u="thumb" src="img/thumb-05.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/06.jpg" />
                    <img data-u="thumb" src="img/thumb-06.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/07.jpg" />
                    <img data-u="thumb" src="img/thumb-07.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/08.jpg" />
                    <img data-u="thumb" src="img/thumb-08.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/09.jpg" />
                    <img data-u="thumb" src="img/thumb-09.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/10.jpg" />
                    <img data-u="thumb" src="img/thumb-10.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/11.jpg" />
                    <img data-u="thumb" src="img/thumb-11.jpg" />
                </div>
                <div data-p="144.50" style="display: none;">
                    <img data-u="image" src="img/12.jpg" />
                    <img data-u="thumb" src="img/thumb-12.jpg" />
                </div>
            </div>
        <!-- Thumbnail Navigator -->
            <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
                <div data-u="slides" style="cursor: default;">
                    <div data-u="prototype" class="p">
                        <div class="w">
                            <div data-u="thumbnailtemplate" class="t"></div>
                        </div>
                        <div class="c"></div>
                    </div>
                </div>
            <!-- Thumbnail Item Skin End -->
            </div>
        <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
            <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
        </div></div>
        <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End --> 
    
              
    </div>     
<div class="copyright">
       <p>Copyright &copy; DEB</p>  
     </div>
</div>
    
     
    
<div class="brand">
<a href= "#" style= "text-decoration:none; color:#ffffff" >"DebArts" - The Art Gallery</a>
</div>    
</body>
</html>