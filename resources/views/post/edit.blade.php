@extends('post.layout')

@section('post_edit')

投稿編集<br>
<form action='{{ route('post_update') }}' method='post'>
        {{ csrf_field() }}
        <style>
        table{
            border-collapse:collapse;
        }
        td{
            border:solid 1px;
            padding:0.5em;
        }

        </style>
            <table>
                <tr>
                    <td><input type='hidden' name='id' value='{{ $post->id }}'></td>
                    <td>題名：<input type='varchar' name='title' value='{{ $post->title }}'></td>
                    <td>内容：<input type='text' name='content' value='{{ $post->content }}'></td>
                    <td>訪問日：<input type='date' name='date' value='{{ $post->date }}'></td>
                    <td><input type='submit' value='投稿'></td>
                </tr>
            </table>
    </form>
@endsection