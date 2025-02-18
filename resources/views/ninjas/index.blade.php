<x-layout>
    <h2>Currently Available Ninjas</h2>
    <p class="text-white-100 text-balance max-w-full md:max-w-2xl">
        Alright there Gang, feel free to browse the (Fake) Ninja Network Database. <br>
        This site is the end result of <a href="https://www.youtube.com/playlist?list=PL4cUxeGkcC9gF5Gez17eHcDIxrpVSBuVt" target="_blank">Net Ninja's Laravel YouTube Course</a> but with reworked UI.
        I wanted to push myself and work on my Frontend skills and learn new things. Of course, it's not a real website, mind you, but I am still proud of the render. All animations are CSS-based, I didn't want to use any JS libs for that.
    </p>

    <ul class="ninjas-list">
        @foreach($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninjas.show', $ninja->id) }}" title="ninja card" :highlight="$ninja->skill > 70">
                <div class="inner">
                    <div class="avatar">
                        <x-ninja-logo></x-ninja-logo>
                    </div>
                    <div class="details">
                        <h3>{{ $ninja->name }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                        <hr>
                        <p>{{ Str::of($ninja->bio)->limit(150) }}</p>
                    </div>
                </div>
                <div class="btn">View details</div>
            </x-card>
        </li>
        @endforeach
    </ul>

    <div class="custom-pagination">
        {{ $ninjas->links() }}
    </div>
</x-layout>
