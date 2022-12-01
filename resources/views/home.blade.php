@extends('layouts.default')

@section('content')
    <section class="relative container header-carousel">
        <div class="overflow-hidden relative">
            <div class="container duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                data-carousel-item="active">
                <div class="flex flex-col-reverse lg:flex-row items-center gap-12 max-md:mt-10 max-lg:mt-25 px-8 lg:absolute top-44 mx-auto">
                    {{-- Content --}}
                    <div class="flex flex-1 flex-col items-center">
                        <h2
                            class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6 font-black">
                            A Simple Bookmark Manager
                        </h2>
                        <p class="font-normal text-md max-lg:text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem suscipit quibusdam, itaque ipsa
                            necessitatibus eaque non nulla ducimus a iure dolor, nobis corporis sint quam nemo expedita
                            ipsum similique soluta.
                        </p>
                    </div>
                    {{-- Image --}}
                    <div class="flex justify-center flex-1 md:mb-16 lg:mb-0 z-10">
                        <img class="rounded-lg sm:w-3/4 sm:h-3/4 md:w-6/12 md:h-full max-lg:h-3/5 lg:w-96"
                            src="https://pngimage.net/wp-content/uploads/2018/05/corporate-images-png-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex absolute lg:bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="py-2 px-4 rounded-full bg-black shadow-md" aria-current="true"
                aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="py-2 px-2 rounded-full bg-slate-300 drop-shadow-2xl ml-5" aria-current="true"
                aria-label="Slide 1" data-carousel-slide-to="0"></button>
            {{-- <button type="button"
            class="rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
            aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button> --}}
        </div>
        <button type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 top-1/2 cursor-pointer group focus:outline-none"
            data-carousel-prev="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white hover:bg-slate-200">
                <svg class="w-5 h-5 text-black sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 top-1/2 cursor-pointer group focus:outline-none"
            data-carousel-next="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white hover:bg-slate-300">
                <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </section>
    {{-- <div class="relative container my-24 bg-indigo-300  h-screen">
    <div class="flex justify-center">
        <img class="w-64 h-96 rounded" src="{{ asset('img/work-together.jpeg') }}" alt="">
    </div>
    <div class="flex align-items-center grid gap-1 py-12">
        <h1 class="font-bold text-5xl">Make Your Life Easier with Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae officia tempora quas temporibus necessitatibus neque odit ratione earum laboriosam praesentium sed ea quidem quae, distinctio vitae porro doloribus. Repellat.</p>
        <ul>
            <li>
                <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
            </li>
            <li>
                <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
            </li>
            <li>
                <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
            </li>
        </ul>
    </div>
</div> --}}
    <section class="py-8 my-16 h-screen"> 
        <div class="container mx-auto px-2 pt-4 lg:pb-12 text-gray-800">
            <div class="flex justify-center grid grid-cols-1 lg:grid-cols-2">
                <div class="flex justify-center">
                    <img class="w-80 rounded img-bottom-header-carousel max-sm:h-[16rem]" src="{{ asset('img/work-together.jpeg') }}"
                        alt="">
                </div>
                <div class="flex justify-center text-center lg:text-left space-y-3 lg:space-y-px pt-12 lg:py-32 grid gap-1">
                    <h1 class="font-bold max-lg:text-4xl lg:text-5xl">Make Your Life Easier with Us</h1>
                    <p class="max-lg:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores beatae officia tempora quas
                        temporibus necessitatibus neque odit ratione earum laboriosam praesentium sed ea quidem quae,
                        distinctio vitae porro doloribus. Repellat.</p>
                    <ul>
                        <li class="max-lg:text-xs">
                            <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
                        </li>
                        <li class="max-lg:text-xs">
                            <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
                        </li>
                        <li class="max-lg:text-xs">
                            <i class="fas fa-check mr-2"></i> Lorem ipsum, dolor sit amet consectetur
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="container max-sm:grid max-sm:grid-cols-1 max-sm:space-y-24 flex justify-center my-16">
        <div class="grid justify-items-center mx-auto">
            <h1 class="font-bold text-4xl max-sm:text-7xl">1790</h1>
            <h5 class="max-sm:text-2xl">Happy Clients</h5>
        </div>
        <div class="grid justify-items-center mx-auto">
            <h1 class="font-bold text-4xl max-sm:text-7xl">920</h1>
            <h5 class="max-sm:text-2xl">Finished Project</h5>
        </div>
        <div class="grid justify-items-center mx-auto">
            <h1 class="font-bold text-4xl max-sm:text-7xl">245</h1>
            <h5 class="max-sm:text-2xl">Skilled Experts</h5>
        </div>
    </section>

    <section class="container my-16">
        <div class="container mx-auto flex flex-wrap items-center justify-between pb-12">
            <h2 class="w-full my-2 text-4xl font-black leading-tight text-center text-gray-800 lg:mt-8">
                Explore Our Services
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mx-auto my-12">
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
                <div class="w-96 grid grid-cols-1 max-sm:w-72">
                    <img class="w-32 rounded mx-auto mb-6 max-sm:w-52" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl mx-auto mb-5">Service 1</h5>
                    <p class="text-center font-extralight mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                        autem dicta</p>
                    <p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto flex flex-wrap items-center justify-center my-16">
        <div class="grid grid-cols-1 space-y-4 lg:space-y-px lg:flex lg:justify-between text-xl text-gray-500 font-bold opacity-75">
            <span class="flex justify-center">
                <img class="rounded w-10/12 h-10" src="{{ asset('img/work-together.jpeg') }}" alt="">
            </span>

            <span class="flex justify-center">
                <img class="rounded w-10/12 h-10" src="{{ asset('img/work-together.jpeg') }}" alt="">
            </span>

            <span class="flex justify-center">
                <img class="rounded w-10/12 h-10" src="{{ asset('img/work-together.jpeg') }}" alt="">
            </span>

            <span class="flex justify-center">
                <img class="rounded w-10/12 h-10" src="{{ asset('img/work-together.jpeg') }}" alt="">
            </span>
        </div>
    </section>

    <section class="container my-16">
        <div class="container mx-auto flex flex-wrap items-center justify-between pb-12">
            <h2 class="w-full my-12 text-4xl font-black leading-tight text-center text-gray-800 lg:mt-8">
                Clients Feedback
            </h2>
            <div id="indicators-carousel" class="relative my-8" data-carousel="static">
                <div class="relative">
                    <div class="container duration-700 ease-in-out inset-0 transition-all transform translate-x-0 z-20"
                        data-carousel-item="active">
                           <div class="grid grid-cols-1 space-y-4 lg:space-y-px lg:grid-cols-3 justify-items-center mx-auto">
                                <div class="mx-auto w-11/12 rounded p-6" style="background-color: #D9DDE5;">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At consectetur maiores  adipisicing elit architecto iusto dolor  adipisicing elit siamet mamt enong</p>
                                    <div class="grid grid-cols-6 mt-5">
                                        <div class="flex justify-center">
                                            <img style="width: 50px; height: 50px;" class="rounded-full my-2" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                        </div>
                                        <div class="col-span-5 my-1 ml-2">
                                            <h3 class="text-2xl font-bold truncate">Angel Mango</h3>
                                            <h4 class="font-extralight text-gray-800">Financial Analyst</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-auto w-11/12 rounded p-6" style="background-color: #D9DDE5;">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At consectetur maiores  adipisicing elit architecto iusto dolor  adipisicing elit siamet mamt enong</p>
                                    <div class="grid grid-cols-6 mt-5">
                                        <div class="flex justify-center">
                                            <img style="width: 50px; height: 50px;" class="rounded-full my-2" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                        </div>
                                        <div class="col-span-5 my-1 ml-2">
                                            <h3 class="text-2xl font-bold truncate">Haylie Bator</h3>
                                            <h4 class="font-extralight text-gray-800">Angel Investor</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-auto w-11/12 rounded p-6" style="background-color: #D9DDE5;">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At consectetur maiores  adipisicing elit architecto iusto dolor  adipisicing elit siamet mamt enong</p>
                                    <div class="grid grid-cols-6 mt-5">
                                        <div class="flex justify-center">
                                            <img style="width: 50px; height: 50px;" class="rounded-full my-2" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                        </div>
                                        <div class="col-span-5 my-1 ml-2">
                                            <h3 class="text-2xl font-bold truncate">Lydia Passaquindici Arcand</h3>
                                            <h4 class="font-extralight text-gray-800">Fund Manager</h4>
                                        </div>
                                    </div>
                                </div>
                           </div>
                    </div>
                </div>
                <div class="flex absolute -bottom-12 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="py-2 px-4 rounded-full bg-black shadow-md" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="py-2 px-2 rounded-full bg-slate-300 drop-shadow-2xl ml-5" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="py-2 px-2 rounded-full bg-slate-300 drop-shadow-2xl ml-5" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                </div>
                <button type="button"
                    class="flex absolute top-0 -left-10 z-30 justify-center items-center px-4 top-1/2 cursor-pointer group focus:outline-none"
                    data-carousel-prev="">
                    <span
                        class="inline-flex justify-center py-3 items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black hover:bg-slate-200">
                        <i class="fas fa-chevron-left w-5 h-5 text-white sm:w-6 sm:h-6"></i>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 -right-10 z-30 justify-center items-center px-4 top-1/2 cursor-pointer group focus:outline-none"
                    data-carousel-next="">
                    <span
                        class="inline-flex justify-center py-3 items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black hover:bg-slate-300">
                        <i class="fas fa-chevron-right w-5 h-5 text-white sm:w-6 sm:h-6"></i>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <section class="container my-16">
        <div class="container mx-auto flex flex-wrap items-center justify-between pb-12">
            <h2 class="w-full my-12 text-4xl font-black leading-tight text-center text-gray-800 lg:mt-8">
                Our Latest News
            </h2>
            <div id="indicators-carousel" class="relative my-8" data-carousel="static">
                <div class="relative">
                    <div class="grid grid-cols-1 space-y-6 lg:space-y-px lg:grid-cols-3 justify-items-center mx-auto">
                        <div class="mx-auto w-11/12 rounded">
                            <div class="space-y-3">
                                <img class="rounded" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                <div class="flex">
                                    <h4 class="font-bold">Category</h4>
                                    <i style="font-size: 0.5rem;" class="max-sm:ml-4 sm:ml-9 md:ml-4 lg:ml-3 mt-2 md:mt-2 fas fa-circle"></i>
                                    <p class="text-left text-base max-sm:ml-4 sm:ml-8 md:ml-2 lg:ml-2 md:mt-0">26 Okt 2022</p>
                                </div>
                                <h4 class="font-bold text-2xl">Security Habits Putting Bussiness at Risk</h4>
                                <h6 class="text-sm">Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit adipisicing elit. Soluta laboriosam.</h6>
                                <div class="font-bold text-left">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto w-11/12 rounded">
                            <div class="space-y-3">
                                <img class="rounded" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                <div class="flex">
                                    <h4 class="font-bold">Category</h4>
                                    <i style="font-size: 0.5rem;" class="max-sm:ml-4 sm:ml-9 md:ml-4 lg:ml-3 mt-2 md:mt-2 fas fa-circle"></i>
                                    <p class="text-left text-base max-sm:ml-4 sm:ml-8 md:ml-2 lg:ml-2 md:mt-0">26 Okt 2022</p>
                                </div>
                                <h4 class="font-bold text-2xl">Security Habits Putting Bussiness at Risk</h4>
                                <h6 class="text-sm">Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit adipisicing elit. Soluta laboriosam.</h6>
                                <div class="font-bold text-left">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mx-auto w-11/12 rounded">
                            <div class="space-y-3">
                                <img class="rounded" src="{{ asset('img/work-together.jpeg') }}" alt="">
                                <div class="flex">
                                    <h4 class="font-bold">Category</h4>
                                    <i style="font-size: 0.5rem;" class="max-sm:ml-4 sm:ml-9 md:ml-4 lg:ml-3 mt-2 md:mt-2 fas fa-circle"></i>
                                    <p class="text-left text-base max-sm:ml-4 sm:ml-8 md:ml-2 lg:ml-2 md:mt-0">26 Okt 2022</p>
                                </div>
                                <h4 class="font-bold text-2xl">Security Habits Putting Bussiness at Risk</h4>
                                <h6 class="text-sm">Lorem ipsum dolor sit, amet consectetur Lorem ipsum dolor sit adipisicing elit. Soluta laboriosam.</h6>
                                <div class="font-bold text-left">
                                    Read More <i class="ml-2 fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full text-center mt-16">
                        <button class="rounded-lg bg-black text-white p-3 font-bold">More Post</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
