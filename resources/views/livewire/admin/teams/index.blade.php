@section('title', 'Teams')
<div class="mt-5">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-6 col-lg-8 d-flex justify-content-between align-items-center">
            <h3>Team</h3>
            <a href="#" wire:click.prevent="$emitTo('admin.teams.edit','load')" class="btn btn-primary text-white"
                wire:loading.attribute = 'disabled'>
                <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="load"></i>
                Add Team
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <input type="text" wire:model.debounce.500ms="filters.name" class="form-control  w-100  input-sm"
                placeholder="Type to Search">
        </div>
    </div>
    <p class="sub-header">
        List of Teams
    </p>

    <div class="table-responsive">
        <table class="table table-bordered m-0">

            <thead>
                <tr>
                    <th>#</th>
                    <th>image</th>
                    <th>name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($teams as $k=>$team)
                    <tr wire:key="{{ $k }}">
                        <td>{{ $k + 1 }}</td>
                        <td><img src="{{ asset('storage/' . $team->image) }}" alt="Icon" width="50"
                                height="50"></td>
                        <td>{{ $team->name }}</td>
                        <td>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.teams.edit','load',{{ $team }})"
                                class="btn btn-default text-primary"><i class="fa fa-pen"></i> Edit</a>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.teams.delete','load',{{ $team }})"
                                class="btn btn-default text-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">No team found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($this->rows->count())
        <div class="mt-5">
            {{ $this->rows->links() }}
        </div>
    @endif
    {{-- / Pagination --}}

    <livewire:admin.teams.edit />

    <livewire:admin.teams.delete />
</div>
