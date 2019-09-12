@extends('post.layout')

@section('post_add')
    投稿作成<br>

    <form action='{{ route('post_create') }}' method='post'>
        {{ csrf_field() }}
        <style>
        table{
            border:collapse:collapse;
        }
        td{
            border-:solid 1px;
            padding:0.5em;
        }
        </style>
        <table>
            <tr>
                <td>タイトル：<input type='varchar' name='title'></td>
                <td>内容：<input type='text' name='content'></td>
                <td>訪問日：<input type='date' name='date'></td>
                <td><input type='submit' value='投稿'></td>
            <!-- 縦に並べる書き方は？-->
            </tr>
        </table>
    </form>
@endsection