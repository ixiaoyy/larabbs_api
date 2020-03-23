@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    {{--疑问：session()是如何拿到session数据的？--}}
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}">
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach