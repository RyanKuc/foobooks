@extends('layouts.master')

@section('title')
  Create Book
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
<form method="POST" action="/books/create">
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
            <label for='title'>Title:</label>
            <input type="text" id='title' name="title">
        </fieldset>

        <br>
        <button type="submit" class="btn btn-primary">Add book</button>
  </form>


@stop
