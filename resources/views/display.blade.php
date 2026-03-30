<div>
    <h1>List Of All Images</h1>
    @foreach($imgData as $img)
<img src="{{ asset('storage/'.$img->path) }}" alt="">
    @endforeach
</div>
