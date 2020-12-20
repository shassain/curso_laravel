<html>
<head>
</head>

<body>
  <h1>Validante de Inscripcion</h1>
  <br/>
  <table>
  <tr>
    <th>Curso</th>
    <td style="border-bottom: 1px dashed #000">{{$curso->name}}</td>
    <th>Fecha de Inscripcion</th>
    <td style="border-bottom: 1px dashed #000">{{$participante->cursos[0]->pivot->fecha_de_inscripcion}}</td>
  </tr>
  </table>
  <table>
    <tr>
    <th>Nombre:</th>
    <td style="border-bottom: 1px dashed #000">{{$participante->nombre}} 
              {{$participante->appaterno}} 
              {{$participante->apmaterno}} </td>
    </tr>
  </table>
  
  
  
  $curso->name.'-'.$participante->cursos[0]->pivot->fecha_de_inscripcion.'-'.$participante->nombre
</body>
</html>