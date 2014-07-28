	<?php
	$i=0;$mang=array();
	foreach ($photos as $photo): 
		$mang[$i]= $photo['Photo']['img_file'];
		$i++;
endforeach;
$count=$i;
?>
<?php echo $this->html->css("khung_anh_trangchu.css"); ?>
<?php echo $this->html->css("likeandcmt.css"); ?>
<?php echo $this->html->css("jquery.fancybox.css"); ?>
<?php echo $this->html->script("jquery/fancy/lib/jquery-1.10.1.min.js"); ?>
<?php echo $this->html->script("jquery/fancy/source/jquery.fancybox.js"); ?>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			$('.like-icon').click(function() {
				alert('ok');
				});
			$('.fancybox').fancybox();


		});
	</script>


<?php
$i=0;
$default=array_rand($mang,11);
while($i<$count){
?>	

<!-- photo list 3-->	
	  <table class="photo_list_3" border="0" cellspacing="20px" cellpadding="0">
          <tr>
            <td class="anh_ngang">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[0]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[0]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list3($img_m);?>">
				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
          </tr>
        </table>
<?php $i++;?>	
<!-- photo list 1-->		
		<table class="photo_list_1" border="0" cellspacing="20px" cellpadding="0px">
		  <tr>
			<td class="anh_ngang" colspan="2">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[0]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[0]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">
					
				</span>
			</a>
					<table class="ca-icon" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon" >
						
							<button class="vien-icon" >
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_vuong" >
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_vuong_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[1]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[1]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'vuong');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_vuong">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_vuong_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[2]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[2]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'vuong');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_ngang" colspan="2">
			
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[3]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[3]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_ngang" colspan="2">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[4]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[4]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_dung" rowspan="2">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_dung_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[5]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[5]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'dung');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_ngang" colspan="2">
			<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[6]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[6]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		</table>
		

<!-- photo list 2-->	
		<table class="photo_list_2" border="0" cellspacing="20px" cellpadding="0">
			  <tr>
				<td class="anh_vuong">
				<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[7]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[7]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
				<td class="anh_ngang" rowspan="3">
				<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
					<span class="anh_ngang_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[8]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[8]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'ngang');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
			  </tr>
			  <tr>
				<td class="anh_vuong">
				<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[9]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[9]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
		  </tr>
			  <tr>
				<td class="anh_vuong">
				<a class="fancybox fancybox.iframe" href="http://localhost/place2shot-web/photos/detail">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot/img/uploads/images/<?php if($i>=$count) echo $mang[$default[10]];else echo $mang[$i];?>);<?php if($i>=$count) $img_m='img/uploads/images/'.$mang[$default[10]];else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="like" src="/place2shot/img/images/like-icon.png"  />
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot/img/images/comment-icon.png" />
								<p class="ca-comment">200</p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
		  </tr>
		</table>

<?php
}
?>

<?php
function background_size_list1($image,$size){
	switch($size){
		case 'ngang':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<880/300) return 'background-size: 980px auto;' ;
			else return 'background-size: auto 300px;';break;
		case 'vuong':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1) return 'background-size: 300px auto;' ;
			else return 'background-size: auto 300px;';break;
		case 'dung':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<300/620) return 'background-size: 300px auto;' ;
			else return 'background-size: auto 620px;';break;
	}
}
function background_size_list2($image,$size){
	switch($size){
		case 'ngang':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1010/580) return 'background-size: 1000px auto;' ;
			else return 'background-size: auto 580px;';break;
		case 'vuong':
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1) return 'background-size: 180px auto;' ;
			else return 'background-size: auto 180px;';break;
	}
}
function background_size_list3($image){
			$info = getimagesize($image); 
			if($info[0]/$info[1]<1200/580) return 'background-size: 1200px auto;' ;
			else return 'background-size: auto 580px;';break;
}
?>