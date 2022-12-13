@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col col-md-6 mx-auto">
            <div class="card">
                {{-- Header --}}
                <div class="card-header">
                    <h3>Judul Test</h3>
                </div>
                {{-- Body --}}
                <div class="card-body">
                    <div class="row p-4">
                        <form wire:submit.prevent='saveQuestion'>
                            @csrf
                            {{-- Judul --}}
                            <div class="form-group">
                                <label for="question">SOAL</label>
                                <textarea type="text" class="form-control" id="question" wire:model='question'
                                    placeholder="-" rows="3" required></textarea>
                            </div>
                            {{-- Jawaban --}}
                            <div class="row mb-4">
                                <label>Jawaban</label>
                                @foreach ($answers as $index => $answer)
                                <div class="flex">
                                    <div class="input-group mb-2">
                                        <input type="text" min="0" class="form-control"
                                            wire:model='answers.{{ $index }}'>
                                        <button class="btn btn-danger mb-0" type="button" id="remove"
                                            wire:click.prevent='removeAnswer({{ $index }})'><i
                                                class="fa-solid fa-minus"></i></button>
                                        <button class="btn btn-success mb-0" type="button" id="add"
                                            wire:click.prevent='addAnswer'><i class="fa-regular fa-plus"></i></button>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="isRight"
                                            wire:model='isRight.{{ $index }}'>
                                        <label class="custom-control-label" for="isRight">Jawaban Yang Benar ?</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{-- Next Button --}}
                            <button class="btn btn-icon btn-3 btn-primary float-end" type="submit">
                                <span class="btn-inner--icon mt-2"><i class="fa-solid fa-floppy-disk"></i></span>
                                <span class="btn-inner--text px-1">Simpan</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
