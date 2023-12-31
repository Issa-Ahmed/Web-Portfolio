@extends('layouts.main')
@section('content')
    <section class="text-white">
        <img src=".\assets\undraw_male_avatar_g98d.svg" alt="" class="m-auto w-20 h-20 bg-white rounded-full">
        <p class="sm:text-3xl text-2xl text-center py-10 w-3/5 m-auto leading-relaxed">Thanks for taking the time to reach
            out. How can I
            help you today?
        </p>

        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init = "setTimeout(() => show = false, 4000)" x-show = "show"
                class="fixed bottom-3 right-10 bg-green-500 text-white rounded-xl py-3 px-10 font-semibold">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="w-full flex flex-col items-center ">
            <form action="{{ route('contact-form-submit') }}" class="sm:w-[600px] w-[200px]" method="POST">
                @csrf
                <div class="flex sm:flex-row flex-col sm:space-x-2 sm:space-y-0 space-y-5 mb-4">
                    <div class="w-full">
                        <input type="text" placeholder="Name"
                            class="w-full h-11 border border-white outline-none px-3 rounded-full bg-transparent"
                            name="name" required>
                    </div>
                    <div class="w-full">
                        <input type="email" placeholder="Email"
                            class="w-full h-11 border border-white outline-none px-3 rounded-full bg-transparent"
                            name="email" required>
                    </div>
                </div>
                <div class="w-full">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"
                        class="w-full resize-none border border-white outline-none px-3 pt-5 rounded-xl bg-transparent" required></textarea>
                </div>
                <button type="submit"
                    class="w-40 h-9 hover:bg-white outline-none px-3 rounded-2xl hover:text-black text-center my-5  text-white border border-white transition">Submit</button>
            </form>
        </div>
    </section>
@endsection
