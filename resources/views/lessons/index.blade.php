<!DOCTYPE html>
<html>
<head>
    <title>Danh sách bài học</title>
</head>
<body>

<h1>Danh sách bài học</h1>

<a href="{{ route('lessons.create') }}">+ Thêm bài học</a>

<ul>
@foreach ($lessons as $lesson)
    <li>
        {{ $lesson->name }} -- {{ $lesson->description }}

        <!-- SỬA -->
        <a href="{{ route('lessons.edit', $lesson) }}">Sửa</a>

        <!-- XÓA -->
        <form action="{{ route('lessons.destroy', $lesson) }}"
              method="POST"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Xóa</button>
        </form>
    </li>
@endforeach
</ul>

</body>
</html>
