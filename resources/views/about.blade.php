@extends('layouts.default')

@section('content')
<section class="container max-sm:text-center sm:grid sm:grid-cols-2 sm:h-[90vh] max-sm:mt-4 flex flex-col-reverse justify-center items-center">
    <div class="sm:p-12 space-y-4">
        <h1 class="text-4xl font-bold">About</h1>
        <h6 class="text-1xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aspernatur similique mollitia impedit accusantium, neque fugit suscipit nihil aliquam! Quod ipsum expedita accusantium rem ut atque repellendus hic laboriosam nihil.
        </h6>
    </div>
    <div class="sm:p-12 max-sm:mb-4">
        <img class="rounded" src="{{ asset("img/work-together.jpeg") }}" alt="">
    </div>
</section>

<section class="container sm:grid sm:grid-cols-2 max-sm:mt-12 flex justify-center flex-col-reverse items-center sm:h-[100vh]">
    <div class="sm:p-12 max-sm:text-center space-y-4">
        <h1 class="text-4xl font-bold max-sm:mt-4">Who We Are</h1>
        <h6 class="text-1xl grid grid-cols-1 space-y-8">
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aspernatur similique mollitia impedit accusantium, neque fugit suscipit nihil aliquam! Quod ipsum expedita accusantium rem ut atque repellendus hic laboriosam nihil.
            </span>
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aspernatur similique mollitia impedit accusantium, neque fugit 
            </span>
        </h6>
    </div>
    <div class="h-screen max-sm:mt-12 sm:p-12 flex justify-center">
        <img class="rounded sm:w-[20rem] sm:h-[32rem]" src="{{ asset("img/work-together.jpeg") }}" alt="">
    </div>
</section>

@endsection
