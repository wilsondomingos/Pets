@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Editar</title>
</head>
<body>
  <form action="/pets/update/{{$pet['id']}}" method="POST">
    @csrf
    @method("PATCH")
    <label for="nome">Nome</label>
      <input type="text" name="nome" value="{{$pet['name']}}">

      <label for="rga">RGA</label>

      <input type="text" name="rga" value="{{$pet['RGA']}}" >

      <label for="nascimento">Data de Nascimento</label>

      <input type="date" name="data_nascimento"value="{{$pet['data_nascimento']}}">

    <label>Dono</label>

     <label>Dono</label>
        <select name="owner_id">
        @foreach($owners as $owner)
            <option value="{{ $owner['id'] }}" @if($owner['id'] == $pet['owner_id']) select @endif>
                {{ $owner["name"]}}
            </option>
        @endforeach
        </select>

  <input type="submit">
  </form>
</body>
</html>
@endsection
