<div class="sidebar">
    <div class="brand-logo">
      <a href="index.html"><img src="{{ asset('assets/img/app/favicon-white.png') }}" alt="" /> </a>
    </div>
    <div class="menu">
      <ul>
        <li>
          <a
            href="index.html"
            data-toggle="tooltip"
            data-placement="right"
            title="Home"
          >
            <span><i class="icofont-ui-home"></i></span>
          </a>
        </li>
        <li>
          <a
            href="trade.html"
            data-toggle="tooltip"
            data-placement="right"
            title="Trade"
          >
            <span><i class="icofont-stack-exchange"></i></span>
          </a>
        </li>
        <li>
          <a
            href="wallet.html"
            data-toggle="tooltip"
            data-placement="right"
            title="Wallet"
          >
            <span><i class="icofont-wallet"></i></span>
          </a>
        </li>
        <li>
          <a
            href="price.html"
            data-toggle="tooltip"
            data-placement="right"
            title="Price"
          >
            <span><i class="icofont-price"></i></span>
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

      <p class="copyright">&#169; <a href="#">codeefly</a></p>
    </div>
  </div>