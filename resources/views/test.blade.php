<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-sm-5 my-1">
        <!-- Question 1 -->
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question1">
            <div class="py-2 h5"><b>Q. Which domain you want to opt for?</b><br><br>
                <li>Web Development</li>
                <li>App Development</li>
                <li>Software Development</li>
                <li>Artificial Intelligence</li>
                <li>Machine Learning</li>
                <li>IOT</li>
            </div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options1">
                    <input type="text" name="answer1">
            </div>
        </div>
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question2" style="display: none">
            <div class="py-2 h5"><b>Q. Select the language you want to learn for your domain?</b><br>
            </div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options2">
                    <input type="text" name="answer2">
            </div>
        </div>
        <!-- Question 2 (Hidden by default) -->
        {{-- <div class="question ml-sm-5 pl-sm-5 pt-2" id="question2" style="display: none;">
            <div class="py-2 h5"><b>Q. Next question...</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options2">
                <!-- Add options for the next question -->
            </div>
        </div> --}}

        <!-- remaining questions (question3 to question5) -->
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question3" style="display: none">
            <div class="py-2 h5"><b>Q. What is your proficiency level?</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options3">
                <label class="options">Small Business Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Small Business Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Small Business Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="options">Small Business Owner or Employee
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <!-- Add other options here -->
            </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="d-flex align-items-center pt-3">
            <div id="prev">
                <button class="btn btn-primary" id="prevBtn">Previous</button>
            </div>
            <div class="ml-auto mr-sm-5">
                <button class="btn btn-success" id="nextBtn">Next</button>
                <button class="btn btn-success" id="nextBtn" style="display: none">Submit</button>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/test.js"></script>
</body>
