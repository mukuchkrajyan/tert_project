@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Article</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('TertArticlesCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{--{!! Form::model($article, ['method' => 'PATCH','route' => ['TertArticlesCRUD.update', $article->id]]) !!}--}}
    <form role="form" class="" method="post" action="{{  route('TertArticlesCRUD.update',$article->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="PATCH">

        @include('TertArticlesCRUD.form',['article' => $article,'action'=>'edit'])
             <div class="container">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
    </form>
    {{--{!! Form::close() !!}--}}
@endsection