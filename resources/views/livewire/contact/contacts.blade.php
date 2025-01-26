<div class="overflow-x-auto">
    <div class="min-w-full inline-block align-middle">
        <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
            <div class="py-3 px-4">
                <div class="relative max-w-xs">
                    <label for="table-with-pagination-search" class="sr-only">Search</label>
                    <input id="table-pagination-checkbox-all"
                        type="text"
                        class="form-input rounded"
                        placeholder="Search by ID"
                        wire:model.live.500ms="SearchId">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                        <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                        </svg>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden overflow-x-auto" style="min-height: 400px">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-4 pe-0">
                                <div class="flex items-center h-5">
                                    <input id="table-pagination-checkbox-all" type="checkbox" class="form-checkbox rounded" wire:model.live.500ms="searchId">
                                    <label for="table-pagination-checkbox-all" class="sr-only">Checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">اسم العميل</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">هاتف العميل</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">الجهاز</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">نوع الصيانة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">مدة الصيانة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">الحالة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">تغيير الحالة </th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($contacts as $contact )
                        <tr>
                            <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                    <input id="table-pagination-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                    <label for="table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $contact->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $contact->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $contact->phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"style="font-size: larger; max-width: 300px; max-height: 100px; overflow: auto; white-space: normal; display: inline-block;">
                                <ul>
                                    <li  title="{{ $contact->device }}">
                                        {{ $contact->device }}
                                    </li>
                                </ul>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                @if ($contact->customer_type == 'individual')
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary text-white"> فردي</span>
                                @else
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white">شركة</span>
                                @endif
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                @if ($contact->contract_duration == 'year')
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary text-white"> سنوي</span>
                                @else
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white">ربع سنوي</span>
                                @endif
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                @if ($contact->status == 'cancelled')
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-500 text-white"> تم الالغاء</span>
                                @elseif ($contact->status == 'seen')
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary text-white"> مشاهدة</span>
                                @elseif ($contact->status == 'sent')
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white"> العميل ارسله</span>
                                @else
                                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-500 text-white"> تم العمل</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open"
                                        class="bg-primary text-white px-3 py-2 rounded">
                                        Change Status
                                    </button>
                                    <div x-show="open"
                                        @click.outside="open = false"
                                        class="absolute mt-2 bg-white border shadow-md rounded-lg p-2">
                                        @foreach ($statuses as $key => $label)
                                        <a href="#"
                                            wire:click.prevent="updateStatus({{ $contact->id }}, '{{ $key }}')"
                                            class="block py-2 px-3 text-sm hover:bg-gray-100">
                                            {{ $label }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button class="text-danger " wire:click="delete({{ $contact->id }})">
                                    <li class="mgc_paint_fill " style="font-size: 24px;"></li>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>