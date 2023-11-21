@extends('layouts.main')
@section('content')
    <section class="h-fit sm:mb-10 mb-5 flex sm:flex-row flex-col justify-between pt-10 text-white">
        <div class="sm:w-1/2 w-full pl-10">
            <h3 class="text-2xl mb-10">{{ $singleProject['name'] }}</h3>
            <a href=""
                class="border rounded-full px-10 py-2 hover:bg-white hover:text-black hover:border-black transition">View
                Live Website</a>
        </div>
        <div class="sm:w-1/2 w-full text-end sm:pr-10 px-10 mt-10">
            <p>{{ $singleProject['description'] }}</p>
        </div>
    </section>

    <section class="sm:h-96 h-72">
        <img src="{{ $singleProject['banner'] }}" alt="" class="object-cover h-full w-full">
    </section>
@endsection
