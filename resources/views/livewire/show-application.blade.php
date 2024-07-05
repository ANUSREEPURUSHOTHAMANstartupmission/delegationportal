<div class=" max-w-screen">

    <div>
        <div class=" bg-[#061751] mt-10 py-4">
            <h1 class=" px-2 text-white text-sm">Data from Unique ID</h1>
            <div class=" text-white w-full py-2 px-2 uppercase md:text-xl text-sm">
                <h1> {{ $application->startup->name }}</h1>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1">
                <div class=" flex md:flex-row flex-col text-white">
                    <div class="md:w-2/5 w-full">
                        <h1 class="px-3 py-2  text-white ">
                            Name of the founder
                        </h1>
                    </div>
                    <div class="md:w-3/5 w-full">
                        <h1 class="px-3 py-2  text-white  ">
                            {{ $application->startup->founder_name }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white ">
                            KSUM Unique ID
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white   ">
                            {{ $application->startup->unique_id }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            Founding Year
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            {{ $application->startup->founding_year }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            Location of Startup
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            {{ $application->startup->location }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white ">
                            Email
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white   ">
                            {{ $application->startup->email }} 
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white ">
                            Website
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white   ">
                            {{ $application->startup->website }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            Contact Number
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white  ">
                            {{ $application->startup->contact_num }}
                        </h1>
                    </div>
                </div>

            </div>

            <div class=" text-white">
                <div class=" text-white w-full py-2 px-2 uppercase md:text-xl text-sm">
                    <h1>Product Details</h1>
                </div>
                <div class=" flex md:flex-row flex-col py-2 px-2">
                    <div class="md:w-1/4 w-full">
                        Product Name 
                    </div>
                    <div class="md:w-3/4 w-full">
                        {{$application->startup->product_name}}

                    </div>
                </div>

                <div class=" flex md:flex-row flex-col py-2 px-2">
                    <div class="md:w-1/4 w-full">
                        Product Details 
                    </div>
                    <div class="md:w-3/4 w-full text-justify">
                        {{$application->startup->product_details}}
                    </div>
                </div>

                <div class=" flex md:flex-row flex-col py-2 px-2">
                    <div class="md:w-1/4 w-full">
                        Product Usecase 
                    </div>
                    <div class="md:w-3/4 w-full text-justify">
                        {{ $application->startup->product_usecase }}
                    </div>
                </div>
            </div>
        </div>

        <div class="  py-4 bg-white">
            <h1 class=" px-2 text-[#061751] text-sm py-4">Application Details</h1>
            <div class="grid lg:grid-cols-2 grid-cols-1">
                
                <div class=" flex md:flex-row flex-col text-black">
                    <div class="md:w-2/5 w-full">
                        <h1 class="px-3 py-2  text-black ">
                            Startup Stage
                        </h1>
                    </div>
                    <div class="md:w-3/5 w-full">
                        <h1 class="px-3 py-2  text-black  ">
                            {{ $application->startup_stage }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-black ">
                            Business Sector
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-black   ">
                            {{ $application->business_sector }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-black  ">
                            Revenue Generated for {{$application->current_fy}}
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-black  ">
                            {{ $application->revenue_generated_current }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-black  ">
                            Revenue Generated for {{$application->previous_fy}}
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-black  ">
                            {{ $application->revenue_generated_previous }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-black ">
                            Investment Raised
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-black   ">
                            {{ $application->investment_raised }}
                        </h1>
                    </div>
                </div>

                <div class=" flex md:flex-row  flex-col">
                    <div class=" md:w-2/5 w-full ">
                        <h1 class="px-3 py-2  text-black ">
                            I accept the terms and is willing to pay the registration fee
                        </h1>
                    </div>
                    <div class=" md:w-3/5 w-full ">
                        <h1 class="px-3 py-2  text-white   ">
                            <h1 class="px-3 py-2  text-black    ">
                                @if($application->willing_to_pay =="1")
                                    <p class="text-green-700">Yes</p>
                                @else
                                    <p class=" text-red-500">No</p>
                                @endif
                            </h1>
                        </h1>
                    </div>
                </div>
            </div>
          
            <div class=" flex md:flex-row  flex-col">
                <div class=" md:w-2/5 w-full ">
                    <h1 class="px-3 py-2  text-black  ">
                        Why do you want to participate in this delegation?
                    </h1>
                </div>
                <div class=" md:w-3/5 w-full ">
                    <h1 class="px-3 py-2  text-black  ">
                        {{ $application->why_participate }} 
                    </h1>
                </div>
            </div>
        </div>

        <section class="bg-white py-3  mt-4 w-full h-auto  flex mx-auto flex-col">
            <h1 class="px-2 text-[#061751] text-sm  text-start items-start  py-4">Selection process.</h1>
            <div class="   sm:rounded-lg  w-full items-center justify-center ">

               
                @foreach($application->remark as $remarks)

                    <div class=" flex  flex-col">
                        <div class=" flex md:flex-row  flex-col">
                            <div class=" md:w-1/4 w-full ">
                                <h1 class="px-3 py-2  text-black  ">
                                    Remarks from  {{ $remarks->user->name}}
                                </h1>
                            </div>
                            <div class=" md:w-3/4 w-full ">
                                <div class="px-3 py-2  text-black flex  ">
                                    @if($remarks->type =="Recommended") 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class=" w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    @endif  

                                    @if($remarks->type =="Not Recommended") 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                        </svg>                                  
                                    
                                    &nbsp; 
                                    @endif  

                                    @if($remarks->type =="On Hold") 
                                    <div class="  w-14">
                                        <h1 class=" text-sm text-orange-600 ">On Hold</h1>
                                    </div>
                                    
                                    @endif  

                                    <div class="w-full">
                                        <h1 class="px-3   text-black   text-justify">
                                            {{ $remarks->remark }}
                                        </h1>
                                    </div>

                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    @endforeach

                    @if($application->remark_select !=null)
                    <div class=" flex  flex-col md:flex-row ">
                        <div class=" md:w-1/4 w-full ">
                            <h1 class="px-3 py-2  text-black  ">
                                Remarks
                            </h1>
                        </div>
                        <div class=" md:w-3/4 w-full">
                            
                            <div class="px-3 py-2  text-black flex  ">
                                @if($application->status =="Selected") 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class=" w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                                @endif  

                                @if($application->status =="Rejected") 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                    </svg>                                  
                                
                                &nbsp; 
                                @endif  

                                <div class="w-full">
                                    <h1 class="px-3   text-black   text-justify">
                                        {{ $application->remark_select }} 
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class=" flex md:flex-row  flex-col">
                        <div class=" md:w-1/4 w-full ">
                            <h1 class="px-3 py-2  text-black  ">
                                Application Status
                            </h1>
                        </div>
                        <div class=" md:w-3/4 w-full ">
                            @if($application->status =="Selected")
                            <h1 class="px-3 py-2   text-green-700 font-semibold  ">
                                {{ $application->status }}
                            </h1>
                            @else
                            <h1 class="px-3 py-2   text-red-700 font-semibold  ">
                                {{ $application->status }}
                            </h1>
                            @endif
                        </div>
                    </div>

                    @if($application->paymentstatus != null)
                    <div class=" flex md:flex-row  flex-col">
                        <div class=" md:w-1/4 w-full ">
                            <h1 class="px-3 py-2  text-black  ">
                                Payment Status
                            </h1>
                        </div>
                        <div class=" md:w-3/4 w-full ">
                            <h1 class="px-3   text-black  ">
                                @if($application->paymentstatus =="Payment Completed")
                                <h1 class="px-3 py-2   text-green-700 font-semibold  ">
                                    {{ $application->paymentstatus }}
                                </h1>
                                @else
                                <h1 class="px-3 py-2   text-red-700 font-semibold  ">
                                    {{ $application->paymentstatus }}
                                </h1>
                                @endif
                            </h1>
                        </div>
                    </div>
               @endif
            </div>

        </section>

        <div>
            @can("admin:remark:view")
                <div class="flex md:flex-row flex-col items-end justify-end pb-10 pt-10">
                    @if($application->status === "Applied")
                        @if(!$application->remark()->where('user_id', auth()->id())->exists())
                            <div class="items-end flex justify-end px-8 my-2">
                                <div>
                                    <button wire:click="recommended()" class="bg-green-900 text-white px-8 rounded-sm shadow-lg font-semibold py-2">Recommended</button>
                                </div>
                            </div>
            
                            <div class="items-end flex justify-end px-8 my-2">
                                <div>
                                    <button wire:click="notrecommended()" class="bg-orange-700 text-white px-8 rounded-sm shadow-lg font-semibold py-2">Not recommended</button>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            @endcan
            
            @can("superadmin:select:view")
                <div class=" flex md:flex-row flex-col items-end justify-end pb-10 pt-10">
                    @if($application->status !="Selected" && $application->status !="Rejected")
                    <div class=" items-end flex justify-end px-8 gap-10  my-2">
                        <div>
                            <button wire:click="selectstp()" class=" bg-green-900 text-white px-8 rounded-sm shadow-lg font-semibold py-2">Select</button>
                        </div>
                    </div>
                
                    <div class=" items-end flex justify-end px-8 gap-10  my-2">
                        <div>
                            <button wire:click="rejectstp()" class=" bg-red-700 text-white px-8 rounded-sm shadow-lg font-semibold py-2">Reject</button>
                        </div>
                    </div>
                  
                    @endif
                </div>
            @endcan
        </div>
    </div>




    <div class=" text-justify py-2 font-light w-full">
         
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white">
            <h1 class=" px-2 text-[#061751] text-sm py-4">Event Details</h1>

            <section class=" container mx-auto pt-10 pb-6 px-4">
                <div class=" flex md:flex-row flex-col gap-8 ">
                    <div class="md:w-2/3 w-full ">
                        
                        <div class=" uppercase  text-lg font-semibold py-2">{{$application->event->name}}</div>
                        <div class=" text-justify py-2 font-light">{!! $application->event->description !!}</div>
                    </div>
                    <div class=" text-justify py-2 font-light md:w-1/3 w-full mx-auto bg-white ">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right ">
                                <tbody>
                                    <tr class="bg-white border-b  ">
                                        <th scope="row" class="px-3 py-4  text-gray-900 whitespace-nowrap ">
                                            Event date
                                        </th>
                                        <td class="px-3 py-4 ">
                                            {{$application->event->startdate}} - {{$application->event->enddate}}
                                        </td>
                                       
                                    </tr>
                                    <tr class="bg-white border-b  ">
                                        <th scope="row" class="px-3 py-4  text-gray-900 whitespace-nowrap ">
                                            Venue
                                        </th>
                                        <td class="px-3 py-4 ">
                                            {{$application->event->venue}}
                                        </td>
                                       
                                    </tr>
                                    <tr class="bg-white border-b  ">
                                        <th scope="row" class="px-3 py-4  text-gray-900 whitespace-nowrap ">
                                            Last date to apply
                                        </th>
                                        <td class="px-3 py-4 ">
                                            {{$application->event->lastdate}}
                                        </td>
                                       
                                    </tr>
                                    
                                    <tr class="bg-white border-b  ">
                                        <th scope="row" class="px-3 py-4  text-gray-900 whitespace-nowrap ">
                                            Registration fee
                                        </th>
                                        <td class="px-3 py-4 ">
                                            {{$application->event->fee}}/-
                                        </td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
        
                </div>
                        
            </section>
        </div>
        
    </div>
    
   
</div>