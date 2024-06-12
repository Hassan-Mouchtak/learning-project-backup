

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learn</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    @extends('profile.layout.master')
    @section('main')
    
  









    {{-- <div class="flex items-center justify-center h-screen">


        <div class="w-full w-80 p-4 bg-white-100 border-white-200 rounded-lg ">
         
        </div>






        <div class="w-full w-80 p-4 bg-blue border border-blue-200 rounded-lg shadow sm:p-6 dark:bg-blue-500 dark:border-blue-300">
          
            <p class="text-base font-normal text-white ">Les cours disponibles pour votre matière sont les suivants : </p>
            <ul class="my-4 space-y-3">
                @foreach ($matiere_courses as $matiere_course)
                    <li>
                        <a href="{{  url( '/Limites et continuité.quiz',$matiere_course['id'])}}"  class="flex items-center p-3 text-xl font-bold text-gray-900 rounded-lg bg-blue-700 hover:bg-gray-100 group hover:shadow dark:bg-white-100 dark:hover:bg-blue-900 dark:text-white">
                                 
                            <span class="flex-1 ms-3 whitespace-nowrap">{{$matiere_course['titre_cours']}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            
           
        </div>



        <div class="w-full w-80 p-4 bg-white-100 border-white-200 rounded-lg ">
         
        </div>
    </div> --}}














    <div class="bg-gray-900 text-white">
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
    <div class="mx-auto max-w-lg text-center">
      <h2 class="text-3xl font-bold sm:text-4xl">Mathématiques 2ème BAC</h2>

      <p class="mt-4 text-gray-300">
        
        
      </p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-2">
        @foreach ($matiere_courses as $matiere_course)
      <a
        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
        href="{{  url('/Limites et continuité.quiz',$matiere_course['id'])}}"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="size-10 text-pink-500"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M12 14l9-5-9-5-9 5 9 5z" />
          <path
            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
          />
        </svg>

        <h2 class="mt-4 text-xl font-bold text-white">{{$matiere_course['titre_cours']}}</h2>

        <p class="mt-1 text-sm text-gray-300">
          Cours,Exercices,Devoires,Examens...
        </p>
      </a>
       @endforeach

      

      

      

 

      
    </div>

    <div class="mt-12 text-center">
      <a
        href="#"
        class="inline-block rounded bg-pink-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-pink-700 focus:outline-none focus:ring focus:ring-yellow-400"
      >
        Get Started Today
      </a>
    </div>
  </div>
</div>
    



    
    

                        
    











    @endsection
    
    
</body>
</html>




    
