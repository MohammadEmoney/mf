@extends('layouts.admin')

@section('title', $title = 'ایجاد محصول')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <div id="add-listing">
            @if($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif

            <!-- Section -->
            <div class="add-listing-section">

                <!-- Headline -->
                <div class="add-listing-headline">
                    <h3><i class="sl sl-icon-doc"></i> {{ $title }}</h3>
                </div>

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->

                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>عنوان محصول <i class="tip" data-tip-content="نام محصول مثل تسبیح دست ساز صورتی و..."><div class="tip-content">نام محصول مثل تسبیح دست ساز صورتی و...</div></i></h5>
                            <input type="text" class="search-field" name="name" value="{{ old('name') }}" placeholder="تسبیح دست ساز فانتزی" required autofocus>
                        </div>
                    </div>
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>نامک <i class="tip" data-tip-content="نامک دسته بندی بدون فاصله و با استفاده از '_' مثل: تسبیح_دست_ساز_صورتی"><div class="tip-content">نامک دسته بندی بدون فاصله و با استفاده از "_" مثل: تسبیح_دست_ساز_صورتی< /div></i></h5>
                            <input type="text" class="search-field" name="slug" value="{{ old('slug') }}" placeholder="تسبیح_دست_ساز_صورتی" required autofocus>
                        </div>
                    </div>

                    <div class="row with-forms">
                        <!-- Status -->
                        <div class="col-md-6">
                            <h5>دسته</h5>
                            <select class="chosen-select-no-single" name="category_id" style="display: none;">
                                <option label="خالی">انتخاب یک دسته</option>
                                @foreach($data['categories'] as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h5>ویژگی</h5>
                            <select class="chosen-select-no-single" name="product_attribute_id[]" style="display: none;" multiple>
                                <option label="خالی">انتخاب یک ویژگی</option>
                                @foreach($data['attributes'] as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row with-forms">

                        <!-- Prices -->
                        <div class="col-md-6">
                            <h5>قیمت اصلی</h5>
                            <input type="text" name="price" value="{{ old('price') }}" placeholder="60000" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <h5>قیمت فروش</h5>
                            <input type="text" name="sale_price" value="{{ old('sale_price') }}" placeholder="50000" required autofocus>
                        </div>

                        <!-- SKU -->
                        <div class="col-md-6">
                            <h5>SKU <i class="tip" data-tip-content="SKU شماره واحد محصول"><div class="tip-content"> SKU شماره واحد محصول</div></i></h5>
                            <input type="text" name="sku" value="{{ old('sku') }}" placeholder="MF-125" required autofocus>
                        </div>

                        <div class="col-md-6">
                            <h5>وضعیت</h5>
                            <select class="chosen-select-no-single" name="status" style="display: none;">
                                @foreach($data['statuses'] as $key => $value)
                                    <option value="{{ $key }}" {{ $key == "draf" ? "selected" : "" }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- short Descritpion -->
                        <div class="col-md-12">
                            <h5>توضیحات کوتاه</h5>
                            <textarea class="WYSIWYG" name="short_description" cols="40" rows="3" id="short_description" spellcheck="true" required>{{ old('short_description') }}</textarea>
                        </div>
                        <!-- Full Description -->
                        <div class="col-md-12">
                            <h5>توضیحات کامل</h5>
                            <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="description" spellcheck="true" required>{{ old('description') }}</textarea>
                        </div>

                        <!-- Section -->
                        {{-- <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-picture"></i> گالری</h3>
                            </div>

                            <!-- Dropzone -->
                            <div class="submit-section">
                                <form action="{{ route('images.store') }}" class="dropzone" ></form>
                            </div>

                        </div> --}}
                        <!-- Section / End -->

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

