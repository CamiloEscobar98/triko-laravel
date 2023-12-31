<div>
    <table class="w-full table-auto">
        <thead>
            <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200 dark:bg-gray-600 dark:text-gray-100">
                <th class="px-6 py-3 text-left">@lang('models/user.attributes.name')</th>
                <th class="px-6 py-3 text-left">@lang('models/user.attributes.email')</th>
                <th class="px-6 py-3 text-left">@lang('models/default.created_at')</th>
                <th class="px-6 py-3 text-left">@lang('models/default.updated_at')</th>
                <th class="px-6 py-3 text-left">~</th>
            </tr>
        </thead>
        <tbody class="text-sm font-light text-gray-600 dark:text-gray-200 ">
            @forelse ($users as $item)
                <tr
                    class="border-b border-gray-200 hover:bg-gray-600 hover:text-gray-50 dark:hover:bg-gray-100 dark:hover:text-gray-900">
                    <td class="px-6 py-3 text-left">{{ $item->name }}</td>
                    <td class="px-6 py-3 text-left">{{ $item->email }}</td>
                    <td class="px-6 py-3 text-left">{{ $item->created_at }}</td>
                    <td class="px-6 py-3 text-left">{{ $item->updated_at }}</td>
                    <td class="w-fit">
                        <div class="grid grid-flow-col grid-rows-1 gap-1">
                            <a href="{{ route('admin_panel.users.show', $item) }}"
                                class="px-1 py-1 text-center text-white bg-indigo-600 rounded-l-3xl"><i
                                    class="fas fa-edit"></i></a>
                            @livewire('admin-panel.users.user-delete', ['user' => $item], key("user-delete-{$item->id}"))
                        </div>
                    </td>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
