@extends("Layout.layouttwo")
@section("AdminContent")

<style>
  :root{
    --mint:#bae0db;
    --teal:#7a958f;
    --teal-dark:#6a857f;
    --bg:#f6fbfa;
    --card:#ffffff;
    --text:#0f172a;
    --muted:#64748b;
    --border: rgba(122,149,143,.22);
    --shadow: 0 12px 30px rgba(15, 23, 42, .08);
  }

  .container-fluid{ padding-left:0; padding-right:0; }

  .page-wrap{
    margin: 18px 10px 26px;
    padding: 14px;
    background: var(--bg);
    border-radius: 18px;
  }

  .page-head{
    background: linear-gradient(135deg, rgba(186,224,219,.55), rgba(122,149,143,.25));
    border: 1px solid rgba(122,149,143,.25);
    border-radius: 18px;
    padding: 16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap: 14px;
    box-shadow: 0 10px 22px rgba(122,149,143,.16);
  }

  .page-head h1{
    margin:0;
    font-size: 22px;
    font-weight: 800;
    color: var(--text);
    letter-spacing:.2px;
  }

  .page-head p{
    margin: 4px 0 0;
    font-size: 13px;
    color: rgba(15,23,42,.70);
  }

  .head-right{
    display:flex;
    gap: 10px;
    align-items:center;
    flex-wrap: wrap;
    justify-content:flex-end;
  }

  .searchbox{
    position: relative;
    min-width: 240px;
    width: 32vw;
    max-width: 360px;
  }
  .searchbox i{
    position:absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 16px;
    color: rgba(15,23,42,.45);
    font-size: 14px;
  }
  .search-input{
    width:100%;
    padding: 11px 16px 11px 42px;
    border: 1px solid rgba(122,149,143,.35);
    border-radius: 999px;
    outline:none;
    font-size: 14px;
    background: rgba(255,255,255,.95);
    transition: .2s;
    box-shadow: 0 8px 18px rgba(122,149,143,.12);
  }
  .search-input:focus{
    border-color: rgba(122,149,143,.70);
    box-shadow: 0 14px 26px rgba(122,149,143,.20);
  }

  .add-new-btn{
    background: var(--teal);
    color: #fff;
    border:none;
    padding: 11px 16px;
    border-radius: 999px;
    font-weight: 800;
    font-size: 14px;
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    gap: 8px;
    transition: .2s;
    box-shadow: 0 12px 22px rgba(122,149,143,.22);
    white-space: nowrap;
  }
  .add-new-btn:hover{
    background: var(--teal-dark);
    color:#fff;
    transform: translateY(-1px);
  }

  .card-shell{
    margin-top: 14px;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow);
    overflow:hidden;
  }

  .table-wrapper{
    overflow-x:auto;
    -webkit-overflow-scrolling:touch;
    padding-bottom: 22px;
  }

  #catTable{
    width:100%;
    margin:0;
    border-collapse: separate;
    border-spacing: 0;
  }

  #catTable thead th{
    padding: 14px 12px;
    font-size: 13px;
    font-weight: 900;
    color: var(--text);
    white-space: nowrap;
    background: rgba(186,224,219,.40);
    border-bottom: 1px solid rgba(122,149,143,.18);
  }

  #catTable tbody td{
    padding: 14px 12px;
    font-size: 14px;
    white-space: nowrap;
    color: var(--text);
    border-bottom: 1px solid rgba(122,149,143,.14);
    vertical-align: middle;
  }

  #catTable tbody tr{
    background:#fff;
    transition: .15s;
  }
  #catTable tbody tr:hover{
    background: rgba(186,224,219,.22);
  }

  .actions{
    display:flex;
    justify-content:center;
    gap: 10px;
  }

  .icon-btn{
    width: 38px;
    height: 38px;
    border-radius: 14px;
    border: 1px solid rgba(122,149,143,.25);
    background: rgba(255,255,255,.95);
    display:inline-flex;
    align-items:center;
    justify-content:center;
    transition: .18s;
    box-shadow: 0 10px 18px rgba(122,149,143,.12);
    padding:0;
    cursor:pointer;
  }
  .icon-btn i{
    color: var(--teal);
    font-size: 14px;
  }
  .icon-btn:hover{
    transform: translateY(-1px);
    border-color: rgba(122,149,143,.55);
    box-shadow: 0 16px 28px rgba(122,149,143,.18);
  }
  .icon-btn.danger i{ color:#b91c1c; }

  .empty-state{
    padding: 26px 14px;
    text-align:center;
    color: rgba(15,23,42,.65);
  }
  .empty-state .title{
    font-weight: 900;
    color: var(--text);
    margin-top: 6px;
  }

  @media (max-width: 768px){
    .page-head{ flex-direction: column; align-items: stretch; }
    .head-right{ justify-content: stretch; }
    .searchbox{ width: 100%; min-width: unset; max-width: unset; }
    .add-new-btn{ width:100%; justify-content:center; }
  }
</style>

<div class="container-fluid mt-3">
  <div class="page-wrap">

    <div class="page-head">
      <div>
        <h1>Categories</h1>
        <p>Manage categories and actions.</p>
      </div>

      <div class="head-right">
        <div class="searchbox">
          <i class="fas fa-search"></i>
          <input type="text" class="search-input" placeholder="Search category..." id="catSearch">
        </div>

        <a href="{{ url('dashboard/category/add') }}" class="add-new-btn">
          <i class="fas fa-plus"></i>
          Add New
        </a>
      </div>
    </div>

    @if(session('success'))
      <div class="alert alert-success mt-3 mb-0" style="border-radius:14px;">
        {{ session('success') }}
      </div>
    @endif

    <div class="card-shell">
      <div class="table-wrapper">
        <table class="table" id="catTable">
          <thead>
            <tr>
              <th style="width:90px;">ID</th>
              <th>Category Name</th>
              <th class="text-center" style="width:200px;">Actions</th>
            </tr>
          </thead>

          <tbody>
            @forelse ($categorys as $category)
              <tr>
                <td style="font-weight:800;">{{ $category->id }}</td>
                <td style="font-weight:800;">{{ $category->name }}</td>

                <td class="text-center">
                  <div class="actions">
                    <a class="icon-btn" href="{{ route('Dashboard.admin.category.view', $category->id) }}" title="View">
                      <i class="fas fa-eye"></i>
                    </a>

                    <a class="icon-btn" href="{{ route('Dashboard.admin.category.edit', $category->id) }}" title="Edit">
                      <i class="fas fa-pen"></i>
                    </a>

                    <form action="{{ route('Dashboard.admin.category.delete', $category->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure to delete?')" style="display:inline;">
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
                  <div class="empty-state">
                    <div class="title">No categories found</div>
                  </div>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

<script>
  const catSearch = document.getElementById('catSearch');
  const catTable = document.getElementById('catTable');

  if(catSearch && catTable){
    catSearch.addEventListener('keyup', function(){
      const q = this.value.toLowerCase().trim();
      const rows = catTable.querySelectorAll('tbody tr');

      rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(q) ? '' : 'none';
      });
    });
  }
</script>

@endsection
