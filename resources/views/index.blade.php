@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto"
    style=" background-image: url('https://cdn.pixabay.com/photo/2017/07/31/23/45/pen-2562078__340.jpg');
    background-repeat: no-repeat;background-position: center center; background-attachment: fixed; background-size: cover;height: 700px; ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold pb-9">
                    Do you want to be a developer?
                </h1>

                <a
                href="/blog"
                class="text-center bg-gray-50  text-gray-700 py-2 px-4 font-bold text-xl uppercase mt-2">
                    Read More
                </a>

            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624__340.jpg" width="700">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better developer?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                askdhajksdnajksn akljnsdklandls laknmsdklasnmd
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>


    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Im a developer
        </h2>
        <span class="font-extrabold block text-4xl py-1">
                Ux design
            </span>
        <span class="font-extrabold block text-4xl py-1">
                Project management
            </span>
        <span class="font-extrabold block text-4xl py-1">
                Digital Strategy
            </span>
        <span class="font-extrabold block text-4xl py-1">
                Backend Development
            </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            asdasdasd asdasdasd asdasda asdasda asdadas
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="Uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    lorem ipsum asadamskdasmdalksdmaksdmaksdma
                </h3>
                <a
                href=""
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>
            </div>
        </div>

        <img src="https://cdn.pixabay.com/photo/2016/03/27/18/54/technology-1283624__340.jpg" width="700">

    </div>


@endsection
