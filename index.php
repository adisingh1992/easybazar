<?php include 'header.php' ?>
        <div class="row">
            <img src="static/images/1.jpg" alt="slider-image" class="c-12" id="slider-img"/>
        </div>
        <div class="row">
            <div class="c-8 container">
                <h1>Deals of the Day..!!</h1>
                <div class="content">
                    <div class="row">
                        <img class="c-2" src="static/images/deal1.jpeg"/>
                        <img class="c-2" src="static/images/deal2.jpeg"/>
                        <img class="c-2" src="static/images/deal3.jpeg"/>
                        <img class="c-2" src="static/images/deal4.jpeg"/>
                        <img class="c-2" src="static/images/deal5.jpeg"/>
                        <img class="c-2" src="static/images/deal6.jpeg"/>

                        <p class="c-2">Deal 1</p>
                        <p class="c-2">Deal 2</p>
                        <p class="c-2">Deal 3</p>
                        <p class="c-2">Deal 4</p>
                        <p class="c-2">Deal 5</p>
                        <p class="c-2">Deal 6</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="line-break"/>
        <hr class="line-break1"/>
        <div class="row">
            <div class="c-8 container">
                <h1>Deals of the Day..!!</h1>
                <div class="content">
                    <div class="row">
                        <img class="c-2" src="static/images/deal1.jpeg"/>
                        <img class="c-2" src="static/images/deal2.jpeg"/>
                        <img class="c-2" src="static/images/deal3.jpeg"/>
                        <img class="c-2" src="static/images/deal4.jpeg"/>
                        <img class="c-2" src="static/images/deal5.jpeg"/>
                        <img class="c-2" src="static/images/deal6.jpeg"/>

                        <p class="c-2">Deal 1</p>
                        <p class="c-2">Deal 2</p>
                        <p class="c-2">Deal 3</p>
                        <p class="c-2">Deal 4</p>
                        <p class="c-2">Deal 5</p>
                        <p class="c-2">Deal 6</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="line-break"/>
        <hr class="line-break1"/>

        <div class="row">
            <div class="c-12" id="nav-to-top">
                <a href="#top"><h4>Back to Top</h4></a>
            </div>
        </div>

        <div class="sidebar">
            <div class="img-contain"><img src="static/images/deal1.jpeg"/></div>
            <div class="img-contain"><img src="static/images/deal2.jpeg"/></div>
            <div class="img-contain"><img src="static/images/deal3.jpeg"/></div>
            <div class="img-contain"><img src="static/images/deal4.jpeg"/></div>
            <div class="img-contain"><img src="static/images/deal5.jpeg"/></div>
            <div class="img-contain"><img src="static/images/deal6.jpeg"/></div>
        </div>
        
        <script language="javascript">
            var pictures = ["static/images/1.jpg", "static/images/2.jpg", "static/images/3.jpg", "static/images/4.jpg", "static/images/5.jpg"];
            var len = pictures.length;
            var i = 0;
            document.getElementById("slider-img").src = pictures[i];
            setInterval(slider, 5000);
            //fade-in function
            function fadeIn(obj){
                obj.style.opacity = 0;
                function tick(){
                    obj.style.opacity = +obj.style.opacity + 0.02;
                    if(+obj.style.opacity < 1)
                        setTimeout(tick, 25);
                }
                tick();
            }
            //slider function
            function slider(){
                i = (i+1) % len;
                document.getElementById("slider-img").src = pictures[i];
                fadeIn(document.getElementById("slider-img"));
            }
        </script>
<?php include 'footer.php' ?>