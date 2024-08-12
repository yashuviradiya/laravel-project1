<x-admin>
<form action="{{route('setting.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $setting ? $setting->id : 'default_value' }}">

    <div class="form-group">
        <label for="address" class="form-label">address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $setting->address ?? '' }}">


    </div>

    <div class="form-group">
        <label for="phone" class="form-label">phone</label>
        <input type="number" name="phone" id="phone" class="form-control" value="{{$setting->phone ?? ''}}" >
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$setting->email ?? ''}}">
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">opentime</label>
        <input type="text" name="opentime" id="opentime" class="form-control" value="{{$setting->opentime ?? ''}}">
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">facebook</label>
        <input type="text" name="facebook" id="facebook" class="form-control" value="{{$setting->facebook ?? ''}}">
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">twitter</label>
        <input type="text" name="twitter" id="twitter" class="form-control" value="{{$setting->twitter ?? ''}}">
    </div>

    <div class="form-group">
        <label for="phone" class="form-label">linkedin</label>
        <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{$setting->linkedin ?? ''}}">
    </div>
    <br>
    <button type="submit" class="btn btn btn-primary">update</button>


</form>
</x-admin>
