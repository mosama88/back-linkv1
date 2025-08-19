@php
    use App\Enums\ActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('title', 'أضافة رصيد جديد')
@section('content')



    <div class="container-fluid">
        <div class="layout-specing">
            @include('dashboard.layouts.messages')

            <!-- breadcrumb -->
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">أضافة رصيد جديد</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0" dir="ltr">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.index') }}">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.balances.index') }}">جدول
                                الارصدة</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">رصيد جديد</li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb /-->

            <div class="row my-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('dashboard.balances.store') }}" method="POST" id="storeForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="user_id" id="hidden_user_search_id">

                                        <label class="form-label">أسم المستخدم<span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input name="user_id_search" id="user_search_id" type="text"
                                                value="{{ old('user_id_search') }}"
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
                                        <input name="balance" id="balance" type="balance" value="{{ old('balance') }}"
                                            class="form-control @error('balance') is-invalid @enderror"
                                            placeholder="الرصيد:" oninput="this.value=this.value.replace(/[^0-9.]/g,'');">
                                        @error('balance')
                                            <span class="invalid-feedback text-right" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><!--end col-->

                            </div><!--end row-->
                            <div class="row">

                                <x-create-button></x-create-button>
                            </div><!--end row-->

                        </form>



                    </div>
                </div>
            </div>


        </div>
    </div><!--end container-->

@endsection
@push('js')
    <!-- jQuery (الإصدار 3.x الموصى به لـ Select2) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">



    <script>
        $(document).ready(function() {
            $("#user_search_id").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('dashboard.balances.search-user') }}",
                        dataType: "json",
                        data: {
                            q: request.term
                        },
                        success: function(data) {
                            response(data.data.map(function(item) {
                                return {
                                    label: item.name,
                                    value: item
                                        .name, // يعرض الاسم داخل الـ input
                                    id: item.id // لو حبيت تخزنه في hidden field
                                };
                            }));
                        }
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    // لو عايز تخزن id في input مخفي مثلاً
                    $('#hidden_user_search_id').val(ui.item.id);
                }
            });
        });
    </script>
@endpush
