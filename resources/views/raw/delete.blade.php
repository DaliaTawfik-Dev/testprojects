<!-- Modal -->
<div class="modal fade" id="delete{{ $raw->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> حذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('raw.destroy', 'dodo') }}" method="post" autocomplete="off">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{ $raw->id }}">
                    <div class="row">
                        <div class="col">
                            <label> اسم العميل</label>
                            <input type="text" class="form-control" readonly name="customername"
                                value="{{ $raw->customername }}">

                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button class="btn btn-primary">حذف</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>
