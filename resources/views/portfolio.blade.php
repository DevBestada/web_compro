@extends('layouts.default')

@section('content')
<section class="container max-sm:text-center sm:grid sm:grid-cols-2 sm:h-[90vh] max-sm:mt-4 flex flex-col-reverse justify-center items-center">
    <div class="sm:p-12 space-y-4">
        <h1 class="text-4xl font-bold">Portfolio</h1>
        <h6 class="text-1xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aspernatur similique mollitia impedit accusantium, neque fugit suscipit nihil aliquam! Quod ipsum expedita accusantium rem ut atque repellendus hic laboriosam nihil.
        </h6>
    </div>
    <div class="sm:p-12 max-sm:mb-4">
        <img class="rounded" src="{{ asset("img/work-together.jpeg") }}" alt="">
    </div>
</section>

<section class="container">
    <div class="container mx-auto flex flex-wrap items-center justify-between pb-12">
        <h2 class="w-full my-24 text-4xl font-black leading-tight text-center text-gray-800 lg:mt-8">
            Our Results
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mx-auto sm:my-12">
            @for ($i = 1; $i <= 9; $i++)
                <div class="sm:w-96 md:w-42 grid grid-cols-1 my-4 md:px-8 space-y-2">
                    <img class="sm:w-100 md:w-42 rounded mx-auto" src="{{ asset('img/work-together.jpeg') }}" alt="">
                    <h5 class="font-bold text-2xl">Project Name</h5>
                    <p class="font-extralight">Category</p>
                    {{-- <a href="#"><p class="text-center font-bold mb-5">Learn More <i class="fas fa-arrow-right ml-2"></i></p></a> --}}
                </div>
            @endfor
        </div>
    </div>
</section>
@endsection
