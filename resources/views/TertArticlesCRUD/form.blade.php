<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{--{!! Form::text('name', null, array('placeholder' => 'title','class' => 'form-control')) !!}--}}
            @if( $action  =="edit")
                <input name="title" type="text" placeholder="title" class="form-control" value="{{ $article->title }}"/>

            @else
                <input name="title" type="text" placeholder="title" class="form-control" value="{{ old('title') }}"/>
            @endif

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            @if( $action  =="edit")
                <textarea name="description" placeholder="description" class="form-control" style="height:100px;">{{$article->description }}</textarea>

            @else
                <textarea name="description" placeholder="description" class="form-control" style="height:100px;" >{{ old('description') }}</textarea>
            @endif
                          {{--{!! Form::textarea('details', null, array('placeholder' => 'description','class' => 'form-control','style'=>'height:100px')) !!}--}}
                                  </div>
                                  </div>
                                  <div class=" col-xs-12 col-sm-12 col-md-12 text-center">
        </div>
    </div>
</div>