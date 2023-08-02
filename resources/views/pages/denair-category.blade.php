<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Продукция компании Denair</title>
@include('components.meta')
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('components.header')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
      <h6 class="heading">Продукция Denair</h6>
      <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="/denair">Denair</a></li>
          <li><a href="/denair/{{ $categoryInfo->id }}">{{ $categoryInfo->title }}</a></li>
      </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first">
      <!-- ################################################################################################ -->

      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <ul class="list-unstyled ps-0">
                @foreach ($categories as $cat)
                <li class="mb-1">
                    <button class="btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $cat->id }}" aria-expanded="false">
                        <a href="/boerger/{{ $cat->id }}" class="link-dark">{{ $cat->title }}</a>
                    </button>
                        @if ($cat->denairs)
                            <div class="collapse" id="collapse-{{ $cat->id }}">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    @foreach ($cat->denairs as $denair)
                                        <li><a href="/denair/product/{{ $denair->id }}" class="link-dark rounded">{{ $denair->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </li>
                @endforeach
              </ul>
        </div>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <!-- ################################################################################################ -->
      <h1>{{ $categoryInfo->title }}</h1>

      <p>{!! $categoryInfo->description !!}</p>

      @foreach ($list as $i)
            <div class="half mb-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="{{ asset('storage/'.$i->avatar) }}" alt="{{ $i->title }}">
                    <div class="card-body">
                        <a href="/denair/product/{{ $i->id }}" class="link-danger"><h5 class="card-title">{{ $i->title }}</h5></a>
                      <p class="card-text">{!! Str::substr($i->short_description, 0, 150)  !!}...</p>
                    </div>
                  </div>
            </div>

      @endforeach
    </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('components.contact')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
@include('components.footer')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</body>
</html>
