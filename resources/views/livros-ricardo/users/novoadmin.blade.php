@extends('main_ricardo')

@section('content')
<form method="POST" action="/livros-ricardo/novoadmin">
    @csrf
    <div class="form-group row">
        <label for="codpes" class="col-sm-4 col-form-label text-md-right">número usp</label>
        <div class="col-md-6">
            <input type="text" name="codpes_text" value="{{ old('codpes') }}" >
        </div>
        
    </div>
    <div class="form-group row">
        <label for="codpes" class="col-sm-4 col-form-label text-md-right">ou selecione</label>
        <div class="col-md-6">
            <select name="codepes_select">
                <option value="">Selecione um usuário</option>
                @foreach (\App\Models\User::where('codpes', '!=', '')->get() as $user)
                <option value="{{$user->codpes}}">{{$user->name}} ({{$user->codpes}})</option>
                @endforeach
            </select>
        </div>
        
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection