<div>
    <x-mary-header subtitle="Showing the list of posts." >

        <x-slot:title class="text-4xl">
            Posts
        </x-slot:title>

        <x-slot:middle class="!justify-end">
            <x-mary-input icon="o-magnifying-glass"
                          placeholder="Search..."
                          type="search"
                          wire:model.live="search"
            />
        </x-slot:middle>
        <x-slot:actions>
            <x-mary-button icon="o-plus"
                           class="btn-primary btn-square"
                           href="{{ route('admin::blog.post.add') }}"
                           wire:navigate
            />
        </x-slot:actions>
    </x-mary-header>

    <x-mary-card class="shadow border">
        <x-mary-table :headers="$headers"
                      :rows="$data"
                      :sort-by="$sortBy"
                      with-pagination
                      show-empty-text
                      per-page="perPage"
                      :per-page-values="[10,15,25,50,100]"
        >
            @scope('cell_id', $item)
            <strong>{{ $item->id }}</strong>
            @endscope

            @scope('cell_title', $item)
              {{ $item->title ??'' }}
            @endscope

            @scope('cell_category', $item)
                @foreach($item->categories as $category)
                    <x-mary-badge value="{{$category->name ??''}}" class="badge badge-ghost" />
                @endforeach
            @endscope

            @scope('cell_read_time', $item)
              <small>
                  {{ $item->time_to_read ??'' }}
              </small>
            @endscope

            @scope('cell_post_date', $item)
            <small>
                {{ $item->displayPostDate('d M, Y') }}
            </small>
            @endscope

            @scope('cell_status', $item)
            @if($item->status)
                <x-mary-badge value="Active" class="badge-primary" />
            @else
                <x-mary-badge value="Inactive" class="badge-error" />
            @endif
            @endscope

            @scope('actions', $user)
            <div class="flex gap-3">
                <div>
                    <x-mary-button icon="o-pencil-square"
                                   class="btn-sm btn-primary btn-circle"
                                   tooltip="Edit"
                                   href="{{ route('admin::blog.post.edit',['post_id'=>$user->id]) }}"
                                   wire:navigate
                    />
                </div>
                <div x-data="{
                         confirmDelete:function(userId){
                           Swal.fire({
                                title: 'Are you sure?',
                                text: 'Once deleted, you will not be able to recover this record!',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes, delete it!',
                                customClass: {
                                    confirmButton: 'btn btn-primary me-3',
                                    cancelButton: 'btn btn-label-secondary'
                                },
                                buttonsStyling: false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $wire.destroy(userId);
                                }
                            });
                         }
                       }"
                >
                    <x-mary-button icon="o-trash"
                                   spinner="destroy('{{ $user->id}}')"
                                   tooltip="Delete"
                                   class="btn-sm btn-error text-white btn-circle"
                                   @click="confirmDelete('{{ $user->id }}')"
                    />
                </div>
            </div>
            @endscope
        </x-mary-table>
    </x-mary-card>
</div>
