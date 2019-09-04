<!-- @extends('layouts.post.add') -->

<!-- @section('post_add') -->
    投稿作成<br>

    <form action='{{ route('post_create') }}' method='post'>
        {{ csrf_field() }}
            
            タイトル：<input type='string' name='title'><br>
            
            内容：<input type='text' name='content'><br>
            訪問日：<input type='date' name='date'><br>
            
            <input type='submit' value='投稿'>
    </form>
<!-- @endsection -->