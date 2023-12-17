<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Department</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Department</h2>
        <form action="{{url('department/update'.$department->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="{{ $department->name}}" name="name" id="">

            </div>
            <div class="form-group">
                <label for="">Short Name</label>
                <input type="text" class="form-control" value="{{ $department->sort_name}}" name="shortName" id="">

            </div>
            <div class="form-group">
                <label for="">Established At</label>
                <input type="date" class="form-control" value="{{ $department->established_at}}" name="estAt" id="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>

        </form>
    </div>
    
</body>
</html>