<div class="card card-01">
    <img src="{{$course->pathAttachment()}}" class="car-img-top" alt="{{$course->name}}">
    <div class="card-body">
        <span class="badge-box"><i class="fa fa-check"></i></span>
        <h4 class="card-title">{{$course->name}} </h4>
        <hr>
        <div class="row justify-content-center">
            añadir partial para mostrar el rating
            @include('partials.courses.rating', ['rating' => $course->custom_rating])
        </div>
        <hr>
        <span class="badge badge-danger badge-cat">{{$course->category->name}}</span>
        <p class="card-text">
            {{$truncated = Str::limit($course->description, 100)}}
        </p>
        <a
                href="{{ route('courses.detail', $course->slug) }}"
                class="btn btn-course btn-block"
        >
            {{ __("Más información") }}
        </a>
    </div>
</div>