<main class="flex-grow p-6">
    <div class="grid lg:grid-cols-4 gap-6">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">Genrel Product Data</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block " style="font-weight:600;">اسم المنتج</label>
                        <input style="font-weight:600;" type="email" id="project-name" class="form-input" placeholder="{{ $product->name }}" aria-describedby="input-helper-text" wire:model="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="">
                        <label for="project-description" class="mb-2 block" style="font-weight:600;">وصف المنتج <span class="text-red-500">*</span></label>
                        <textarea id="project-description" class="form-input" rows="8" wire:model="description"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="grid md:grid-cols-4 gap-3">
                        <div class="">
                            <label for="start-date" class="mb-2 block" style="font-weight:600;">سعر بيع </label>
                            <input type="text" id="start-date" class="form-input" wire:model="price" placeholder="{{ $product->price }}"></input>
                            @error('price') <span class="text-red-500">{{ $message }}</span> @enderror

                        </div>
                        <div class="">
                            <label for="start-date" class="mb-2 block" style="font-weight:600;">كمية المنتج في المخزون</label>
                            <input type="text" id="start-date" class="form-input" style="font-weight:600;" wire:model="stock" placeholder="{{ $product->stock }}"></input>
                            @error('stock') <span class="text-red-500">{{ $message }}</span> @enderror

                        </div>
                        <div>
                            <label for="select-label" class="mb-2 block" style="font-weight:600;">التصنيف التابع له</label>
                            <select id="select-label" class="form-select" wire:model="category_id">
                                <option value="">اختر التصنيف</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="select-label" class="mb-2 block" style="font-weight:600;">التصنيف التابع له</label>
                            <select id="select-label" class="form-select" wire:model="brand_id">
                                <option value="">اختر الماركه</option>
                                @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card p-6 mt-6">
                        <div class="flex flex-col gap-3">
                            <!-- Upload Image -->
                            <div class="">
                                <label for="product-image" class="mb-2 block" style="font-weight:600;">تحميل صورة المنتج</label>
                                <input type="file" id="product-image" class="form-input" wire:model="image">
                                @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            @if ($image)
                            <div class="mt-3">
                                <label class="mb-2 block" style="font-weight:600;">صورة المنتج:</label>
                                <img src="{{ $image->temporaryUrl() }}" alt="Uploaded Image" class="w-24 h-24 rounded-md border">
                            </div>
                            @endif

                            <!-- Show Current Product Image -->
                            @if ($product->image)
                            <div class="mt-3">
                                <label class="mb-2 block" style="font-weight:600;">صورة المنتج الحالية:</label>
                                <div class="relative w-24 h-24">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="Current Product Image" class="w-full h-full rounded-md border">
                                    <button type="button" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center"
                                        wire:click="deleteImage">
                                        <i class="mgc_package_fill"></i>
                                    </button>
                                </div>
                            </div>
                            @endif

                            <!-- Upload Gallery -->
                            <div class="">
                                <label for="product-gallery" class="mb-2 block" style="font-weight:600;">تحميل معرض الصور</label>
                                <input type="file" id="product-gallery" class="form-input" wire:model="gallary" multiple>
                                @error('gallery.*') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>
                            @if ($gallary)
                            <div class="mt-3">
                                <label class="mb-2 block" style="font-weight:600;">معرض الصور:</label>
                                <div class="flex gap-2">
                                    @foreach ($gallary as $file)
                                    <img src="{{ $file->temporaryUrl() }}" alt="Gallery Image" class="w-20 h-20 rounded-md border">
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <!-- Show Current Gallery -->
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none">
                    Cancle
                </button>
                <button
                    wire:click="save"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    Save
                </button>
            </div>
        </div>



    </div>
    @if (session()->has('message'))
    <div class="bg-success/25 text-success text-center text-xl rounded-md p-4 mt-5" role="alert" style="width: 75%;">
        <span class="font-bold text-lg"></span> تم الحفظ بنجاح
    </div>
    @endif
</main>