$(document).ready(function () {
	var currentQuestion = 1;
	var totalQuestions = 5;

	function updateButtons() {
		if (currentQuestion === totalQuestions - 2) {
			$("#nextBtn").hide();
			$("#submitBtn").show();
		} else {
			$("#nextBtn").show();
			$("#submitBtn").hide();
		}
	}

	updateButtons();

	$("#nextBtn").click(function () {
		$("#question" + currentQuestion).hide();
		if (currentQuestion === totalQuestions - 1) {
			alert("Submitted");
			return;
		}
		currentQuestion++;
		$("#question" + currentQuestion).show();
		updateButtons();
	});

	$("#prevBtn").click(function () {
		$("#question" + currentQuestion).hide();
		currentQuestion--;
		if (currentQuestion < 1) {
			return;
		}
		$("#question" + currentQuestion).show();
		updateButtons();
	});

	$("#submitBtn").click(function () {
		alert("Submitted");
		var formData = {
			answer1: $("input[name='answer1']").val(),
			answer2: $("input[name='answer2']").val(),
			answer3: $("input[name='answer3']").val(),
		};

		$.ajax({
			type: "POST",
			url: "{{ route('processform') }}",
			data: formData,
			success: function (response) {
				console.log(response);
			},
			error: function (xhr, status, error) {
				console.error(error);
			},
		});
	});
});
