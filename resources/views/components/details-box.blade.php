@foreach ($stats as $stat)
    <div class="col-lg-3">
        <div class="details-box ms-2 p-3 mt-2">
            <div class="row">
                <div class="col-8">
                    <span class="details-box-header">{{ $stat['title'] }}</span>
                </div>
                <div class="col-4 text-end">
                    <i class="fa-solid fa-ellipsis-vertical" style="font-size: 19px;"></i>
                </div>
            </div>
            <div class="details-box-content mt-2">{{ $stat['num'] }}</div>
        </div>
    </div>
@endforeach
