<!DOCTYPE html>
<html>
<head>
    <title>Thêm bài học</title>
</head>
<body>

<h1>Thêm bài học</h1>

<form action="{{ route('lessons.store') }}" method="POST">
    @csrf

    <input
        type="text"
        name="name"
        placeholder="Tiêu đề bài học"
        value="{{ old('name') }}"
    >

    <input
        type="text"
        name="description"
        placeholder="Mô tả bài học"
        value="{{ old('description') }}"
    >

    <button type="submit">Lưu</button>
</form>

<a href="{{ route('lessons.index') }}">← Quay lại</a>

</body>
</html>
