@extends('layouts.front')

@section('content')

@foreach ($books as $book)

    <div class="single_arrivel_item weidth_1 mix shoes">
        @if ($book->cover == null)
            <img src="{{ asset('assets/img/arrivel/arrivel_5.png') }}" alt="#">
        @else
        <img src="{{ $book->cover }}" alt="#">
        @endif
        <div class="hover_text">
            <p>{{ $book->author->name }}</p>
            <a href="single-product.html"><h3>{{ $book->title }}</h3></a>
            {{-- <div class="rate_icon">
                <a href="#"> <i class="fas fa-star"></i> </a>
                <a href="#"> <i class="fas fa-star"></i> </a>
                <a href="#"> <i class="fas fa-star"></i> </a>
                <a href="#"> <i class="fas fa-star"></i> </a>
                <a href="#"> <i class="fas fa-star"></i> </a>
            </div> --}}
            <h5>$ Gratis !!!</h5>
            <div class="social_icon">
                <a href="#"><i class="ti-heart"></i></a>
                <a href="#"><i class="ti-bag"></i></a>
            </div>
        </div>
    </div>
    
@endforeach

@endsection