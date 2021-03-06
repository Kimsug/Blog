{{-- nombre --}}
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}        
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa ']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror

</div>

{{-- slug --}}
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}        
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'url', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- categoria --}}
<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}        
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('categories')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- estado --}}
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label class="mr-2">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    <hr>

    @error('status')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- imagen --}}
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}">
            @else
                <img id="picture" src="" alt="">                
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen ') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        <p>Lorem ipsum dolor sit amet conseinus ex, dolore facere quia! Quo?</p>

        @error('file')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

{{-- extracto --}}
<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}        
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

{{-- informacion --}}
<div class="form-group">
    {!! Form::label('body', 'Información ') !!}        
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

</div>