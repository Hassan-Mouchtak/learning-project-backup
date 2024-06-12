<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @extends('profile.layout.master')
    @section('main')
	<br><br>






<body class="from-gray-100 via-gray-400 to-gray-500 p-10">
	
	<div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md" style="border: 1px solid black;">
		<h1 class="text-3xl font-bold mb-6 text-green-400 text-center text-success">
			{{-- <img src="{{ url('/asset/header/Capturebg.png') }}" alt="" class="flex text-center items-center justify-center	"> --}}
		</h1>
		

		<h3 class="text-2xl font-bold mb-6 text-center">
			Quiz
		</h3>
		@foreach ($quiz_courses as $quiz_course)
		<form id="quizForm" class="space-y-4" action="{{ route('quizResult') }}" method="POST" >
			@csrf
			
			<!-- Question 1 -->
			{{-- <main value="{{$quiz_course['answer_option_2']}}" name="correct_answer"></main> --}}
			
			<div class="flex flex-col mb-4">
				<input type="radio" name="correct_answer" id="correctAnswer" value="{{$quiz_course['correct_answer']}}" class="">
				
				<label for="q1" class="text-lg text-gray-800 mb-2">
					{{-- <img src=" {{ url('/asset/mat/cours1/question1.png') }}" alt="" class=""> --}}
					<b>{{$quiz_course['question']}} </b>
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q1a" name="answer_option"
						value="{{$quiz_course['answer_option_1']}}" class="mr-2" onclick="checkCorrectAnswer(this)">
					<label for="q1a" class="text-gray-700">
						{{-- <img src="{{ url('/asset/mat/cours1/choix1.png') }}" alt=""> --}}
						{{$quiz_course['answer_option_1']}}
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q1b" name="answer_option"
						value="{{$quiz_course['answer_option_2']}}" class="mr-2" onclick="checkCorrectAnswer(this)">
					<label for="q1b" class="text-gray-700">
						{{-- <img src="{{ url('/asset/mat/cours1/choix2.png') }}" alt=""> --}}
						{{$quiz_course['answer_option_2']}}
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q1c" name="answer_option"
					value="{{$quiz_course['answer_option_3']}}" class="mr-2" onclick="checkCorrectAnswer(this)">
					<label for="q1c" class="text-gray-700">
						{{-- <img src="{{ url('/asset/mat/cours1/choix3.png') }}" alt=""> --}}
						{{$quiz_course['answer_option_3']}}
					</label>
				</div>
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q1d" name="q1"
					value="d" class="mr-2" required>
					<label for="q1d" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix1.png') }}" alt="">
					</label>
				</div> --}}
			</div>
			@endforeach

			<script>
				function checkCorrectAnswer(radio) {
					var correctAnswer = document.getElementById('correctAnswer');
					// correctAnswer.value = radio.value;
					correctAnswer.checked = true; // Coche automatiquement l'input correctAnswer
				}
			</script>
			
			

			<!-- Question 2 -->
			{{-- <div class="flex flex-col mb-4">
				<label for="q2" class="text-lg text-gray-800 mb-2">
					<img src="{{ url('/asset/mat/cours1/question2.png') }}" alt="">
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q2a" name="q2"
					value="a" class="mr-2" required>
					<label for="q2a" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix1.2.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q2b" name="q2"
					value="b" class="mr-2" required>
					<label for="q2b" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix2.2.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q2c" name="q2"
					value="c" class="mr-2" required>
					<label for="q2c" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix3.2.png') }}" alt="">
					</label>
				</div> --}}
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q2d" name="q2"
					value="d" class="mr-2" required>
					<label for="q2d" class="text-gray-700">
						d) Creative Style Sheet
					</label>
				</div> --}}
			{{-- </div> --}}








			{{-- <div class="flex flex-col mb-4">
				<label for="q3" class="text-lg text-gray-800 mb-2">
					<img src="{{ url('/asset/mat/cours1/question3.png') }}" alt=""></label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q3a" name="q3"
					value="a" class="mr-2" required>
					<label for="q3a" class="textw-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix3.1.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q3b" name="q3"
					value="b" class="mr-2" required>
					<label for="q3b" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix2.2.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q3c" name="q3"
					value="c" class="mr-2" required>
					<label for="q3c" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix3.3.png') }}" alt="">
					</label>
				</div> --}}
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q3d" name="q3"
					value="d" class="mr-2" required>
					<label for="q3d" class="text-gray-700">
						d) Hyper Transfer Markup Language
					</label>
				</div> --}}
			{{-- </div> --}}





			{{-- <div class="flex flex-col mb-4">
				<label for="q4" class="text-lg text-gray-800 mb-2">
					<img src="{{ url('/asset/mat/cours1/question4.png') }}" alt="">
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q4a" name="q4"
					value="a" class="mr-2" required>
					<label for="q4a" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix4.1.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q4b" name="q4"
					value="b" class="mr-2" required>
					<label for="q4b" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix4.2.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q4c" name="q4"
					value="c" class="mr-2" required>
					<label for="q4c" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix4.3.png') }}" alt="">
					</label>
				</div> --}}
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q4d" name="q4"
					value="d" class="mr-2" required>
					<label for="q4d" class="text-gray-700">
						d) Create databases
					</label>
				</div> --}}
			{{-- </div> --}}

			{{-- <div class="flex flex-col mb-4">
				<label for="q5" class="text-lg text-gray-800 mb-2">
					<img src="{{ url('/asset/mat/cours1/question5.png') }}" alt="">
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q5a" name="q5"
					value="a" class="mr-2" required>
					<label for="q5a" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix5.1.png') }}" alt="">
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q5b" name="q5"
					value="b" class="mr-2" required>
					<label for="q5b" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix5.2.png') }}" alt="">
					</label>
				</div> --}}
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q5c" name="q5"
					value="c" class="mr-2" required>
					<label for="q5c" class="text-gray-700">
						c) Java
					</label>
				</div> --}}
				{{-- <div class="flex items-center space-x-4">
					<input type="radio" id="q5d" name="q5"
					value="d" class="mr-2" required>
					<label for="q5d" class="text-gray-700">
						<img src="{{ url('/asset/mat/cours1/choix5.3.png') }}" alt="">
					</label>
				</div>
			</div> --}}





			
			{{-- <div class="flex flex-col mb-4">
				<label for="q6" class="text-lg text-gray-800 mb-2">
					6. What is the purpose of a CSS selector?
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q6a" name="q6"
					value="a" class="mr-2" required>
					<label for="q6a" class="text-gray-700">
						a) To select elements in HTML
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q6b" name="q6"
					value="b" class="mr-2" required>
					<label for="q6b" class="text-gray-700">
						b) To define styles for a webpage
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q6c" name="q6"
					value="c" class="mr-2" required>
					<label for="q6c" class="text-gray-700">
						c) To create variables in JavaScript
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q6d" name="q6"
					value="d" class="mr-2" required>
					<label for="q6d" class="text-gray-700">
						d) To structure HTML documents
					</label>
				</div>
			</div> --}}

			{{-- <div class="flex flex-col mb-4">
				<label for="q7" class="text-lg text-gray-800 mb-2">
					7. What does the acronym API stand for?
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q7a" name="q7"
					value="a" class="mr-2" required>
					<label for="q7a" class="text-gray-700">
						a) Advanced Programming Interface
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q7b" name="q7"
					value="b" class="mr-2" required>
					<label for="q7b" class="text-gray-700">
						b) Application Programming Interface
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q7c" name="q7"
					value="c" class="mr-2" required>
					<label for="q7c" class="text-gray-700">
						c) Automated Processing Interface
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q7d" name="q7"
					value="d" class="mr-2" required>
					<label for="q7d" class="text-gray-700">
						d) Association of Programmers and Inventors
					</label>
				</div>
			</div> --}}

			{{-- <div class="flex flex-col mb-4">
				<label for="q8" class="text-lg text-gray-800 mb-2">
					8. What is the purpose of the "alt" attribute in an
					HTML image tag?
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q8a" name="q8"
					value="a" class="mr-2" required>
					<label for="q8a" class="text-gray-700">
						a) It sets the alignment of the image.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q8b" name="q8"
					value="b" class="mr-2" required>
					<label for="q8b" class="text-gray-700">
						b) It defines the alternative text for the image.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q8c" name="q8"
					value="c" class="mr-2" required>
					<label for="q8c" class="text-gray-700">
						c) It specifies the size of the image.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q8d" name="q8"
					value="d" class="mr-2" required>
					<label for="q8d" class="text-gray-700">
						d) It sets the border color of the image.
					</label>
				</div>
			</div> --}}

			{{-- <div class="flex flex-col mb-4">
				<label for="q9" class="text-lg text-gray-800 mb-2">
					9. In JavaScript, what does the "typeof" operator
					do?
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q9a" name="q9"
					value="a" class="mr-2" required>
					<label for="q9a" class="text-gray-700">
						a) It checks if a variable is defined.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q9b" name="q9"
					value="b" class="mr-2" required>
					<label for="q9b" class="text-gray-700">
						b) It returns the type of a variable or expression.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q9c" name="q9"
					value="c" class="mr-2" required>
					<label for="q9c" class="text-gray-700">
						c) It concatenates strings.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q9d" name="q9"
					value="d" class="mr-2" required>
					<label for="q9d" class="text-gray-700">
						d) It loops through an array.
					</label>
				</div>
			</div> --}}

			{{-- <div class="flex flex-col mb-4">
				<label for="q10" class="text-lg text-gray-800 mb-2">
					10. What is the purpose of the "padding" property in
					CSS?
				</label>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q10a" name="q10"
					value="a" class="mr-2" required>
					<label for="q10a" class="text-gray-700">
						a) It sets the background color of an element.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q10b" name="q10"
					value="b" class="mr-2" required>
					<label for="q10b" class="text-gray-700">
						b) It defines the width of an element
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q10c" name="q10"
					value="c" class="mr-2" required>
					<label for="q10c" class="text-gray-700">
						c) It adds space inside the borders of an element.
					</label>
				</div>
				<div class="flex items-center space-x-4">
					<input type="radio" id="q10d" name="q10"
					value="d" class="mr-2" required>
					<label for="q10d" class="text-gray-700">
						d) It controls the visibility of an element
					</label>
				</div>
			</div> --}}

			<hr>

			<!-- Navigation Buttons -->
			<div class="flex justify-between">
				<button type="button" onclick="prevQuestion()"
					class="bg-blue-500 hover:bg-blue-600 
						text-white px-4 py-1 rounded-md">
						<i class="fa-solid fa-arrow-left"></i>
				</button>
				
				<button type="button" onclick="nextQuestion()"
						class="bg-blue-500 hover:bg-blue-600 
							text-white px-4 py-1 rounded-md">
							<i class="fa-solid fa-arrow-right"></i>				
				</button>
			</div>
			<hr>

			{{-- <button type="button" onclick="submitQuiz()"
					class="bg-green-500 text-white px-4 py-2 
					rounded-md mt-8">
				Submit
			</button> --}}

			<input type="submit"
					class="bg-green-500 text-white px-4 py-2 
					rounded-md mt-8" value="Submit">
				

			<button type="button" onclick="restartQuiz()"
					class="bg-red-500 text-white px-3 py-2 
							rounded-md mt-4">
							<i class="fa-solid fa-arrows-rotate"></i>
			</button>
			<div id="result" class="mt-8 hidden">
				<h2 class="text-2xl font-bold mb-4 text-center">
					???? Résultat du quiz
				</h2>
				<p id="score" class="text-lg 
									font-semibold mb-2 
									text-center">
				</p>
				<p id="feedback" class="text-gray-700 text-center"></p>
			</div>
		</form>

		
	</div>
	
	
	
</body>
<br>
<br>
<br>
<br>
<br>
<script src="{{ asset('js/index.js') }}"></script>

    @endsection
    
    
</body>
</html>

	
    

