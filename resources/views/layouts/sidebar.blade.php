<div class="sidebar">
  <div class="brand-logo">
    <a href="index.html"><img src="{{ asset('assets/img/app/favicon-white.png') }}" alt="" /> </a>
  </div>
  <div class="menu">
    <ul>
      <li>
        <a href="{{ route('dashboard') }}" data-toggle="tooltip" data-placement="right" title="Home">
          <span><i class="icofont-ui-home"></i></span>
        </a>
      </li>
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <li class="logout">
              <a href="#" data-toggle="tooltip" data-placement="right" title="Signout" 
                  onclick="event.preventDefault(); this.closest('form').submit();">
                <span><i class="icofont-power"></i></span>
              </a>
          </li>
      </form>
    </ul>
    {{-- <p class="copyright">&#169; <a href="#">codeefly</a></p> --}}
  </div>
</div>