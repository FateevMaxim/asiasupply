<!DOCTYPE html>
<html lang="">
<head>
<title>Дистрибьюторская компания "DC Asia Supply"</title>
@include('components.meta')
</head>
<body id="top">
@include('components.header')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article>
      <p>Мы являемся официальными представителями</p>
      <h3 class="heading">Börger, Denair, Vietz <br />в Казахстане</h3>
      <footer><a class="btn" href="#">Ознакомиться с каталогом</a></footer>
    </article>
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
    <div class="sectiontitle">
      <h6 class="heading">Продукция Börger</h6>
      <p>Категории предоставляемой продукции</p>
    </div>
    <ul class="nospace group overview">

        @foreach ($categoriesB as $categoryB)
                <li class="one_third">
                    <div class="product">
                        <a href="/boerger/{{ $categoryB->id }}" class="link-dark">
                            <div class="imgbox"><img src="{{ asset('storage/'.$categoryB->avatar) }}" alt="{{ $categoryB->title }}"></div>
                            <div class="specifies">
                                <h2 class="heading">{{ $categoryB->title }}</h2>
                            <span>{!! $categoryB->description !!}</span>
                            </div>
                        </a>
                    </div>
                </li>
            @endforeach
    </ul>



    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Продукция Denair</h6>
      <p>Категории предоставляемой продукции</p>
    </div>
    <ul class="nospace group overview">
        @foreach ($categoriesDenair as $categoryD)
            <li class="one_third">
                <div class="product">
                    <a href="/denair/{{ $categoryD->id }}" class="link-dark">
                        <div class="imgbox"><img src="{{ asset('storage/'.$categoryD->avatar) }}" alt="{{ $categoryD->title }}"></div>
                        <div class="specifies">
                            <h2 class="heading">{{ $categoryD->title }}</h2>
                            <span>{!! $categoryD->description !!}</span>
                        </div>
                    </a>
                </div>
            </li>
        @endforeach
    </ul>



    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>

    <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
            <h6 class="heading">Предоставляемая продукция</h6>
        </div>
        <ul class="nospace group overview">

            @foreach ($categories as $category)
                <li class="one_third">
                    <div class="product">
                        <a href="/product/{{ $category->id }}" class="link-dark">
                            <div class="imgbox"><img src="{{ asset('storage/'.$category->avatar) }}" alt="{{ $category->title }}"></div>
                            <div class="specifies">
                                <h2 class="heading">{{ $category->title }}</h2>
                                <span>{!! $category->description !!}</span>
                            </div>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
    </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Факты о нас</h6>
      <p>С 2012 года мы работаем на рынке Казахстана, за этот период помимо колоссального опыта мы добились определённых успехов, Вы можете ознакомиться с ними ниже</p>
    </div>
    <div class="group center">
      <article class="one_third first">
        <h6 class="heading">8</h6>
        <p>Лет в нефтегазовой сфере</p>
      </article>
      <article class="one_third">
        <h6 class="heading">Более 100</h6>
        <p>реализованных проектов</p>
      </article>
      <article class="one_third">
        <h6 class="heading">Свыше 10 000</h6>
        <p>наименований товаров</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper gradient">
  <section id="testimonials" class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Мы импортёры года!</h6>
    </div>
    <img src="{{ asset('images/demo/lider.png') }}" alt="">
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section id="latest" class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Полезная информация</h6>
      <p>Обзоры и инструкции новейшего оборудования</p>
    </div>
    <ul class="nospace group">
        @foreach($articles as $article)
          <li class="one_third first">
            <article>
                    <figure><a href="#"><img src="{{asset('storage/'.$article->avatar)}}" alt="{{$article->title}}"></a>
                        <figcaption>
                            <time datetime="{{$article->created_at}}"><strong>{{ \Carbon\Carbon::parse($article->created_at)->format('d') }}</strong> <em>{{ \Carbon\Carbon::parse($article->created_at)->locale('ru')->translatedFormat('M') }}</em></time>
                        </figcaption>
                    </figure>
                    <div class="excerpt">
                        <h6 class="heading">{{$article->title}}</h6>
                        <ul class="nospace meta">
                            @foreach(json_decode($article->tags, true) as $tag)
                                <li><i class="fas fa-tags"></i>
                                    <a href="#">{{$tag}}</a>
                                </li>

                            @endforeach

                        </ul>
                        <p>{{ $article->intro }}</p>
                        <footer><a class="btn" href="{{ route('article', ['id' => $article->id]) }}">Подробнее</a></footer>
                    </div>
            </article>
          </li>
        @endforeach
    </ul>
    <!-- ################################################################################################ -->
  </section>
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
<!-- ################################################################################################ -->
</body>
</html>
