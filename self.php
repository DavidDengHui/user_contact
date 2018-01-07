<!doctype html>
<?php 
$id = $_REQUEST['pid'];
if ( empty($id) ) {
	$id = 20170000;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>个人信息</title>

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<div class="contact-area">
  <div class="contact">
    <main>
      <section>
        <div class="content">
          <img src="http://jq22.qiniudn.com/_mLIxaKY_400x400.jpg" alt="Profile Image">

          <aside>
	<?php
		if ( $id == 20170014 ) {
			echo "<h1><b>邓晖</b></h1>";
			print <<<EOT
<table border="0">
<tr>
        <!--<td>职务</td>-->
        <td>宣传部副部长</td>
</tr>
<tr>
        <!--<td>学院</td>-->
        <td>铁道通信与信号学院</td>
</tr>
<tr>
        <!--<td>班级</td>-->
        <td>铁道通信171班</td>
</tr>
</table>
EOT;
		}
		else {
			echo "<h1>".$id."</h1>";
		}
	?>
          </aside>
          
          <button>
            <span>联系我</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path> </g> </svg>
          </button>
        </div>

        <div class="title"><p>联系我</p></div>
      </section>

      
    </main>

    <nav>
      <a href="mailto:denghuideym@gmail.com" class="gmail">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 3v10c0 .567-.433 1-1 1h-1V4.925L8 9.233 2 4.925V14H1c-.567 0-1-.433-1-1V3c0-.283.108-.533.287-.712C.467 2.107.718 2 1 2h.333L8 6.833 14.667 2H15c.283 0 .533.108.713.288.179.179.287.429.287.712z" fill-rule="evenodd"/></svg>
        </div>

        <div class="content">
          <h1>E-mail</h1>
          <span>denghuideym@gmail.com</span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href="#" class="facebook">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"/></svg>
        </div>

        <div class="content">
          <h1>Facebook</h1>
          <span>Riccardo Cavallo</span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href="#" class="twitter">
        <div class="icon">
          <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"/></svg>
        </div>

        <div class="content">
          <h1>Twitter</h1>
          <span>@RichoxDesign</span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>
    </nav>
  </div>
</div>

<script>
$('button').click(function(){
  $('button').toggleClass('active');
  $('.title').toggleClass('active');
  $('nav').toggleClass('active');
});
</script>


</body>
</html>
