@extends('layouts.default')

@section('content')
    <section class="container max-sm:text-center sm:grid sm:grid-cols-2 sm:h-[90vh] max-sm:mt-4 flex flex-col-reverse justify-center items-center">
        <div class="sm:p-12 space-y-4">
            <h1 class="text-4xl font-bold">Contact</h1>
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

    <section class="container max-sm:mt-12 grid max-sm:grid-cols-1 sm:grid-cols-2 flex justify-center items-center">
       <div class="sm:p-12 grid grid-cols-1">
            <h1 class="text-4xl md:text-2xl font-bold mb-12 max-lg:text-center">Lets Talk About Business</h1>
            <div class="grid grid-cols-2">
                @php
                    $labelTextInput = [
                                            [
                                                'label' => 'Full Name',
                                                'name' => 'full_name',
                                                'icon' => 'fas fa-user',
                                                'type' =>  'text'
                                            ],
                                            [
                                                'label' => 'Company Name',
                                                'name' => 'company_name',
                                                'icon' => 'fas fa-building',
                                                'type' =>  'text'
                                            ],
                                            [
                                                'label' => 'Email',
                                                'name' => 'email',
                                                'icon' => 'fas fa-at',
                                                'type' =>  'text'
                                            ],
                                            [
                                                'label' => 'Phone Number',
                                                'name' => 'phone_number',
                                                'icon' => 'fas fa-phone-alt',
                                                'type' =>  'text'
                                            ],
                                            [
                                                'label' => 'Country',
                                                'name' => 'country',
                                                'icon' => 'fas fa-flag',
                                                'type' =>  'option'
                                            ],
                                            [
                                                'label' => 'Subject',
                                                'name' => 'subject',
                                                'icon' => 'fas fa-quote-right',
                                                'type' =>  'text'
                                            ],
                                            [
                                                'label' => 'Message',
                                                'name' => 'message',
                                                'icon' => 'fas fa-envelope',
                                                'type' =>  'textarea'
                                            ],
                                        ] ;
                @endphp
                @foreach ($labelTextInput as $input)
                    <div class="max-sm:w-full max-sm:ml-4 max-lg:col-span-2 grid grid-cols-1 sm:mx-auto my-4 {{ $input['type'] == 'textarea' ? 'col-span-2 w-full md:px-2' : '' }}">
                        <h1 class="relative w-full font-semibold mb-2 {{ $input['type'] == 'textarea' ? '' : '' }}">{{ $input['label'] }}</h1>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 flex items-center pl-3 pointer-events-none left-0 {{ $input['type'] == 'textarea' ? 'inset-y-auto top-2' : '' }}">
                                <i class="{{ $input['icon'] }} w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                            </div>
                            @if ($input['type'] == 'text')
                                <input type="text" name="{{ $input['name'] }}" placeholder="fill your {{ strtolower($input['label']) }}" id="simple-search" class="lg:w-[11rem] xl:w-full border border-gray-300 text-gray-900 text-sm max-sm:w-[90%] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            @elseif ($input['type'] == 'option')
                                <select name="{{ $input['name'] }}" class="block w-full bg-white max-sm:w-[90%] max-md:w-82 max-sm:px-10 md:px-8 md:w-[16rem] lg:w-[11rem] xl:w-[16rem] w-60 p-2.5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option class="">United States</option>
                                    <option class="">Indonesian</option>
                                </select>
                            @elseif ($input['type'] == 'textarea')
                                <textarea id="message" name="{{ $input['name'] }}" rows="10" class="bg-white block pl-10 max-sm:w-[90%] md:w-full lg:w-full pt-1.5 pr-0.5 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your message here..."></textarea>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
       </div>
       <div class="max-sm:my-12 sm:p-12">
            <div class="bg-[#D9DDE5] p-8 rounded-[24px]">
                <h1 class="text-5xl font-bold mb-16 max-sm:text-center">Visit Us</h1>
                @php
                    $visitUs = [
                        [
                            'icon' => 'fas fa-building',
                            'title' => 'Head Office',
                            'type' => 'text',
                            'desc' => 'Jl. Bambu Kuning Utara No. 212, Bambu Apus - Cipayung, Jakarta Timur 13890',
                        ],
                        [
                            'icon' => 'fas fa-phone-alt',
                            'title' => 'Telephone',
                            'type' => 'list',
                            'list' => [
                                '+6221 2983 5353',
                                '+62 821 2381 8693'
                            ]
                        ],
                        [
                            'icon' => 'fas fa-envelope',
                            'title' => 'Email',
                            'type' => 'text',
                            'desc' => 'sales@bestada.co.id',
                        ],
                    ]
                @endphp
                @foreach ($visitUs as $visit)
                    <div class="space-y-2 mb-12 max-sm:text-center">
                        <i class="{{ $visit['icon'] }} text-5xl rounded"></i>
                        {{-- <img class="" src="{{ asset('img/work-together.jpeg') }}" alt=""> --}}
                        <h2 class="text-2xl font-semibold">{{ $visit['title'] }}</h2>
                        @if ($visit['type'] == 'text')
                            <p class="text-normal">{{ $visit['desc'] }}</p>
                        @elseif ($visit['type'] == 'list')
                            <ul>
                                @foreach ($visit['list'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>
       </div>
    </section>

    <section>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pt bestada&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </section>
@endsection
