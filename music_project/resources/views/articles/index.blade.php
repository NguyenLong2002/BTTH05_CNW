<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="path/to/bootstrap.min.css" rel="stylesheet">
    <link href="path/to/bootstrap-icons.css" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
    <title>Quản lý sách</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-3 mt-5 text-success">Post</h1>
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="margin-right: auto;">Posts Details</h1>
            <a href="#" class="btn btn-success">
                <i class="bi bi-plus"></i> Thêm mới
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ma_baiviet</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Tên bài hát</th>
                    <th scope="col">ma_tloai</th>
                    <th scope="col">tomtat </th>
                    <th scope="col">noidung</th>
                    <th scope="col">ma_tgia</th>
                    <th scope="col">ngay viet</th>
                    <th scope="col">hinh anh</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $count=0 ;?>
                @foreach ($articles as $article)
                <?php $count++ ;?>
                    <tr>
                        <td><?= $count?></td>
                        <td>{{ $article->tieude }}</td>
                        <td>{{ $article->ten_bhat }}</td>
                        <td>{{ $article->ma_tloai }}</td>
                        <td>{{ $article->tomtat }}</td>
                        <td>{{ $article->noidung}}</td>
                        <td>{{ $article->ma_tgia}}</td>
                        <td>{{ $article->ngayviet }}</td>
                        <td>{{ $article->hinhanh}}</td>
                        
                        <td>
                        
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <form action="#" method="POST" id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirmDelete(event)">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                            </td>
                            <script>
                            function confirmDelete(event) {
                                event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu mặc định
                            
                                if (confirm("Bạn có chắc chắn muốn xóa bài viết này?")) {
                                    document.getElementById('delete-form').submit(); // Gửi biểu mẫu nếu xác nhận xóa
                                }
                            }
                            </script>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    {{-- <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
    </div> --}}
</body>
</html>
