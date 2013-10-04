
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


//R - SELECT IMAGE FROM COMBO - - - - - - - - - - - - - - - - - - - - - - - - //

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


//R - C L E A R - - - - - - - - - - - - - - - - - - - - - - - - //

$('#clearAll').click(function() {
//	 e.preventDefault();
localStorage.clear();	
location.reload();
});


//R - L O A D   I M G  - - - - - - - - - - - - - - - - - - - - - - - - //
$('#imgs button').click( function(event){
    // stop form from trying to send & refresh page
    event.preventDefault();
    // create post from form
    var postimg = {};
	var imgurl = '<img src="img/apple.jpg">Apple</img>';
 $('#feed').append(imgurl);
});


//R - T O G G L E   I M G - - - - - - - - - - - - - - - - - - - - - - - - //

//this togle or remove a class. can be used to show or hide elements. 
$('#feed').on('click', 'article', function(){
	//$('article').removeClass('active');
	$(this).toggleClass('active');
	//$(this).css('clor', 'red');		
});
