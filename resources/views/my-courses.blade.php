<title>{{ config('app.name', 'Laravel') }} | All courses</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Khoá học tôi đang tham gia') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <!-- Start top-category-widget Area -->
                <section class="container">
                    <div class="row">

                        @forelse ($courses as $course)
                            <div class="col-lg-4 col-sm-12 col-md-4 col-4">
                                <div class="max-w-md px-8 py-4 my-20 bg-white rounded-lg shadow ">

                                    <div>
                                        <div class=" w-auto md:w-1/2">
                                            <img class="inset-0  w-full object-cover object-center"
                                                 src="{{Storage::url($course->image)}}"/>
                                        </div>
                                        <h2 class="text-3xl font-semibold text-gray-800">{{$course->title}}</h2>
                                        <p class="mt-2 text-gray-600">{{$course->descriptif}}</p>

                                        <a href="{{route('courses',['category'=>$course->category])}}">
                                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$course->category}}</span>

                                        </a>
                                    </div>
                                    <div>Soạn thảo bởi <span
                                            class="text-green-800">{{$course->teacher->user->fullname}}</span></div>
                                    <div class="flex justify-end mt-4">
                                        <a href="{{route("course",$course->id)}}"
                                           class="text-xl font-medium text-indigo-500">Xem</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Nothing to display.
                        @endforelse
                    </div>
            </div>
            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">01</a></li>
                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                    <li class="page-item"><a href="#" class="page-link">05</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        </section>
        <!-- End top-category-widget Area -->

    </div>
    </div>
    @include("eclipse-interface.layouts.footer")
</x-app-layout>
{{-- @include("components.footer") --}}
