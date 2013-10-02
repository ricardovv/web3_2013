/**
 * advanced:
 * make this work offline
 * https://developer.mozilla.org/en-US/docs/HTML/Using_the_application_cache
 * note: you must edit the manifest to update files
 *

http://jsfiddle.net/ANcWc/

 */



var posts = [];

/**
 * form action
 *
 */

$('#draft button').click( function(event){

    // stop form from trying to send & refresh page
    event.preventDefault();

    // create post from form
    var post = {};
    post.title = $('#title').val();
    post.content = $('#content').val();

    // add post to posts
    posts.push(post);

    console.log('post: ',post);
    console.log('posts: ',posts);

    displayPost(post);
    storePosts(posts);

	//R 
    $("#title").val("Write here");
    $("#content").val("Write here");


});


/**
 * display posts
 *
 */

function displayPost(post){
    
    var html = '<article><h2>'+ post.title +'</h2><p>'+ post.content +'</p></article>';
    $('#feed').prepend(html);

    // var html = '<h1>'+ post.title +''+ post.content +'</h1>';
    // $('body').prepend(html);
    
}



/**
 * store posts
 *
 * note: localStorage only stores STRINGS
 *          arrays/objects must be STRINGIFIED
 *          numbers are fine but will be returned as a strong
 *
 */

function storePosts(posts){

    console.log('array: ' + posts);

    // make the array a string
    posts = JSON.stringify(posts);
    console.log('json: ' + posts);

    // store the string
    localStorage.posts = posts;

}


/**
 * localStorage = STRINGS only!!
 *
 * note: localStorage only stores STRINGS
 *  - arrays/objects must be STRINGIFIED before storage, PARSED after retrieval. 
 *  - numbers also: 
 *       var num = localStorage.mynumber;   // '10.123' 
 *           num = parseFloat(num);         // 10.123 
 *           num = parseInt(num);           // 10
 *
 */


/**
 * load posts
 *
 * note: localStorage only stores STRINGS
 *          arrays/objects must be PARSED
 *          numbers also: var num = parseInt(); 
 *
 */

function loadPosts(){

    // check for posts in storage
    if (localStorage.posts) { 

        posts = localStorage.posts;

        // turn string into an array
        posts = JSON.parse(posts);

        // loop thru items in the array
        for( i=0, count=posts.length; i<count; i++ ){

            var post = posts[i]
            console.log( post );
            displayPost(post);
						
        }
    } else { // nothing in storage?
    
        posts = []; 
    
    }

}

// load posts on page load
loadPosts();

// - - - - - - - - - - - - - - - - - - - - - - - - //
//R - 1
// $("#feed").click(function(){
// $("article").css("background-color","yellow");
// });	

//R - 2
//Cargar
var count = 0;
$('article').click( function(){
	if(count == 0){
		$(this).css("background-color","yellow");
		count = 1;
	}
	else{
		$(this).css("background-color","red");
		count = 0;	
	}	
});

//R Clear
$('#clearAll').click(function() {
// e.preventDefault();
localStorage.clear();	
location.reload();
});



//R - - - - - - LOAD APPLE - - - - - - - - - 
$('#imgs button').click( function(event){
    // stop form from trying to send & refresh page
    event.preventDefault();
    // create post from form
    var postimg = {};
	var imgurl = '<img src="img/apple.jpg">Apple</img>';
 $('#feed').append(imgurl);
});






/**
 * advanced
 * alternative way to organize your code
 * not currently in use
 */

var app = {
    load : function(){
        if (localStorage.posts) { 
            posts = localStorage.posts;
            posts = JSON.parse(posts);
            for( i=0, count=posts.length; i<count; i++ ){
                var post = posts[i]
                displayPost(post);
            }
        }        
    },
    store : function(posts){
        posts = JSON.stringify(posts);
        localStorage.posts = posts;
    }
}

// app.load();
// app.store(posts);
