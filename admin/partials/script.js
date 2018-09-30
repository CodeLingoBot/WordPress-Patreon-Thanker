(function( $ ) {
	'use strict';
})( jQuery );

jQuery(document).ready(function($){
	resetDel();

	$('.addPatron').click(function() {
		addPatron();
	})
});

function resetDel() {
	var $ = jQuery;
	$('.dashicons-no').click(function() {
		removePatron(this);
	});
}

function removePatron(elem) {
	var $ = jQuery;
	var tmp = $(elem).closest('.patron-repeatable');
	$(tmp).remove();
}

function addPatron() {
	var $ = jQuery;
	var numPatrons = $('.patron-repeatable').length;
	$('input[name=num_patrons]').val(numPatrons);
	var currPatron = 'patron-' + (numPatrons);

	var tmp = $('.patron-repeatable')[0];
	var clone = $(tmp).clone();

	var clonelabel = $(clone).children('label');
	clonelabel
		.removeAttr('for')
		.attr('for', currPatron);
	var cloneinput = $(clone).children('input');
	cloneinput
		.val('')
		.removeAttr('name')
		.attr('name', currPatron);

	clone.appendTo($('#patrons'));
	resetDel();
}
