<!DOCTYPE html>
<html>
<head>
    <title>Sửa bài học</title>
</head>
<body>

<h1>Sửa bài học</h1>

<form action="{{ route('lessons.update', $lesson) }}" method="POST">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="name"
        value="{{ old('name', $lesson->name) }}"
    >

    <input
        type="text"
        name="description"
        value="{{ old('description', $lesson->description) }}"
    >

    <button type="submit">Cập nhật</button>
</form>

<a href="{{ route('lessons.index') }}">← Quay lại</a>

</body>
</html>
