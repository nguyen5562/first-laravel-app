<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Danh sách bài học
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4">
                <a href="{{ route('lessons.create') }}"
                   class="inline-block px-4 py-2 bg-blue-600 text-white rounded">
                    + Thêm bài học
                </a>
            </div>

            <div class="bg-white shadow rounded p-4">
                <ul class="space-y-2">
                    @foreach ($lessons as $lesson)
                        <li class="flex justify-between items-center border-b pb-2">
                            <div>
                                <div class="font-semibold">
                                    {{ $lesson->name }}
                                </div>
                                <div class="text-sm text-gray-600">
                                    {{ $lesson->description }}
                                </div>
                            </div>

                            <div class="space-x-2">
                                <a href="{{ route('lessons.edit', $lesson) }}"
                                   class="text-blue-600 hover:underline">
                                    Sửa
                                </a>

                                <form action="{{ route('lessons.destroy', $lesson) }}"
                                      method="POST"
                                      class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:underline"
                                            onclick="return confirm('Xóa bài học này?')">
                                        Xóa
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-4">
                    {{ $lessons->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
