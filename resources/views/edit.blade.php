<div class="p-2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="{{ $data->name }}" class="form-control" placeholder="Input Product Name">
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-warning" onclick="update({{ $data->id }})">Update</button>
    </div>
</div>
