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
                <textarea name="description" placeholder="description" class="form-control"
                          style="height:100px;">{{$article->description }}</textarea>

            @else
                <textarea name="description" placeholder="description" class="form-control"
                          style="height:100px;">{{ old('description') }}</textarea>
            @endif
        </div>
    </div>
    @if( $action  =="edit")
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date:</strong>
                <input style="background-color: #ddd;" type="text" value="{{$article->date}}" readonly/>

            </div>
        </div>
    @endif

    @if( $action  =="edit")
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="{{url('images/tert.am/'. $article->img_local_url) }}"/>
            </div>
        </div>
    @else
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group {{ $errors->has('img_local_url') ? ' has-error' : '' }}">
                <strong>Image:</strong>
                <input id="img_local_url" type="file"  name="img_local_url" />
                <input   type="file"  name="sssss" />
                <input type="hidden" value="" name="imagePreview" class="imagePreview">
                <img  class="preview-images" id="imagePreview" src="" alt="your image"/>
            </div>
        </div>
    @endif

</div>


</div>
</div>