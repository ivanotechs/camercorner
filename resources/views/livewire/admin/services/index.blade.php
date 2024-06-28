<div class="mt-5">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-6 col-lg-8 d-flex justify-content-between align-items-center">
            <h3>Services</h3>
            <a href="#" wire:click.prevent="$emitTo('admin.services.edit','load')" class="btn btn-primary text-white"
                wire:loading.attribute='disabled'>
                <i class="fa fa-spinner d-none" wire:loading.class.remove="d-none" wire:target="load"></i>
                Create Service
            </a>
        </div>
        <div class="col-md-6 col-lg-4">
            <input type="text" wire:model.debounce.500ms="filters.name" class="form-control w-100 input-sm"
                placeholder="Type to Search">
        </div>
    </div>
    <p class="sub-header">
        List of Present Services
    </p>

    <div class="table-responsive">
        <table class="table table-bordered m-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $k => $service)
                    <tr wire:key="{{ $k }}">
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="50"
                                height="50">
                        </td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->created_at }}</td>
                        <td>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.services.edit','load',{{ $service }})"
                                class="btn btn-default text-success"><i class="fa fa-pen"></i> Edit</a>
                            <a href="#"
                                wire:click.prevent="$emitTo('admin.services.delete','load',{{ $service }})"
                                class="btn btn-default text-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    @if ($services->count())
        <div class="mt-5">
            {{ $services->links() }}
        </div>
    @endif
    {{-- / Pagination --}}

    <livewire:admin.services.edit />
    <livewire:admin.services.delete />
</div>
