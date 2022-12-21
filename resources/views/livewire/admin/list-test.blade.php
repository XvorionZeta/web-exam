<div class="container-fluid py-4">
    <div class="row">
        @include('components.modal.edit-test')
        <div class="col-md-12">
            <div class="card">
                @if ($deleted)
                    <div class="card-header mx-4 my-3 btn bg-primary rounded-2 px-4 py-2">
                        <h3 class="text-center text-white">Test Berhasil Di Delete</h3>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Judul Test</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Pass Grade
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Durasi</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Soal setiap test
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jumlah Soal
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ $data->firstItem() + $loop->index }}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-start">
                                            <h6 class="mb-0 text-xs">{{ $datas->title }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ number_format($datas->pass_grade,2) }}</p>
                                    {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $datas->duration }}</span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs text-secondary mb-0 text-center">{{ $datas->total_questions }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $datas->total_questions }}</span>
                                </td>
                                <td class="d-flex flex-col gap-2 justify-content-center">
                                    <button type="button" class="btn btn-success rounded py-1" wire:click='assignTest({{ $datas->id }})'>
                                        <i class="fa-solid fa-plus"></i>
                                        <span>Assign</span>
                                    </button>
                                    <button wire:click='listSoal({{ $datas->id }})' type="button" class="btn btn-info rounded py-1">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <span>Soal</span>
                                    </button>
                                    <button type="button" class="btn btn-warning rounded py-1" wire:click='editTest({{ $datas->id }})'  data-bs-toggle="modal" data-bs-target="#modal-edit" >
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <span>Edit</span>
                                    </button>
                                    <button type="button" class="btn btn-danger rounded py-1" wire:click.prevent='delete({{ $datas->id }})'>
                                        <i class="fa-regular fa-trash-can"></i>
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>
