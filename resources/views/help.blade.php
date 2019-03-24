@extends('layouts.app')

@section('content')
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>كيف يعمل</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
<!-- How it works -->
<div class="work-section">
    <div class="container">
        <h2 class="w3-head">كيف يعمل </h2>
        <div class="work-section-head text-center">
            <p>سريع وسهل ومجاني لنشر الإعلان وسوف تجد، ما كنت تبحث عنه.</p>
        </div>
        <div class="work-section-grids text-center">
            <div class="col-md-3 work-section-grid">
                <i class="fa fa-pencil-square-o"></i>
                <h4>انشىء اعلانك </h4>
                <p>سريع وسهل ومجاني لنشر الإعلان وسوف تجد، ما كنت تبحث عنه.</p>

            </div>
            <div class="col-md-3 work-section-grid">
                <i class="fa fa-eye"></i>
                <h4>ابحث عن منتجك</h4>
                <p>سريع وسهل ومجاني لنشر الإعلان وسوف تجد، ما كنت تبحث عنه.</p>
                <span class="arrow2"><img src="images/arrow2.png" alt="" /></span>
            </div>
            <div class="col-md-3 work-section-grid">
                <i class="fa fa-phone"></i>
                <h4>تواصل مع البائع </h4>
                <p>سريع وسهل ومجاني لنشر الإعلان وسوف تجد، ما كنت تبحث عنه.</p>
                <span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
            </div>

            <div class="clearfix"></div>
            <a class="work" href="post-ad.html">ابدا  الآن </a>
        </div>
    </div>
</div>

<!-- // How it works -->
@endsection