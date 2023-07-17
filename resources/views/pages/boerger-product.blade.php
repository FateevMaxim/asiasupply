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
<title>Продукция компании Börger</title>
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
<div class="wrapper bgded overlay" style="background-image:url({{ asset('/images/demo/backgrounds/boerger.jpg') }});">
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <h6 class="heading">Продукция Börger</h6>
      <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="/boerger">Börger</a></li>
          <li><a href="/boerger/{{ $categoryInfo->id }}">{{ $categoryInfo->title }}</a></li>
          <li><a href="/boerger/product/{{ $product->id }}">{{ $product->title }}</a></li>
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
      <h5>Продукция Börger</h5>

      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <ul class="list-unstyled ps-0">
                @foreach ($categories as $cat)
                <li class="mb-1">
                    <button class="btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $cat->id }}" aria-expanded="false">
                        <a href="/boerger/{{ $cat->id }}" class="link-dark">{{ $cat->title }}</a>
                    </button>
                        @if ($cat->boergers)
                            <div class="collapse" id="collapse-{{ $cat->id }}">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    @foreach ($cat->boergers as $boerger)
                                        <li><a href="/boerger/product/{{ $boerger->id }}" class="link-dark rounded">{{ $boerger->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                </li>
                @endforeach
              </ul>
        </div>
      </div>
      <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>
      <div class="sdb_holder">
        <article>
          <h6>Lorem ipsum dolor</h6>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li>Etiam vel sapien et</li>
            <li><a href="#">Etiam vel sapien et</a></li>
          </ul>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </article>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter">
      <!-- ################################################################################################ -->
      <h1>{{ $product->title }}</h1>

      <p>{!! $product->intro !!}</p>

      @foreach ($product->description as $desc)

        <h3>{{ $desc["desc_title"] }}</h3>
        {!! $desc["desc_description"] !!}
        <br />
      @endforeach

     @foreach ($product->media as $media)
        <img class="img-thumbnail m-1" src="{{ asset('storage/'.$media) }}" alt="{{ $product->title }}">
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
