@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
      @auth

<!-- testing table -->

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
  <h1 class="h3 mb-3 fw-normal">Projects List</h1>
  <a href="{{ url('/project/create') }}" class="w-10 btn btn-sm btn-primary" title="Add New Student">
      Add New Project +
  </a>
  <a href="{{ url('/project/assign') }}" class="w-10 btn btn-sm btn-success" title="Add New Student">
      Assign
  </a><br><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for client.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Client</th>
    <th style="width:10%;">Year</th>
    <th style="width:20%;">Project Title</th>
    <th style="width:15%;">Project Code</th>
    <th style="width:20%;">Project Manager</th>
    <th style="width:10%;">Status</th>
    <th style="width:20%;">Action</th>
  </tr>
  @foreach($project as $item)
  <tr>
    <td>{{ $item->client }}</td>
    <td>{{ $item->year }}</td>
    <td>{{ $item->titleproject }}</td>
    <td>{{ $item->projectcode }}</td>
    <td>{{ $item->PMO }}</td>
    <td>{{ $item->status }}</td>
    <td>
        <!-- <a href="{{ url('/project/' . $item->id) }}" title="View Student"><button class="w-10 btn btn-lg btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> -->
        <a href="{{ url('/project/' . $item->id . '/edit') }}" title="Edit Student"><button class="w-1 btn btn-sm btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

        <form method="POST" action="{{ url('/project' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="w-1 btn btn-sm btn-danger" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
