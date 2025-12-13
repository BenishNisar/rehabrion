@extends('Layout.layouttwo')
@section('AdminContent')
<style>
    .add-new-btn {
    background-color:#1d3a7d ;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    cursor: pointer;
    transition: 0.3s;
}

.add-new-btn:hover {
    background-color: #fc9928;;
    color: white;
}

    /* .actions {
        display: flex;
        justify-content: center;
    }
    .actions i {
        color: #1d3a7d ;
        margin: 0 4px;
        cursor: pointer;
    }
    .actions i:hover {
        transform: scale(1.08);
        color: gray;
    } */
</style>
<div class="container-fluid mt-4">
  <div class="d-flex justify-content-between align-items-center">
    <h1 style="font-size:23px;font-weight:bolder;">Contact Settings</h1>
    <a href="{{ route('Dashboard.admin.contact-settings.add') }}" class="btn add-new-btn">Add New</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success mt-3">{{ session('success') }}</div>
  @endif

  <div class="table-responsive mt-3">
    <table class="table table-bordered table-striped align-middle">
      <thead>
        <tr>
          <th>ID</th>
          <th>Note</th>
          <th>Address</th>
          <th>Phones</th>
          <th>Emails</th>
          <th width="160">Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($settings as $s)
          <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->note }}</td>
            <td style="max-width:380px;">{{ Str::limit($s->address, 120) }}</td>
            <td>
              @foreach(($s->phones ?? []) as $p)
                <div>{{ $p }}</div>
              @endforeach
            </td>
            <td>
              @foreach(($s->emails ?? []) as $e)
                <div>{{ $e }}</div>
              @endforeach
            </td>
            {{-- <td class="text-center">
              <a class="btn btn-sm btn-outline-secondary"
                 href="{{ route('Dashboard.admin.contact-settings.edit', $s->id) }}">Edit</a>
              <form action="{{ route('Dashboard.admin.contact-settings.destroy', $s->id) }}"
                    method="POST" class="d-inline"
                    onsubmit="return confirm('Delete this record?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
              </form>
            </td> --}}



    <td class="actions"style="color: #1d3a7d">
                        {{-- <a href="{{ route('Dashboard.admin.category.view', $category->id) }}"><i class="fas fa-eye" title="view"></i></a> --}}

                        <a style="color: #1d3a7d" href="{{ route('Dashboard.admin.contact-settings.edit', $s->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                        <form action="{{ route('Dashboard.admin.contact-settings.destroy', $s->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none; padding: 0;" onclick="return confirm('Are you sure to delete?')">
                                <i style="color: #1d3a7d" class="fas fa-trash-alt" title="Delete"></i>
                            </button>
                        </form>
                    </td>
          </tr>
        @empty
          <tr><td colspan="6" class="text-center">No records yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div class="mt-2">
    {{ $settings->links() }}
  </div>
</div>
@endsection
