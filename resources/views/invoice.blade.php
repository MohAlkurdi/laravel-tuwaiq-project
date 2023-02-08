@extends('layouts.app');

@section('content')
    <div class="card">
        <div class="card-body mx-4">
            <div class="container">
                <p class="my-5 mx-5 text-center" style="font-size: 30px;">شكراً لشرائكم من متجرنا</p>
                <div class="row">
                    <ul class="list-unstyled">
                        <li class="text-black">{{ $inv->CostName }}</li>
                        <li class="text-muted mt-1"><span class="text-black">فاتورة رقم</span> # {{ $inv->id }}</li>
                        <li class="text-black mt-1">{{ $inv->invDate }}</li>
                    </ul>
                    <hr>
                    <div class="col-xl-10">
                        <p>المنتج: <span class="px-1">{{ $inv->ProductName }}</span></p>
                    </div>
                    <div class="col-xl-2">
                        <p class="float-end">
                            سعر المنتج: <span class="px-1">{{ $inv->Price }}</span> ريال
                        </p>
                    </div>
                    <div class="col-xl-2">
                        <p class="float-end">
                            القيمة المٌضافة: <span class="px-1">{{ $inv->Tax }}</span> ريال
                        </p>
                    </div>
                    <hr>
                </div>

                <div class="row text-black">
                    <div class="col-xl-12">
                        <p class="float-end fw-bold">المجموع النهائي: <span class="px-1">{{ $inv->Total }}</span> ريال
                        </p>
                    </div>
                    <hr style="border: 2px solid black;">
                </div>
            </div>
        </div>
    </div>
@endsection
