<div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" wire:model="name" class="form-control" name="name" id="name" placeholder="الاسم">
                @error('name') <span class="text-red-500">الرجاء ادخال الاسم</span> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="phone" wire:model="phone" class="form-control" name="email" id="email" placeholder="الهاتف">
                @error('phone') <span class="text-red-500"> الرجاء ادخال رقم الهاتف</span> @enderror
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" wire:model="device" class="form-control" name="subject" id="subject" placeholder="اسم الجهاز">
                @error('device') <span class="text-red-500">الرجاء ادخال اسم الجهاز</span> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <select name="" class="form-control" id="" wire:model="customer_type">
                    <option value="company" >صيانة شركات</option>
                    <option value="individual">صيانة افراد</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <select name="" class="form-control" id="" wire:model="contract_duration">
                    <option value="year" >صيانة سنوية</option>
                    <option value="quarter">صيانة ربع سنوية</option>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group" wire:click="send">
                <input type="submit" value="ارسل رسالة" class="btn btn-primary">
                <div class="submitting"></div>
            </div>
        </div>
    </div>