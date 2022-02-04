
<!-- Modal -->
<div class="modal fade" id="edit{{$giyout->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> تعديل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gitout.update' , 'lana') }}" method="post" autocomplete="off">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$giyout->id}}">
                    <div class="row">
                        <div class="col">
                            <label> الاسم</label>
                            <input type="text" class="form-control" name="name" value="{{$giyout->name}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>السعر</label>
                            <input type="number" class="form-control" name="price" value="{{$giyout->price}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>العنوان</label>
                            <input type="text" class="form-control" name="address" value="{{$giyout->address}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الملاحظات</label>
                            <textarea tyeb="text" class="form-control" name="notes" rows=5> {{$giyout->notes}}</textarea>
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
