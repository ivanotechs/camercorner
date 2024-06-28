@props(['league'])

<form method="POST" class="d-inline-flex align-items-center"
      action="{{ route('admin.leagues.update', ['league' => $league, 'action' => 'favorites']) }}">
	@csrf
	@method('put')
	@if(!$league->favourite)
		<button data-toggle="tooltip" title="Add to favorites"
		        class="btn  btn-sm btn-success"><span class="fa fa-heart"></span></button>
	@else
		<button data-toggle="tooltip" title="Remove from favorites"
		        class="btn btn-sm btn-danger"><span class="fa fa-heart"></span></button>
	@endif
</form>
