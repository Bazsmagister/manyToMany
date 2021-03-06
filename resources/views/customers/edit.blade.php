@extends ('layouts.master')


 
@section('title', "Edit $customer->name" )


@section('edit')

<div class="row justify-content-center">
  <div class="col-md-6">
    <h1 class="h4 text-uppercase">Edit</h1>

    <div class="card">
      <div class="card-block">
        <h1 class="h3 pb-1">{{ $customer->name }}</h1>

        <form action="{{ url('customers', $customer) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('patch') }}
         
          <div class="form-group">
            <label for="first_name">Keresztnév</label>
            <input type="text" class="form-control" name="first_name" placeholder="Keresztnév" value="{{ $customer->first_name }}">
          </div>
  
          <div class="form-group">
            <label for="last_name">Családnév</label>
            <input type="text" class="form-control" name="last_name" placeholder="Családnév" value="{{ $customer->last_name }}">
          </div>
          <div class="form-group">
                <label for="city">Lakcím</label>
                <input type="text" class="form-control" name="city" value="{{ $customer->city }}">
              </div>
          <div class="form-group">
            <label for="zip">Irányítószám</label>
            <input type="text" class="form-control" name="zip" value="{{ $customer->zip }}">
          </div>
          <div class="form-group">
            <label for="street_name">Utcanév</label>
            <input type="text" class="form-control" name="street_name" value="{{ $customer->street_name }}">
          </div>
          <div class="form-group">
            <label for="street_number">Házszám</label>
            <input type="text" class="form-control" name="street_number" value="{{ $customer->street_number }}">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $customer->email }}">
          </div>

          <div class="form-group">
            <label for="phone_number">Telefonszám</label>
            <input type="text" class="form-control" name="phone_number" value="{{ $customer->phone_number }}">
          </div>
         
          <button type="submit" class="btn btn-primary">
            Update
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
