<div class="row mb footer">
  <div class="flex">
    <div><img src="upload/banner.png" width="100px" alt=""></div>
    <div class="f-1">
      <ul>
        <li><h3>VỀ CHÚNG TÔI</h3></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Thông báo</a></li>
      </ul>
    </div>
    <div class="f-1">
      <ul>
      <li><h3>HƯỚNG DẪN</h3></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Thông báo</a></li>
      </ul>
    </div>
    <div class="f-1">
      <ul>
      <li><h3>CHÍNH SÁCH</h3></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Liên hệ</a></li>
        <li><a href="">Thông báo</a></li>
      </ul>
    </div>
     
   
    <div class="f-1">
    
      <ul>
      <h3 class="m-1 ">Mạng xã hội</h3> 
      <div class="l-1">
      <li><img src="upload/ic1.png" width="28px" alt=""></li>
        <li><img src="upload/ic2.png" width="30px" alt=""></li>
      </div>
      </ul>
    </div>
    
  </div>
</div>
</div>

<!-- js cho liveshow -->

<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>

<!-- end js cho liveshow -->
</body>

</html>