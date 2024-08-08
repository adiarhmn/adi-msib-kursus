@if (session()->has('success'))
    <div role="alert" class="alert alert-success flex justify-between mb-3" id="errorAlert">
        <div>{{ session('success') }}</div>
        <button type="button" id="close-button" class="close-button btn btn-xs">&times;</button>
    </div>
@elseif(session()->has('error'))
    <div role="alert" class="alert alert-error flex justify-between mb-3" id="errorAlert">
        <div>{{ session('error') }}</div>
        <button type="button" id="close-button" class="close-button btn btn-xs">&times;</button>
    </div>
@elseif($errors->any())
    <div role="alert" class="alert alert-error flex justify-between mb-3" id="errorAlert">
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" id="close-button" class="close-button btn btn-xs">&times;</button>
    </div>
@endif
