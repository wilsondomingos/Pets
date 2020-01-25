<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



 </div>
 @if(count($pets) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr class="text-info">
                    <th>Código</th>
                    <th>Nome da Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
@foreach ($pets as $pet)
                <tr>
                    <td>{{$pet["name"]}}</td>
                    <td>{{$pet["rga"]}}</</td>
                    <td>{{$pet["data_nascimento"]}}</</td>
                    <td>
                        <a href="/pets/edit/{{$pet->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <a href="/pets/destroy/{{$pet->id}}" class="btn btn-sm btn-primary">Apagar</a>

                    </td>
                </tr>
  @endforeach
         </tbody>
        </table>
@endif
</body>
</html>
