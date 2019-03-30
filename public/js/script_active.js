$(document).ready(function(){
		$('.picture').on('click', 'a', function(){
			$(".carousel-inner").children("div").removeClass('active');
			var id=this.id; console.log(id);
			$('.carousel-inner > div').each(function(){

        		var clas=$(this).attr('class').split(/\s+/);
        		
        		console.log(clas);
        		$.each(clas, function(index, item) {
				console.log(item);
				
			    if (item === id) {
					if($(".carousel-inner").children("div."+id).hasClass('active')){
							$(".carousel-inner").children("div."+id).removeClass('active');return;
						}
					$(".carousel-inner").children("div."+id).removeClass('active');
					$(".carousel-inner").children("div."+id).addClass('active');
					
			    }
			});

    		});

	});
});