@extends('layouts.admin')
@section('dashpath')
Index
@endsection
@section('content')
<div class="bg-light p-4 fs-5">
    <div class="list-blog">
        <div class="d-flex justify-content-center w-100">{{ $blogs->links() }}</div>
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Blogs</strong>
            </div>
            <div class="card-body w-100">
                <table class="table">
                    <thead>
                        <tr class="d-flex justify-content-between">
                            <th scope="col" class="w-20">#</th>
                            <th scope="col" class="w-50">Title</th>
                            <th scope="col" class="w-100">Content</th>
                            <th scope="col" class="w-50">Image</th>
                            <th scope="col" class="w-50">Posted at</th>
                            <th scope="col" class="w-20"></th>
                        </tr>
                    </thead>
                    <tbody class="body-blog">
                        <?php $count = ($blogs->currentPage() - 1) * 5 + 1; ?>
                        @forelse ($blogs as $blog)
                        <tr class="d-flex justify-content-between @if ($blog->deleted) table-danger @endif">
                            <td class="w-20 counter">{{ $count++ }}</td>
                            <td class="w-50">
                                <p>{{ $blog->title }}</p>
                            </td>
                            <td style="white-space: pre-line" class="w-100 linelimit-6">{{ $blog->content }}
                            </td>
                            <td class="w-50" style="object-fit: contain">
                                <img style="object-fit: contain" width="200px"
                                    src="{{ asset('client/image/' . $blog->image_url) }}" alt="">
                            </td>
                            <td scope="col" class="w-50">
                                {{ \Carbon\Carbon::parse($blog->created_at)->format('h:m:s - d/m/Y') }}
                            </td>
                            <td class="w-20">
                                <a href="#" onclick="confirmDelete('{{ url('/remove-blog/' . $blog->blog_id) }}')"
                                    data-confirm-delete="true" class="fa fa-times"></a>
                            </td>
                        </tr>
                        @empty
                        <p>No blogs</p>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-center w-100">{{ $blogs->links() }}</div>
            </div>
        </div>
        <div class="p-5"></div>
    </div>
</div>
@include('components.footer')
@endsection

@section('js')
<script>
    function confirmDelete(url) {
            if (confirm("Bạn có chắc chắn muốn xóa blog này không?")) {
                window.location.href = url
            }
        }
</script>
@endsection