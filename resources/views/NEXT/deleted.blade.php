<!-- Modal -->
<div class="modal fade" id="delete{{$next->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('next.destroy', 'ZAFT') }}" method="post" outocomplete="off">
                    @method('DELETE')
                    @csrf

                    <input type="hidden" name="id" value="{{$next->id}}">


                    <div class="row">
                        <div class="col">
                            <label>الاسم</label>
                            <input type="text" name="name" class="form-control" name="name" readonly value="{{$next->name}}">
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
