
<!-- Modal -->
<div class="modal fade" id="delete{{$giyout->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> حذف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gitout.destroy' , 'lana') }}" method="post" autocomplete="off">
                    @method('DELETE')
                    @csrf

                    <input type="hidden" name="id" value="{{$giyout->id}}">
                    <div class="row">
                        <div class="col">
                            <label> الاسم</label>
                            <input type="text" class="form-control" name="name" readonly value="{{$giyout->name}}">
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button class="btn btn-primary">حفظ</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>
