@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <col-3 class="p-5">
            <img src="https://instagram.flis5-1.fna.fbcdn.net/v/t51.2885-19/s150x150/23161150_1372068142919939_4240897999955296256_n.jpg?_nc_ht=instagram.flis5-1.fna.fbcdn.net&_nc_ohc=kpBwQe5BmJ8AX_3yEg_&oh=d27af356ec80218fd28f55bbac616a20&oe=5F2021E7" alt="" class="rounded-circle">
        </col-3>
        <col-9 class="pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>102</strong> posts</div>
                <div class="pr-4"><strong>264</strong> followers</div>
                <div><strong>228</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="https://www.followbirds.com">{{ $user->profile->url }}</a></div>
        </col-9>
    </div>

    <div class="row pt-5">
        <div class="col-4"><img src="https://picsum.photos/200" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://source.unsplash.com/random/200x200" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://loremflickr.com/200/200" alt="" class="w-100"></div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://loremflickr.com/200/200/bird" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://loremflickr.com/200/200/nature" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://loremflickr.com/200/200/landscape" alt="" class="w-100"></div>
    </div>
</div>
@endsection