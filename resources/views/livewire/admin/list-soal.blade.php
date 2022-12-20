<div class="container-fluid py-4">
    <div class="row">
        @include('components.edit-modal')
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <h4 class="px-4 py-2">Test {{ $title }}</h4>
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">No
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Soal/Pertanyaan</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jawaban
                                </th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Jawaban Benar</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $datas)
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{ $data->firstItem() + $loop->index }}</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-start">
                                            <h6 class="mb-0 text-xs">{{ $datas->question }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <ol>
                                        @foreach (App\Models\TestAnswer::where('question_id',$datas->id)->get() as $answer)
                                            <li class="text-xs font-weight-bold mb-0 text-start">{{ $answer->answer }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td class="align-middle text-center">
                                    <ol>
                                        @foreach (App\Models\TestAnswer::where('question_id',$datas->id)
                                                                        ->where('is_right','=',1)
                                                                        ->get()
                                                                        as $rightAnswer)
                                            <li class="text-xs font-weight-bold mb-0 text-start">{{ $rightAnswer->answer }}</li>
                                        @endforeach
                                    </ol>
                                </td>
                                <td class="d-flex flex-col gap-2 justify-content-center align-content-center">
                                    <button type="button" class="btn btn-success rounded py-1">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <span>Edit</span>
                                    </button>
                                    <button type="button" class="btn btn-danger rounded py-1">
                                        <i class="fa-regular fa-trash-can"></i>
                                        <span>Delete</span>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="align-middle text-center">
                                    <span>Data Tidak Di Temukan</span>
                                </td>
                            </tr>
                            @endforelse
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
