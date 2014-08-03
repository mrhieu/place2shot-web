

	<?php
	$i=0;$mang=array();
	foreach ($photos as $photo): 
		$mang[$i]= $photo['Photo']['img_file'];
		$mang_id[$i]= $photo['Photo']['id'];
		$i++;
endforeach;
$count=$i;	
$id_user=(int)$current_user['id'];
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
			
			$('.fancybox').fancybox();


		});
function like(id)
{
var dataString = 'id='+ id ;
hienthi='#'+id;

$.ajax
({
type: "post",
url: "<?php echo Router::Url(array('controller'=>'Photos','action'=>'rating')); ?>",
data: dataString,
cache: false,
success: function(html)
{
$(hienthi).html(html);
} 
});
}	
	</script>


<?php
$i=0;
$default=0;
while($i<$count){
?>	
<div class="cont">
<!-- photo list 3-->
	  <table class="photo_list_3" border="0" cellspacing="20px" cellpadding="0">
          <tr>
            <td class="anh_ngang">
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){  echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list3($img_m);?>">
				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_like($id_img);?></p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
						<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</a>
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
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">
					
				</span>
			</a>
					<table class="ca-icon" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon" >
						
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)" >
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_vuong" >
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_vuong_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){$img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'vuong');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_vuong">
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_vuong_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'vuong');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_ngang" colspan="2">
			
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_ngang" colspan="2">
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
			<td class="anh_dung" rowspan="2">
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_dung_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'dung');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
			</td>
<?php $i++;?>
		  </tr>
		  <tr>
			<td class="anh_ngang" colspan="2">
			<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
				<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list1($img_m,'ngang');?>">

				</span>
			</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
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
				<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
				<td class="anh_ngang" rowspan="3">
				<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
					<span class="anh_ngang_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'ngang');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
			  </tr>
			  <tr>
				<td class="anh_vuong">
				<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
							</div>
						</td>
					  </tr>
					</table>
				</td>
<?php $i++;?>
		  </tr>
			  <tr>
				<td class="anh_vuong">
				<a class="fancybox fancybox.iframe" href="/place2shot-web/photos/view/<?php if($i>=$count){$default=array_rand($mang);  echo $mang_id[$default];}else echo $mang_id[$i];?>">
					<span class="anh_vuong_pt" style="background-image:url(/place2shot-web/img/uploads/images/<?php if($i>=$count){ echo $mang[$default];}else echo $mang[$i];?>);<?php if($i>=$count){ $img_m='img/uploads/images/'.$mang[$default];}else $img_m='img/uploads/images/'.$mang[$i]; echo background_size_list2($img_m,'vuong');?>"></span>
				</a>
					<table class="ca-icon" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="like-icon">
							<button class="vien-icon" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							</button>
							<div class="doi_tuong" onclick="like(<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>)">
							<div id="<?php if($i>=$count){  echo $mang_id[$default];}else echo $mang_id[$i];?>">
							<?php
								if($i>=$count)$id_img=$mang_id[$default];
								else $id_img=$mang_id[$i];
								if(like_yn($id_img,$id_user)==0){
								?>
								<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
								<?php
								}
								else{
								?>
								<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
								<?php
								}
							?>
								<p class="ca-like" style="text-decoration:none">100</p>
							</div>
							</div>
						</td>
						<td class="comment-icon">
							<button class="vien-icon">
							</button>
							<div class="doi_tuong">
								<img class="comment-icon" src="/place2shot-web/img/images/comment-icon.png" />
								<p class="ca-comment"><?php if($i>=$count){  $id_img=$mang_id[$default];}else $id_img=$mang_id[$i]; echo count_cmt($id_img);?></p>
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
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
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

	function count_like($id_img){
	$link = mysql_connect('localhost', 'root', '');
	$dbSelected = mysql_select_db('project_test', $link);
	$countlike = mysql_num_rows(mysql_query("SELECT * FROM likes WHERE id_img = $id_img"));
	return $countlike;
	}
	function count_cmt($id_img){
	$link = mysql_connect('localhost', 'root', '');
	$dbSelected = mysql_select_db('project_test', $link);
	$countcmt = mysql_num_rows(mysql_query("SELECT * FROM comments WHERE photo_id = $id_img"));
	return $countcmt;
	}
	function like_yn($id_img,$id_user){
	$link = mysql_connect('localhost', 'root', '');
	$dbSelected = mysql_select_db('project_test', $link);
	$isset = mysql_num_rows(mysql_query("SELECT * FROM likes WHERE id_img = $id_img and id_user=$id_user"));
	return $isset;
	}
?>