@extends('layouts.admin')

@section('title', $title = 'ایجاد دسته بندی')

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

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>نام <i class="tip" data-tip-content="نام دسته بندی مثل تسبیح ، دستبند و ..."><div class="tip-content">نام دسته بندی مثل تسبیح ، دستبند و ...</div></i></h5>
                            <input type="text" class="search-field" name="name" value="{{ old('name') }}" placeholder="تسبیح" required autofocus>
                        </div>
                    </div>
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>نامک <i class="tip" data-tip-content="نامک دسته بندی بدون فاصله و با استفاده از '_' مثل: مروارید_سنگی"><div class="tip-content">نامک دسته بندی بدون فاصله و با استفاده از "_" مثل: مروارید_سنگی< /div></i></h5>
                            <input type="text" class="search-field" name="slug" value="{{ old('slug') }}" placeholder="مروارید_سنگی" required autofocus>
                        </div>
                    </div>

                    <div class="row with-forms">

                        <!-- Status -->
                        <div class="col-md-12">
                            <h5>دسته</h5>
                            <select class="chosen-select-no-single" name="parent_id" style="display: none;">
                                <option label="خالی">انتخاب یک دسته</option>
                                @foreach($categories as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>


                    </div>

                    <!-- Row -->

                    <!-- Row / End -->
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="button border">ثبت</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Section / End -->

        </div>
    </div>
</div>

@endsection

