<a class="dash-icon color-1 dash-edit-icon swal_status_button" title="{{ __('Close') }}">  <i class="fa-regular fa-pen-to-square"></i> </a>
<form method='post' action='{{$url}}' class="">
<input type='hidden' name='_token' value='{{csrf_token()}}'>
<br>
<button type="submit" class="swal_form_submit_btn d-none"></button>
 </form>


