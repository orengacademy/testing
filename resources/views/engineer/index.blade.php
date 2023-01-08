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
  <h1 class="h3 mb-3 fw-normal">Engineer</h1>
  <!-- <a href="{{ url('/project/create') }}" class="w-10 btn btn-sm btn-primary" title="Add New Student">
      Add New Project +
  </a>
  <a href="{{ url('/project/assign') }}" class="w-10 btn btn-sm btn-success" title="Add New Student">
      Assign
  </a><br><br> -->

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for engineer.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Engineer</th>
    <th style="width:10%;">Client</th>
    <th style="width:15%;">Project Code</th>
    <th style="width:20%;">Project Manager</th>
    <th style="width:20%;">Start Date</th>
    <th style="width:20%;">End Date</th>
    <th style="width:20%;">Status</th>

    <!-- <th style="width:20%;">Action</th> -->
  </tr>
  @foreach($project as $item)
  <tr>
    <td>{{ $item->Engineers }}</td>
    <td>{{ $item->client }}</td>
    <td>{{ $item->projectcode }}</td>
    <td>{{ $item->PMO }}</td>
    <td>{{ $item->startdate }}</td>
    <td>{{ $item->enddate }}</td>
    <td>{{ $item->status }}</td>

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
