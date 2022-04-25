<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Microposts</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{--　ユーザ一覧へのリンク　--}}
                    <li class="nav-link"><a href="#" class="nav-link">Users</a></li>
                    <ul class="dropdown-menu dropdown-menu-right">
                        {{-- ユーザ詳細ページへのリンク --}}
                        <li class="dropdown-item"><a href="#">My Profile</a></li>
                        <li class="dropdown-divider"></li>
                        {{-- ログアウトへのリンク --}}
                        <li class="dropdown-item">{!! link_to_route('logout.get','ログアウト') !!}</li>
                    </ul>
                @else
                    {{--　ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'ユーザ登録はこちら！', [], ['class' => 'nav-link']) !!}</li>
                    {{--　ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'ログインはこちら！', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
