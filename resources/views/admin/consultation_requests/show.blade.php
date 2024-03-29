@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_consultation_requests'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.consultation_requests') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('consultation_requests.index') }}"
                   class="text-muted">{{ __('words.show_consultation_requests') }}</a>
            </li>
            <li class="breadcrumb-item">
                <apan class="text-muted">{{ __('words.show_consultation_requests') }}</apan>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.show_consultation_requests') }}</h3>
            </div>

        </div>
        <div class="card-body p-10">
            <div class="tab-content">

                <div class="row mb-5">
                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.organization_name') }}
                                    :</h5>
                            </div>
                            <p class="m-0">{{ $consultation_request->organization_name }}</p>
                        </div>
                    </div>


                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.email') }}
                                    :</h5>
                            </div>
                            <div style="direction: ltr !important;">
                                {{ $consultation_request->email }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.phone') }}
                                    :</h5>
                            </div>
                            <div style="direction: ltr !important;">
                                {{ $consultation_request->phone }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.falling_facility') }}
                                    :</h5>
                            </div>
                            <div>
                                {{ $consultation_request->falling_facility }}
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.facility_have_financial') }}</h5>
                            </div>
                            <div>
                                {{ $consultation_request->getFacilityHaveFinancial() }}
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.financial_statements') }}:</h5>
                            </div>
                            <div>
                                {{ $consultation_request->financial_statements }}
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.revenues') }}:</h5>
                            </div>
                            <div>
                                {{ $consultation_request->revenues }}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mb-5">
                    <div class="col">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.service') }}
                                    :</h5>
                            </div>
                            <div style="direction: ltr !important;">
                                {{ $consultation_request->service->title }}
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.created_at') }}:</h5>
                            </div>
                            <p class="m-0">{{ formatDate($consultation_request->created_at) }}</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.revenues') }}
                                    :</h5>
                            </div>
                            {{ $consultation_request->revenues }}
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.notes') }}
                                    :</h5>
                            </div>
                            {{ $consultation_request->notes }}
                        </div>
                    </div>
                </div>
            </div>
            @permission('reply-consultation_requests')
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="{{ route('consultation_requests.reply', $consultation_request->id) }}"
                           class="btn btn-block btn-outline-info">
                            {{ __('words.reply') }}
                        </a>
                    </div>
                </div>
            </div>
            @endpermission
        </div>
    </div>
@endsection
