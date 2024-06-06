<div class="card welcome-profile">
    <div class="card-body">
        <img src="{{ asset($image) }}" alt="" />
        <h4>{{ $title }}</h4>
        <p>
            {{ $subTitle }}
        </p>

        @if ($items && count($items) > 0)
            <ul>
                @foreach ($items as $item)
                    <li>
                        <a href="{{ $item['url'] }}">
                            <span class="{{ $item['isVerified'] ? 'verified' : 'not-verified' }}"><i class="{{ $item['icon'] }}"></i></span>
                            {{ $item['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
        </div>
</div>