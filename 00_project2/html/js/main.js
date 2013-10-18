/* OPTIONS
+ To preview icons pon list, it is possible?
http://craigsworks.com/projects/qtip/demos/content/thumbnail

http://www.codeproject.com/Questions/559452/loadplushtmlpluspageplusinplusdivplustagplususingp

http://javascript.info/tutorial/cross-window-messaging-with-postmessage
+ mesage up to 100 words, see script to limit words
+ or connected w twitter. 

- conditionals for IE in sme cases?

*/

//R - M E S S A G E   F L A G - - - - - - - - - - - - - - - - - - - - - - - - //

$(document).ready(function() {

	$("#message button").click(function(event){
		//  $('#cartel', 'h1').html("<b>Appended text</b>");
		event.preventDefault();

		// var newtext = $('p').val();	
		//  var newtext = ("<b>Appended text</b>");
		// $('#cartel h2').html("<b>Appended text</b>");
		//var newtext = $("header h1").text(); //selects the text	
		//$('#cartel h2').text("<h2>" + newtext + "</h2>");

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
	if($("#selectlandscape").val() == "landscape1"){
		$("#landscape").css('background', 'Url(img/landscape_1.gif)'); 
	}
	if($("#selectlandscape").val() == "landscape2"){
		$("#landscape").css('background', 'Url(img/landscape_2.gif)'); 
	}
	if($("#selectlandscape").val() == "landscape3"){
		$("#landscape").css('background', 'Url(img/landscape_3.gif)'); 
	}
	if($("#selectlandscape").val() == "landscape0"){
		$("#landscape").css('background', 'Url()'); 
	}


	//PEOPLE
	if($("#selectpeople").val() == "people1"){
		$("#people").css('background', 'Url(img/people_1.gif) center'); 
	}
	if($("#selectpeople").val() == "people2"){
		$("#people").css('background', 'Url(img/people_2.gif) center'); 
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


	//PROTESTER B
	if($("#selectprotester_b").val() == "protester_b1"){
		$("#protester_b img").attr('src','img/protester_b1.gif');
	}
	if($("#selectprotester_b").val() == "protester_b2"){
		$("#protester_b img").attr('src','img/protester_b2.gif');
	}
	if($("#selectprotester_b").val() == "protester_b3"){
		$("#protester_b img").attr('src','img/protester_b1.gif');
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

	
})
.change();




//R - D R A G - - - - - - - - - - - - - - - - - - - - - - - - //
$(function() {
	$( ".drag" ).draggable({axis:"x"});
});





//R - U S E R   W E B S I T E  - - - - - - - - - - - - - - - - - - - - - - - - //
// ok, pass vaues from field to test div.
$(document).ready(function() {

	$("#userweb").click(function(event){
		event.preventDefault();
		
		var webusertext = $('input').val(); //get text value from website input	
		$('#test').text(webusertext);
	}); 

});


//R - C L E A R  localstorage - - - - - - - - - - - - - - - - - - - - - - - - //
// $('#clearAll').click(function() {
// //	 e.preventDefault();
// localStorage.clear();	
// location.reload();
// });



//R - O P E N   P E V I E W   P A G E - - - - - - - - - - - - - - - - - - - - - - - - //
//from http://jsfiddle.net/zCdrn/1/
// opens new window w css styles

function printWindow(){
	var printWindow = window.open("", "Print", "status=no, toolbar=no, scrollbars=yes", "false" );

		// $("link, style, script").each(function() {
		// 	$(printWindow.document.head).append($(this).clone())
		// });

	var toInsert = $("html #wrapper").html();
	$(printWindow.document.body).append(toInsert);
}

$(function(){
	$("button#buttonpreview").click(printWindow);
});



//WORKS OPENING NEW WINDOW W SELECTED DIV
// function nWin(){
// 	var w = window.open();
// 	var myhtml = $('html #wrapper').html();
// 	//write html to new window
// 	$(w.document.body).html(myhtml);
// }
// 
// $(function(){
// 	$("button#buttonpreview").click(nWin);
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
function printClick(){
	var myhtml = $("#userweb input").html();
	var w = window.open(myhtml);
	//write html to new window
	$(w.document.body).html(myhtml);
}

$(function(){
	$("a#print").click(printClick);
});



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
$('#feed').on('click', 'article', function(){
	//$('article').removeClass('active');
	$(this).toggleClass('active');
	//$(this).css('clor', 'red');		
});
