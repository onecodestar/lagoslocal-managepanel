<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div>
                    @if ($showSuccesNotification)
                        <div wire:model="showSuccesNotification"
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">
                                {{ __('The blog has been successfully deleted.') }}</span>
                            <button wire:click="$set('showSuccesNotification', false)" type="button"
                                class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div>
                    @if ($showFailureNotification)
                        <div wire:model="showFailureNotification"
                            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                                {{ __('The blog can not be deleted. There is an item associate with this blog.') }}</span>
                            <button wire:click="$set('showFailureNotification', false)" type="button"
                                class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div>
                    @if (session('succes'))
                        <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">{{ session('succes') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="d-flex flex-column mx-3 mt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">{{ __('All Blogs') }}</h5>
                        </div>
                            <a href="{{ route('admin-blog-new') }}" class="btn bg-gradient-primary btn-sm mb-0"
                                type="button">+&nbsp; {{ __('New blog') }}</a>
                    </div>
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex mt-3 align-items-center justify-content-center">
                            <p class="text-secondary pt-2">{{ __('Show') }}&nbsp;&nbsp;</p>
                            <select wire:model="perPage" class="form-control" id="entries">
                                <option value="5">{{ __('5') }}</option>
                                <option selected value="10">{{ __('10') }}</option>
                                <option value="15">{{ __('15') }}</option>
                                <option value="20">{{ __('20') }}</option>
                            </select>
                            <p class="text-secondary pt-2">&nbsp;&nbsp;{{ __('entries') }}</p>
                        </div>
                        <div class="mt-3 ">
                            <input wire:model="search" type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                </div>
                <x-table>
                    <x-slot name="head">
                        <x-table.heading sortable wire:click="sortBy('id')"
                            :direction="$sortField === 'id' ? $sortDirection : null">{{ __('ID') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('title')"
                            :direction="$sortField === 'title' ? $sortDirection : null">{{ __('Title') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('blog_category_id')"
                            :direction="$sortField === 'blog_category_id' ? $sortDirection : null">{{ __('Category') }}
                        </x-table.heading>
                        <x-table.heading sortable wire:click="sortBy('created_at')"
                            :direction="$sortField === 'created_at' ? $sortDirection : null">
                            {{ __('Creation Date') }}
                        </x-table.heading>
                        <x-table.heading>{{ __('Action') }}</x-table.heading>

                    </x-slot>

                    <x-slot name="body">
                        @foreach ($blogs as $blog)
                            <x-table.row class="" wire:key="row-{{ $blog->id }}">
                                <x-table.cell class="py-2">{{ $blog->id }}</x-table.cell>
                                <x-table.cell>{{ $blog->title }}</x-table.cell>
                                <x-table.cell>{{ @$blog->blog_category->name }}</x-table.cell>
                                <x-table.cell>{{ $blog->created_at }}</x-table.cell>
                                <x-table.cell>
                                    <a href="{{ route('admin-blog-edit', ['id' => $blog->id]) }}" class="mx-3"
                                        data-bs-toggle="tooltip" data-bs-original-title="Edit blog">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>

                                    <span>
                                        <i onclick="confirm('Are you sure you want to remove this blog?') || event.stopImmediatePropagation()"
                                            wire:click="delete({{ $blog->id }})"
                                            class="cursor-pointer fas fa-trash text-secondary"></i>
                                    </span>

                                </x-table.cell>
                            </x-table.row>
                        @endforeach
                    </x-slot>
                </x-table>
                <div id="datatable-bottom">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
