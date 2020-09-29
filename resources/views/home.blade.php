@extends ('layouts.master')
    
@section('content')
<div class="flex justify-center flex-wrap mt-20 pl-10 pr-10 lg:pl-30 lg:pr-30 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold">Welcome to the first Guild affiliated Filipino Club in WA</h1>
</div>

    <div class="flex justify-center align-bottom mt-64 md:mt-56">
        <a href="#current-events">
            <img class="h-20" src="{{ asset('images/down-arrow.svg')}}" alt="">
        </a>
    </div>
    
    <div id="current-events" class="h-screen">
        <div class="flex flex-col items-center justify-center px-4">
            <div class="max-w-xl">
                <img src="{{ asset('images/Fiesta-banner.jpg')  }}">
            </div>

            <div class="flex flex-col items-start justify-start max-w-xl">
                <div class="">
                    <h2 class="text-xl">
                        OCTOBER 17, 6PM
                    </h2>
                </div>

                <div>
                    <h2 class="text-2xl md:text-3xl font-extrabold">
                        Fil-Aus Fiesta Presents: ISLA PACIFICO
                    </h2>
                </div>
                
                <div>
                    <h2 class="text-xl">
                        Nedlands Yacht Club
                    </h2>
                </div>

                <div class="payment-button mt-8 self-center">
                    <a href="/charge" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        BUY TICKETS
                    </a>
                </div>
            </div>
        </div>
        
    </div>    
@endsection