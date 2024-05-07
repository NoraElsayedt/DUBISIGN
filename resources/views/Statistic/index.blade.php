
@extends('dashboard.layouts.master')
@section('css')

@endsection
@section('title')
Statistic Index

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Statistic Index
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

             

                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                
                                <th class="wd-15p border-bottom-0">########</th>
                                <th class="wd-20p border-bottom-0">Number Of Task</th>
                           
                                <th class="wd-20p border-bottom-0">Assigned_To</th>
                                <th class="wd-15p border-bottom-0">Assigned_BY</th>
                        
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Statistic as $Statistics)
                                
                       
                            <tr>
                                
                                <td>{{$loop->iteration}}</td>
                                <td>{{$Statistics->number_of_task}}</td>
                                
                                <td>{{$Statistics->Assigned_To->name}}</td>
                                <td>{{$Statistics->Assigned_BY->name}}</td>
                             
                                
                            </tr>



                          




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







</div>





@endsection
@section('js')

@endsection