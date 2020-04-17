$('#contact-form').submit(function(e)){
	var name = document.getElementById('#name'),
		email = document.getElementById('#email'),
		subject = document.getElementById('#subject'),
		message = document.getElementById('#message');

	if (!name.value || !email.value || !subject.value || !message.value) {
		alertify.error('Please Check Your Entries')
	}
	else{
		$ajax({
			url: "https://formspace.io/polash.sahel@gmail.com",
			method: "POST",
			data: $(this).serrialize(),
			datatype:"json"
		});
		e.preventDefault()
		$(this).get(0).reset()
		alertify.success('Message Sent. Thanks')
	}
}