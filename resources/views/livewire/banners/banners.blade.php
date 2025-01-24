<main class="flex-grow p-6">
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 1 سكشن رقم 1</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text11">
                        @error('main_text11')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text11">
                        @error('secondary_text11')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text11">
                        @error('button_text11')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button11_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile23" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile11" wire:model="image11">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview11" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup11"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 1 سكشن رقم 2</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text12">
                        @error('main_text12')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text12">
                        @error('secondary_text12')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text12">
                        @error('button_text12')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button12_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile23" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile12" wire:model="image12">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview12" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup12"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 1 سكشن رقم 3</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text13">
                        @error('main_text13')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text13">
                        @error('secondary_text13')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text13">
                        @error('button_text13')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button13_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile13" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile13" wire:model="image13">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview13" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup13"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 2 سكشن رقم 1</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text21">
                        @error('main_text21')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text21">
                        @error('secondary_text21')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text21">
                        @error('button_text21')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button21_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile23" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile21" wire:model="image21">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview21" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup21"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 2 سكشن رقم 2</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text22">
                        @error('main_text22')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text22">
                        @error('secondary_text22')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text22">
                        @error('button_text22')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button22_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile22" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile22" wire:model="image22">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview22" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup22"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-4 gap-6" style="margin: 20px;">
        <div class="lg:col-span-3 space-y-6">
            <div class="card p-6">
                <div class="flex justify-between items-center mb-4">
                    <p class="card-title">اضافة بنر رقم 2 سكشن رقم 3</p>
                    <div class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">
                        <i class="mgc_transfer_line"></i>
                    </div>
                </div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الرئيسي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="main_text23">
                        @error('main_text23')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص الفرعي</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="secondary_text23">
                        @error('secondary_text23')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <label for="project-name" class="mb-2 block font-bold">النص على الزر</label>
                        <input type="email" id="project-name" class="form-input" placeholder="ادخل اسم" aria-describedby="input-helper-text" wire:model="button_text23">
                        @error('button_text23')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="select-label" class="mb-2 block" style="font-weight:600;">الاتجاة</label>
                        <select id="select-label" class="form-select" wire:model="button23_direction">
                            <option value="right">يمين</option>
                            <option value="left">يسار</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile23" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile23" wire:model="image23">
                    </div>
                    <div class="mt-3" wire:ignore>
                        <label class="mb-2 block font-bold">Image Preview:</label>
                        <img id="imagePreview23" alt="Image Preview" class="w-24 h-24 rounded-md border mt-3" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3 mt-5" style="float: right">
            <div class="flex justify-end gap-3">
                <button type="button" class="inline-flex items-center rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-red-500 focus:outline-none" wire:click="cancel">
                    الغاء
                </button>
                <button wire:click="saveGroup23"
                    type="button" class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-bold text-white shadow-sm hover:bg-green-500 focus:outline-none">
                    حفظ
                </button>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto grid lg:grid-cols-2 gap-6">
        <div class="min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
                <div class="py-3 px-4 d-flex">
                    <div class="relative max-w-l flex items-center">
                        <input
                            type="text"
                            name="table-with-pagination-search"
                            id="table-with-pagination-search"
                            class="form-input ps-11 font-bold"
                            placeholder="ابحث عن التصنيفات"
                            wire:model="search">

                        <button type="button" wire:click="thesearch" class="btn bg-info text-white" style="margin:10px">ابحث</button>
                        <button type="button" wire:click="viewAll" class="btn bg-dark text-white" style="margin:10px"> الكل</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to handle image preview
        function setupImagePreview(fileInputId, imagePreviewId) {
            const fileInput = document.getElementById(fileInputId);
            const imagePreview = document.getElementById(imagePreviewId);

            if (fileInput && imagePreview) {
                fileInput.addEventListener('change', function(event) {
                    const file = event.target.files[0]; // Get the selected file

                    if (file) {
                        // Create a temporary URL for the file
                        const temporaryUrl = URL.createObjectURL(file);

                        // Set the image preview source and make it visible
                        imagePreview.src = temporaryUrl;
                        imagePreview.style.display = 'block';
                    } else {
                        // Hide the image preview if no file is selected
                        imagePreview.style.display = 'none';
                    }
                });
            }
        }

        // Set up image preview for each section
        setupImagePreview('formFile11', 'imagePreview11');
        setupImagePreview('formFile12', 'imagePreview12');
        setupImagePreview('formFile13', 'imagePreview13');
        setupImagePreview('formFile21', 'imagePreview21');
        setupImagePreview('formFile22', 'imagePreview22');
        setupImagePreview('formFile23', 'imagePreview23');
    });
</script>