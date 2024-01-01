@extends('layouts.admin')
@section('dashpath')
Index
@endsection
@section('content')
<div class="bg-light p-4 fs-6">
    <div class="list-user">
        <div class="d-flex justify-content-center w-100">{{ $users->links() }}</div>
        <div class="card">
            <div class="card-header">
                <strong class="card-title">users</strong>
            </div>
            <div class="card-body w-100">
                <table class="table">
                    <thead>
                        <tr class="d-flex justify-content-between">
                            <th scope="col" class="w-20">#</th>
                            <th scope="col" class="w-50">Username</th>
                            <th scope="col" class="w-50">Email</th>
                            <th scope="col" class="w-20">Sex</th>
                            <th scope="col" class="w-100">Bio</th>
                            <th scope="col" class="w-50">Website</th>
                            <th scope="col" class="w-50">Pfp</th>
                            <th scope="col" class="w-50">Created at</th>
                            <th scope="col" class="w-20"></th>
                        </tr>
                    </thead>
                    <tbody class="body-user">
                        <?php $count = ($users->currentPage() - 1) * 5 + 1; ?>
                        @forelse ($users as $user)
                        @php
                        $settings = $user->settings;
                        @endphp
                        <tr class="d-flex justify-content-between @if ($user->deactivated) table-danger @endif">
                            <td class="w-20 counter">{{ $count++ }}</td>
                            <td class="w-50">
                                <p>{{ $settings->username }}</p>
                            </td>
                            <td class="w-50">
                                <p>{{ $user->email }}</p>
                            </td>
                            <td class="w-20">
                                <p>
                                    @if ($settings->gender)
                                    {{ $settings->gender }}
                                    @else
                                    null
                                    @endif
                                </p>
                            </td>
                            <td class="w-100">
                                <p>{{ $settings->bio }}</p>
                            </td>
                            <td class="w-50">
                                @if ($settings->website)
                                    <a href="{{ $settings->website }}">link</p>
                                @endif
                            </td>
                            <td class="w-50" style="object-fit: contain">
                                <img style="object-fit: contain" width="40px"
                                    src="{{ asset('client/image/pfp/' . $settings->pfp_url) }}" alt="">
                            </td>
                            <td scope="col" class="w-50">
                                {{ \Carbon\Carbon::parse($user->created_at)->format('h:m:s - d/m/Y') }}
                            </td>
                            <td class="w-20">
                                <a href="#" onclick="confirmDelete('{{ url('/deactivate-user/' . $user->user_id) }}')"
                                    data-confirm-delete="true" class="fa fa-times"></a>
                            </td>
                        </tr>
                        @empty
                        <p>No users</p>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-center w-100">{{ $users->links() }}</div>
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
            if (confirm("Bạn có chắc chắn muốn xóa user này không?")) {
                window.location.href = url
            }
        }
</script>
@endsection