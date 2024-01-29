<x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone-Number</th>
                <th scope="col">Gender</th>
                <th scope="col">Death Of birth</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($data as $row)


<th scope="row">{{$row->id}}</th>
<td>{{$row->name}}</td>
<td>{{$row->email}}</td>
<td>{{$row->number}}</td>
<td>{{$row->gender}}</td>
<td>{{$row->date}}</td>
<td>
        <a href="{{route('user.edit',$row->id)}}"  class="btn btn-sm btn-info edit ">Edit</a>
        <a href="{{route('user.destroy',$row->id)}}" class="btn bnt-sm btn-danger">Delete</a>
      </td>

@endforeach
            </tr>

        </tbody>
    </table>
</div>


        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>
