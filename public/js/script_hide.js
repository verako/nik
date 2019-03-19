$(document).ready(function () {
    $(".content").hide();

    $(".toggle").on("click", function (e) {
        
        var $this = $(this).prev('.content');
        var $text = $(this);
        $this.slideToggle('fast', function () {
            if ($(this).is(':visible')) {
                $text.text('Cкрыть.');
            } else {
                $text.text('Читать далее...');
            }
        });

    });
});