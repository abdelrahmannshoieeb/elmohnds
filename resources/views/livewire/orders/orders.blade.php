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
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">المنتجات </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">محافظة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">مدينة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">العنوان </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">الشحن </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">الاجمالي </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">الحالة </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">تغيير الحالة </th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($orders as $order )
                        <tr>
                            <td class="py-3 ps-4">
                                <div class="flex items-center h-5">
                                    <input id="table-pagination-checkbox-1" type="checkbox" class="form-checkbox rounded">
                                    <label for="table-pagination-checkbox-1" class="sr-only">Checkbox</label>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{ $order->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"style="font-size: larger; max-width: 300px; max-height: 100px; overflow: auto; white-space: normal; display: inline-block;">
                                <ul>
                                    @if ($order->cart && $order->cart->cartitems)
                                    @foreach ($order->cart->cartitems as $product)
                                    <li  title="{{ $product->product->name }}">
                                        {{ $product->product->name }}
                                    </li>
                                    @endforeach
                                    @else
                                    <li style="font-size: larger; max-width: 100px; max-height: 30px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; display: inline-block;">
                                        No products found
                                    </li>
                                    @endif
                                </ul>
                            </td>

                            @if ($order->government) <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->government }}</td> @endif
                            @if ($order->city) <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->city }}</td> @endif
                            @if ($order->landmark) <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->landmark }}</td> @endif
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->shipping }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->subtotal + $order->shipping }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{ $order->status }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">
                                <div x-data="{ open: false }" class="relative">
                                    <button @click="open = !open" class="py-2 px-3 inline-flex bg-primary text-white justify-center items-center text-sm gap-2 rounded-md font-medium shadow-sm align-middle transition-all">
                                        Change Status <i class="mgc_down_line text-base"></i>
                                    </button>
                                    <div x-show="open" @click.outside="open = false" class="absolute z-50 mt-2 bg-white border shadow-md rounded-lg p-2 dark:bg-slate-800 dark:border-slate-700">
                                        @foreach ($statuses as $statusOption)
                                        <a wire:click.prevent="updateStatus({{ $order->id }}, '{{ $statusOption }}')" class="block py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                            {{ $statusOption }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button class="text-danger " wire:click="delete({{ $order->id }})">
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