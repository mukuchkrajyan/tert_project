@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Article</h2>
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
    <form role="form" enctype="multipart/form-data " class="" method="post" action="{{route('TertArticlesCRUD.store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('TertArticlesCRUD.form',['article' => NULL,'action'=>'create'])
        <div class="container">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

    </form>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $("#img_local_url").change(function () {
                if (this.files && this.files[0]) {

                    var tmppath = URL.createObjectURL(event.target.files[0]);
                    console.log(event.target.files[0]);
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });

        function imageIsLoaded(e) {
            $('#imagePreview').attr('src', e.target.result);
            $('.imagePreview').val(e.target.result);
            $('#imagePreview').hide('fast');
            $('#imagePreview').show('slow');
        }
    </script>
@endsection