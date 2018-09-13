$(window).load(function() {
	$('.preloader, .sk-cube-grid').fadeOut('slow/400/fast');
});


var cutTextareaBtn = document.getElementsByClassName('js-textareacutbtn');
console.log(cutTextareaBtn);

for (let i = 0; i < cutTextareaBtn.length; i += 1) {
 		cutTextareaBtn[i].addEventListener('click', function(event) {
 			var textArea = this.getAttribute('data-textarea');
			var cutTextarea = document.querySelector('.' + textArea);  
			cutTextarea.select();

			try {  
				var successful = document.execCommand('copy');  
				var msg = successful ? 'successful' : 'unsuccessful';  
				console.log('Cutting text command was ' + msg);  
			} catch(err) {  
				console.log('Oops, unable to cut');  
			}  
 		});
 }


// cutTextareaBtn.addEventListener('click', function(event) {  
  // var cutTextarea = document.querySelector('.js-cuttextarea');  
  // cutTextarea.select();

  // try {  
  //   var successful = document.execCommand('cut');  
  //   var msg = successful ? 'successful' : 'unsuccessful';  
  //   console.log('Cutting text command was ' + msg);  
  // } catch(err) {  
  //   console.log('Oops, unable to cut');  
  // }  
// });


$(document).ready(function() {

});


