@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.global.seo', [
    'name' => $content->name ?? '',
    'title' => $content->seo_title ?? $content->name,
    'description' => $content->seo_description ?? '',
    'keyword' => $content->seo_keywords ?? '',
    'schema' => $content->seo_schema ?? '',
    'seoimage' => $content->image ?? '',
    'created_at' => $content->created_at,
    'updated_at' => $content->updated_at,
])
@endsection

@section('content')
        @include('frontend.global.banner', [
        'name' => $content->name,
        'banner' => $content->banner ?? null,
        'parentname' => '',
        'parentlink' => '',
    ])

        <section class="privacy mt-48 mb-72">
        <div class="container">
            <section class="payments py-5">
                <div class="row g-4">
                    <!-- Left Side: Fonepay QR -->
                    <div class="col-lg-6">
                        <div class="fonepay">
                            <img src="{{ asset('amazing_fone.jpg') }}" alt="Fonepay QR" class="img-fluid">
                        </div>
                    </div>

                                        <!-- Right Side: Bank Details -->
                    <div class="col-lg-6">
                        <!-- Laxmi Sunrise -->
                        <div class="bank-card">
                            <img src="{{ asset('laxmi_bank.png') }}" alt="Laxmi Bank">
                            <div class="bank-card-detail">
                                <h2>Laxmi Sunrise Bank</h2>
                                <ul>
                                    <li>Account Holder: <strong>Amazing Infosys Pvt. Ltd.</strong></li>
                                    <li>Account Number: <strong>14311000284</strong></li>
                                    <li>Branch: <strong>Dillibazar, Kathmandu</strong></li>
                                </ul>
                            </div>
                            </div>

                                            <!-- Nabil -->
                                        <div class="bank-card">
                                                <img src="{{ asset('nabil.jpg') }}" alt="Nabil Bank">
                                                <div class="bank-card-detail">
                                                    <h2>Nabil Bank</h2>
                                                    <ul>
                                    <li>Account Holder: <strong>Amazing Infosys Pvt. Ltd.</strong></li>
                                    <li>Account Number: <strong>03601017501284</strong></li>
                                    <li>Branch: <strong>Maitidevi, Kathmandu</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


@endsection