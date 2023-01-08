@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
      @auth

<!-- testing table -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<div class="bg-light p-5 rounded">
  <h1 class="h3 mb-3 fw-normal">Users List</h1>
  <a href="{{ url('/management/add') }}" class="w-10 btn btn-sm btn-primary" title="Add New Student">
      Add New User +
  </a><br><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for client.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Name</th>
    <th style="width:10%;">Email</th>
    <th style="width:10%;">Role</th>
    <th style="width:20%;">Created At</th>
    <th style="width:20%;">Updated At</th>
    <th style="width:20%;">Action</th>
  </tr>
  @foreach($project as $item)
  <tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->role }}</td>
    <td>{{ $item->created_at }}</td>
    <td>{{ $item->updated_at }}</td>
    <td>
        <!-- <a href="{{ url('/project/' . $item->id) }}" title="View Student"><button class="w-10 btn btn-lg btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
        <a href="{{ url('/management/' . $item->id . '/edit') }}" title="Edit Project"><button class="w-1 btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
        <form method="POST" action="{{ url('/management' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="w-1 btn btn-sm btn-danger" title="Delete Project" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </form>
    </td>

    @endforeach
  </tr>
</table>
</div>
@endauth

</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

@endsection
