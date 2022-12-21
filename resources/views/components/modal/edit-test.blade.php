@extends('components.edit-modal')
@section('modal-content')
        {{-- Test Title --}}
        <div class="form-group">
            <label for="title">Judul Test</label>
            <input type="text" class="form-control" id="title" placeholder="Judul Test" wire:model='title'>
        </div>
        {{-- Pass Grade --}}
        <div class="form-group">
            <label for="passGrade">Pass Grade</label>
            <input type="number" class="form-control" id="passGrade" placeholder="Pass Grade" wire:model='passGrade' step="0.01">
        </div>
        {{-- Durasi --}}
        <div class="row">
            <label>Durasi</label>
            <div class="col col-4">
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="number" min="0" class="form-control" id="jam" wire:model='jam' required
                        placeholder="Jam">
                </div>
            </div>
            <div class="col col-4">
                <div class="form-group">
                    <label for="menit">Menit</label>
                    <input type="number" min="0" max="60" class="form-control" id="menit" required
                        wire:model='menit' placeholder="Menit">
                </div>
            </div>
            <div class="col col-4">
                <div class="form-group">
                    <label for="detik">Detik</label>
                    <input type="number" min="0" max="60" class="form-control" id="detik" required
                        wire:model='detik' placeholder="Detik">
                </div>
            </div>
        </div>
        {{-- Pertanyaan Per Test --}}
        <div class="form-group">
            <label for="sumQuestion">Pertanyaan Per-Soal</label>
            <input type="number" class="form-control" id="sumQuestion" placeholder="Pass Grade" wire:model='sumQuestion'>
        </div>
@endsection
