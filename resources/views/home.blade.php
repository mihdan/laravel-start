@extends('layouts.app')

@section('title', 'Blog 2.0: Главная страниа')

@section('content')
    @if($items->isNotEmpty())
    <div class="tasks grid gap-4 grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-14 xl:gap-y-20 mt-12 md:mt-20">
        @foreach($items as $item)
            @include('parts.articles.item', ['item' => $item])
        @endforeach
    </div>
    @else
        <p>Ничего не найдено.</p>
    @endif
@endsection
