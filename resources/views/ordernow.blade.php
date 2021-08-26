@extends('layouts.master')
@section('content')
<div class=" container custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>{{ $total }}</td>
              </tr>
              <tr>
                <td>VAT</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ $total + 10 }}</td>
              </tr>

            </tbody>
          </table>
          <form action="/orderconfirm" method="POST">
            @csrf
            <div class="form-group">
              <textarea class="form-control" name="address" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
              <label><strong>Payment Method</strong></label><br>
              <input type="radio" value="Paynow" name="payment" ><span> Paynow</span><br><br>
              <input type="radio" value="Paypal" name="payment"><span> Paypal</span><br><br>
              <input type="radio" value="Visa" name="payment"><span> Visa Card</span><br><br>
              <input type="radio" value="Cash" name="payment"><span> Cash on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Confirm Order</button>
          </form>
    </div>
</div>
@endsection