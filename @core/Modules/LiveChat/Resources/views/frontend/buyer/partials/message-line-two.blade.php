@if($message->from_user == \Auth::user()->id)
    <div class="conversation-wrapper-flex msg_container base_sent" data-message-id="{{ $message->id }}" id="message-line-{{$message->id}}">
        <div class="conversation-message-contents">
            <div class="messages msg_sent text-right">
                @if($message->message)
                    <p>{!! $message->message !!}</p>
                @endif
                @if($message->image)
                    <div class="mt-2">
                        <img class="img-responsive" src="{{asset(('assets/uploads/chat_image/'.$message->image))}}" />
                    </div>
                @endif
                <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ optional($message->fromUser)->name }} • {{ $message->created_at->diffForHumans() }}</time>
            </div>
        </div>
        <div class="conversation-bg-thumb bg-image" {!! render_image_markup_by_attachment_id(optional($message->fromUser)->image) !!}>
    </div>
@else
    <div class="conversation-wrapper-flex msg_container base_receive" data-message-id="{{ $message->id }}" id="message-line-{{$message->id}}">
        <div class="conversation-bg-thumb bg-image">
            {!! render_image_markup_by_attachment_id(optional($message->fromUser)->image) !!}
        </div>
        <div class="conversation-message-contents">
            <div class="messages msg_receive text-left">
                @if($message->message)
                    <p >{!! $message->message !!}</p>
                @endif
                <br>
                @if($message->image)
                    <div class="mt-2">
                        <img class="img-responsive" src="{{asset(('assets/uploads/chat_image/'.$message->image))}}" />
                    </div>
                @endif
                <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ optional($message->fromUser)->name }} • {{ $message->created_at->diffForHumans() }}</time>
            </div>
        </div>
    </div>
@endif
