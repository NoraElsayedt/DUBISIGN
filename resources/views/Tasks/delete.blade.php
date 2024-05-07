     <!-- delete_modal_Grade -->
     <div class="modal fade" id="delete{{ $task->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                       id="exampleModalLabel">
                      Task delete
                   </h5>
                   <button type="button" class="close" data-dismiss="modal"
                           aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form action="{{route('Task.destroy','test')}}" method="post">
                       {{method_field('Delete')}}
                       @csrf
                       Task delete
                       <input id="id" type="hidden" name="id" class="form-control"
                              value="{{ $task->id }}">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                   </form>
               </div>
           </div>
       </div>
   </div>