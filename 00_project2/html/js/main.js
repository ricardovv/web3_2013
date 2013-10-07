
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
	$( "#selectlandscape option:selected" ).each(function() {
	str += $( this ).text() + " ";
	});
	$( "#test" ).text( str );

	if($("select").val() == "landscape1"){
//		$("#test").css('background', 'yellow');
		$("#landscape").css('background', 'Url(img/landscape_1.gif)'); 
	}
	if($("select").val() == "landscape2"){
//		$("#test").css('background', 'red');
		$("#landscape").css('background', 'Url(img/landscape_2.gif)'); 
	}
	if($("select").val() == "landscape3"){
//		$("#test").css('background', 'brown');
		$("#landscape").css('background', 'Url(img/landscape_3.gif)'); 
	}
	
})
.change();




//R - D R A G - - - - - - - - - - - - - - - - - - - - - - - - //
$(function() {
	$( ".drag" ).draggable({axis:"x"});
});




//R - C L E A R  localstorage - - - - - - - - - - - - - - - - - - - - - - - - //
// $('#clearAll').click(function() {
// //	 e.preventDefault();
// localStorage.clear();	
// location.reload();
// });



//R - U S E R   W E B S I T E  - - - - - - - - - - - - - - - - - - - - - - - - //
// ok, pass vaues from field to test div.
$(document).ready(function() {

	$("#userweb").click(function(event){
		event.preventDefault();
		
		var webusertext = $('input').val(); //get text value from website input	
		$('#test').text(webusertext);
	}); 

});



//R - O P E N   P E V I E W   P A G E - - - - - - - - - - - - - - - - - - - - - - - - //
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
