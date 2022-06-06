@extends('layouts.admin')

@section('title', $title = 'ویرایش ' .$category->name)

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div id="add-listing">

            <!-- Section -->
            <div class="add-listing-section">

                <!-- Headline -->
                <div class="add-listing-headline">
                    <h3><i class="sl sl-icon-doc"></i> {{ $title }}</h3>
                </div>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>نامک <i class="tip" data-tip-content="نامک دسته بندی بدون فاصله و با استفاده از '_' مثل: مروارید_سنگی"><div class="tip-content">نامک دسته بندی بدون فاصله و با استفاده از "_" مثل: مروارید_سنگی< /div></i></h5>
                            <input type="text" class="search-field" name="name" value="{{ $category->name }}" placeholder="قرمز" required autofocus>
                        </div>
                    </div>
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>نامک <i class="tip" data-tip-content="نامک دسته بندی بدون فاصله و با استفاده از '_' مثل: مروارید_سنگی"><div class="tip-content">نامک دسته بندی بدون فاصله و با استفاده از "_" مثل: مروارید_سنگی< /div></i></h5>
                            <input type="text" class="search-field" name="slug" value="{{ $category->slug }}" placeholder="مروارید_سنگی" required autofocus>
                        </div>
                    </div>

                    <div class="row with-forms">

                        <!-- Status -->
                        <div class="col-md-12">
                            <h5>دسته</h5>
                            <select class="chosen-select-no-single" name="parent_id" style="display: none;">
                                <option label="خالی">انتخاب یک دسته</option>
                                @foreach($categories as $key => $value)
                                    <option value="{{ $key }}" {{ $key == $category->parent_id ? "selected" : "" }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                    <!-- Row -->

                    <!-- Row / End -->
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="button border">ویرایش</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Section / End -->

        </div>
    </div>
</div>

@endsection

