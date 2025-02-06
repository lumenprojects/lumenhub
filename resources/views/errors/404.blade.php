@extends('layouts.app')

@section('title', '404')
@section('content')
    <div class="min-h-screen flex flex-col relative overflow-hidden">
        {{-- Верхняя надпись --}}
        <div class="text-GrapeBlack text-lg md:text-2xl font-medium italic mt-4 md:mt-8 text-center">
            page does not exist
        </div>

        {{-- Основной блок с контентом --}}
        <div class="flex-1 flex flex-col justify-center items-center space-y-8 md:space-y-16 px-4">
            {{-- Блок с цифрой 404 --}}
            <div class="text-6xl md:text-8xl lg:text-[10rem] leading-none font-bold italic text-GrapeBlack">
                404
            </div>

            {{-- Текстовый блок --}}
            <div class="text-center space-y-2 md:space-y-4">
                <p class="text-MetalGray text-base md:text-xl lg:text-2xl font-normal">
                    Кажется этой страницы не существует
                </p>
                <p class="text-MetalGray text-base md:text-xl lg:text-2xl font-normal">
                    Может лучше назад?
                </p>
            </div>

            {{-- Адаптивная кнопка --}}
            <a href="/"
               class="bg-GrapeBlack text-PearlWhite px-6 py-3 md:px-10 md:py-4 rounded-2xl
                  text-base md:text-xl lg:text-2xl font-bold hover:bg-opacity-90
                  transition-all transform hover:scale-105">
                На главную
            </a>
        </div>
    </div>
@endsection
