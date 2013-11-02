/* 
Name: Web manifestation 0.1
Author: Ricardo Vega Mora  
Date: oct 2013
About: Created as a homework for Web 3 Class at parsons The New School, NY., teacher Matthew Wilse. 
More info: www.ricardov.cl  
Creative Commons Licence. 

+ OPTIONS
+ mesage up to 100 words, see script to limit words
+ or connected w twitter. 
+ conditionals for IE in some cases?
*/


//R - Global Variables to feed Iframe. 
var val_bg;
var val_people;
var val_cartel;
var val_cmessage;
var val_p_a;
var val_p_b;
var val_p_c;
var val_p_d;


//R - M E S S A G E   F L A G - - - - - - - - - - - - - - - - - - - - - - - - //
$(document).ready(function() {
	$("#message button").click(function(event){
		//  $('#cartel', 'h1').html("<b>Appended text</b>");
		event.preventDefault();

		var newtext = $('input').val(); //get text value from input	
			val_cmessage	= newtext;
		$('#cartel h2').text("!" + newtext + "!");
	}); 

});







//R - S E L E C T   I M G   F R O M   C O M B O 1  - - - - - - - - - - - - - - - - - - - - - - - - //
$( "select" ).change(function () {
	var str = "";
	
	$( "select option:selected" ).each(function() {
	 str += $( this ).text() + " "; 
 	});	
	//	$( "#test" ).text( str );

	//LANDSCAPE
	if($("#selbg").val() == "bg1"){
		$("#bg").css('background', 'Url(img/landscape_1.gif)'); 
	}
	if($("#selbg").val() == "bg2"){
		$("#bg").css('background', 'Url(img/landscape_2.gif)'); 
	}
	if($("#selbg").val() == "bg3"){
		$("#bg").css('background', 'Url(img/landscape_3.gif)'); 
	}
	if($("#selbg").val() == "bg4"){
		$("#bg").css('background', 'Url(img/landscape_4.gif)'); 
	}
	if($("#selbg").val() == "bg0"){
		$("#bg").css('background', 'Url()'); 
	}

	//PEOPLE
	if($("#selpeople").val() == "people1"){
		$("#people").css('background', 'Url(img/people_1.gif) repeat-x'); 
	}
	if($("#selpeople").val() == "people2"){
		$("#people").css('background', 'Url(img/people_2.gif) repeat-x'); 
	}
	if($("#selpeople").val() == "people3"){
		$("#people").css('background', 'Url(img/people_3.gif) repeat-x'); 
	}
	if($("#selpeople").val() == "people4"){
		$("#people").css('background', 'Url(img/people_4.gif) repeat-x'); 
	}
	if($("#selpeople").val() == "people0"){
		$("#people").css('background', 'Url()'); 
	}	

	//CARTEL
	if($("#selcartel").val() == "cartel1"){
		$("#cartel").css('background', 'Url(img/cartel_1.gif)  no-repeat center'); 
	}
	if($("#selcartel").val() == "cartel2"){
		$("#cartel").css('background', 'Url(img/cartel_2.gif)  no-repeat center'); 
	}
	if($("#selcartel").val() == "cartel3"){
		$("#cartel").css('background', 'Url(img/cartel_3.gif)  no-repeat center'); 
	}
	if($("#selcartel").val() == "cartel4"){
		$("#cartel").css('background', 'Url(img/cartel_4.gif)  no-repeat center'); 
	}

	//PROTESTER A
	if($("#selprotester_a").val() == "protester_a1"){
		$("#protester_a img").attr('src','img/protester_a1.gif');
	}
	if($("#selprotester_a").val() == "protester_a2"){
		$("#protester_a img").attr('src','img/protester_a2.gif');
	}
	if($("#selprotester_a").val() == "protester_a3"){
		$("#protester_a img").attr('src','img/protester_a3.gif');
	}
	if($("#selprotester_a").val() == "protester_a4"){
		$("#protester_a img").attr('src','img/protester_a4.gif');
	}

	//PROTESTER B
	if($("#selprotester_b").val() == "protester_b1"){
		$("#protester_b img").attr('src','img/protester_b1.gif');
	}
	if($("#selprotester_b").val() == "protester_b2"){
		$("#protester_b img").attr('src','img/protester_b2.gif');
	}
	if($("#selprotester_b").val() == "protester_b3"){
		$("#protester_b img").attr('src','img/protester_b3.gif');
	}
	if($("#selprotester_b").val() == "protester_b4"){
		$("#protester_b img").attr('src','img/protester_b4.gif');
	}

	//PROTESTER C
	if($("#selprotester_c").val() == "protester_c1"){
		$("#protester_c img").attr('src','img/protester_c1.gif');
	}
	if($("#selprotester_c").val() == "protester_c2"){
		$("#protester_c img").attr('src','img/protester_c2.gif');
	}
	if($("#selprotester_c").val() == "protester_c3"){
		$("#protester_c img").attr('src','img/protester_c3.gif');
	}
	if($("#selprotester_c").val() == "protester_c4"){
		$("#protester_c img").attr('src','img/protester_c4.gif');
	}

	//PROTESTER D
	if($("#selprotester_d").val() == "protester_d1"){
		$("#protester_d img").attr('src','img/protester_d1.gif');
	}
	if($("#selprotester_d").val() == "protester_d2"){
		$("#protester_d img").attr('src','img/protester_d2.gif');
	}
	if($("#selprotester_d").val() == "protester_d3"){
		$("#protester_d img").attr('src','img/protester_d3.gif');
	}
	if($("#selprotester_d").val() == "protester_d4"){
		$("#protester_d img").attr('src','img/protester_d4.gif');
	}
	
//R - PARA POPUP IFRAME   - - - - - - - - - - - - - - - - - - - - - - - - //
	val_bg		= $("#selbg").val(); 	
	val_people	= $("#selpeople").val();
	val_cartel	= $("#selcartel").val();
	val_p_a		= $("#selprotester_a").val();
	val_p_b		= $("#selprotester_b").val();
	val_p_c		= $("#selprotester_c").val();
	val_p_d		= $("#selprotester_d").val();

})

