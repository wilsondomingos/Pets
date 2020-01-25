<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
  <form action="/pets/store" method="POST">
    @csrf
    <label for="nome">Nome</label>
      <input type="text" name="nome">

      <label for="rga">RGA</label>

      <input type="text" name="rga">
      <label for="nascimento">Data de Nascimento</label>

      <input type="date" name="data_nascimento">

    <label>Dono</label>

      <select name="owner_id">
          @foreach ($owners as $owner)
          <option value="{{$owner['id']}}">{{$owner["name"]}}</h3>
          @endforeach
      </select>

  <input type="submit">
  </form>
</body>
</html>
