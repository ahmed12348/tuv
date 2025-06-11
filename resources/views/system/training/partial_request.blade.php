
<div class="table-responsive">
    <table class="table table-bordered table-vertical-center text-center" >
        <thead>
        <tr>

            <th class=" dt-center">#</th>
            <th class=" dt-center">Training title</th>
            <th class=" dt-center">User Name.</th>
            <th class=" dt-center">Date Request.</th>

        </tr>
        </thead>
        <tbody>

        @foreach($trainings as $index => $training)
            <tr id="t-12">
                <td class=" dt-center">{{++$index}}</td>

                <td class=" dt-center">{{$training['training']->title_en}}</td>
                <td class=" dt-center">{{$training['user']->name}}</td>
                <td class=" dt-center">{{$training->created_at->diffForHumans()}}</td>

{{--                <td class=" dt-center">--}}
{{--                    <div class="dropdown">--}}
{{--                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"--}}
{{--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Control--}}
{{--                        </button>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}

{{--                            </a>--}}

{{--                            <a class="dropdown-item"--}}
{{--                               href="{{route('trainings.edit',$training->id)}}">Edit</a>--}}


{{--                            <a class="dropdown-item del_btn"  data-url="{{route('trainings.destroy',$training->id)}}" href="#" data-id="12">Delete</a>--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </td>--}}
            </tr>
        @endforeach

        </tbody>
    </table>

    {{$trainings->links()}}
</div>
