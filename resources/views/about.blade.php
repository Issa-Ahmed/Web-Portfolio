@extends('layouts.main')
@section('content')
    <section class="text-white text-center mb-10 font-semibold">
        <h2 class="py-10 text-4xl">Hi, I'm Issa. Nice to meet you</h2>
        <p class="leading-loose text-xl m-auto w-2/3">I am a web developer who is passionate and driven to create web
            solutions that
            are both intuitive
            and impactful</p>
    </section>

    <section class="h-screen w-5/6 m-auto bg-white rounded-2xl">
        <img src=".\assets\undraw_slider_re_ch7w.svg" alt=""
            class="sm:object-contain object-cover sm:object-center object-right h-full w-full">
    </section>
    <section class="my-24 text-white text-center text-2xl m-auto w-2/3 leading-relaxed font-semibold">
        <p class="my-10">My goal is to create sinple and effective digital solutions that improve lives. I strive to
            constantly learn new
            and cutting-edge technologies to deliver exceptional results.</p>
        <a href="{{ route('contact') }}"
            class="border border-white sm:px-32 px-20 py-2 rounded-full text-center hover:bg-white hover:border-white transition hover:text-black">Say
            Hi</a>
    </section>
    <section class="h-fit mt-20">
        <h2 class="text-4xl text-white text-center pb-10 capitalize font-semibold leading-relaxed">Some of the technologies
            I've worked with
        </h2>
        <div class="grid sm:grid-cols-3 grid-cols-2 sm:px-32 px-10 ">
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\laravel.png" alt="" class="w-24">
            </div>
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\tailwind.png" alt="" class="w-24">
            </div>
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\wordpress.png" alt="" class="w-24">
            </div>
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\js.png" alt="" class="w-24">
            </div>
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\vuejs.png" alt="" class="w-24">
            </div>
            <div class="h-48 w-full flex justify-center items-center">
                <img src=".\assets\sql.png" alt="" class="w-24">
            </div>

        </div>
    </section>
@endsection
