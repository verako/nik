$(document).ready(function(){
		$('.picture').on('click', 'a', function(){
			$(".modal2").children(".picture").removeClass('active');
			var id=this.id; console.log(id);
			$('.modal2 > div').each(function(){

        		var clas=$(this).attr('class').split(/\s+/);
        		
        		console.log(clas);
        		$.each(clas, function(index, item) {
				console.log(item);
				
			    if (item === id) {
					if($(".modal2").children("div."+id).hasClass('active')){
							$(".modal2").children("div."+id).removeClass('active');return;
						}
					$(".modal2").children("div."+id).removeClass('active');
					$(".modal2").children("div."+id).addClass('active');
					
			    }
			});

    		});

	});
});