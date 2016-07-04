$(function(){
	$('.selecter').mobilyselect({
		collection: 'personnalite',
		animation: 'fade',
		duration: 100,
		listClass: 'selecterContent',
		btnsClass: 'selecterBtns',
		btnActiveClass: 'active',
		elements: 'li',
		onChange: function(){},
		onComplete: function(){}
	});

});


$(document).ready(function(){
    $(".selecterContent img").hover(function() {
      $(this).stop().animate({opacity: "1"}, 'fast');
    },
    function() {
      $(this).stop().animate({opacity: "1"}, 'fast');
    });
  });