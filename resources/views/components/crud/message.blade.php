@if(session()->has('success_notification'))
    <div class="p-2 bg-green-50 border border-green-200 text-green-500 mb-4 rounded">
        {{ session()->get('success_notification') }}
    </div>
@endif

@if(session()->has('error_notification'))
    <div class="p-2 bg-red-50 border border-red-200 text-red-500 mb-4 rounded">
        {{ session()->get('error_notification') }}
    </div>
@endif
