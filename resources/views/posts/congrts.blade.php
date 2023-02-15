@extends('layouts.app')


@section('content')
    <style>
        .message {
            width: 500px;
            margin: 50px auto;
            text-align: center;
            padding: 30px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .button {
            width: 100px;
            padding: 12px 20px;
            margin: 8px 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            display: inline-block;
        }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>
    <h2>Congratulations! Your data has been inserted!</h2>
    <a href="{{route('form')}}" class="button">Back</a>
    <a href="{{ route('read') }}" class="button">Show List</a>
@endsection
