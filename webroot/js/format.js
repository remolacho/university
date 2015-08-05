$(function() {
	$(".phone_us").mask("(000) 000-0000",{placeholder:" "});
	$('.currency').mask("#.##0", {reverse: true, maxlength: false});
	$('.currency2').mask("#.##0,00", {reverse: true, maxlength: false});
	$('.priceproperty').mask("###000000000", {reverse: true, maxlength: 12}); /* se usa en el index de manager_properties */
	$('.sqft').mask("###0,00", {reverse: true, maxlength: 12});
	$('.numeric_mask').mask("00000", {reverse: true, maxlength: 5});
	$('.streetNumber_mask').mask("000000000", {reverse: true, maxlength: 8});
	$('.year_mask').mask("0000", {reverse: true, maxlength: 4});
	$('.numeric_di').mask("00000000000", {reverse: true, maxlength: 11});
	$('.numeric_age').mask("000",{reverse: true, maxlength: 3});
	$('.date').mask('99/99/9999');
	$('.boolean').mask('B', {translation: {'B': {pattern: /^[YynN]*$/, optional: true}}});
	$('.alphanumeric').mask('AAAAAAAAAAAAAAAAAAA', {translation: {'AAAAAAAAAAAAAAAAAAA': {pattern: /^[0-9a-zA-Z]+$/, optional: true}}});
	$(".decimal").mask("0.0",{placeholder:" "});
});