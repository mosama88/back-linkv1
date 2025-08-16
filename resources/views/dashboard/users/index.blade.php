@php
    use App\Enums\ActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('title', 'صفحة المستخدمين')
@section('content')



    <div class="container-fluid">
        <div class="layout-specing">

            <!-- breadcrumb -->
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">صفحة المستخدمين</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0" dir="ltr">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.index') }}">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">جدول المستخدمين</li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb /-->


            <!-- table -->
            <table class="table table-center bg-white mb-0">
                <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3" style="min-width: 220px;">الاسم</th>
                        <th class="text-center border-bottom p-3">البريد الالكترونى</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">الموبايل</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">نوع المستخدم</th>
                        <th class="text-center border-bottom p-3">حالة الحساب</th>
                        <th class="text-end border-bottom p-3" style="min-width: 100px;">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $info)
                        <tr>
                            <th class="p-3">{{ $loop->iteration }}</th>
                            <td class="p-3">
                                <a href="#" class="text-primary">
                                    <div class="d-flex align-items-center">
                                        @if ($info->getFirstMediaUrl('photo', 'preview'))
                                            <img class="avatar avatar-ex-small rounded-circle shadow"
                                                src="{{ $info->getFirstMediaUrl('photo', 'preview') }}"
                                                alt="{{ $info->name }}">
                                        @else
                                            <img class="avatar avatar-ex-small rounded-circle shadow"
                                                src="{{ asset('dashboard') }}/assets/images/client/user-default.png"
                                                alt="{{ $info->name }}">
                                        @endif


                                        <span class="ms-2">{{ $info->name }}</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-center p-3">{{ $info->email }}</td>
                            <td class="text-center p-3">{{ $info->mobile }}</td>
                            <td class="text-center p-3">
                                {{ $info->user_type->label() }}
                            </td>
                            <td class="text-center p-3">
                                @if ($info->active == ActiveEnum::ACTIVE)
                                    <div class="badge bg-soft-success rounded px-3 py-1">
                                        {{ $info->active->label() }}
                                    </div>
                                @else
                                    <div class="badge bg-soft-danger rounded px-3 py-1">
                                        {{ $info->active->label() }}
                                    </div>
                                @endif

                            </td>
                            <td class="text-end p-3">
                                <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                            </td>
                        </tr>
                    @empty
                        data not found
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-left mt-4">
                {{ $data->links() }}
            </div>
            <!-- table /-->

        </div>
    </div><!--end container-->

@endsection
