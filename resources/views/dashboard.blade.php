<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                     
                    <h1 class="text-red-500 text-3xl font-bold">
                     PerfuventasGuatemala
                    </h1>

                     {{-- Seccion de Aministracion de pagina --}}
                    <div class="bg-white container mx-auto px-5 py-12">
                    
                        <div class="flex flex-col lg:flex-row items-center gap-3 mt-3"> 
                        
                           <div class="lg:w-1/3 sm:w-1/2 p-4">
                                <div class="bg-blue-400 text-white font-bold rounded-3xl pb-2">
                                    <img  src="{{ asset('img/Flatline.png') }}" style="width: 300px; height:250px;" alt="">
                                    <h1 class="text-center text-md font-bold"><a href="#">Perfumeria de mujer</a></h1>
                                </div>
                           </div>

                            <div class="lg:w-1/3 sm:w-1/2 p-4">
                            
                                <div class="bg-blue-400 text-white font-bold ml-3 rounded-3xl pb-2">
                                    
                                    <img src="{{ asset('img/Onlinepresentation.png') }}" style="width: 300px; height:250px;" alt="">
                                    <h1 class="text-center text-md font-bold mr-3"><a href="#">Perfumeria de hombre</a></h1>
                                </div>
                
                            </div>

                            <div class="lg:w-1/3 sm:w-1/2 p-4">

                            <div class="bg-blue-400 text-white font-bold ml-3 rounded-3xl pb-2">
                                <img src="{{ asset('img/Moneytransfer.png') }}" style="width: 300px; height:250px;" alt="">
                                <h1 class="text-center text-md font-bold mr-3"><a href="#">Estuches</a></h1>
                            </div>
                          
                            </div>

                            <div class="lg:w-1/3 sm:w-1/2 p-4">

                            <div class="bg-blue-400 text-white font-bold ml-3 rounded-3xl pb-2">
                                <img src="{{ asset('img/Moneytransfer.png') }}" style="width: 300px; height:250px;" alt="">
                                <h1 class="text-center text-md font-bold mr-3"><a href="#">Mensajes</a></h1>
                            </div>
                           
                            </div> 
                            
                        </div> 
                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
