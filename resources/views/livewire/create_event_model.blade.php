<div wire:ignore.self class="mcalender_popup">
    <div class="top_option">
        <span class="close_btn"><img src="{{ asset(url('assets/images/my-calender/icon_cross.svg')) }}" alt="icon cross" /></span>
    </div>
    <div class="row_two">
        <h3 class="text-center">Event Create</h3>
    </div>
    <div class="content_area">
        <form wire:submit.prevent="createEvent" action="#">
            <div class="form-group">
                <input type="text" wire:model="meeting_address" placeholder="Meeting Address" class="form-control">
                @error('meeting_address')
                <span class="text-danger d-flex">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" wire:model="location" placeholder="Location" class="form-control">
                @error('location')
                <span class="text-danger d-flex">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" wire:model="timezone" placeholder="Timezone" class="form-control">
                @error('timezone')
                <span class="text-danger d-flex">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" wire:mode="start_time" class="form-control" placeholder="Start Time" name="start_time">
                @error('start_time')
                <span class="text-danger d-flex">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" wire:mode="end_time" class="form-control" placeholder="End Time" name="end_time">
                @error('end_time')
                <span class="text-danger d-flex">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </div>
</div>