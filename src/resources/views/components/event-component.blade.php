<div onclick="{{$onclick}}" class="overflow-hidden w-full rounded-xl shadow-lg items-center cursor-pointer">
    <div class="relative">
        <img class="object-cover h-44 md:h-48 xl:h-52 w-full" src="{{($img)}}">
        <div class="flex absolute w-full bottom-2 px-2">
            <div class="truncate w-full flex">
                {{$organizer}}
            </div>
            <div class="flex-1 pl-2 w-auto text-xl text-white text-shadow">
                {{$participants}}
            </div>

        </div>
    </div>
    <div class="px-4 py-2">
        <div class="text-xl font-medium text-black">
            {{$name}}
        </div>
        <div class="text-md font-medium text-black">
            {{$date}}
        </div>

    </div>
</div>