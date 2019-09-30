<?php
    /*
    Template Name: gallery
    */
?>



<?php get_header(); ?>
<div class="separator" ></div>
<section class=" sections " >
<div class="row">
<div class="container">

<link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">
        <style>
            
            .demo-gallery  {
                margin-bottom: 0;
            }
            .demo-gallery  {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                
            }
            .demo-gallery  a {
                border: 3px solid #6C7777;
                border-radius: 3px;
                display: block;
                overflow: hidden;
                position: relative;
                float: left;
 margin-right: 20px;
margin-bottom: 15px;
width: 23%;

            }
            .demo-gallery  a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                
            }
            .demo-gallery  a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery  a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery  a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery  a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery  a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .justified-gallery > a > img {
                -webkit-transition: -webkit-transform 0.15s ease 0s;
                -moz-transition: -moz-transform 0.15s ease 0s;
                -o-transition: -o-transform 0.15s ease 0s;
                transition: transform 0.15s ease 0s;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                height: 100%;
                width: 100%;
            }
            .demo-gallery .justified-gallery > a:hover > img {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
                opacity: 1;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.1);
                bottom: 0;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                -webkit-transition: background-color 0.15s ease 0s;
                -o-transition: background-color 0.15s ease 0s;
                transition: background-color 0.15s ease 0s;
            }
            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }
            .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
                background-color: rgba(0, 0, 0, 0.5);
            }
            .demo-gallery .video .demo-gallery-poster img {
                height: 48px;
                margin-left: -24px;
                margin-top: -24px;
                opacity: 0.8;
                width: 48px;
            }
            .demo-gallery.dark  a {
                border: 3px solid #04070a;
            }
            .home .demo-gallery {
                padding-bottom: 80px;
            }
        </style>
   

 <div class="demo-gallery">

    <div id="lightgallery" >
  
<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-1.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-1-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1079" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-2.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-2-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1080" /></a>
<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-5.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-5-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1083" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-6.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-6-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1084" /></a>
<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-7.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-7-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1085" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-8.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-8-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1086" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/reception-10.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/reception-10-300x200.jpg" alt="" width="100%" height="200" class="alignnone size-medium wp-image-1088" /></a>
  <a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0018.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0018-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1090" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0022.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0022-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1091" /></a>  
<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1506.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1506-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1096" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1504.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1504-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1095" /></a>
  <a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0113.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0113-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1097" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1496.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1496-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1098" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1516.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_1516-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1099" /></a>
<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0067.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0067-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1114" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0081.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0081-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1115" /></a>

<a href="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0064.jpg"><img src="http://mariinsky.by/wp-content/uploads/2017/11/IMG_0064-300x200.jpg" alt="" width="300" height="200" class="alignnone size-medium wp-image-1113" /></a>

    </div></div>



        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
        <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
        <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>


</div></div>
</section>



<?php get_footer(); ?>