/* events * http://www.w3schools.com/jsref/dom_obj_event.asp  */

//TIC TAC TOE 
/* events on classes */

var things = document.getElementsByClassName('thing');
var clicks = 0;

for (var i = 0; i < things.length; i++) {
    things[i].addEventListener('click', function() {
		document.getElementById('things').value = ++clicks;
		var valBoton = document.getElementById('things').value;
		if(clicks == 1){
	    	this.innerHTML = 'O';	
	    	this.style.background ='red'
		}
		
		if(clicks == 2){
	    	this.innerHTML = 'X';	
	    	this.style.background ='blue'
		}
		if(clicks == 3){
			clicks = 0;
	    	this.style.background ='CornFlowerBlue'
			//this.innerHTML = valBoton;	
			this.innerHTML = '.';
		}
		console.log(clicks);
		
    }); // return false. prevent click from doing anything else. 

/*	//FUNCTION CHANGE MESSAGE
	function changeOutput() {
	    output.innerHTML = 'kitty says hello & goodbye';
	}
	 changeOutput(); // run the function
*/	
};

function thingDo(el){
    console.log('thing clicked');
    el.style.background = '#f0f';
    var text = el.innerHTML + ' clicked';
    outputText(text);
    this.innerHTML = 'x';
}
//TIC TAC TOE ENDS

/* forms */
var box = document.getElementById('box');
box.onfocus = function(){
    console.log('box has focus');
    console.log(this); // this refers to element where event occurred
    
    if (!this.value) { this.value = 'dogs & cats' };

    output.innerHTML = 'enter any text please';
    catBack(cat.oldsrc);
}

var button = document.getElementById('submit');
submit.onclick = function(event){
    
    // event can pass things to your f(x) if you want
    console.log(event);
    console.log(event.screenX); // you can get mouselocation even without a click.      
    
    event.preventDefault(); // prevent link or button from doing anything else;
    
    button.innerHTML = box.value;
    box.value = 'again plz';
}


