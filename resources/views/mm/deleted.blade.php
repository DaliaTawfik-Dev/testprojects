<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="delete{{ $mm->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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

                <form action="{{ route('mm.destroy', 'you') }}" method="POST" autocomplete="off">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{ $mm->id }}">
                    <div class="row">
                        <div class="col">
                            <label>تاريخ الاضافه</label>
                            <input type="date" class="form-control"  readonly      name="add_date" value="{{ date('Y-m-d') }}"
                                value="{{ $mm->add_date }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>الصنف</label>
                            <input type="text" class="form-control"  readonly name="item" value="{{ $mm->item }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> كود الصنف</label>
                            <input type="number" class="form-control"  readonly name="item_code" value="{{ $mm->item_code }}">
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
