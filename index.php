<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horário</title>
</head>
<body>
    
    <form action="horario.php" method="post">
        <label>Nome da loja: </label>
        </br>
        <input type="text" name="nome" id="nome">

        </br>
        </br>
        
        <label>Dia(s) da semana: </label>
        </br>
        <input type="checkbox" name="dias[]" value="domingo"> Domingo
        <input type="checkbox" name="dias[]" value="segunda"> Segunda-feira
        <input type="checkbox" name="dias[]" value="terca"> Terça-feira
        <input type="checkbox" name="dias[]" value="quarta"> Quarta-feira
        <input type="checkbox" name="dias[]" value="quinta"> Quinta-feira
        <input type="checkbox" name="dias[]" value="sexta"> Sexta-feira
        <input type="checkbox" name="dias[]" value="sabado"> Sábado

        </br>

        <label>Horário</label>
        </br>
        Abre às:
        <input type="time" name="hora_inicial">
        Fecha às:
        <input type="time" name="hora_final">

        </br>
        <button type="submit">Salvar</button>
    </form>    
</body>
</html>