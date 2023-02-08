@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($ph as $phone)
                <div class="card p-2 m-3 mx-auto" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        class="card-img-top" alt="Phone Image">
                    <div class="card-header">
                        <h5 class="card-title text-center">{{ $phone->Name }}</h5>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">السعر: {{ $phone->price }}</p>
                        <p class="card-text">الكمية المتبقية: {{ $phone->QTY }}</p>
                        <a href="{{ route('checkoutId', ['id' => $phone->id]) }}"
                            class="btn btn-primary alert alert-primary">
                            أضف للعربة
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
