<?php include 'header.php' ?>
        <div class="row">
            <img src="1.jpg" alt="slider-image" class="c-12" id="slider-img"/>
        </div>
        <script language="javascript">
            var pictures = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg"];
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