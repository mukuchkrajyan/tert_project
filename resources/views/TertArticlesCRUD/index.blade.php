@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Article CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('TertArticlesCRUD.create') }}"> Create New Article</a>

                <form method="POST" style='display:inline;' action="{{route('getarticles')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input name="_method" type="hidden" value="POST">

                    <input class="btn btn-success" type="submit" value="Get last articles">
                </form>

            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{  $article->id  }}</td>
                <td>{{ $article->title}}</td>
                <td>{{ $article->description}}</td>
                <td><img src="{{$article->img_url}}" /> </td>
                <td>
                    <a class="btn btn-info" href="{{ route('TertArticlesCRUD.show',$article->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('TertArticlesCRUD.edit',$article->id) }}">Edit</a>
                    {{--{!! Form::open(['method' => 'DELETE','route' => ['TertArticlesCRUD.destroy', $article->id],'style'=>'display:inline']) !!}--}}
                    <form method="POST" style='display:inline;'
                          action="{{route('TertArticlesCRUD.destroy', $article->id)}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="_method" type="hidden" value="DELETE">

                        <input type="submit" class="btn btn-danger" value="Delete">
                        {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                    </form>
                    {{--{!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $articles->render() !!}
@endsection