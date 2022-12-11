<div class="row mt-4">
    <div class="col col-6 mx-auto">
        <div class="card card-frame">
            {{-- Header --}}
            <div class="card-header">
                <h3>Buat Test</h3>
            </div>
            {{-- Body --}}
            <div class="card-body">
                <div class="p-4">
                    <form>
                        {{-- Judul --}}
                        <div class="form-group">
                            <label for="judulTest">Judul Test</label>
                            <input type="text" class="form-control" id="judulTest" wire:model='judul'
                                placeholder="Judul Test" required>
                        </div>
                        {{-- Durasi --}}
                        <div class="row">
                            <label>Durasi</label>
                            <div class="col col-4">
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control" id="jam"
                                        wire:model='jam' placeholder="Jam" required>
                                </div>
                            </div>
                            <div class="col col-4">
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control" id="menit"
                                        wire:model='menit' placeholder="Menit" required>
                                </div>
                            </div>
                            <div class="col col-4">
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control" id="detik"
                                        wire:model='detik' placeholder="Detik" required>
                                </div>
                            </div>
                        </div>
                        {{-- Passing Grade --}}
                        <div class="form-group">
                            <label for="passGrade">Passing Grade</label>
                            <input type="number" min="0" class="form-control" id="passGrade"
                                wire:model='passGrade'>
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
