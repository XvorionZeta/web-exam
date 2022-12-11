<div class="row mt-4">
    <div class="col col-6 mx-auto">
        <div class="card card-frame">
            {{-- Header --}}
            <div class="card-header">
                <h3>Judul Test</h3>
            </div>
            {{-- Body --}}
            <div class="card-body">
                <div class="p-4">
                    <form>
                        {{-- Judul --}}
                        <div class="form-group">
                            <label for="pertanyaan">SOAL</label>
                            <textarea type="text" class="form-control" id="pertanyaan" wire:model='pertanyaan' placeholder="-" rows="3"
                                required></textarea>
                        </div>
                        {{-- Durasi --}}
                        <div class="row">
                            <label>Jawaban</label>
                            {{-- Passing Grade --}}
                            <div class="form-group">
                                <input type="number" min="0" class="form-control" id="passGrade"
                                    wire:model='passGrade'>
                            </div>
                        </div>
                        {{-- Next Button --}}
                        <button class="btn btn-icon btn-3 btn-info float-end" type="button" wire:click='next'>
                            <span class="btn-inner--text px-2">Next</span>
                            <span class="btn-inner--icon mt-2"><i class="ni ni-curved-next"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
