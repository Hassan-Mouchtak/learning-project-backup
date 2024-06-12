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



   <form action="{{ route('storeInputs') }}" method="POST" id="myForm" class="mb-4">
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
    
    
    

  


      
       
       <div id="inputContainer" class="grid grid-cols-3 gap-4">
           <!-- Existing input -->
           <input type="text" name="input_name[]" class="border border-gray-300 rounded-md p-2 mb-2 col-span-3 mr-10" placeholder=" Course 1">
       </div>
       <button type="button" onclick="addInput()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-20">
           Add Input
       </button>
       
       <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
           Submit
       </button>
   </form>
   
   <script>
    var count = 1; // Variable pour suivre le nombre de cours

    function addInput() {
        var container = document.getElementById("inputContainer");
        var input = document.createElement("input");
        input.type = "text";
        input.name = "input_name[]";
        input.placeholder = "Course " + (++count); // Placeholder avec le numéro de cours
        input.classList.add("border", "border-gray-300", "rounded-md", "p-2", "mb-2", "col-span-3", "mr-10");
        container.appendChild(input);
    }
</script>
   
   
   



 

  



  




    

   
   @endsection
</body>
</html>
