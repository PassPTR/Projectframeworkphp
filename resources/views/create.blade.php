<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="container"> <br>
        <a href="{{ route('index') }}" class="btn btn-primary">กลับไป</a>
        <br><br>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1 class=" text-center">หน้านี้จะเป็นการ เพิ่มข้อมูลเข้าไปยังฐานข้อมูล</h1>
                        <h2 class=" text-center">ให้นักเรียนกรอกข้อมูลให้ครบ</h2> <br>
                        <h2 class=" text-center" style="font-size: 50px">อ้าว ข้อมูลที่จะกรอกไปอยู่ไหน</h2>
                        {{-- <form action="{{ route('inputdata') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">คำนำหน้า</label>
                                <select name="" id="typename" class="form-select">
                                    <option value="นาย">นาย</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id=""
                                    name=""placeholder="ชื่อ-นามสกุล" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">อายุ</label>
                                <input type="text" class="form-control" id="" name=""
                                    placeholder="อายุ" required>
                            </div>
                            <div class="mb-3">
                                <label for="schoolname" class="form-label">โรงเรียน</label>
                                <input type="text" class="form-control" id="" name=""
                                    placeholder="โรงเรียน" required>
                            </div>
                            <button type="" class="btn btn-success">Submit</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
