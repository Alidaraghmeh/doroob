@extends('admin.layout')

@section('content')
    <div class="container" style="direction: rtl;">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <a  href="{{ route('admin.news.create', ['section_id' => $section->id]) }}" class="btn btn-success float-right">إضافة خبر</a>
    <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>الصورة</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsArticles as $news)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('images/' .$news->image) }}" alt="{{ $news->title }}" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                            <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <!-- Add delete button here -->
                            <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الخبر؟')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
