<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Departments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>All Departments</h2>
        <table class="table table-striped">
            <thead>
                    <th>Name</th>
                    <th>Short Name</th>
                    <th>Established</th>
                    <th>Action</th>
            </thead>
            <tbody>
                @foreach($departments as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->sort_name}}</td>
                    <td>{{ $d->established_at}}</td>
                    <td>
                        <a href="{{url('department/edit/'.$d->id)}}" class="btn btn-secondary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
