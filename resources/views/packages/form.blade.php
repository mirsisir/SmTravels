
<div class="form-group">
    <div class="col-md-10">
        <label for="title">Title</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" type="text" id="title" value="{{ old('title', optional($package)->title) }}" minlength="1" maxlength="255" data=" required="true""  placeholder="Enter title here...">

            {!! $errors->first('title', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="image">Image</label>


            <div class="input-group uploaded-file-group">
            <label class="input-group-btn">
                <span class="btn btn-default">
                     <input type="file" name="image" id="image" class="form-control-file">
                </span>
            </label>
            <input type="text" class="form-control uploaded-file-name" hidden>
        </div>

        @if (isset($package->image) && !empty($package->image))
            <div class="input-group input-width-input">
                <span class="input-group-addon">
                    <input type="checkbox" name="custom_delete_image" class="custom-delete-file" value="1" {{ old('custom_delete_image', '0') == '1' ? 'checked' : '' }}> Delete
                </span>

                <span class="input-group-addon custom-delete-file-name">
                   <img class="card" src="{{ asset('storage/'.$package->image) }}" width="200">

                </span>
            </div>
        @endif

            {!! $errors->first('image', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="discription">Discription</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('discription') ? 'is-invalid' : '' }}" name="discription" type="text" id="discription" value="{{ old('discription', optional($package)->discription) }}" minlength="1" data=" required="true""  placeholder="Enter discription here...">

            {!! $errors->first('discription', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="notes">Notes</label>


            <textarea class="form-control" name="notes" cols="50" rows="10" id="notes" minlength="1" maxlength="1000">{{ old('notes', optional($package)->notes) }}</textarea>
            {!! $errors->first('notes', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="price">Price</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" type="text" id="price" value="{{ old('price', optional($package)->price) }}" minlength="1" data=" required="true""  placeholder="Enter price here...">

            {!! $errors->first('price', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="time">Time</label>


            @if(' required="true"'===' required="true"') <span class="text-danger font-bolder">*</span> @endif
        <input class="form-control  {{ $errors->has('time') ? 'is-invalid' : '' }}" name="time" type="text" id="time" value="{{ old('time', optional($package)->time) }}" minlength="1" data=" required="true""  placeholder="Enter time here...">

            {!! $errors->first('time', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

<div class="form-group">
    <div class="col-md-10">
        <label for="category_id">Category</label>


            <select class="form-control" id="category_id" name="category_id">
        	    <option value="" style="display: none;" {{ old('category_id', optional($package)->category_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select category</option>
        	@foreach ($categories as $key => $category)
			    <option value="{{ $key }}" {{ old('category_id', optional($package)->category_id) == $key ? 'selected' : '' }}>
			    	{{ $category }}
			    </option>
			@endforeach
        </select>
        
            {!! $errors->first('category_id', '<p class="form-text text-danger">:message</p>') !!}

    </div>
</div>

