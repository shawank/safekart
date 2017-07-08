function main() {
$('.products').hide();
$('.category-button').on('click', function() {
	$('.products').slideToggle(400);
	});
$('.pr-button').on('click', function() {
	$('.list').slideToggle(400);
	});
}
$(document).ready(main);