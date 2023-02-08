@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>الدفع</h2>
        </div>
        <div class="row">
            <div class="col-md order-md-2 mb-4">
                <h1 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted px-5">عربتك</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h1>
                <ul class="list-group mb-3 sticky-top">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">أسم المنتج</h6>
                            <small>{{ $ph->Name }}</small>
                        </div>
                        <span class="text-muted">{{ $ph->price }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div>
                            <h6 class="my-0">القيمة المضافة</h6>

                        </div>
                        <span class="text-success">{{ $ph->price * 0.15 }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>المجموع (SAR)</span>
                        <strong>{{ $ph->price + $ph->price * 0.15 }} ريال</strong>
                    </li>
                </ul>
            </div>
        </div>

        <form method="POST" action="{{ route('get-invoice') }}" class="card p-2 mx-5">
            @csrf
            {{-- User Name --}}
            <div class="mb-3">
                <label for="userName" class="form-label">الأسم</label>
                <input type="text" class="form-control" id="userName" name="userName">
            </div>

            <input type="hidden" id="productName" name="productName" value="{{ $ph->Name }}">
            <input type="hidden" id="price" name="price" value="{{ $ph->price }}">

            {{-- Email --}}
            <div class="mb-3">
                <label for="Email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="Email" name="email">
            </div>

            {{-- Address --}}
            <div class="mb-3">
                <label for="address" class="form-label">العنوان</label>
                <input type="address" class="form-control" id="address" name="address">
            </div>

            <button type="submit" class="btn btn-primary">إرسال</button>
        </form>
    </div>
@endsection
