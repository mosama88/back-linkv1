@php
    use App\Enums\ActiveEnum;
@endphp
@extends('website.layouts.master')
@section('title', 'الروابط الخلفية')
@section('content')


    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: url('{{ asset('website') }}/assets/images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0">الروابط الخلفية</h4>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->

            @include('website.layouts.breadcrumb', [
                'previuosPage' => 'الرئيسية',
                'currentPage' => 'الروابط الخلفية',
            ])

        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section" >
        <div class="container">
            <div class="col-12 mt-4 pt-2">
                <div class="component-wrapper rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="title mb-0"> الروابط الخلفية المتاحه </h5>
                    </div>

                    <div class="p-4">
                        <div class="table-responsive bg-white shadow rounded">
                            <table class="table table-hover mb-0 table-center">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3">#</th>
                                        <th class="border-bottom p-3" style="min-width: 220px;">الأسم</th>
                                        <th class="text-center border-bottom p-3">البريد الالكترونى</th>
                                        <th class="text-center border-bottom p-3" style="min-width: 150px;">الرابط</th>
                                        <th class="text-center border-bottom p-3" style="min-width: 150px;">قيمة الرابط</th>
                                        <th class="text-center border-bottom p-3" style="min-width: 150px;">متاح</th>
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
                                        </tr>
                                    @empty
                                        data not found
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--end container-->

    </section><!--end section-->
    <!-- End contact -->

@endsection
