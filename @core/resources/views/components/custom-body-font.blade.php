<a tabindex="0" class="btn btn-warning btn-xs btn-sm mr-1 custom_body_swal_status_change">
    <i class="ti-pencil"></i>
</a>
<form method='post' action='{{$url}}' class="d-none">
<input type='hidden' name='_token' value='{{csrf_token()}}'>
<br>
<button type="submit" class="custom_body_font_form_submit_btn d-none"></button>
 </form>