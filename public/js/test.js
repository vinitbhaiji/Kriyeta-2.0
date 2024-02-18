$(document).ready(function() {
    var currentQuestion = 1;
    var totalQuestions = 5;

    function updateButtons() {
        if (currentQuestion === totalQuestions) {
            $("#nextBtn").hide();
            $("#submitBtn").show();
        } else {
            $("#nextBtn").show();
            $("#submitBtn").hide();
        }
    }

    updateButtons();

    $("#nextBtn, #submitBtn").click(function() {
        $("#question" + currentQuestion).hide();
        if (currentQuestion === totalQuestions) {
            alert("All questions answered!");
            return;
        }
        currentQuestion++;
        $("#question" + currentQuestion).show();
        updateButtons();
    });

    $("#prevBtn").click(function() {
        $("#question" + currentQuestion).hide();
        currentQuestion--;
        if (currentQuestion < 1) {
            return;
        }
        $("#question" + currentQuestion).show();
        updateButtons();
    });
});

