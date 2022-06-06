@extends('layouts.admin')

@section('title', 'Attributes')

@section('content')
    @include('layouts.admin_parts.breadcrumbs', ['route' => route('product-attributes.create')])
    <div class="row">

        <!-- Listings -->
        <div class="col-lg-12 col-md-12">
            <div class="dashboard-list-box margin-top-0">

                <h4 class="headline margin-top-70 margin-bottom-30">جدول</h4>
                <table class="basic-table">
                    <thead>
                        <tr>
                            <th width="10%">#</th>
                            <th>نام</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productAttributes as $key => $attribute)
                            <tr>
                                <td>{{  ($productAttributes->currentpage()-1) * $productAttributes->perpage() + $key + 1 }}</td>
                                <td>{{ $attribute->name }}</td>
                                <td>
                                    <a type="button"
                                        class="button border delete-form"
                                        data-route="{{ route('product-attributes.destroy', $attribute->id) }}"
                                    >
                                    <i class="sl sl-icon-trash"></i>
                                    </a>
                                    <a href="{{ route('product-attributes.edit', $attribute->id) }}" class="button border"><i class="sl sl-icon-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination-container margin-top-30">
                    {{ $productAttributes->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.delete-form').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                url: $(this).data('route'),
                data: {
                    _method: 'DELETE'
                },
                success: function (response, textStatus, xhr) {
                    $this.closest("tr").remove();
                }
            });
        })
    });
</script>
@endsection
