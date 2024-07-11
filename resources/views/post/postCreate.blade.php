@extends('home.home')

@section('content')
<div class="text" style="z-index: -10">Post Create && Uploading Video</div>
<div class="home_content" style="z-index: 1000">
    <div>
        <form action="{{ route('video#upload') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">

                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control @error('workShop') is-invalid @enderror"
                                id="floatingInput" placeholder="Lesson Cartoon" name="workShop" />
                            <label for="floatingInput">Enter WorkShop Name</label>
                            @error('workShop')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>

                        <div class="mt-3 mb-4 form-floating">
                            <input type="text" class="form-control @error('weekNumber') is-invalid @enderror"
                                id="floatingInput" placeholder="Enter Week Number" name="weekNumber" />
                            <label for="floatingInput">Number Of Week</label>
                            @error('weekNumber')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                id="floatingPassword" placeholder="Lesson Title" name="title" />
                            <label for="floatingPassword">Lesson Title</label>
                            @error('title')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control @error('cartoon') is-invalid @enderror"
                                id="floatingInput" placeholder="Lesson Cartoon" name="cartoon" />
                            <label for="floatingInput">Enter Lesson Cartoon</label>
                            @error('cartoon')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>

                    </div>

                    <div class="col-6">
                        <div class="mb-4 form-floating">
                            <input @error('video') is-invalid @enderror type="file" class="form-control"
                                id="floatingInput" placeholder="Video" name="video" />
                            <label for="floatingInput">Video</label>
                            @error('video')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>
                        <!-- <div class="mt-4">
                <label for="Email">Email</label>
                <br />
                <input
                  type="text"
                  class="form-control"
                  placeholder="type something"
                />
              </div> -->
                        <div class="mt-3 mb-4 form-floating">
                            <input type="text" class="form-control @error('teacherName') is-invalid @enderror"
                                id="floatingInput" placeholder="Enter Teacher Name" name="teacherName" />
                            <label for="floatingInput">Teacher Name</label>
                            @error('teacherName')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>

                        <div class="mt-3 mb-4 form-floating">
                            <input type="text" class="form-control @error('purpose') is-invalid @enderror"
                                id="floatingInput" placeholder="For Who" name="purpose" />
                            <label for="floatingInput">Purpose</label>
                            @error('purpose')
                            <small class="text-danger">*required</small>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control placeholder=" Enter Notes of Lesson" id="floatingTextarea2"
                                style="height: 100px" name="note"></textarea>
                            <label for="floatingTextarea2">Lesson Notes</label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="text-center">
                        <button type="submit" class="mt-3 btn btn-success col-6">Upload</button>
                    </div>
                </div>
            </div>
        </form>

        <h3 class="m-4"><u>Uploading Video Table</u></h3>
        <table class="table m-4 table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">WorkShop</th>
                    <th scope="col">Week No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Cartoon</th>
                    <th scope="col">Video</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $video)
                <tr>
                    <th scope="row">#</th>
                    <td class="text-break">{{ $video->workShop}}</td>
                    <td class="text-break">{{ $video->Week_No}}</td>
                    <td class="text-break">{{ $video->Title }}</td>
                    <td class="text-break">{!! $video->Cartoon !!}</td>
                    <td>
                        <video width="200" height="100" controls class="video">
                            <source src="{{ asset('storage/videos/'.$video->Video) }}" type="video/mp4">
                        </video>
                    </td>
                    <td class="text-break">{{$video->Teacher_name }}</td>
                    <td class="text-break">{{ $video->Notes }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
@endsection
