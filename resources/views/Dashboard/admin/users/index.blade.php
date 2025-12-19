@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    :root{
        --mint: #bae0db;
        --teal: #7a958f;
        --teal-dark: #58716b;
        --ink: #111827;
        --muted: #6b7280;
        --border-soft: #e5e7eb;
    }

    .users-shell{
        margin-top: 16px;
        margin-bottom: 16px;
    }

    .users-card{
        background:#ffffff;
        border-radius:14px;
        border:1px solid rgba(122,149,143,0.18);
        box-shadow:0 14px 30px rgba(15,23,42,0.06);
        padding:14px 14px 10px;
    }

    /* Header / toolbar */
    .page-head{
        display:flex;
        align-items:flex-start;
        justify-content:space-between;
        gap:12px;
        padding:4px 2px 10px;
        border-bottom:1px dashed rgba(148,163,184,0.55);
        margin-bottom:8px;
    }
    .page-head-title{
        display:flex;
        flex-direction:column;
        gap:2px;
    }
    .page-head-title h1{
        font-size:22px;
        font-weight:700;
        color:var(--ink);
        margin:0;
    }
    .meta{
        font-size:12px;
        color:var(--muted);
    }

    .toolbar{
        display:flex;
        align-items:center;
        gap:8px;
        flex-wrap:wrap;
        justify-content:flex-end;
    }

    .search-wrapper{
        position:relative;
    }

    .search-wrapper i{
        position:absolute;
        left:11px;
        top:50%;
        transform:translateY(-50%);
        font-size:13px;
        color:#9ca3af;
    }

    .search-field{
        height:36px;
        border:1px solid var(--border-soft);
        border-radius:999px;
        padding:0 12px 0 30px;
        min-width:240px;
        outline:none;
        font-size:13px;
        color:var(--ink);
        background:#f9fafb;
        transition:border-color .18s ease, box-shadow .18s ease, background-color .18s ease;
    }
    .search-field::placeholder{
        color:#9ca3af;
        font-weight:300;
    }
    .search-field:focus{
        border-color:var(--teal);
        background:#ffffff;
        box-shadow:0 0 0 0.12rem rgba(122,149,143,0.28);
    }

    .btn-primary{
        background:linear-gradient(135deg,var(--teal),var(--mint));
        border:none;
        color:#0b1620;
        border-radius:999px;
        padding:8px 15px;
        font-weight:600;
        font-size:13px;
        display:inline-flex;
        align-items:center;
        gap:6px;
    }
    .btn-primary i{
        font-size:13px;
    }
    .btn-primary:hover{
        background:linear-gradient(135deg,var(--teal-dark),var(--teal));
        color:#ffffff;
    }

    /* Table */
    .table-wrapper{
        margin-top:10px;
    }
    .table-responsive{
        border-radius:12px;
        border:1px solid #eef0f3;
        overflow:hidden;
        background:#ffffff;
    }

    table.table{
        margin:0;
        font-size:13px;
    }
    thead th{
        background:linear-gradient(135deg,#f8fafc,#edf6f4);
        border-bottom:1px solid #e2e8f0;
        color:#111827;
        font-weight:600;
        padding-top:9px;
        padding-bottom:9px;
        white-space:nowrap;
    }
    tbody td{
        vertical-align:middle;
        border-color:#f1f5f9;
        color:#111827;
    }

    tbody tr:hover{
        background:#f9fdfc;
    }

    /* User cell */
    .avatar{
        width:38px;
        height:38px;
        border-radius:50%;
        object-fit:cover;
        border:2px solid rgba(186,224,219,0.8);
        background:#f3faf8;
    }
    .user-cell{
        display:flex;
        align-items:center;
        gap:10px;
    }
    .user-name{
        font-weight:600;
        color:#111827;
        font-size:13px;
    }
    .user-sub{
        font-size:11px;
        color:#6b7280;
        line-height:1.1;
    }

    /* Chips / role */
    .chip{
        display:inline-flex;
        align-items:center;
        padding:3px 10px;
        border-radius:999px;
        font-size:11px;
        font-weight:600;
        border:1px solid #e5e7eb;
        background:#ffffff;
        color:#374151;
        gap:6px;
    }
    .chip-dot{
        width:8px;
        height:8px;
        border-radius:999px;
        background:var(--teal);
    }
    .chip.role{
        border-color:rgba(122,149,143,0.4);
        background:rgba(186,224,219,0.25);
        color:#1f2933;
    }

    /* Actions */
    .actions{
        display:flex;
        justify-content:center;
        gap:6px;
    }
    .icon-btn{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        width:32px;
        height:32px;
        border-radius:9px;
        border:1px solid #e5e7eb;
        background:#ffffff;
        color:#4b5563;
        padding:0;
        transition:background-color .18s ease, border-color .18s ease, transform .1s ease, color .18s ease;
    }
    .icon-btn i{
        font-size:13px;
    }
    .icon-btn:hover{
        background:#f3faf8;
        border-color:var(--teal);
        color:var(--teal-dark);
        transform:translateY(-1px);
    }

    .text-end{
        text-align:end;
    }

    .empty-block{
        text-align:center;
        padding:22px 10px;
    }
    .empty-block-title{
        font-weight:600;
        font-size:13px;
        margin-bottom:2px;
        color:#111827;
    }
    .empty-block-sub{
        font-size:12px;
        color:#6b7280;
    }

    tfoot td{
        border-top:1px solid #e5e7eb;
        background:#f9fafb;
    }

    /* Pagination soft styling (Bootstrap) */
    .pagination{
        margin-bottom:0;
    }
    .pagination .page-link{
        border-radius:999px !important;
        font-size:12px;
        padding:5px 10px;
        color:var(--teal-dark);
        border:none;
        margin:0 2px;
    }
    .pagination .page-link:hover{
        background:#e5f3f1;
        color:var(--teal-dark);
    }
    .pagination .active .page-link{
        background:linear-gradient(135deg,var(--teal),var(--mint));
        border:none;
        color:#0b1620;
        font-weight:600;
    }

    /* Responsive */
    @media (max-width: 768px){
        .users-card{
            padding:10px;
            border-radius:10px;
        }
        .page-head{
            flex-direction:column;
            align-items:flex-start;
        }
        .toolbar{
            width:100%;
            justify-content:flex-start;
        }
        .search-field{
            min-width:0;
            width:100%;
        }
        .btn-primary{
            width:auto;
        }
        .hide-sm{
            display:none;
        }
    }
</style>

<div class="container-fluid users-shell">
    <div class="users-card">
        <!-- Header -->
        <div class="page-head">
            <div class="page-head-title">
                <h1>Users</h1>
                <div class="meta">
                    Total: {{ $users->total() }} {{ Str::plural('user',$users->total()) }}
                    @if(!empty($q))
                        • Search: “{{ $q }}”
                    @endif
                </div>
            </div>

            <div class="toolbar">
                <form method="GET"
                      action="{{ route('Dashboard.admin.users.index') }}"
                      class="d-flex align-items-center flex-wrap"
                      role="search">
                    <div class="search-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text"
                               name="q"
                               value="{{ $q ?? '' }}"
                               class="search-field"
                               placeholder="Search name, email, role, city...">
                    </div>
                </form>

                <a href="{{ url('dashboard/users/add') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    <span>Add New</span>
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width:60px">#</th>
                            <th>User</th>
                            <th class="hide-sm">Location</th>
                            <th>Role</th>
                            <th class="hide-sm">Zip</th>
                            <th class="hide-sm">Organization</th>
                            <th style="width:150px" class="text-end">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($users as $i => $item)
                            @php
                                $rowNo = ($users->currentPage()-1)*$users->perPage() + $i + 1;
                                $img   = $item->profile_img ?: 'assets/profile_images/default.png';
                            @endphp
                            <tr>
                                <td>{{ $rowNo }}</td>

                                <td>
                                    <div class="user-cell">
                                        <img src="{{ asset($img) }}" alt="Avatar" class="avatar">
                                        <div>
                                            <div class="user-name">
                                                {{ $item->firstname }} {{ $item->lastname }}
                                            </div>
                                            <div class="user-sub">
                                                {{ $item->email }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="hide-sm">
                                    {{ $item->city ? $item->city.', ' : '' }}{{ $item->country }}
                                </td>

                                <td>
                                    <span class="chip role">
                                        <span class="chip-dot"></span>
                                        {{ $item->role_name ?? '—' }}
                                    </span>
                                </td>

                                <td class="hide-sm">{{ $item->zip_code }}</td>
                                <td class="hide-sm">{{ $item->organization }}</td>

                                <td class="text-end">
                                    <div class="actions">
                                        <a class="icon-btn"
                                           href="{{ route('Dashboard.admin.users.view', $item->id) }}"
                                           title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="icon-btn"
                                           href="{{ route('Dashboard.admin.users.edit', $item->id) }}"
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('Dashboard.admin.users.delete', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Delete this user?')"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="icon-btn"
                                                    title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    <div class="empty-block">
                                        <div class="empty-block-title">No users found</div>
                                        <div class="empty-block-sub">
                                            Try clearing the search or add a new user.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                    @if($users->hasPages())
                        <tfoot>
                            <tr>
                                <td colspan="7" class="p-2">
                                    <div class="d-flex justify-content-end">
                                        {{ $users->links() }}
                                    </div>
                                </td>
                            </tr>
                        @endif
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
