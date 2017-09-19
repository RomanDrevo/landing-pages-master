@if($source->broker->name == '72 Option')
@endif
<div class="logo">
    @if($source->display_logo)
        <img src="/img/logos/{{$source->broker->logo_url}} "
             class="{{($source->broker->name == '72 Option') ? 'seventy-two' : ''}}">
    @endif
</div>