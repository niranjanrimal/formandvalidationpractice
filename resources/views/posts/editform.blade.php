@extends('layouts.app')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #333;
        }

        h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .edit-button {
            float: right;
            padding: 8px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            text-decoration: none;
            color: #333;
        }
    </style>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>
                    {{ $post->title }}
                    <a href="{{ route('edit', $post->id) }}" class="edit-button">Edit</a>
                    <a href="{{ route('delete', $post->id) }}" class="edit-button">Delete</a>
                </td>
                <td>{{ $post->content }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

