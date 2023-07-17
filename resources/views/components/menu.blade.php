
<nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Главная</a></li>
      <li class="{{ (request()->is('boerger*')) ? 'active' : '' }}"><a href="{{ route('boerger') }}">Börger</a></li>
      <li class="{{ (request()->is('denair*')) ? 'active' : '' }}"><a href="{{ route('denair') }}">Denair</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>

