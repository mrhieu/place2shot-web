<?php
$link = mysql_connect('localhost', 'root', '');
	$dbSelected = mysql_select_db('project_test', $link);
if($this->request->is('post'))
{
	$id_user=$current_user['id'];
	$id=$this->request->data['id'];
	$issetlike = mysql_num_rows(mysql_query("SELECT * FROM likes WHERE id_img = $id and id_user=$id_user"));
	if($issetlike==0){
	mysql_query("INSERT INTO likes (id_img,id_user)
				VALUES($id,$id_user)");
	}
	else {
	mysql_query("DELETE FROM likes WHERE id_img=$id and id_user=$id_user");
	}
	// Getting latest vote results
	$result=mysql_num_rows(mysql_query("SELECT * FROM likes WHERE id_img = $id"));
	$issetlike = mysql_num_rows(mysql_query("SELECT * FROM likes WHERE id_img = $id and id_user=$id_user"));
	//HTML output
	if($issetlike==0){
	echo '<img class="like" src="/place2shot-web/img/images/like-icon.png"  />
			<p class="ca-like" style="text-decoration:none">'.$result.'</p>';
			}
	else echo '<img class="like" src="/place2shot-web/img/images/liked-icon.png"  />
			<p class="ca-like" style="text-decoration:none">'.$result.'</p>';
}
?>


