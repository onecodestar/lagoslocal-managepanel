<div class="container-fluid py-4">
    <div class="d-flex justify-content-between">
        <h5>All Businesses</h5>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-search">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Business Category</th>
                                <th>Creation Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($businesses as $obj)
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="customCheck2">
                                            </div>
                                            <p class="text-xs font-weight-bold ms-2 mb-0">#{{ $obj->id }}</p>
                                        </div>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->name }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->description }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ @$obj->businesstype->name }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        <span class="my-2 text-xs">{{ $obj->created_at }}</span>
                                    </td>
                                    <td class="font-weight-bold">
                                        @if ($obj->approved)
                                            <span class="badge badge-success badge-sm">Approved</span>
                                        @else
                                            <span class="badge badge-danger badge-sm">Blocked</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin-business-detail', ['id' => $obj->id]) }}"
                                            class="mx-3" data-bs-toggle="tooltip"
                                            data-bs-original-title="Business Details">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('review-list', ['id' => $obj->id]) }}"
                                            class="" data-bs-toggle="tooltip"
                                            data-bs-original-title="Business Reviews">
                                            <i class="fas fa-comment-alt"></i>
                                        </a>
                                    </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kanban scripts -->
<script src="../../../assets/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });
</script>