.change();



//R - D R A G - - - - - - - - - - - - - - - - - - - - - - - - //
// $(function() {
// 	$( ".drag" ).draggable({axis:"x"});
// });



//R - V A R I O U S   B U T T O N S por ver...  - - - - - - - - - - - - - - - - - - - - - - - - // 
$(document).ready(function() {
	
	//R - U S E R   W E B S I T E  O N B G - - - - - - - - - - - - - - - - - - - - - - - - //	
	$("#userweb").click(function(event){
		event.preventDefault();	
		var webusertext = $('#inputuserweb').val(); //get text value from website input	
//		$('#test').text(webusertext);
		$('body #bgweb').attr({
			    "data" : webusertext,
				"src" : webusertext
			  });
		$('#test').text(webusertext);
	}); 


	//R - U R L  T O  O V E R L A Y | working - - - - - - - - - - - - - - - - - - - - - - - - //
	$("#getcodebutton").click(function(event){
		event.preventDefault();

//		var urlold =  '<iframe src="http://ricardov.cl/p/protest/preview.html" width="100%" height="250" frameborder="0" scrolling="no" hspace="10" vspace="5" style="position:fixed; bottom:0; border-style:none; width:100%; left:0; right:0; height:250px;"></iframe>';
// preview.php?selbg=bg2&selpeople=people1&selcartel=cartel1&selprotester_a=protester_a1&selprotester_b=protester_b1&selprotester_c=protester_c1&selprotester_d=protester_d1
		//Variables to build the url to be passed as iframe

//		alert(val_cmessage);

		var iframe1			= '<iframe src=';
		var url1			= '\"http://ricardov.cl/p/protest/preview.php?';

		var urlval_bg		= 'selbg=' + val_bg;
		var urlval_people	= '&selpeople=' + val_people;
		var urlval_cartel	= '&selcartel=' + val_cartel;
		var urlval_cmessage	= '&cmessage=' + val_cmessage;
		var urlval_p_a		= '&selprotester_a=' + val_p_a;
		var urlval_p_b		= '&selprotester_b=' + val_p_b;
		var urlval_p_c		= '&selprotester_c=' + val_p_c;
		var urlval_p_d		= '&selprotester_d=' + val_p_d;
		var iframe2			= '\" width=\"100%\" height=\"250\" frameborder=\"0\" scrolling=\"no\" style=\"position:fixed; bottom:0; border-style:none; width:100%; left:0; right:0; height:250px;\"></iframe>';

		$('#box h2').text(	iframe1	+ url1 + urlval_bg + urlval_people 	+ urlval_cartel + urlval_cmessage + urlval_p_a + urlval_p_b + urlval_p_c + urlval_p_d + iframe2	);
		$(".overlay").css('display', 'block'); 
		$(".overlay #info").css('display', 'none'); 
		$(".overlay #box").css('display', 'block'); 

		//	document.getElementById("allselect").submit();
		//	document.getElementById("message").submit();
		//	document.getElementById("selectlandscape").submit();

	}); 


	//R - I N F O  O V E R L A Y | working - - - - - - - - - - - - - - - - - - - - - - - - //
	$("#infobutton").click(function(event){
		event.preventDefault();
		$(".overlay").css('display', 'block'); 
		$(".overlay #box").css('display', 'none'); 
		$(".overlay #info").css('display', 'block'); 
	}); 


	//R - C L O S E  O V E R L A Y | working - - - - - - - - - - - - - - - - - - - - - - - - //
	$(".overlay #close").click(function(event){
		event.preventDefault();
		$(".overlay").css('display', 'none'); 
	}); 


});




//R -  S H O W | H I D E  H E A D E R  - - - - - - - - - - - - - - - - - - - - - - - - //
function hide_covers(id){
	var	theheader = document.getElementById('top'); 
	var message_out = document.getElementById('onoff_covers');

	if ( theheader.style.display != 'none' ) {
		theheader.style.display = 'none';
//		message_out.innerHTML = ' Show ';
	}
	else {
		theheader.style.display = 'block';
//		message_out.innerHTML = ' Hide ';
	}
}



