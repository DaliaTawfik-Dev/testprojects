<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bfd.') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label>الاسم</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label>السعر</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> العنوان</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> الهاتف</label>
                            <input type="number" class="form-control" name="phone" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label> الملاحظات</label>
                            <textarea type="text" class="form-control" name="notse" rows=5></textarea>
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
