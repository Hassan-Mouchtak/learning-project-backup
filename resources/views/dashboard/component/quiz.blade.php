<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter coures</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arial&display=swap">

</head>
<body>


   
   @extends('dashboard.layout.master')
   <br>
   <br>
   <br>
   <br>
   <br>
   @section('main')
   



  
   {{-- <h2 class="text-2xl mb-4">"Ajoutez des cours et des matières à votre choix."</h2> --}}
   
   <h2 class="text-2xl mb-4" style="font-family: Arial, sans-serif; color: #333; text-shadow: 1px 1px 2px rgba(0,0,0,0.3);">Ajoutez des cours et des matières à votre choix.</h2>



   <form action=" {{ route('quizInputs') }} " method="POST" id="myForm" class="mb-4">
       @csrf

{{--        
    <span class="">
        <label for="matiere" class="mb-2 text-sm font-medium text-gray-900 dark:text-white mr-50 mb-10">Select an option</label>
        <select name="matiere" id="matiere" class="bg-gray-10 border border-gray-300 text-gray-900  rounded-lg   block w-full p-2.5 dark:bg-gray-600 
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5 mr-10">
            @foreach ($matieres as $matiere)
                <option value="{{$matiere['id']}}">{{$matiere['titre']}}</option>
            @endforeach
        </select>
    </span> --}}

    <span class="block mb-5" style="margin-right: 40px;">
        <label for="matiere" class="mb-1 text-sm font-medium text-gray-900 dark:text-white">Sélectionnez une option :</label>
        <select name="matiere" id="matiere" class="bg-gray-100 border border-gray-300 text-gray-900 rounded-lg block w-full p-2 dark:bg-gray-600 
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($matieres as $matiere)
                <option value="{{$matiere['id']}}">{{$matiere['titre']}}</option>
            @endforeach
        </select>
    </span>


    <span class="block mb-5" style="margin-right: 40px;">
        <label for="courses" class="mb-1 text-sm font-medium text-gray-900 dark:text-white">Sélectionnez une option :</label>
        <select name="courses" id="courses" class="bg-gray-100 border border-gray-300 text-gray-900 rounded-lg block w-full p-2 dark:bg-gray-600 
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach ($coursess as $courses)
                <option value="{{$courses['id']}}">{{$courses['titre_cours']}}</option>
            @endforeach
        </select>
    </span>

    <div  class="grid grid-cols-3 gap-4">
        <input type="text" name="question" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Question">
    </div>

    <div  class="grid grid-cols-3 gap-4">
        <input type="text" name="answer_option_1" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Answer_Option_1">
    </div>

    <div  class="grid grid-cols-3 gap-4">
        <input type="text" name="answer_option_2" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Answer_Option_2">
    </div>

    <div  class="grid grid-cols-3 gap-4">
        <input type="text" name="answer_option_3" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Answer_Option_3">
    </div>

    <div  class="grid grid-cols-3 gap-4">
        <input type="text" name="correct_answer" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Correct_Answer">
    </div>
    
    
    

  


      
       
      
       
       
       <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
           Submit
       </button>
   </form>
   
  
   
   
   



 

  



  




    

   
   @endsection
</body>
</html>
