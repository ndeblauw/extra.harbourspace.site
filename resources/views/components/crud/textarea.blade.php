<label>
    <div class="text-xs font-semibold uppercase mb-1">{{$label}}</div>
    <textarea name="{{$name}}" placeholder="{{$placeholder}}">{{old($name, $value)}}</textarea>
</label>
<x-crud-error-message field="{{$name}}"/>
