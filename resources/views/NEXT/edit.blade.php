<!-- Modal -->
<div class="modal fade" id="edit{{$next->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('next.update', 'ZAFT') }}" method="post" outocomplete="off">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{$next->id}}">


                    <div class="row">
                        <div class="col">
                            <label>الاسم</label>
                            <input type="text" name="name" class="form-control" name="name" value="{{$next->name}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الهاتف</label>

                            <input type="number" name="phone" class="form-control" name="number" value="{{$next->phone}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>السعر</label>

                            <input type="number" name="price" class="form-control" name="price" value="{{$next->price}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>العنوان</label>
                            <input type="text" name="address" class="form-control" name="address" value="{{$next->address}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label> ملاحظات</label>
                            <textarea type="text" name="notes" class="form-control" rows="5">{{$next->notes}}</textarea>
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
