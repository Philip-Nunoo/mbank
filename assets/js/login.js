$("select").change(function () {
	
	

});

$('form').submit(function(ev){
    ev.preventDefault();

    var bank = $('select#companies').val();
    if (bank == ""){
		$('div#event')
		.html('<div data-alert id="myAlert" class="alert-box alert" style"opacity: 0; text-align: center;">Select Institution<a href="#" class="close">&times;</a></div>')
		.foundation();
    	return false;
    }
    var password = $('input#password').val();
    if (password==""){
    	$('div#event')
		.html('<div data-alert id="myAlert" class="alert-box alert" style"opacity: 0; text-align: center;">Enter password<a href="#" class="close">&times;</a></div>')
		.foundation();
    	return false;
    }

    
    window.location = '/mapexample/map.html';//window.location.href = 'new.php';

	var str = $(this).val();
		
});
$("#passwordInput").change(function(){
	
	// }
	// $('.alert-box')
})
  // .change();