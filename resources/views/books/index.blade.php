@extends('layouts.app')

@section('title','all books')
<ul>
@section('content')
@foreach($books as $book)
<li><a href="{{route('books.show',$book->id)}}">{{$book->title}}</a></li>
@endforeach
</ul>
@endsection

