<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="exposiciones" class="form-label">{{ __('Exposiciones') }}</label>
            <input type="text" name="exposiciones" class="form-control @error('exposiciones') is-invalid @enderror" value="{{ old('exposiciones', $obraArte?->exposiciones) }}" id="exposiciones" placeholder="Exposiciones">
            {!! $errors->first('exposiciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $obraArte?->titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="autor" class="form-label">{{ __('Autor') }}</label>
            <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor', $obraArte?->autor) }}" id="autor" placeholder="Autor">
            {!! $errors->first('autor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="delete_at" class="form-label">{{ __('Delete At') }}</label>
            <input type="text" name="delete_at" class="form-control @error('delete_at') is-invalid @enderror" value="{{ old('delete_at', $obraArte?->delete_at) }}" id="delete_at" placeholder="Delete At">
            {!! $errors->first('delete_at', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estilo_artes_id" class="form-label">{{ __('Estilo Artes Id') }}</label>
            <input type="text" name="estilo_artes_id" class="form-control @error('estilo_artes_id') is-invalid @enderror" value="{{ old('estilo_artes_id', $obraArte?->estilo_artes_id) }}" id="estilo_artes_id" placeholder="Estilo Artes Id">
            {!! $errors->first('estilo_artes_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>