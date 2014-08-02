// JavaScript Document
	//$('#goi_y').slideDown(200);
	
	//
function help_s(){
	$('#goi_y').slideDown(500);
	
}
function help_h(){
	$('#goi_y').slideUp(500);
	//$('#goi_y').hide();
}

function get_gy(n){
	switch(n){
		case 1: document.getElementById('search_text').value='Biển Đông'; break;	
		case 2: document.getElementById('search_text').value='Cao Nguyên'; break;	
		case 3: document.getElementById('search_text').value='Bãi cỏ'; break;	
		case 4: document.getElementById('search_text').value='Bình minh'; break;	
		case 5: document.getElementById('search_text').value='Suối'; break;	
		case 6: document.getElementById('search_text').value='Con đường tơ lụa'; break;	
	}
	
}