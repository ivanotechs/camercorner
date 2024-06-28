@props(['post'])

<form method="POST" class="d-inline-flex align-items-center"
      action="{{ route('admin.posts.update', ['post' => $post, 'action'=>'pick']) }}">
	@csrf
	@method('put')
	@if(!$post->picked)
		<button data-toggle="tooltip" title="Add to favorites"
		        class="btn  btn-sm btn-success"><span class="fa fa-heart"></span></button>
	@else
		<button data-toggle="tooltip" title="Remove from favorites"
		        class="btn btn-sm btn-danger"><span class="fa fa-heart"></span></button>
	@endif
</form>