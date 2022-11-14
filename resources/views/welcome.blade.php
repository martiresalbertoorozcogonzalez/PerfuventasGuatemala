<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Perfuventas Guatemala</title>

        @vite('resources/css/app.css')

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

        <style>
            .imagen{ 
                background-image:url( {{asset('img/3.png')}} );
                height: 150px;
                width: 150px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>

    </head>
     
    <body>

        {{-- Nav de la pagina --}}
        <nav class="bg-gray-900 py-2 relative">
            <div class="container mx-auto flex px-8 xl:px-0">

              <div class="flex flex-grow items-center">
                    <img src="img/Perfuventas.png" width="60px">
                </div>
                
                <div class="flex lg:hidden">
                <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" onclick="openMenu();">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </div>
                <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 left-0
                    bg-gray-900 w-full lg:w-auto items-center py-14 lg:py-0 px-8 sm:px-24 lg:px-0">
                    <div class="flex flex-col lg:flex-row mb-8 lg:mb-0">
                        <a href="" class="text-white hover:text-opacity-75 lg:mr-7 mb-8 lg:mb-0">Inicio</a>
                        <a class="text-white hover:text-opacity-75 lg:mr-7 mb-8 lg:mb-0">Quien somos</a>
                        <a class="text-white hover:text-opacity-75 lg:mr-7 mb-8 lg:mb-0">Perfumeria de mujer</a>
                        <a class="text-white hover:text-opacity-75 lg:mr-7 mb-8 lg:mb-0">Perfumeria de hombre</a>
                        <a class="text-white hover:text-opacity-75 lg:mr-7 mb-8 lg:mb-0">Contacto</a>
                    </div>
                    <div class="flex flex-col lg:flex-row text-center">
                        <a href="{{ route('login') }}" class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white hover:text-gray-800 transition duration-500 ease-in-out lg:mr-4 mb-8 lg:mb-0">Iniciar Sesion</a>
                        <a href="{{ route('register') }}" class="text-white bg-blue-500 border border-blue-500 py-2.5 px-5 rounded-md hover:bg-blue-700 hover:border-blue-600 transition duration-500 ease-in-out">Registrate</a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Seccion para imagen Logo empresa --}}
        <div class="lg:flex hidden container mx-auto mt-7">
            <div class="imagen bg-contain animate-bounce"></div>
        </div>
      
        {{-- Seccion barra secundaria --}}
        <div class="bg-red-500 relative">
            <div class="container mx-auto lg:flex hidden flex-col lg:flex-row justify-between  py-2 px-10 gap-3 uppercase">
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Inicio</h1>
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Quienes Somos</h1>
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Perfumeria mujer</h1>
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Perfumeria hombre</h1>
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Estuches</h1>
                 <h1 class="font-EB tracking-wider text-white text-md hover:text-opacity-75">Contacto</h1>
            </div>
        </div>
        
        {{-- Seccion de nuestros servicios --}}
        <div class="bg-white container mx-auto px-5 py-12">
        
           <div class="flex flex-wrap justify-around gap-3 mt-3"> 
            
            <div class="bg-blue-400 text-white font-bold rounded-3xl pb-2">
                <img  src="{{ asset('img/Flatline.png') }}" style="width: 300px; height:250px;" alt="">
                <h1 class="text-center font-bold text-xl">Tienda en linea</h1>
            </div>

            <div class="bg-blue-400 text-white font-bold ml-3 rounded-3xl pb-2">
                <img src="{{ asset('img/Onlinepresentation.png') }}" style="width: 300px; height:250px;" alt="">
                <h1 class="text-center font-bold text-xl mr-3">Envio gratis</h1>
            </div>

            <div class="bg-blue-400 text-white font-bold ml-3 rounded-3xl pb-2">
                <img src="{{ asset('img/Moneytransfer.png') }}" style="width: 300px; height:250px;" alt="">
                <h1 class="text-center font-bold text-xl mr-3">Pago contra entrega</h1>
            </div>

           </div> 
        
        </div>
       
        {{-- Seccion Perfumeria reciente --}}
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-xl font-bold title-font text-red-500 uppercase">Perfumeria recientes</h1>
            </div>
            <div class="flex flex-wrap -m-4">
              
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
            
              
              
              
              
            </div>
          </div>
        </section>

        {{-- Seccion primer llamado a la accion--}}
        <div class="bg-red-500  relative">
          <div flex flex-row>
              <p class="font-EB text-white text-xl text-center py-1 uppercase">Tus compras en linea en un lugar seguro</p>  
          </div>
        </div>
     
        {{-- Seccion pequeña Perfumeria de mujer --}}
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-xl font-bold title-font text-red-500 uppercase">Perfumeria de mujer</h1>
            </div>
            <div class="flex flex-wrap -m-4">
              
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="flex justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Ver todos
            </button>
          </div>
        </section>

        {{-- Seccion pequeña Perfumeria de hombre --}}
        <section class="text-gray-600 body-font">
          
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-xl font-bold title-font text-red-500 uppercase">Perfumeria de Hombre</h1>
            </div>
            <div class="flex flex-wrap -m-4">
              
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/4.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">CKin2U</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/1.jpg') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Perfume de Hombre</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Adidas Team Force</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <div class="flex justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Ver todos
            </button>
          </div>
        </section>
        
        {{-- Seccion primer llamado a la accion--}}
        <div class="bg-red-500 relative my-20">
          <div flex flex-row>
              <p class="font-EB text-white text-xl text-center py-1 uppercase">Envio gratis a la puerta de tu casa</p>  
          </div>
        </div>
    
    
        {{-- Seccion estuches --}}
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-xl font-bold title-font text-red-500 uppercase">Estuches recientes</h1>
            </div>
            <div class="flex flex-wrap -m-4">

              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/estuchedos.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Perry Ellis Pink</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/cancan.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Can Can</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q590.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/estuchedos.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Perry Ellis Pink</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/estuchedos.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Perry Ellis Pink</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/cancan.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Can Can</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q590.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="flex relative">
                  <img alt="gallery" class="m-auto absolute inset-0 h-full object-cover object-center" src="{{ asset('img/estuchedos.png') }}">
                  <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-400 bg-white opacity-0 hover:opacity-100">
                   
                    <p class="tracking-widest text-sm title-font font-medium text-red-500 my-1">Estuche de mujer</p>
                    <h1 class="title-font text-xl font-bold text-gray-900 my-1">Perry Ellis Pink</h1>
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                    <div class="flex flex-row justify-between mt-2">
                      <h2 class="tracking-widest text-md title-font font-bold text-red-500 my-1">Precio : Q390.00</h2>
                      <a href="#" class="mt-1 text-gray-500 text-md hover:text-red-500 inline-flex items-center">Realizar pedido
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                          <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </div>

                  </div>
                </div>
              </div>

            </div>
            
          </div>
          <div class="flex justify-center py-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Ver todos
            </button>
          </div>
        </section>
 
        {{-- Seccion de nuestras marcas--}}
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <h1 class="sm:text-3xl text-3xl font-bold title-font mb-4 text-red-600">Marcas que distribuimos</h1>
            </div>
            <div class="flex flex-wrap -m-4 text-center">
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="px-4 py-6 rounded-lg">
                  <img src="{{ asset('img/Carolina-Herrera-Logo-3.png') }}">
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="px-4 py-6 rounded-lg -mt-4">
                   <img src="{{ asset('img/Calvin_Klein_Logo_PNG11.png') }}">
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="px-4 py-6 rounded-lg -mt-14">
                  <img src="{{ asset('img/Adidas-LogoPNG1.png') }}" alt="">
                </div>
              </div>
              <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                <div class="px-4 py-6 rounded-lg">
                  <img src="{{ asset('img/Diesel-LogoPNG1.png') }}" alt="">
                  
                </div>
              </div>
              
            </div>
          </div>
        </section>

        {{-- Seccion del footer--}}
        <footer class="bg-gray-800 text-white body-font">
          <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
              
              <div class="flex flex-grow items-center">
                    <img src="img/Perfuventas.png" width="60px">
              </div>
              <span class="ml-3 text-xl">PerfuventasGuatemala</span>
            </a>
            <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 PerfuventasGuatemala</p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
              <a class="text-white">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-white">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
            </span>
          </div>
        </footer>

        {{-- Scrips de la pagina--}}

        {{-- Script para el NAV tamaño celular --}}
        <script>
            function openMenu() {
                let menu = document.getElementById('menu');

                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                }else {
                    menu.classList.add('hidden')
                }
            }
        </script>

        {{-- Script Slider --}}
        {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper('.mySwiper', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
            delay: 6000,
            disableOnInteraction: false,
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        });
        </script> --}}
        

    </body>

</html>
