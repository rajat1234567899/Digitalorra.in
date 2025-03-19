<style>
    bodyservicesection {
        font-family: 'Roboto', sans-serif;
        background-color: #0d0d0d;
        color: #ffffff;
    }

    bodyservicesection .curve {
        position: relative;
        overflow: hidden;
    }

    bodyservicesection i.fas.fa-file-alt.text-orange-500.text-2xl.mr-2 {
        color: #E7167E;

    }

    bodyservicesection span.text-orange-500.font-bold.mt-4.block {
        color: #E7167E;

    } bodyservicesection Button {
        
        margin:20px 5px 20px 5px;
    }

    bodyservicesection h2 {
        color:rgb(255, 255, 255);
        margin: 20px auto;
        padding:10px 5px 30px 5px;

    }  bodyservicesection h5 {
        color: #E7167E;
        padding:10px 5px;
        margin: 20px auto 10px auto;

    }

    bodyservicesection .curve::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: #0d0d0d;
        border-radius: 50% 50% 0 0;
    }

    bodyservicesection .rocket {
        animation: rocketAnimation 2s ease-in-out infinite;
    }

    @keyframes rocketAnimation {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }
</style>
<?php
      use App\Models\Content;
    ?>
<bodyservicesection class="flex flex-col items-center justify-center min-h-screen p-4">
    <section style="text-align:center;">

        {!!Content::where('section', 'Coursestitle')->value('content')!!}
        {!!Content::where('section', 'Coursescontent')->value('content')!!}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(1);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">01.</span>
            </div>
            @endif
            <!----Caurses-end------>
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(2);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">02.</span>
            </div>
            @endif
            <!----Caurses-end------>
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(3);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">03.</span>
            </div>
            @endif
            <!----Caurses-end------>
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(4);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">04.</span>
            </div>
            @endif
            <!----Caurses-end------>
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(5);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">05.</span>
            </div>
            @endif
            <!----Caurses-end------>
            <!----Caurses------>
            @php
            $course = \App\Models\Course::find(6);
            @endphp
            @if($course)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <i class="fas fa-file-alt text-orange-500 text-2xl mr-2"></i>
                    <h3 class="text-xl font-bold">{{ $course->name }}</h3>
                </div>
                <p class="text-gray-400">{{ $course->description }}</p>
                <span class="text-orange-500 font-bold mt-4 block">06.</span>
            </div>
            @endif
            <!----Caurses-end------>

    </section>
    <Button style="color:white;background-color:#E7167E; padding: 10px 60px; border-radius:10px;margin-top:20px;">View
        More</Button>
</bodyservicesection>