<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة جديدة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!--  -->
                <form action="{{route('go.store')}}" method="post" autocomplete="off">
                    @csrf


                    <div class="row">
                        <div class="col">
                            <label> الاسم </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>\

                        <div class="col">
                            <label> العنوان</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label> ملاحظات</label>
                            <textarea class="form-control" name="notes" rows="5"></textarea>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        <button  class="btn btn-primary">حفظ</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>


{{-- - bootsatrap (modal -> buuton(index @include() ) -> modal(create) confrim the name in button % modal)
   we mike form (post form), and we make <div class="row"></div> ,and <div class="col"></div>
   aftar that  we will make label and <input type="text" class="form-control" name="name" required> --}}
