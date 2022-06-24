<template>
    <footer class="footer" id="fh5co-footer">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-lg-3 col-sm-12   mb-4 fh5co-widget">
                        <img :src="logo" alt="">
                    </div>
                    <div class="col-6 col-lg-3 col-sm-4 mb-4 active">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Meetups</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-lg-3 col-sm-4 mb-4 active">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                            <li><a href="#">Whatsapp</a></li>
                            <li><a href="#">Linkedin</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-sm-4 mb-4 active">
                        <ul class="fh5co-footer-links">
                            <li><a href="#">Email: abc@danang.com </a></li>
                            <li><a href="#">SĐT: 0345648638 </a></li>
                            <li><a href="#">Adress:470 Tran Dai Nghia, Quan Ngu Hanh Son</a></li>
                            <li><a href="#">Fax : 0345648638</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row copyright">
                    <div class="col-lg-12 col-sm-12 mb-12 text-center">
                        <p>
                            <small class="block">VIETNAM-KOREA UNIVERSITY OF INFORMATIONAND COMMUNICATION TECHNOLOGY </small> <br>
                            <small class="block">2021 &copy; All Rights Reserved.</small>
                        </p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</template>
<script >
export default {
   props:{
      logo
   }
}
</script>
<style>
.footer {
    padding-top: 2%;
    border-top: 2px solid gray;
    text-align: left;
    font-size: 0.9rem;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  }
  .fh5co-widget img{
    height:  5rem;
  }
  .fh5co-social-icons{
    list-style-type: none;
  }
  .fh5co-social-icons li{
    display: inline-block;
    margin-right:1rem;
  }
  .text-center .block{
    color: #040505;
    font-size: 16px;
  }
  .fh5co-footer-links{
    list-style-type: none;
  }
  .footer .container .row .active {
       border-left:1px solid gray ;
  }
  .footer .container .row .active ul li a{
     color: black;
  }
</style>