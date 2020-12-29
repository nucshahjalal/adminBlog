@if($logkey==true)

<h2>You are loged in</h2>

@elseif($logkey==false)


<h2>You are not loged in</h2>


@else

<h2>Status not found</h2>


@endif;


