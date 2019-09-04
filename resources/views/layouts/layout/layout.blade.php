<a href="{{ url('/') }}">トップページ</a>
<a href="{{ route('user_index') }}">ユーザー一覧</a>


@yield('user_index')

@yield('post_index')
  <!-- post_add -->
@yield('post_add')
