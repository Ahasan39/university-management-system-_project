<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Department</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Create Department</h2>
        <form action="{{url('department/store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="">

            </div>
            <div class="form-group">
                <label for="">Short Name</label>
                <input type="text" class="form-control" name="shortName" id="">

            </div>
            <div class="form-group">
                <label for="">Established At</label>
                <input type="date" class="form-control" name="estAt" id="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>

        </form>
    </div>
    
</body>
</html>