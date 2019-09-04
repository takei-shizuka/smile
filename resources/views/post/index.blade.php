<!-- @extends('layouts.layout.layout') -->

<!-- @section('post_index') -->
    記事一覧<br>
    <table>
        <tr><th>タイトル</th><th>内容</th></tr>
    @foreach($posts as $post)
    
        <tr>
            
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <!-- @auth
                 @if( ( $post->user_id ) === ( Auth::user()->id ) )
                    <td><a href="{{ route('post_edit') }}?id={{ $post->id }}">編集</a></td>
                    <td><a href="{{ route('post_delete') }}?id={{ $post->id }}">削除</a></td>
                @endif
            @endauth  -->
        </tr>
    @endforeach
    </table>
<!-- @endsection -->

