/* SWITCH COVER OR SITE */

$(document).on('keypress',function(e){
   
   var key = e.charCode; 
   var c = 99;
   var v = 118;
   
   wordsGo; // wordsInit()
   wordsGo = '';
   
   if (key == c){ 
       $('#dot-canvas').hide();
       $('#word-canvas').show();
       
   }
   if (key == v){
       $('#word-canvas').hide();       
       $('#dot-canvas').show();
   }
});




/* - - - SHOW-HIDES COVERS - - - */
function hide_covers(id){
var	wrapper_home = document.getElementById('wrapper'); 
var covers_home = document.getElementById("section_covers");
var covers_out = document.getElementById('onoff_covers');

if ( wrapper_home.style.display != 'none' ) {
	wrapper_home.style.display = 'none';
	covers_home.style.display = 'block';
	covers_out.innerHTML = '[Show Covers]';
}
else {
	wrapper_home.style.display = 'block';
	covers_home.style.display = 'none';
	covers_out.innerHTML = '[Go to WebSite]';
}
}




/* - - - SHOW-HIDES  FEATURED GALLERY - - - */
function hide_featured(id){
var gallery_home = document.getElementById("article_gallery_home");
var gallery_out = document.getElementById('onoff_featured');

	if ( gallery_home.style.display != 'none' ) {
		gallery_home.style.display = 'none';
		gallery_out.innerHTML = '[show featured]';
	}
	else {
		gallery_home.style.display = 'block';
		gallery_out.innerHTML = '[hide featured]';
	}
}


