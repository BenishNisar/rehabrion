@extends("Layout.layouttwo")

@section("AdminContent")

<style>
    /* Remove left and right padding for full-width usage */
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .table-container {
        margin-left: 10px;
        margin-right: 10px;
    }

    .table-wrapper {
        overflow-x: auto; /* Enables horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile */
        margin-top: 15px; /* Margin above table */
        margin-bottom: 30px; /* Increased space below table */
        padding-bottom: 10px; /* Extra padding to add more space below the table */
    }

    .table {
        width: 100%;
        margin-bottom: 0;
    }

    /* Adjust table header and data cell padding */
    .table th, .table td {
        padding: 10px 12px;
        font-size: 14px;
        white-space: nowrap; /* Prevent text wrapping */
        text-align: left;
    }

    /* Button styling for add new */

    .search-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: auto;
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



    /* Flexbox for action icons */
    .actions {
        display: flex;
        justify-content: center;
    }

    /* Spacing for action icons */
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
        <h1 style="font-size: 23px; font-weight: bolder;">Contact</h1>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search contact...">
            {{-- <a href="{{ url('contactus/add') }}" class="add-new-btn">Add New </a> --}}
        </div>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Contact ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->message }}</td>


                    {{-- <td class="actions">

                        <a href="{{ url('/dashboard/admin/role/edit') }}/{{ $item->id }}"><i class="fas fa-edit" title="Edit"></i></a>
                        <a  href="{{url('/dashboard/admin/role/delete')  }}/{{$item->id }}"><i class="fas fa-trash-alt" title="Delete"></i></a>


                    </td> --}}

                    <td class="actions">
                     <a href="{{ url('/contactus/view') }}/{{ $item->id }}"><i class="fas fa-eye" title="View"></i> </a>

                      </td>

                </tr>
            @endforeach
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</div>

@endsection


