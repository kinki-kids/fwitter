@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach($users as $user)
            <li class="media">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="{{ $user->name }}の画像">
                <div class="media-body">
                    <div>
                        {{-- ユーザー詳細へのリンク --}}
                        <p>{!! link_to_route('users.show', $user->name, ['user' => $user->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションへのリンク --}}
    {{ $users->links() }}
@endif