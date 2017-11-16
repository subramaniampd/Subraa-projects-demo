<html>
<style type="text/css">
body, html {
    font-family: 'Open Sans',Arial,sans-serif; 
}
.popoup_div {
    margin: 0 auto;
    overflow: hidden;
    padding-top: 50px;
    width: 100%;
}
.logo
  {
  	text-align: center;
  }
.single_pop {
    float: left;
    width: 30%;
    margin: 20px;
}
.lightboxcontainer {
  width:100%;
  text-align:left;
}
.lightboxleft {
  width: 40%;
  float:left;
}
.lightboxright {
    float: none;
    margin: 0 auto;
    width: 75%;
}
.lightboxright iframe {
  min-height: 390px;
}
.divtext {
  margin: 36px;
}
#spop-elem-wrap > div {
    height: auto !important;
}
#spopupbox > div {
	height: 80% !important;
}
.spopup > img {
    border: 1px solid #ccc;
    width: 100%;
        height: 300px;
}
#spopupbox > div#smark {
    display: none;
}
#spop-elem-box > div {
    padding: 0 !important;
}
@media (max-width: 800px) {
  .lightboxleft {
    width: 100%;
  }
  .lightboxright {
    width: 100%;
  }
  .divtext {
    margin: 12px;
  }

</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popup.js"></script>
<title>POPUP DEMO</title>
<body>
     <div class="menu">
            
                </div>
<h1 style="text-align:center;">POPUP DEMO</h1>
<div class="logo">
	<a href="www.subraa.com" data-width=800 data-height=400 title="Subraa"><img src="images/subraa.png"></a></div>
<div class="popoup_div">

<div class="single_pop">
<a href="#mydiv1" class="spopup" data-width=800 data-height=400 title="Demo"><img src="images/cnt.jpg"></a>
</div>
<div class="single_pop">
<a href="#mydiv2" class="spopup" data-width=800 data-height=400 title="Demo"><img src="images/video.jpg"></a>
</div>
<div class="single_pop">
<a href="#mydiv3" class="spopup" data-width=800 data-height=400 title="Demo"><img src="images/img.png"></a>
</div>

</div>
     <div id="mydiv1" style="display:none;">
  <div class="lightboxcontainer">
	
	<div class="lightboxright">
	  <h3 style="text-align:center;">Demo</h3>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      
	</div>
	<div style="clear:both;"></div>
	
</div></div>
    <div id="mydiv2" style="display:none;">
  <div class="lightboxcontainer">
	
	<div class="lightboxright">

	  <iframe width="600px" height="100%" src="https://www.youtube.com/embed/XX4Mkhzj56s" frameborder="0" allowfullscreen></iframe>
	</div>
	<div style="clear:both;"></div>
	
</div></div>
    <div id="mydiv3" style="display:none;">
  <div class="lightboxcontainer">
	
	<div class="lightboxright">
    
	  <img  width="100%" height="80%" src="images/img.png" frameborder="0" allowfullscreen>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
	</div>
	<div style="clear:both;"></div>
	
</div></div>
      </body>
    </html>
