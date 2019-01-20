@if (Session::get('message'))

    {{-- Style the message box as red if there is an error, else gowith blue --}}
    <div id="msg" class="alert
        @if(Session::get('message_level') == 'error')
            {!! 'alert-danger' !!} alert-dismissable">
        @else
            {!! 'alert-info' !!} alert-dismissable">
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {!! Session::get('message') !!}
    </div>
@endif
