<!-- Modal -->
<div class="modal fade" id="edit{{ $go->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!--  -->
                <form action="{{ route('go.update', '7yawen') }}" method="post" autocomplete="off">
                    @method('PUT')
                    @csrf

                    <input type="hidden" name="id" value="{{ $go->id }}">

                    <div class="row">
                        <div class="col">
                            <label> الاسم </label>
                            <input type="text" class="form-control" name="name" value="{{ $go->name }}">
                        </div>\

                        <div class="col">
                            <label> العنوان</label>
                            <input type="text" class="form-control" name="address" value="{{ $go->address }}">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label> ملاحظات</label>
                            <textarea class="form-control" name="notes" rows="5">

                                {{ $go->notes }}

                            </textarea>
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


{{-- create button edit and copy address modal
    copy modal
    change ID
    change Route('asasas.updata','test')

    <input type="hidden" name="id" value="{{$id->id}}">

    change rrquired -> value = "{{$id->sdasd}}" --}}
