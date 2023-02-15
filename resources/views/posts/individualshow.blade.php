<style>
    h2 {
        font-family: Arial, sans-serif;
        font-size: 20px;
        text-align: center;
    }

    table {
        width: 80%;
        margin: 50px auto;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #ddd;
    }
</style>
@extends('layouts.app')

@section('content')
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$posts->title}}</td>
            <td>{{$posts->content}}</td>
        </tr>
        </tbody>
    </table>
@endsection
