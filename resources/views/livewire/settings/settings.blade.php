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
                        <label for="project-name" class="mb-2 block " style="font-weight:600;">العنوان</label>
                        <input style="font-weight:600;" type="email" id="project-name" class="form-input" placeholder="{{ $address }}" aria-describedby="input-helper-text" wire:model="address">
                        @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block " style="font-weight:600;">الهاتف</label>
                        <input style="font-weight:600;" type="email" id="project-name" class="form-input" placeholder="{{ $phone }}" aria-describedby="input-helper-text" wire:model="phone">
                        @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block " style="font-weight:600;">البريد الالكتروني</label>
                        <input style="font-weight:600;" type="email" id="project-name" class="form-input" placeholder="{{ $email }}" aria-describedby="input-helper-text" wire:model="email">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block " style="font-weight:600;">الموقع</label>
                        <input style="font-weight:600;" type="email" id="project-name" class="form-input" placeholder="{{ $website }}" aria-describedby="input-helper-text" wire:model="website">
                        @error('website') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="grid md:grid-cols-5 gap-3">
                        <div>
                            <label for="product-status" class="mb-2 block" style="font-weight:600;">مراجعة التعليقات <span class="text-red-500">*</span></label>
                            <div class="flex gap-x-6">
                                <div class="flex">
                                    <input type="radio" name="revirew_approve" class="form-radio" id="private" value="1" wire:model="revirew_approve">
                                    <label for="private" class="text-sm text-gray-500 ms-2 dark:text-gray-400" style="font-weight:600;">مفعل</label>
                                </div>

                                <div class="flex">
                                    <input type="radio" name="revirew_approve" class="form-radio" id="public" value="0" wire:model="revirew_approve">
                                    <label for="public" class="text-sm text-gray-500 ms-2 dark:text-gray-400" style="font-weight:600;">مغلق</label>
                                </div>
                            </div>
                            @error('revirew_approve') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label for="product-status" class="mb-2 block" style="font-weight:600;">مراجعة التقييمات <span class="text-red-500">*</span></label>
                            <div class="flex gap-x-6">
                                <div class="flex">
                                    <input type="radio" name="rating_approve" class="form-radio" id="private" value="1" wire:model="rating_approve">
                                    <label for="private" class="text-sm text-gray-500 ms-2 dark:text-gray-400" style="font-weight:600;">مفعل</label>
                                </div>

                                <div class="flex">
                                    <input type="radio" name="rating_approve" class="form-radio" id="public" value="0" wire:model="rating_approve">
                                    <label for="public" class="text-sm text-gray-500 ms-2 dark:text-gray-400" style="font-weight:600;">مغلق</label>
                                </div>
                            </div>
                            @error('rating_approve') <span class="text-red-500">{{ $message }}</span> @enderror
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
        <span class="font-bold text-lg"></span> تم التحديث بنجاح
    </div>
    @endif
</main>