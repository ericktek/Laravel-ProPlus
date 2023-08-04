{{-- use AppLayout Component located in app\View\Components\AppLayout.php which use resources\views\layouts\app.blade.php view --}}
<style>
    @media only screen and (max-width: 600px) {
        #size-hidde {
            display: none;
        }

        #action {
            font-size: 9px;
        }

        #delete {
            height: 40;
            width: 60px;
        }
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Users Comments' }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th id="size-hidde"
                                    class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Name</th>
                                <th id="size-hidde"
                                    class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Email
                                </th>
                                <th id="size-hidde"
                                    class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Phone
                                    Number
                                </th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Comment
                                </th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- populate our contacts data --}}
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td id="size-hidde"
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        {{ $contact->full_name }}
                                    </td>
                                    <td id="size-hidde"
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        {{ $contact->email }}
                                    </td>
                                    <td id="size-hidde"
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        {{ $contact->phone }}
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        {{ $contact->message }}
                                    </td>
                                    <td
                                        class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        <div id="action" class="flex flex-wrap">

                                            <form method="post" action="{{ route('comment.destroy', $contact->id) }}"
                                                class="inline">
                                                @csrf
                                                @method('delete')
                                                <button id="delete"
                                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
