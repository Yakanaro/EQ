@extends('layouts.app')
@section('content')
    <form method="POST" action="">
        @csrf
        <h2>Пожалуйста, выберите ответ на каждый из вопросов:</h2>

        <div class="flex flex-col items-center justify-center mt-5">
            <h2>1 Какое настроение/я помогло бы созданию нового, необычного интерьера для празднования дня рождения?</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th colspan="1">Не помогает</th>
                    <th colspan="3"></th>
                    <th colspan="1">Помогает</th>
                </tr>
                </thead>
                <tbody>
                @foreach(['irritation' => 'раздражение', 'boredom' => 'скука', 'joy' => 'радость'] as $scale => $emotion)
                    <tr>
                        <td class="px-2">{{ $emotion }}</td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-1" name="scales[{{ $scale }}]" value="1">
                            <label for="{{ $scale }}-1">1</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-2" name="scales[{{ $scale }}]" value="2">
                            <label for="{{ $scale }}-2">2</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-3" name="scales[{{ $scale }}]" value="3">
                            <label for="{{ $scale }}-3">3</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-4" name="scales[{{ $scale }}]" value="4">
                            <label for="{{ $scale }}-4">4</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-5" name="scales[{{ $scale }}]" value="5">
                            <label for="{{ $scale }}-5">5</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 ">

        <div class="flex flex-col items-center justify-center mt-5">
            <h2>2 Какое настроение/я помогло бы сочинению вдохновенной мелодии военного марша?</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th colspan="1">Не помогает</th>
                    <th colspan="3"></th>
                    <th colspan="1">Помогает</th>
                </tr>
                </thead>
                <tbody>
                @foreach(['irritation' => 'раздражение', 'boredom' => 'скука', 'joy' => 'радость'] as $scale => $emotion)
                    <tr>
                        <td class="px-2">{{ $emotion }}</td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-1" name="scales[{{ $scale }}]" value="1">
                            <label for="{{ $scale }}-1">1</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-2" name="scales[{{ $scale }}]" value="2">
                            <label for="{{ $scale }}-2">2</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-3" name="scales[{{ $scale }}]" value="3">
                            <label for="{{ $scale }}-3">3</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-4" name="scales[{{ $scale }}]" value="4">
                            <label for="{{ $scale }}-4">4</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-5" name="scales[{{ $scale }}]" value="5">
                            <label for="{{ $scale }}-5">5</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 ">

        <div class="flex flex-col items-center justify-center mt-5">
            <h2>3 Какое настроение/я помогло бы приготовлению блюда по очень сложному и трудоемкому рецепту?</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th colspan="1">Не помогает</th>
                    <th colspan="3"></th>
                    <th colspan="1">Помогает</th>
                </tr>
                </thead>
                <tbody>
                @foreach(['irritation' => 'раздражение', 'boredom' => 'скука', 'joy' => 'радость'] as $scale => $emotion)
                    <tr>
                        <td class="px-2">{{ $emotion }}</td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-1" name="scales[{{ $scale }}]" value="1">
                            <label for="{{ $scale }}-1">1</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-2" name="scales[{{ $scale }}]" value="2">
                            <label for="{{ $scale }}-2">2</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-3" name="scales[{{ $scale }}]" value="3">
                            <label for="{{ $scale }}-3">3</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-4" name="scales[{{ $scale }}]" value="4">
                            <label for="{{ $scale }}-4">4</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-5" name="scales[{{ $scale }}]" value="5">
                            <label for="{{ $scale }}-5">5</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 ">

        <div class="flex flex-col items-center justify-center mt-5">
            <h2>4 Какое настроение/я помогло бы выяснению причины драки трех маленьких детей? Каждый из детей объясняет причину драки по-своему. Для понимания случившегося необходимо внимание к деталям разных вариантов историй и сравнение многих фактов.</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th colspan="1">Не помогает</th>
                    <th colspan="3"></th>
                    <th colspan="1">Помогает</th>
                </tr>
                </thead>
                <tbody>
                @foreach(['irritation' => 'раздражение', 'boredom' => 'скука', 'joy' => 'радость'] as $scale => $emotion)
                    <tr>
                        <td class="px-2">{{ $emotion }}</td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-1" name="scales[{{ $scale }}]" value="1">
                            <label for="{{ $scale }}-1">1</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-2" name="scales[{{ $scale }}]" value="2">
                            <label for="{{ $scale }}-2">2</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-3" name="scales[{{ $scale }}]" value="3">
                            <label for="{{ $scale }}-3">3</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-4" name="scales[{{ $scale }}]" value="4">
                            <label for="{{ $scale }}-4">4</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-5" name="scales[{{ $scale }}]" value="5">
                            <label for="{{ $scale }}-5">5</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 ">

        <div class="flex flex-col items-center justify-center mt-5 mb-5">
            <h2>5 Какое настроение/я помогло бы врачу при выборе плана лечения пациента со злокачественной опухолью? Доктор должен применить несколько известных, но несогласующихся между собой методов в лечении опухоли.</h2>
            <table>
                <thead>
                <tr>
                    <th></th>
                    <th colspan="1">Не помогает</th>
                    <th colspan="3"></th>
                    <th colspan="1">Помогает</th>
                </tr>
                </thead>
                <tbody>
                @foreach(['irritation' => 'раздражение', 'boredom' => 'скука', 'joy' => 'радость'] as $scale => $emotion)
                    <tr>
                        <td class="px-2">{{ $emotion }}</td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-1" name="scales[{{ $scale }}]" value="1">
                            <label for="{{ $scale }}-1">1</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-2" name="scales[{{ $scale }}]" value="2">
                            <label for="{{ $scale }}-2">2</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-3" name="scales[{{ $scale }}]" value="3">
                            <label for="{{ $scale }}-3">3</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-4" name="scales[{{ $scale }}]" value="4">
                            <label for="{{ $scale }}-4">4</label>
                        </td>
                        <td class="px-2">
                            <input type="radio" id="{{ $scale }}-5" name="scales[{{ $scale }}]" value="5">
                            <label for="{{ $scale }}-5">5</label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </form>
@endsection