@extends('website.layouts.master')
@section('title', 'بروفايل')
@section('content')


    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100"
        style="background: url('{{ asset('website') }}/assets/images/contact-detail.jpg') center center;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0">Contact Us</h4>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->

           @include('website.layouts.breadcrumb')
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <div class="widget">
                            <h5 class="widget-title">رصيدك الحالى :</h5>
                            <div class="row mt-4">
                                <div class="col-6 text-center">
                                    <i data-feather="user-plus" class="fea icon-ex-md text-primary mb-1"></i>
                                    <h5 class="mb-0">2588</h5>
                                    <p class="text-muted mb-0">جنية</p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>

                        <div class="widget mt-4 pt-2">
                            <h5 class="widget-title">تم شراء URL خلال الشهر الحالى :</h5>
                            <div class="progress-box mt-4" dir="ltr">
                                <h6 class="title text-muted">Progress</h6>
                                <div class="progress">
                                    <div class="progress-bar position-relative bg-primary" style="width:50%;">
                                        <div class="progress-value d-block text-muted h6">24 / 48</div>
                                    </div>
                                </div>
                            </div><!--end process box-->
                        </div>

                        <div class="widget mt-4">
                            <ul class="list-unstyled sidebar-nav mb-0" id="navmenu-nav">
                                <li class="navbar-item account-menu px-0">
                                    <a href="account-profile.html"
                                        class="navbar-link d-flex rounded shadow align-items-center py-2 px-4">
                                        <span class="h4 mb-0"><i class="uil uil-dashboard"></i></span>
                                        <h6 class="mb-0 ms-2">Profile</h6>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-12">
                    <div class="card border-0 rounded shadow">
                        <div class="card-body">
                            <h5 class="text-md-end text-center">معلومات الحساب:</h5>
                            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                                @csrf
                                @method('patch')

                                <div class="mt-3 text-md-start text-center d-sm-flex" dir="ltr">
                                    <img src="{{ asset('website') }}/assets/images/client/05.jpg"
                                        class="avatar float-md-left avatar-medium rounded-circle shadow me-md-4"
                                        alt="">

                                    <div class="mt-md-4 mt-3 mt-sm-0">
                                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ms-2">تغيير
                                            الصورة</a>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">الاسم بالكامل</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" value="{{ $user->name }}" id="first"
                                                    type="text" class="form-control" placeholder="الاسم الاول :">
                                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">البريد الالكترونى</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" value="{{ $user->email }}" id="email"
                                                    type="email" class="form-control" placeholder="البريد الالكترونى :">
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">الموبايل</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="bookmark" class="fea icon-sm icons"></i>
                                                <input name="mobile" value="{{ $user->mobile }}" id="الموبايل"
                                                    oninput="this.value=this.value.replace(/[^0-9.+]/g,'');" type="text"
                                                    class="form-control" placeholder="الموبايل :">
                                                <x-input-error class="mt-2" :messages="$errors->get('mobile')" />
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary"
                                            value="تأكيد البيانات">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>



                    <div class="rounded shadow mt-4">
                        <div class="p-4 border-bottom">
                            <h5 class="mb-0 text-danger">حذف الحساب :</h5>
                        </div>

                        <div class="p-4">
                            <h6 class="mb-0">هل ترغب بحذف الحساب؟ اضغط على زر "حذف" أدناه.</h6>
                            <div class="mt-4">
                                <button class="btn btn-danger">حذف الحساب</button>
                            </div><!--end col-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Profile Setting End -->

@endsection
