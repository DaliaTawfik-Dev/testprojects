<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="edit{{ $mm->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافه جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('mm.update', 'you') }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{ $mm->id }}">
                    <div class="row">
                        <div class="col">
                            <label>تاريخ الاضافه</label>
                            <input type="date" class="form-control" name="add_date" value="{{ date('Y-m-d') }}"
                                value="{{ $mm->add_date }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>الصنف</label>
                            <input type="text" class="form-control" name="item" value="{{ $mm->item }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> كود الصنف</label>
                            <input type="number" class="form-control" name="item_code" value="{{ $mm->item_code }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>الكميه</label>
                            <input type="text" class="form-control" name="quantity" value="{{ $mm->quantity }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>الوزن</label>
                            <input type="text" class="form-control" name="weight" value="{{ $mm->weight }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>رقم التشغيله</label>
                            <input type="text" class="form-control" name="batch_number"
                                value="{{ $mm->batch_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> تاريخ الانتاج</label>
                            <input type="date" class="form-control" name="pr_data" value="{{ $mm->pr_data }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>تاريخ الانتهاء</label>
                            <input type="date" class="form-control" name="xpe_data" value="{{ $mm->xpe_date }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>الملاحظات</label>
                            <textarea type="text" class="form-control" name="notes"
                                rows=5> {{ $mm->notes }}</textarea>

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
