@php
    use App\Enums\ActiveEnum;
@endphp
@extends('dashboard.layouts.master')
@section('title', 'صفحة الروابط الخلفية')
@section('content')


    <div class="container-fluid">
        <div class="layout-specing">

            @include('dashboard.layouts.messages')

            <!-- breadcrumb -->
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">صفحة الروابط الخلفية</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0" dir="ltr">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.index') }}">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">جدول الروابط الخلفية</li>
                    </ul>
                </nav>
            </div>
            <!-- breadcrumb /-->
            <div class="my-4">
                <a href="{{ route('dashboard.back-links.create') }}" class="btn btn-primary"> <i
                        class="fa-solid fa-plus me-2"></i> جديد </a>
            </div>

            <!-- table -->
            <table class="table table-center bg-white mb-0">
                <thead>
                    <tr>
                        <th class="border-bottom p-3">#</th>
                        <th class="border-bottom p-3" style="min-width: 220px;">الأسم</th>
                        <th class="text-center border-bottom p-3">البريد الالكترونى</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">الرابط</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">قيمة الرابط</th>
                        <th class="text-center border-bottom p-3" style="min-width: 150px;">متاح</th>
                        <th class="text-end border-bottom p-3" style="min-width: 100px;">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $info)
                        <tr>
                            <th class="p-3">{{ $loop->iteration }}</th>
                            <td class="text-center p-3">{{ $info->name }}</td>
                            <td class="text-center p-3">{{ $info->email }}</td>
                            <td class="text-center p-3">{{ $info->url }}</td>
                            <td class="text-center p-3">{{ $info->value }}</td>
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
                                        @include('dashboard.partials.actions', [
                                            'name' => 'back-links',
                                            'name_id' => $info->slug,
                                        ])
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item text-primary">
                                            <i class="fa-solid fa-bug-slash me-2"></i>
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
