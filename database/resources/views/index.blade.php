<h1>students list</h1>

<table>
<tr>
    <td>
        id
        Name
    </td>
</tr>
@foreach($students as $student)
<tr>
    <td>
        {{$student->id}}
        {{$student->name}}
    </td>
@endforeach
</table>