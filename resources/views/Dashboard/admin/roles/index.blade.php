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

    .roles-shell{
        margin-top: 16px;
        margin-bottom: 16px;
        padding-left: 10px;
        padding-right: 10px;
    }

    .roles-card{
        background:#ffffff;
        border-radius:14px;
        border:1px solid rgba(122,149,143,0.18);
        box-shadow:0 14px 30px rgba(15,23,42,0.06);
        padding:14px 14px 10px;
    }

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
        text-decoration:none;
    }

    .btn-primary i{
        font-size:13px;
    }

    .btn-primary:hover{
        background:linear-gradient(135deg,var(--teal-dark),var(--teal));
        color:#ffffff;
    }

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
        white-space:nowrap;
    }

    tbody tr:hover{
        background:#f9fdfc;
    }

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
        text-decoration:none;
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

    .icon-btn.danger i{
        color:#86092b;
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

    @media (max-width: 768px){
        .roles-card{
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
    }
</style>

<div class="container-fluid roles-shell">
    <div class="roles-card">

        <div class="page-head">
            <div class="page-head-title">
                <h1>Role Management</h1>
                <div class="meta">
                    Total: {{ $roles->total() }} {{ Str::plural('role', $roles->total()) }}
                </div>
            </div>

            <div class="toolbar">
                <form method="GET" action="{{ url('dashboard/roles') }}" role="search">
                    <div class="search-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text"
                               name="q"
                               value="{{ $q ?? '' }}"
                               class="search-field"
                               placeholder="Search roles">
                    </div>
                </form>

                <a href="{{ url('dashboard/roles/add') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    <span>Add New</span>
                </a>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width:80px">Role ID</th>
                            <th>Role Name</th>
                            <th style="width:170px" class="text-end">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($roles as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td style="font-weight:600;">{{ $item->role_name }}</td>

                                <td class="text-end">
                                    <div class="actions">
                                        <a class="icon-btn" href="{{ url('dashboard/roles/view') }}/{{ $item->id }}" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a class="icon-btn" href="{{ url('dashboard/roles/edit') }}/{{ $item->id }}" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('Dashboard.admin.roles.delete', $item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Delete this role?')"
                                              style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="icon-btn danger" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    <div class="empty-block">
                                        <div class="empty-block-title">No roles found</div>
                                        <div class="empty-block-sub">Try clearing the search or add a new role.</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                    @if($roles->hasPages())
                        <tfoot>
                            <tr>
                                <td colspan="3" class="p-2">
                                    <div class="d-flex justify-content-end">
                                        {{ $roles->links('pagination::bootstrap-5') }}
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
