<form action="{{ route(catarticle.destroy, $catarticle->id) }}" method="post" enctype="multipart/form-data">
    {{ method_field('delete') }}
    {{ csrf_field() }}
    <div class="modal fade" id="ModalDelete{{$catarticle->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Clos">
                        <span aria-hidden="true">$times;</span>
                    </button>
                </div>
                <div class="modal body">Your sure you want to delete</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-primary" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="button" class="btn gray btn-outline-primary" >{{  __('Delete')}}</button>
                </div>
            </div>
        </div>
    </div>
</form>
