@extends('layout')

@section('content')
<div class="container" style="direction: rtl">
    <h1 class="text-right">الشركاء</h1>
    <div class="row">
        @foreach ($partners as $partner)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($partner->image)
                <img src="{{ asset('images/' . $partner->image) }}" alt="{{ $partner->name }}" class="card-img-top">
                @else
                <div class="card-img-top text-center py-4">لا توجد صورة</div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $partner->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
