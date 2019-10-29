$(document).ready(function () {
    $('#actor').autocomplete({
    	source: 'autocompleteController.php?field=' + $('#actor').attr('id'),
    	minLength: 2,
    	select: function (event, ui) {
    		$('#actor_id').val(ui.item.id);
    	}
    });
    $('#genero').autocomplete({
    	source: 'autocompleteController.php?field=' + $('#genero').attr('id'),
    	minLength: 2,
    	select: function (event, ui) {
    		$('#genero_id').val(ui.item.id);
    	}
    });
    $('#movies').autocomplete({
    	source: 'autocompleteController.php?field=' + $('#movies').attr('id')+'&genre_id='+ $('#genero_id').val(),
    	minLength: 2,
    	select: function (event, ui) {
    		$('#movies_id').val(ui.item.id);
    	}
    });
});