$(document).ready(function(){
	$('#h-kiri').addClass('hkMuncul');
	$('#h-kiri2').addClass('hkMuncul');
	$('#h-kiri3').addClass('hkMuncul');
	$('.h-kanan').addClass('hkkMuncul');

});


$(window).scroll(function(){
	let wScroll = $(this).scrollTop();
	console.log(wScroll);

	if (wScroll >= 490) {
		$('#img-sumber').addClass('hkMuncul');
	}
	if (wScroll >= 1080) {
		$('.card').addClass('atMuncul');
	}
	if (wScroll >= 1803) {
		$('.jg-jarak').addClass('atMuncul');
	}
	if (wScroll >= 1964) {
		$('#jg-jarak').addClass('hkMuncul');
		$('#avatar').addClass('hkkMuncul');
	}

});