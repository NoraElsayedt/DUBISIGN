<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    Create Task
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Task.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> Title
                                :</label>
                            <input id="Name" type="text" name="Title" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description
                            :</label>
                        <textarea class="form-control" name="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="Name_en" class="mr-sm-2">Assigned_To
                            :</label>

                        <!-- HTML -->
                        <div class="form-group">
                            <select class="form-control" name="Assigned_To" id="assignedToSelect">
                                <option value="" selected disabled>Select Name oF Admin</option>
                                @foreach ($Assigned_To as $Assigned_To_name)
                                    <option value="{{ $Assigned_To_name->id }}">{{ $Assigned_To_name->name }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>


                    <div class="form-group">
                        <label for="Name_en" class="mr-sm-2">Assigned_BY
                            :</label>

                        <div class="form-group">
                            <select class="form-control" name="Assigned_BY">
                                <option value="" selected disabled>
                                    Select Name oF User
                                </option>
                                @foreach ($Assigned_BY as $Assigned_BY_name)
                                    <option value="{{ $Assigned_BY_name->id }}">{{ $Assigned_BY_name->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                <button type="submit" class="btn btn-success">submit</button>
            </div>
            </form>

        </div>
    </div>
</div>
