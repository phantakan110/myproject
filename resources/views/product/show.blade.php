@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Product {{ $product->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/product/' . $product->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('product' . '/' . $product->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $product->id }}</td>
                                    </tr>
                                    <tr><th> Title </th>
                                    <td> {{ $product->title }} </td></tr>
                                    <tr><th> Content </th>
                                    <td> {{ $product->content }} </td></tr>
                                    <tr><th> Price </th>
                                    <td> {{ $product->price }} </td></tr>
                                    <tr><th> Cost </th>
                                    <td> {{ $product->cost }} </td></tr>
                                    <tr><th> Photo </th>
                                    <td> {{ $product->photo }} </td></tr>
                                    <tr><th> Quantity </th>
                                    <td> {{ $product->quantity }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                        <form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('order_id') ? 'has-error' : ''}}">
        <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
        <input class="form-control" name="order_id" type="number" id="order_id" value="{{ isset($orderproduct->order_id) ? $orderproduct->order_id : ''}}" >
        {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
    </div>
    ...

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>

</form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
