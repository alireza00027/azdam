@if(count($errors)>0)
    <div class="alert alert-icon alert-error alert-bg alert-inline show-code-action">
        <ul>
            @foreach($errors->all() as $error)
                <li><i class="w-icon-times-circle"></i>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif