@php
    use App\Enums\ActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('title', 'عرض الرصيد ')
@section('content')



    <div class="container-fluid">
        <div class="layout-specing">

            <!-- breadcrumb -->
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">عرض الرصيد </h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0" dir="ltr">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.index') }}">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.balances.index') }}">جدول
                                الارصدة</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">رصيد </li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb /-->

            <div class="row my-3">
                <div class="card">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input hidden type="text" name="user_id"
                                            value="{{ old('user_id', $balance->user_id) }}" id="hidden_user_search_id">

                                        <label class="form-label">أسم المستخدم<span class="text-danger">*</span></label>
                                        <div readonly class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input readonly type="text"
                                                value="{{ old('user_id_search', $balance->user->name) }}"
                                                class="form-control user_search ps-5 @error('user_id') is-invalid @enderror"
                                                placeholder="أسم المستخدم او البريد :" autocomplete="off">

                                            @error('user_id')
                                                <span class="invalid-feedback text-right" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الرصيد<span class="text-danger">*</span></label>
                                        <input readonly name="balance" id="balance" type="number"
                                            value="{{ old('balance', $balance->balance) }}"
                                            class="form-control @error('balance') is-invalid @enderror"
                                            placeholder="الرصيد:" readonly>
                                        @error('balance')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الرصيد المستخدم<span class="text-danger">*</span></label>
                                        <input readonly name="used_balance" id="used_balance" type="number"
                                            value="{{ old('used_balance', $balance->used_balance) }}"
                                            class="form-control @error('used_balance') is-invalid @enderror"
                                            placeholder="الرصيد المستخدم:">
                                        @error('used_balance')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">الرصيد المتبقى<span class="text-danger">*</span></label>
                                        <input readonly name="remain_balance" id="remain_balance" type="number"
                                            value="{{ old('remain_balance', $balance->remain_balance) }}"
                                            class="form-control @error('remain_balance') is-invalid @enderror"
                                            placeholder="الرصيد المتبقى:">
                                        @error('remain_balance')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                    </div>
                </div>
            </div>


        </div>
    </div><!--end container-->

@endsection
@push('js')

@endpush
