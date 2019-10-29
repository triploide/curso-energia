$(document).ready(function () {
    $('#actor').autocomplete({
    	source: 'autocompleteController.php',
    	minLength: 2,
    	select: function (event, ui) {
    		$('#actor_id').val(ui.item.id);
    	}
    });
});