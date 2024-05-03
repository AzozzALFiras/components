@props(['className'])
<button type="button" class="btn btn-gradient-{{ $className }} btn-fw">
@lang('messages.' . $slot)
</button>