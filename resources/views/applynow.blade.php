<x-layouts.base>
    
    <nav class="z-50 border-gray-200 px-2 sm:px-20 py-2.5 bg-white bg-opacity-5 absolute w-full">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="/img/logo-white.svg" alt="Logo" class="h-14">
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="hidden w-full md:block md:w-auto absolute md:relative top-16 md:top-0 left-0" id="navbar-default">
             
              <ul class="flex flex-col p-4 mt-4  rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium border-0 md:bg-transparent bg-[#06131ce6]">
                
                <li class="flex items-center justify-center"><a href="{{ route('index')}}" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:p-0" aria-current="page">Home</a></li>
               
                @if(auth()->user())
                  <li class=" text-white flex items-center justify-center">
                    <a href="{{ route('login')}}" class=" flex text-sm rounded-full focus:outline-none items-center justify-center text-center" id="user-menu-button">
                      <div class="relative">
                        <div class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700 items-center justify-center flex">
                         <div class="text-white ">
                              {{substr(auth()->user()->name, 0, 1)}}
                            </div>
                        </div>
                        <span title="online" class="flex justify-center absolute -bottom-0.5 right-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                      <span class="block ml-1 self-center text-white ">
                        {{auth()->user()->name}}
                      </span>
                    </a>
                  </li>
                @else
                  <li><a href="{{ route('startups')}}" class="block py-2 pr-4 pl-3 text-white rounded md:bg-transparent md:p-0" aria-current="page">Login</a></li>
                @endif
              </ul>
            
            </div>
        </div>
      </nav>
    
      <main class="py-24 h-[40vh] flex flex-col items-center justify-center relative" >
          <div class="absolute -z-10 w-full h-full top-0 left-0  bg-opacity-70" style="background-color: #06131ce6"></div>
          <div class="absolute -z-20 bg-cover bg-bottom bg-no-repeat w-full h-full top-0 left-0" style="background-image:url('/img/GITEX-Global.jpg')"></div>  
    
          <div class="container mx-auto text-white text-center">
    
            <div>
                <h1 class=" md:text-6xl text-3xl  font-semibold">KSUM DELEGATION</h1>
            </div>
    
          </div>
    
      </main>
    
{{-- if not applied before --}}

<div class="bg-[#fdfeff] pb-24">
    <div class=" container flex md:px-20 px-10 pt-10 ">
      
        <a href="{{ route('index')}}" class="text-blue-800 flex  items-center justify-center"><span class=" px-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
          </svg>
          </span>Back to Events
        </a>
    
    </div>
    
     <div>
    
       
        @if($startup)
           <div class=" p-8">
            <div class=" md:flex-row flex flex-col border bg-white   max-w-6xl items-center justify-center mx-auto">
                <section class=" md:w-1/2 w-full bg-[#061751] h-auto  p-3">
                    
                    <section class="bg-[#061751] w-full  h-auto items-center justify-center flex mx-auto flex-col">
                            
                            <div class=" text-white w-full py-2 px-4 uppercase md:text-xl text-sm">
                                    <h1> {{ $startup->name }}</h1>
                            </div>
                
                            <div class="   sm:rounded-lg w-full ">
                
                               
                
                                <div class=" flex md:flex-row flex-col text-white">
                                    <div class="md:w-2/5 w-full">
                                        <h1 class="px-3 py-2  text-white font-medium">
                                            Name of the founder
                                        </h1>
                                    </div>
                                    <div class="md:w-3/5 w-full">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->founder_name }}
                                        </h1>
                                    </div>
                                </div>
                             
                            </div>
                    </section>
                    <section class="bg-[#061751]  w-full h-auto  items-center justify-center flex mx-auto flex-col">
                            
                            <div class="   sm:rounded-lg  w-full ">
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            KSUM Unique ID
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->unique_id }}
                                        </h1>
                                    </div>
                                </div>
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            Founding Year
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->founding_year }}
                                        </h1>
                                    </div>
                                </div>
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            Location of Startup
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->location }}
                                        </h1>
                                    </div>
                                </div>
                             
                            </div>
                
                            <div class=" sm:rounded-lg w-full ">
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            Email
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->email }}
                                        </h1>
                                    </div>
                                </div>
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            Website
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->website }}
                                        </h1>
                                    </div>
                                </div>
                
                                <div class=" flex md:flex-row  flex-col">
                                    <div class=" md:w-2/5 w-full ">
                                        <h1 class="px-3 py-2  text-white font-medium ">
                                            Contact Number
                                        </h1>
                                    </div>
                                    <div class=" md:w-3/5 w-full ">
                                        <h1 class="px-3 py-2  text-white  ">
                                            {{ $startup->contact_num }}
                                        </h1>
                                    </div>
                                </div>
                             
                            </div>
                
                
                        <section class=" h-auto  w-full items-center justify-center flex mx-auto flex-col">
                            <div class="bg-[#061751] flex   flex-col gap-8  items-center justify-center w-full md:max-w-4xl max-w-lg">
                               
                                <div class="   sm:rounded-lg w-full">
                    
                                    <div class=" flex flex-col text-white">
                                      
                                        <div class=" flex  flex-col text-white">
                                            <div class="md:w-2/5 w-full">
                                                <h1 class="px-3 pt-4   text-white font-medium">
                                                    Product Name
                                                </h1>
                                            </div>
                                            <div class=" w-full">
                                                <h1 class="px-3 pb-4 pt-2  text-white text-justify " id="pu1">
                                                    {{$startup->product_name}}
                                                </h1>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <h1 class="px-3 pb-4 pt-2 text-white   text-justify" id="ab2">
                                                {{ substr($startup->product_details, 0,200) }}
                                            </h1>
                                            <h1 class="px-3 pb-4 pt-2 text-white   text-justify" id="ab" style="display: none">
                                                {{$startup->product_details}}
                                            </h1>
                                            <a  id="button" onclick="showproductdetails()" class=" cursor-pointer px-3 pb-4 pt-2 text-white text-sm italic   text-justify float-right">
                                               Read More
                                            </a>
                                        </div>
                                    </div>
                    
                                    <div class=" flex  flex-col text-white">
                                        <div class="md:w-2/5 w-full">
                                            <h1 class="px-3 pt-4   text-white font-medium">
                                                Product Usecase
                                            </h1>
                                        </div>
                                        <div class=" w-full">
                                            <h1 class="px-3 pb-4 pt-2  text-white text-justify " id="pu1">
                                                {{ substr($startup->product_usecase,0,200) }}
                                            </h1>

                                            <h1 class="px-3 pb-4 pt-2  text-white text-justify " style="display: none" id="pu2">
                                                {{ $startup->product_usecase }}
                                            </h1>

                                            <a id="button1" onclick="showproductusecase()" class="cursor-pointer px-3 pb-4 pt-2 text-white text-sm italic   text-justify float-right">
                                                Read More
                                             </a>
                                        </div>
                                    </div>
                                    
                                 
                                </div>
                            </div>
                        </section>
                        <h1 class=" text-justify px-8 text-sm italic text-white">Please make sure that all the given details are up to date. The selection process will be based on these details. If you want to update your startup details, please update the same in the unique ID portal before proceeding with the application.</h1>
                
                    </section>
    
                    <div class=" float-right items-end justify-end flex  my-4 flex-col mt-6 w-full md:max-w-4xl max-w-lg py-2">
                        <a  href="https://startups.startupmission.in/startup/dashboard" target="_black" class=" bg-sky-900 px-8 py-2 text-white">Update Details</a>
                    </div>
                    
                </section>
           
                <section class=" md:w-1/2 w-full container mx-auto bg-white h-full ">
                    <div class=" bg-white h-full flex flex-col  items-center justify-center">
                        <div class="w-full p-0">
                            <livewire:user.events.applicationform  :event="$event->hid"/>
                        </div>
                    </div>
                </section>
            </div>
           </div>
            
        @endif
    
       
     
     </div>
    
