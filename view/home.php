<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner mb">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/images/sp1.jpg" style="width:100%">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/images/sp2.png" style="width:100%">
                        <div class="text"></div>
                    </div>

                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;
                if (($i == 2) || ($i == 5) || ($i == 8))
                    $mr = "";
                else {
                    $mr = "mr";
                }
                echo '
    <div class="boxsp ' . $mr . '">
                <strong><div class="n4">GIẢM GIÁ</div></strong>
                <div class=" row img">  <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="name" value="' . $name . '">   
                <input class="hd1" type="submit" name="addtocart" value="+">    
                        
                <strong><a class="n1" href="' . $linksp . '">' . $name . '</a></strong>
                <strong><p class="n2">' . $price . ' VND</p></strong>
                <div class="n3" class="row btnaddtocart">
                <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="price" value="' . $price . '">
                <input type="hidden" name="img" value="' . $img . '">
                <input type="hidden" name="name" value="' . $name . '">   
                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                </form>
                </div>
            </div>';
                $i += 1;
            }

            ?>

        </div>

    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>