<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>subject</th>
                <th>message</th>
                <th>image</th>
                <th>createdat</th>
                <th>updateat</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($contacts as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->subject }}</td>
                    <td>{{ $c->message }}</td>
                    <td><img style="width :40px" src="{{ asset('uploades/' . $c->image) }}"></td>
                    <td>{{ $c->created_at }}</td>
                    <td>{{ $c->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
