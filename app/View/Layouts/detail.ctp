<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->Html->css("detail"); ?>
<title>Detail Page</title>
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<div class="top_left">
         	<div id="img">
        	<span class="img_acc" style="background-image:url(<?php echo $this->webroot; ?>img/icon/avar.png);display:block;width:50px;height:50px;
            background-repeat:no-repeat;
            background-size:50px 50px;
            border-radius:1px;
            "></span>
            </div>
            <div id="info">
            	<div id="info1">
            	<a href="#" class="name">Picture's name</a>
                </div>
                <div id="info2">
            	<a href="#" class="name">Picture's name</a>
                </div>
            </div> 
            
        </div> <?php /*Finish TOP_LEFT*/ ?>
        
        <div class="top_right">
        	<div id="style3">
                <div id="style3_1">
                 	<button class="style4_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/cancel.png);">
                    </button>
                </div>
                <div id="style3_2">
                    <button class="style5_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/zoom.png);">
                    </button>
                </div>
			</div>
             <div id="style2">
                <button class="style2_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/pre.png);">
                </button>
                <button class="style3_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/next.png);">
                </button>    
            </div>
        	<div id="style1">
                <button class="style1_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/add.png);">
                </button>
                <button class="style1_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/openPage.png);">
                </button>
                <button class="style1_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/like.png);">
                </button>
                <button class="style1_button" type="button" style="background-image:url(<?php echo $this->webroot; ?>img/icon/fav.png);">
                </button>
            </div>
           
            
      	</div> <?php /*Finish TOP_RIGHT*/ ?>
    </div> <?php /*Finish HEADER*/ ?>
    
    <div id="content">
        <div id="left">
        </div>
    	<div id="center">
        	<span class="image" style="background-image:url(<?php echo $this->webroot; ?>img/Image/1.jpg);">
            </span>
        </div>
        
        <div id="right">
        	<div id="right_1">
            	<span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                <span class="img_site" style="background-image:url(<?php echo $this->webroot; ?>img/Image/img_site.jpg);"></span>
                
            </div>
            <div id="right_2">
            </div>
        </div>
    </div> <?php /*Finish CONTENT*/ ?>
    
    <div id="footer">
    	<div id="text">
        </div>
        
        <div id="button_footer">
        	<div id="bt1">
            
        	<button class="bt_1" type="button" name="L" style="background-image:url(<?php echo $this->webroot; ?>img/icon/l.png);" >
            </button><h5>Like</h5>
            <button class="bt_1" type="button" name="F" style="background-image:url(<?php echo $this->webroot; ?>img/icon/f.png);">
            </button><h5>Favorite</h5>
            <button class="bt_2" type="button" name="pre" style="background-image:url(<?php echo $this->webroot; ?>img/icon/pre.png);" >
            </button><h5>Preview</h5>
            <button class="bt_2" type="button" name="next" style="background-image:url(<?php echo $this->webroot; ?>img/icon/next.png);" > 
            </button><h5>Next</h5>
            <button class="bt_1" type="button" name="esc" style="background-image:url(<?php echo $this->webroot; ?>img/icon/e.png);">
            </button><h5>Close</h5>
            
        	</div>
    </div>
</div> <?php /*FINISH FOOTER*/ ?>
</body>
</html>
