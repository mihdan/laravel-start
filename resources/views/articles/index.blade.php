@extends('layouts.app')

@section('title', 'Все статьи')

@section('content')
    <h1 class="text-[26px] sm:text-xl xl:text-[48px] 2xl:text-2xl font-black">Все статьи</h1>
    @if($items->isNotEmpty())
        <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">
            @foreach($items as $item)
                @include('parts.articles.item', ['item' => $item])
            @endforeach
        </div>
        @include('parts.paginator')
    @else
        <p>Ничего не найдено.</p>
    @endif
@endsection
