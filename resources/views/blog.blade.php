@extends('layouts.default')

@section('content')
    <section class="container max-sm:text-center sm:grid sm:grid-cols-2 sm:h-[90vh] max-sm:mt-4 flex flex-col-reverse justify-center items-center">
        <div class="sm:p-12 space-y-4">
            <h1 class="text-4xl font-bold">Blog</h1>
            <h6 class="text-1xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aspernatur similique mollitia impedit
                accusantium, neque fugit suscipit nihil aliquam! Quod ipsum expedita accusantium rem ut atque repellendus
                hic laboriosam nihil.
            </h6>
        </div>
        <div class="sm:p-12 max-sm:mb-4">
            <img class="rounded" src="{{ asset('img/work-together.jpeg') }}" alt="">
        </div>
    </section>

    <section class="container mx-auto flex flex-wrap items-center justify-between pb-12">
        <h2 class="w-full mt-16 sm:my-24 text-4xl font-black leading-tight text-center text-gray-800 lg:mt-8">
            Our Blog
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mx-auto">
            @for ($i = 1; $i <= 9; $i++)
            <div class="mx-auto w-11/12 rounded mt-12">
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
                        <a href="#">Read More <i class="ml-2 fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>
@endsection
