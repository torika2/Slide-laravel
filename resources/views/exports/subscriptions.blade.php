<table>
    <thead>
    <tr  colspan=3 height="40">

        <th width="22" ><h1>email</h1></th>
        <th width="30" ><h1>თარიღი</h1></th>

    </tr>
    </thead>
    <tbody>
    @foreach($subscriptions as $sub)
        <tr>
            <td>{{ $sub->email }}</td>
            <td>{{ $sub->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>





