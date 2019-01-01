jQuery(document).ready(function() {
	$('.add-course').click(function(event) {
        $('.contain-add-course').addClass('show');
        console.log("hihi");
      });
	$('.btn-exit').click(function(event) {
		$('.contain-add-course').removeClass('show');
	});

	$('.btn-add-course').click(function(event) {
		$title = $('.title-course').val();
		console.log($title);
		// $.ajax({
		// 	url: 'Main_controller/add_course',
		// 	type: 'POST',
		// 	dataType: 'json',
		// 	data: {

		// 	},
		// })
		// .done(function() {
		// 	console.log("success");
		// })
		// .fail(function() {
		// 	console.log("error");
		// })
		// .always(function() {
		// 	console.log("complete");
		// });
		//return false;
		
	});
	$('.btn-save').click(function(event) {
		$('.form-edit').submit();
	});

	// var x = $('.btn-edit');
	// x.click(function(event) {
	// 	var y = $(this).val();
	// 	console.log(y);
	// });

$('.btn-edit').click(function(event) {
	var title = $(this).parent().prev().prev().text();
	var image = $(this).parent().parent().prev().attr("src");
	var id = $(this).parent().parent().prev().prev().val();
	console.log(id);
	$('.image-course1').attr('src', image);
	$('.title-edit').val(title);
	$('.id-edit').val(id);
	$('.image-course2').val(image);

});
});

