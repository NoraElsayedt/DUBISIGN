
@extends('dashboard.layouts.master')
@section('css')

@endsection
@section('title')
TASK Index

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">TASK Index
                                </h4>
						</div>
					</div>
				
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<div class="row row-sm">

    <div class="col-xl-12">
        <div class="card">
 
            <div class="card-body">
                

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

                <button type="button" class="button btn btn-success" data-toggle="modal" data-target="#exampleModal">
                 Create Task
                </button>
                <br><br>

                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                
                                <th class="wd-15p border-bottom-0">########</th>
                                <th class="wd-20p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Description</th>
                                <th class="wd-20p border-bottom-0">Assigned_To</th>
                                <th class="wd-15p border-bottom-0">Assigned_BY</th>
                                <th class="wd-10p border-bottom-0">Operation</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                
                       
                            <tr>
                                
                                <td>{{$loop->iteration}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->Assigned_To->name}}</td>
                                <td>{{$task->Assigned_BY->name}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#edit{{ $task->id }}"
                                  ><i
                                    class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{ $task->id }}"
                                    ><i
                                    class="fa fa-trash"></i></button>


                                </td>
                                
                            </tr>



                            @include('Tasks.edit')
                            @include('Tasks.delete')
                         




                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->


@include('Tasks.create')




</div>





@endsection
@section('js')

@endsection