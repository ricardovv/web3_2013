/* OPTIONS
+ To preview icons pon list, it is possible?
http://craigsworks.com/projects/qtip/demos/content/thumbnail

http://www.codeproject.com/Questions/559452/loadplushtmlpluspageplusinplusdivplustagplususingp

http://javascript.info/tutorial/cross-window-messaging-with-postmessage
+ mesage up to 100 words, see script to limit words
+ or connected w twitter. 

- conditionals for IE in sme cases?
+ salvar datos php
http://lia.unet.edu.ve/Dai/EjemplosJS/Almacen.html

- Embed code
http://www.siegemedia.com/embed-code-generator


*/


//R - M E S S A G E   F L A G - - - - - - - - - - - - - - - - - - - - - - - - //
$(document).ready(function() {
	$("#message button").click(function(event){
		//  $('#cartel', 'h1').html("<b>Appended text</b>");
		event.preventDefault();

		var newtext = $('input').val(); //get text value from input	
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
	if($("#selbg").val() == "landscape1"){
		$("#bg").css('background', 'Url(img/landscape_1.gif)'); 
	}
	if($("#selbg").val() == "landscape2"){
		$("#bg").css('background', 'Url(img/landscape_2.gif)'); 
	}
	if($("#selbg").val() == "landscape3"){
		$("#bg").css('background', 'Url(img/landscape_3.gif)'); 
	}
	if($("#selbg").val() == "landscape4"){
		$("#bg").css('background', 'Url(img/landscape_4.gif)'); 
	}
	if($("#selbg").val() == "landscape0"){
		$("#bg").css('background', 'Url()'); 
	}


	//PEOPLE
	if($("#selectpeople").val() == "people1"){
		$("#people").css('background', 'Url(img/people_1.gif) repeat-x'); 
	}
	if($("#selectpeople").val() == "people2"){
		$("#people").css('background', 'Url(img/people_2.gif) repeat-x'); 
	}
	if($("#selectpeople").val() == "people3"){
		$("#people").css('background', 'Url(img/people_3.gif) repeat-x'); 
	}
	if($("#selectpeople").val() == "people4"){
		$("#people").css('background', 'Url(img/people_4.gif) repeat-x'); 
	}
	if($("#selectpeople").val() == "people0"){
		$("#people").css('background', 'Url()'); 
	}
	

	//CARTEL
	if($("#selectcartel").val() == "cartel1"){
		$("#cartel").css('background', 'Url(img/cartel_1.gif)  no-repeat center'); 
	}
	if($("#selectcartel").val() == "cartel2"){
		$("#cartel").css('background', 'Url(img/cartel_2.gif)  no-repeat center'); 
	}
	if($("#selectcartel").val() == "cartel3"){
		$("#cartel").css('background', 'Url(img/cartel_3.gif)  no-repeat center'); 
	}
	if($("#selectcartel").val() == "cartel4"){
		$("#cartel").css('background', 'Url(img/cartel_4.gif)  no-repeat center'); 
	}

	//PROTESTER A
	if($("#selectprotester_a").val() == "protester_a1"){
		$("#protester_a img").attr('src','img/protester_a1.gif');
	}
	if($("#selectprotester_a").val() == "protester_a2"){
		$("#protester_a img").attr('src','img/protester_a2.gif');
	}
	if($("#selectprotester_a").val() == "protester_a3"){
		$("#protester_a img").attr('src','img/protester_a3.gif');
	}
	if($("#selectprotester_a").val() == "protester_a4"){
		$("#protester_a img").attr('src','img/protester_a4.gif');
	}


	//PROTESTER B
	if($("#selectprotester_b").val() == "protester_b1"){
		$("#protester_b img").attr('src','img/protester_b1.gif');
	}
	if($("#selectprotester_b").val() == "protester_b2"){
		$("#protester_b img").attr('src','img/protester_b2.gif');
	}
	if($("#selectprotester_b").val() == "protester_b3"){
		$("#protester_b img").attr('src','img/protester_b3.gif');
	}
	if($("#selectprotester_b").val() == "protester_b4"){
		$("#protester_b img").attr('src','img/protester_b4.gif');
	}

	//PROTESTER C
	if($("#selectprotester_c").val() == "protester_c1"){
		$("#protester_c img").attr('src','img/protester_c1.gif');
	}
	if($("#selectprotester_c").val() == "protester_c2"){
		$("#protester_c img").attr('src','img/protester_c2.gif');
	}
	if($("#selectprotester_c").val() == "protester_c3"){
		$("#protester_c img").attr('src','img/protester_c3.gif');
	}
	if($("#selectprotester_c").val() == "protester_c4"){
		$("#protester_c img").attr('src','img/protester_c4.gif');
	}

	//PROTESTER D
	if($("#selectprotester_d").val() == "protester_d1"){
		$("#protester_d img").attr('src','img/protester_d1.gif');
	}
	if($("#selectprotester_d").val() == "protester_d2"){
		$("#protester_d img").attr('src','img/protester_d2.gif');
	}
	if($("#selectprotester_d").val() == "protester_d3"){
		$("#protester_d img").attr('src','img/protester_d3.gif');
	}
	if($("#selectprotester_d").val() == "protester_d4"){
		$("#protester_d img").attr('src','img/protester_d4.gif');
	}
	
})
.change();



//R - D R A G - - - - - - - - - - - - - - - - - - - - - - - - //
//$(function() {
//	$( ".drag" ).draggable({axis:"x"});
//});





//R - V A R I O U S   B U T T O N S por ver...  - - - - - - - - - - - - - - - - - - - - - - - - // 
$(document).ready(function() {
	
	//R - U S E R   W E B S I T E  O N B G - - - - - - - - - - - - - - - - - - - - - - - - //	
	// example - www.codingforums.com/showthread.php?t=246606
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
		var theurl =  '<iframe src="http://ricardov.cl/p/protest/preview.html" width="100%" height="250" frameborder="0" scrolling="no" hspace="10" vspace="5" style="position:fixed; bottom:0; border-style:none; width:100%; left:0; right:0; height:250px;"></iframe>';

	    var theurl2 = '  hola  ';
		$('#box h2').text(	theurl	);
		$(".overlay").css('display', 'block'); 
		$(".overlay #info").css('display', 'none'); 
		$(".overlay #box").css('display', 'block'); 

		document.getElementById("allselections").submit();
		//	document.getElementById("message").submit();
		// document.getElementById("selectlandscape").submit();

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
		message_out.innerHTML = ' Show ';
	}
	else {
		theheader.style.display = 'block';
		message_out.innerHTML = ' Hide ';
	}
}





//R - M E S S A G E  T O  O V E R L A Y | working - - - - - - - - - - - - - - - - - - - - - - - - //
// $(document).ready(function() {
// 	$("#getcodebutton").click(function(event){
// 		event.preventDefault();
// 		var theurl =  '<iframe src="preview.html" width="100%" height="250" frameborder="0" scrolling="no" hspace="10" vspace="5" style="position:absolute; bottom:0px; border-style:none; width:100%; height:250px;"></iframe>';
// 	    var theurl2 = '  hola  ';
// 		$('#box h2').text(	theurl	);

// 		$(".overlay").css('display', 'block'); 
// 	}); 

// });





// function nWin(){
// 	var wFeatures = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes, width=200, height=200";
// 	var w = window.open(["", "CopyCode", wFeatures);
// 	var myhtml = $('html #wrapper').html();
// 	//write html to new window
// 	$(w.document.body).html(myhtml);
// }
// 
// $(function(){
// 	$("button#getcodebutton").click(nWin);
// });



// BEtter paste web behind?
//from http://jsfiddle.net/zCdrn/1/
// opens new window w css styles

// function printWindow(){ 
// 	var printWindow = window.open("", "Print", "status=no, toolbar=no, scrollbars=yes", "false" );
// 		$("link, style, script").each(function() {
// 			$(printWindow.document.head).prepend($(this).clone())
// 		});
// 	var toInsert = $("html").html();
// 	$(printWindow.document.body).append(toInsert);
//  } 
// $(function(){
// 	$("button#buttonpreview").click(printWindow);
// });


//TUTORIALS TO SE
//PRINT
// http://www.bennadel.com/blog/1591-Ask-Ben-Print-Part-Of-A-Web-Page-With-jQuery.htm

// A - works js how to add address
// function open_win(){
// 	window.open('http://www.example.com','mywindow','scrollbars=yes, resizable=no, width=800, height=600')
// 
// }

// B - THIS WORKS FINE!
// $(document).ready(function(){
// //    $('.newWindow').click(function (event){ //old butotn link 
//     $('.preview').click(function (event){
// //        var url = $(this).attr("href"); //gets url from clicked link. 
//         var url = "http://www.elmostrador.cl"; //gets url from clicked link. 
//         var windowName = "THIS IS A PREVIEW";
//         var windowSize = "width=200,height=200";
//         window.open(url, windowName, windowSize);
//         event.preventDefault();
//     });
// });

// C- works better...
// $('.preview').click(function(e){
// 	window.open('http://www.elmostrador.cl','Continue_to_Application','resize=yes, width=800,height=600');
// 	e.preventDefault();
// 	return false;
// })

// D - USED TO PRINT 
// Working, but I need to open w the content, js, css & html
// function printClick(){
// 	var w = window.open();
// 	var myhtml = $("#wrapper").html();
// 	//write html to new window
// 	$(w.document.body).html(myhtml);
// }
// 
// $(function(){
// 	$("a#print").click(printClick);
// });

// E - USED TO TEST VALUE PASSED FORM WEB FIELD 
// function printClick(){
// 	var myhtml = $("#userweb input").html();
// 	var w = window.open(myhtml);
// 	//write html to new window
// 	$(w.document.body).html(myhtml);
// }

// $(function(){
// 	$("a#print").click(printClick);
// });


//R - C L E A R  localstorage - - - - - - - - - - - - - - - - - - - - - - - - //
// $('#clearAll').click(function() {
// //	 e.preventDefault();
// localStorage.clear();	
// location.reload();
// });


//R - L O A D   I M G - - - - - - - - - - - - - - - - - - - - - - - - //
// $('#imgs button').click( function(event){
//     // stop form from trying to send & refresh page
//     event.preventDefault();
//     // create post from form
//     var postimg = {};
// 	var imgurl = '<img src="img/apple.jpg">Apple</img>';
//  $('#feed').append(imgurl);
// });


//R - T O G G L E   I M G - - - - - - - - - - - - - - - - - - - - - - - - //

//this togle or remove a class. can be used to show or hide elements. 
// $('#feed').on('click', 'article', function(){
// 	//$('article').removeClass('active');
// 	$(this).toggleClass('active');
// 	//$(this).css('clor', 'red');		
// });