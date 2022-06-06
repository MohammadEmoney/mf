@extends('layouts.admin')

@section('title', $title = 'ویرایش ' .$productAttribute->name)

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

                <form action="{{ route('product-attributes.update', $productAttribute->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <!-- Title -->
                    <div class="row with-forms">
                        <div class="col-md-12">
                            <h5>عنوان ویژگی <i class="tip" data-tip-content="نام ویژگی مثل رنگ، اندازه و..."><div class="tip-content">نام ویژگی مثل رنگ، اندازه و...</div></i></h5>
                            <input type="text" class="search-field" name="name" value="{{ $productAttribute->name }}" placeholder="قرمز" required autofocus>
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

