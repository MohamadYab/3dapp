$(document).ready(function() {
	
	selectPage();

	/** Function to CONTROL which page to display */
	function selectPage() {

		$('#home').show();
		$('#about').hide();
		$('#models').hide();


		$('#navHome').click(function(){
			$('#home').show();
			$('#about').hide();
			$('#models').hide();
			$('#navHome').addClass('active');	  
			$('#navAbout').removeClass('active');	  
			$('#navModels').removeClass('active');	  
		});

		$('#navAbout').click(function(){
			$('#home').hide();
			$('#about').show();
			$('#models').hide(); 
			$('#navHome').removeClass('active');	  
			$('#navAbout').addClass('active');	  
			$('#navModels').removeClass('active');	   
		});

		$('#navModels').click(function(){
			$('#home').hide();
			$('#about').hide();
			$('#models').show();
			$('#navHome').removeClass('active');	  
			$('#navAbout').removeClass('active');	  
			$('#navModels').addClass('active');	  
		});
	}
});