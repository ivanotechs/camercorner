@props(['items' => [], 'message' => null])

<div>
	@if(count($items) > 0)
		{{ $slot }}
	@else
		<x-admin.commons.empty-list :message="$message"/>
	@endif
</div>
