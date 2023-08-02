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
<title>{{ $about->title }}</title>
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
      <h6 class="heading">{{ $about->title }}</h6>
      <ul>
          <li><a href="/">Главная</a></li>
          <li><a href="/about">О нас</a></li>
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
          <div class="">
              {!! $about->text !!}
          </div>
          <div id="app">
              @foreach ($about->gallery as $gallery)
                  <img class="img-thumbnail m-1" style="min-height: 350px !important;" src="{{ asset('storage/'.$gallery) }}" alt="Сертификаты">
              @endforeach
          </div>

        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
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