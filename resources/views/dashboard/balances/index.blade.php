@php
    use App\Enums\ActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('title', 'صفحة الرصيد')
@section('content')


    <div class="container-fluid">
        <div class="layout-specing">
  
@include('dashboard.layouts.messages')

            <!-- breadcrumb -->
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">صفحة الرصيد</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0" dir="ltr">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.index') }}">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">جدول الرصيد</li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb /-->
            <div class="my-4">
                <a href="{{ route('dashboard.balances.create') }}" class="btn btn-primary"> <i
                        class="fa-solid fa-plus me-2"></i> جديد </a>
            </div>

            <!-- table -->
            <table class="table table-center bg-white mb-0">
                <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3" style="min-width: 220px;">أسم المستخدم</th>
                        <th class="text-center border-bottom p-3">البريد الالكترونى</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">أجمالى الرصيد</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">الرصيد المستخدم</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">الرصيد المتبقى</th>
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
                                        {{-- @if ($info->getFirstMediaUrl('photo', 'preview'))
                                            <img class="avatar avatar-ex-small rounded-circle shadow"
                                                src="{{ $info->getFirstMediaUrl('photo', 'preview') }}"
                                                alt="{{ $info->name }}">
                                        @else
                                            <img class="avatar avatar-ex-small rounded-circle shadow"
                                                src="{{ asset('dashboard') }}/assets/images/client/user-default.png"
                                                alt="{{ $info->name }}">
                                        @endif --}}





                                        {{-- @php
                                            $user = $info->user->name ?? null;
                                        @endphp

                                        @if ($user)
                                            @php
                                                $photoUrl = $user->getFirstMediaUrl('photo', 'preview');
                                            @endphp

                                            @if ($photoUrl)
                                                <img class="img-thumbnail rounded-circle" src="{{ $photoUrl }}"
                                                    style="width: 70px; height: 70px; object-fit: cover;"
                                                    alt="{{ $user->name }}">
                                            @else
                                                <img class="img-thumbnail rounded-circle"
                                                    src="{{ asset('dashboard/assets/img/Employee.png') }}"
                                                    style="width: 70px; height: 70px; object-fit: cover;"
                                                    alt="صورة افتراضية">
                                            @endif
                                        @else
                                            <img class="img-thumbnail rounded-circle"
                                                src="{{ asset('dashboard/assets/img/Employee.png') }}"
                                                style="width: 70px; height: 70px; object-fit: cover;" alt="لا يوجد موظف">
                                        @endif --}}



                                        <span class="ms-2">{{ $info->user->name }}</span>
                                    </div>
                                </a>
                            </td>
                            <td class="text-center p-3">{{ $info->user->email }}</td>
                            <td class="text-center p-3">{{ $info->balance }}</td>
                            <td class="text-center p-3">{{ $info->used_balance }}</td>
                            <td class="text-center p-3">{{ $info->remain_balance }}</td>
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


                                <div class="btn-group dropdown-primary me-2 mt-2">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fa-solid fa-hexagon-nodes-bolt me-2"></i> الأجراءات

                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0)" class="dropdown-item text-info">
                                            <i class="fa-solid text-info fa-pen-to-square me-2"></i>
                                            تعديل
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item text-danger">
                                            <i class="fa-solid fa-trash-can me-2"></i>
                                            حذف الحساب
                                        </a>
                                        <a href="javascript:void(0)" class="dropdown-item text-dark">
                                            <i class="fa-solid fa-eye me-2"></i>
                                            عرض البيانات
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item text-danger">
                                            <i class="fa-solid fa-bug-slash  me-2"></i>
                                            تعطيل الحساب
                                        </a>
                                    </div>
                                </div>


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
