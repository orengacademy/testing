@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Project Management</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/project/create') }}" class="w-10 btn btn-lg btn-primary" title="Add New Student">
                            Add New +
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Project Code</th>
                                        <th>Client</th>
                                        <th>PMO</th>
                                        <th>Engineer</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Scope</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($project as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->titleproject }}</td>
                                        <td>{{ $item->projectcode }}</td>
                                        <td>{{ $item->client }}</td>
                                        <td>{{ $item->PMO }}</td>
                                        <td>{{ $item->Engineers }}</td>
                                        <td>{{ $item->startdate }}</td>
                                        <td>{{ $item->enddate }}</td>
                                        <td>{{ $item->scope }}</td>
                                        <td>{{ $item->type }}</td>
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
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
