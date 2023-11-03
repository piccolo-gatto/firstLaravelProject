<table>
    <tr>
    <th></th>
        <th>name</th>
        <th>email</th>
    </tr>
    @foreach($data as $id)
        <tr>
        <td></td>
            @foreach($id as $forms => $item)
                <td>{{$item}}</td>
            @endforeach  
        </tr>
    @endforeach  
</table>
