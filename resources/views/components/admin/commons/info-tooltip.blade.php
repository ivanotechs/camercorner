@props(['message' => ''])

<span data-toggle="tooltip" title="{{ $message }}">
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
	     stroke="#4F87E5" stroke-width="2" stroke-linecap="round"
	     stroke-linejoin="round" class="feather feather-info">
		<circle cx="12" cy="12" r="10"></circle>
		<line x1="12" y1="16" x2="12" y2="12"></line>
		<line x1="12" y1="8" x2="12.01" y2="8"></line>
	</svg>
</span>
