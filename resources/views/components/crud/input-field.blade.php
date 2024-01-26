


<label>
    <div class="text-xs font-semibold uppercase mb-1">{{$label}}</div>
    <input type="text" name="{{$name}}" value="{{old($name, $value)}}" placeholder="{{$placeholder}}">
</label>
<x-crud-error-message field="{{$name}}"/>
