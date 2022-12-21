<div wire:ignore.self class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit"
    aria-hidden="true">
    <form wire:submit.prevent='update'>
        @csrf
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title font-weight-bolder text-gradient text-primary" id="modal-title-edit"
                        wire:model='title'>Test {{ $title }}</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @yield('modal-content')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-primary" data-bs-dismiss="modal">Save changes</button>
                    <button type="button" class="btn btn-link   ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>