</div>
 


    <footer class="bg-white dark:bg-gray-800 p-6 py-3 shadow-sm bottom-0">
        <div class="mx-auto">
          <div class="flex flex-wrap flex-row -mx-4">
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:text-left">
              All right reserved &copy; {{date('Y')}}
            </div>
            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 text-center md:text-right ">
              <p class="mb-0 mt-3 md:mt-0">
                <a href="/" class="hover:text-indigo-500">
                  {{ config('app.name') }}
                </a> 
              </p>
            </div>
          </div>
        </div>
      </footer>
    
      @if(Session::has('warning'))
      <script>
          document.addEventListener('DOMContentLoaded', function() {
              showSuccessNotification('{{ Session::get('warning') }}');
          });
  
          function showSuccessNotification(message) {
              Swal.fire({
                  title: 'Update Startup Details',
                  text: message,
                  customClass: {
                      confirmButton: 'btn btn-success',
                      cancelButton: 'btn btn-danger',
                      title: 'custom-title',
                      content: 'custom-content',
                  },
                   width: '500px',
              });
          }
      </script>
  @endif
      <script>
        var button = document.querySelector('[data-collapse-toggle="navbar-default"]')
        var target = button.getAttribute('data-collapse-toggle');
        document.addEventListener('click', function(){
          document.getElementById(target).classList.toggle('hidden');
        });
      </script>


<style>
    .custom-title {
        font-size: 18px;
    }
    .custom-content{
        font-size: 16px;
    }
  </style>

  <script>
     function showproductdetails(){
        var paragraph = document.getElementById("ab2");
        var paragraph2 = document.getElementById("ab");

        var button = document.getElementById("button");

        if (paragraph.style.display === "none") 
        {
            paragraph.style.display = "block";
            paragraph2.style.display = "none";

            button.innerHTML = "Read More";
        } 
        else {
            paragraph.style.display = "none";
            paragraph2.style.display = "block";

            button.innerHTML = "Read Less";
        }
     }
  </script>

<script>
    function showproductusecase(){
       var paragraph = document.getElementById("pu1");
       var paragraph2 = document.getElementById("pu2");

       var button = document.getElementById("button1");

       if (paragraph.style.display === "none") 
       {
           paragraph.style.display = "block";
           paragraph2.style.display = "none";

           button.innerHTML = "Read More";
       } 
       else {
           paragraph.style.display = "none";
           paragraph2.style.display = "block";

           button.innerHTML = "Read Less";
       }
    }
 </script>

  </x-layouts.base>

