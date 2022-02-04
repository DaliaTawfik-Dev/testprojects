<!-- Modal -->
<div class="modal fade" id="edit{{ $raw->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> تعديل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('raw.update','raw') }}" method="post" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $raw->id }}">
                    <div class="row">
                        <div class="col">
                            <label> اسم العميل</label>
                            <input type="text" class="form-control" name="customername" value="{{$raw->customername}}">

                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label>الهاتف</label>
                            <input type="number" class="form-control" name="phone" value="{{$raw->phone}}">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label>رقم الطلب</label>
                            <input type="number" class="form-control" name="ordernumber" value="{{$raw->ordernumber}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الصنف</label>
                            <input type="text" class="form-control" name="item" value="{{$raw->item}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>السعر</label>
                            <input type="number" class="form-control" name="price" value="{{$raw->price}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label> تاريخ</label>
                            <input type="date" class="form-control" name="date" value="{{$raw->date}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label> الوزن</label>
                            <input type="text" class="form-control" name="weight" value="{{$raw->weight}}">
                        </div>
                    </div>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الكميه</label>
                            <input type="text" class="form-control" name="quantity" value="{{$raw->quantity}}">
                        </div>
                    </div>
                    <br>



                    <div class="row">
                        <div class="col">
                            <label>الاجمالي</label>
                            <input type="text" class="form-control" name="total" value="{{$raw->total}}">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>الملاحظات</label>
                            <textarea type="text" class="form-control" name="notse" rows=5 {{$raw->notes}}></textarea>
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
