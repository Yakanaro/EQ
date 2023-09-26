@extends('layouts.app')
@section('content')
    <form method="POST" action="">
        @csrf
        <p>1. Марию охватило чувство стыда, и она начала ощущать свою никчемность. Затем она почувствовала себя ...</p>
        <div class="mb-3">
            @foreach(['depressed' => 'угнетенной', 'suppressed' => 'подавленной', 'ashamed' => 'пристыженной', 'shy' => 'застенчивой', 'upset' => 'расстроенной'] as $scale => $emotion)
                <div class="mb-1">
                    <input type="radio" id="{{ $scale }}" name="scales[emotion]" value="{{ $scale }}">
                    <label for="{{ $scale }}">{{ $emotion }}</label>
                </div>
            @endforeach
        </div>

        <p>2. Николай почувствовал удовлетворение, размышляя о своей жизни, и чем больше он думал о том хорошем, что смог сделать для других людей, тем больше он испытывал чувство...</p>
        <div class="mb-3">
            @foreach(['depressed' => 'угнетенной', 'suppressed' => 'подавленной', 'ashamed' => 'пристыженной', 'shy' => 'застенчивой', 'upset' => 'расстроенной'] as $scale => $emotion)
                <div class="mb-1">
                    <input type="radio" id="{{ $scale }}" name="scales[emotion]" value="{{ $scale }}">
                    <label for="{{ $scale }}">{{ $emotion }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit">Отправить</button>
    </form>
@endsection