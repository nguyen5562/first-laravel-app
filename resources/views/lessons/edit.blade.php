<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sửa bài học
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded p-6">

                {{-- Hiển thị lỗi validate --}}
                @if ($errors->any())
                    <div class="mb-4 text-red-600">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('lessons.update', $lesson) }}"
                      method="POST"
                      class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-medium mb-1">
                            Tên bài học
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $lesson->name) }}"
                            class="w-full border rounded px-3 py-2"
                        >
                    </div>

                    <div>
                        <label class="block font-medium mb-1">
                            Mô tả
                        </label>
                        <input
                            type="text"
                            name="description"
                            value="{{ old('description', $lesson->description) }}"
                            class="w-full border rounded px-3 py-2"
                        >
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded">
                            Cập nhật
                        </button>

                        <a href="{{ route('lessons.index') }}"
                           class="text-gray-600 hover:underline">
                            ← Quay lại
                        </a>
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-app-layout>
