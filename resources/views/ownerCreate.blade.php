<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
  <form action="/owners/store" method="POST">
    @csrf
    <label for="nome">Nome</label>
      <input type="text" name="nome">

      <label for="telefone">Telefone</label>
      <input type="text" name="telefone">

    <label>Animal</label>

      <select name="pet_id">
          @foreach ($pets as $pet)
          <option value="{{$pet['id']}}">{{$pet["name"]}}</h3>
          @endforeach
      </select>

  <input type="submit">
  </form>
</body>
</html>
