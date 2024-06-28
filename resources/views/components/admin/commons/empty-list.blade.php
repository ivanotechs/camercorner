@props(['message' => 'No records found.'])

<div>
	<div class="text-center pt-5 mt-4 mb-4">
		<img src="{{ asset('be_assets/images/empty-folder.png') }}" class="img-fluid mx-auto">
	</div>
	
	<h4 class="text-center font-weight-normal mb-4">{!! $message !!}</h4>
	
	<div>
        {{ $slot }}
	</div>
</div>
