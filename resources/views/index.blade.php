@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}
                        <h1 class=" text-center">ยินดีต้อนรับสู่ Web Site Laravel(PHP)</h1>
                        @if ($users->isEmpty())
                            <a href="{{ route('create') }}" class="btn btn-info">คลิ๊กที่นี่ดูสิ</a>
                        @elseif ($users->isNotEmpty())
                            <a href="{{ route('create') }}" class="btn btn-outline-dark">เพิ่มข้อมูลอีก</a>
                        @endif
                        <br>
                        <br>
                        @if ($users->isEmpty())
                        <h1 class=" text-center" style="font-size: 100px">เอ๊ะ!!</h1>
                        <h2 class=" text-center">ยังไม่มีข้อมูลเลยน๊า</h2>
                        @endif
                        @if ($users->isNotEmpty())
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">ชื่อ-นามสกุล</th>
                                        <th scope="col">อายุ</th>
                                        <th scope="col">โรงเรียน</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                @foreach ($users as $index => $employee)
                                    <tbody>
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style=" text-align: center;">
                                                @if ($users->isNotEmpty())
                                                    <button class="btn btn-dark">กดดูสิ</button>
                                                @endif

                                                {{-- <form action="{{ route('delete', $employee->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('edit', $employee->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
