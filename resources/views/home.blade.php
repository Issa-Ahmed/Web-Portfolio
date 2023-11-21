@extends('layouts.main')
@section('content')
    {{-- Hero section --}}
    <section class="h-fit m-auto mt-12  w-5/6 bg-white text-black rounded-lg flex sm:flex-row flex-col gap-y-4">
        <h1 class="text-4xl w-2/3 py-16 pl-10 tracking-wider leading-relaxed">
            I build minimalistic & user-friendly websites and web applications
        </h1>
        <img src="assets/illustration.png" alt="" class="sm:py-0 pb-10 w-1/3 h-full" />
    </section>
    {{-- Projects section --}}
    <section>
        <div class="grid sm:grid-cols-2 grid-col-1 py-20 px-12 gap-x-12 gap-y-20">
            @foreach ($projectsList as $singleProject)
                <div class="h-[500px] flex flex-col  text-white rounded-lg">
                    <div class="pl-4 h-1/5">
                        <h2 class="text-2xl pt-2 font-bold">{{ $singleProject['name'] }}</h2>
                        <p class="py-2">{{ $singleProject['title'] }}</p>
                    </div>
                    <div class="h-4/5 hover:scale-110 transition duration-200">
                        <a href="{{ route('project', Str::slug($singleProject['name'])) }}">
                            <img src="{{ $singleProject['thumbnail'] }}" alt=""
                                class="object-cover w-full h-full rounded-lg">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
