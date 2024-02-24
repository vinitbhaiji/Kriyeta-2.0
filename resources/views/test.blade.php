<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-sm-5 my-1">
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question1">
            <div class="py-2 h5"><b>Q. Which domain you want to opt for?</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options1">
                <ul class="domains_list flex column">
                    <li>App-Dev</li>
                    <li>Web-Dev</li>
                    <li>Machine Learning</li>
                    <li>Artificial Intelligence</li>
                    <li>Software-Dev</li>
                    <li>IOT</li>
                </ul>
                
                <form>
                @csrf
                    <input type="text" name="answer1" >
                </form>
            </div>
        </div>
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question2" style="display: none">
            <div class="py-2 h5"><b>Q. Select the language you want to learn for your domain?</b><br></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options2">
            <form>
            @csrf
                <input type="text" name="answer2" >
            </form>    
            </div>
        </div>
        <div class="question ml-sm-5 pl-sm-5 pt-2" id="question3" style="display: none">
            <div class="py-2 h5"><b>Q. What is your proficiency level?</b></div>
            <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options3">
                <ul class="proficiency flex column">
                    <li>BEGINNER</li>
                    <li>INTERMEDIATE</li>
                    <li>ADVANCE</li>
                </ul>
                <form>
                    @csrf
                    <input type="text" name="answer3">
                </form>
            </div>
        </div>
        <div class="d-flex align-items-center pt-3">
            <div id="prev">
                <button class="btn btn-primary" id="prevBtn">Previous</button>
            </div>
            <div class="ml-auto mr-sm-5">
                <button class="btn btn-success" id="nextBtn">Next</button>
                <button class="btn btn-success" id="submitBtn" style="display:none">Submit</button>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../js/test.js"></script>
</body>

</html>
