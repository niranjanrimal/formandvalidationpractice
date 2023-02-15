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
                <<td><a href="{{ route('show', $post->id) }}">{{ $post->title }}</a></td>
                <td><a href="">{{ $post->content }}</a></td>
                </a>
            </tr>
        @endforeach
        </tbody>
    </table>
