@php
$email = strtolower(str_replace(' ', '-', $ninja->name));
$full_email = "{$email}@fakeemail.fake";
@endphp

<x-layout>
    <div class="toolbar">
        <a class="back-btn" href="{{ route('ninjas.index') }}"> &lt; Back</a>
        <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn" type="submit">
                Delete Ninja
            </button>
        </form>
    </div>

    <section class="grid md:grid-cols-1 lg:grid-cols-2 grid-rows-1 gap-4 mb-12">
        <div class="infos-card">
            <div class="inner">
                <div class="avatar">
                    <x-ninja-logo class="max-w-full h-auto"></x-ninja-logo>
                </div>
                <div class="details">
                    <h2>{{ $ninja->name }}</h2>
                    <h3 class="font-normal">Ninja</h3>
                    <hr>
                    <p>{{$full_email}}</p>
                    <p>1-222-111-3333</p>

                    <div class="powers">
                        <div class="progress-wrapper">
                            <span id="ProgressLabel" class="sr-only">Loading</span>
                            <span role="progressbar" aria-labelledby="ProgressLabel" aria-valuenow="{{$ninja->skill}}" class="progressbar">
                                @if($ninja->skill > 20)
                                <span class="progress-bg" style="width: {{$ninja->skill}}%">
                                    <span class="progress-text"> Skill: {{$ninja->skill}} </span>
                                </span>
                                @else
                                <span class="progress-bg empty-bg" style="width: 50px;">
                                    <span class="progress-text"> Skill: {{$ninja->skill}}</span>
                                </span>
                                @endif
                            </span>
                        </div>
                    </div>

                    <div class="bio">
                        <h3 class="font-bold">
                            About me
                        </h3>
                        <p>
                            {{ Str::of($ninja->bio)->limit(250) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- dojo info --}}
        <div class="dojo-card">
            <div class="inner">
                <h2>Dojo Information</h2>
                <hr>
                <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
                <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>

                <div class="description">
                    <h3 class="font-bold">About the Dojo</h3>
                    <p>{{ $ninja->dojo->description }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
