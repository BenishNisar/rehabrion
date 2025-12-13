@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
    .table-container {
        margin-left: 10px;
        margin-right: 10px;
    }
    .table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin-top: 15px;
        margin-bottom: 30px;
        padding-bottom: 10px;
    }
    .table th, .table td {
        padding: 10px 12px;
        font-size: 14px;
        white-space: nowrap;
        text-align: left;
    }


    .search-input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 50px;
    width: 250px;
    outline: none;
    font-size: 14px;
    transition: 0.3s;

}
.search-input:focus {
        border-color: rgba(0, 0, 0, 0.349);
    }

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
    background-color: #86092b;
    color: white;
}

/* Mobile & Tablet fix */
@media (max-width: 768px) {
    .search-container {
        flex-direction: column;
        align-items: stretch;
        width: 70%;
    }

    .search-input {
        display: none;
    }

    .add-new-btn {
        width: 70%;
        text-align: center;
    }
}

    .actions {
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
    }
</style>

<div class="container-fluid mt-4 table-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="font-size: 23px; font-weight: bolder;">Categories</h1>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search Blog...">
            <a href="{{ url('category/add') }}" class="add-new-btn">Add New</a>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                <th>Category Name</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($categorys as $category)
               <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>

                    <td class="actions">
                        <a href="{{ route('Dashboard.admin.category.view', $category->id) }}"><i class="fas fa-eye" title="view"></i></a>

                        <a href="{{ route('Dashboard.admin.category.edit', $category->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                        <form action="{{ route('Dashboard.admin.category.delete', $category->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none; padding: 0;" onclick="return confirm('Are you sure to delete?')">
                                <i class="fas fa-trash-alt" title="Delete"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
