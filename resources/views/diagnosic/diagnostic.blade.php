@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('diagnostic.store') }}">
        @csrf

        <div class="emotional-survey">
            <h1 class="text-center font-bold">Тест эмоционального интеллекта Люсина</h1>

            <table style="border: 1px solid #000; border-collapse: collapse;">
                <thead>
                <tr>
                    <th style="border: 1px solid #000; padding: 8px;">Утверждение</th>
                    <th style="border: 1px solid #000; padding: 8px;">Совсем не согласен</th>
                    <th style="border: 1px solid #000; padding: 8px;">Скорее не согласен</th>
                    <th style="border: 1px solid #000; padding: 8px;">Скорее согласен</th>
                    <th style="border: 1px solid #000; padding: 8px;">Полностью согласен</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($statements as $id => $statement)
                    <tr>
                        <td style="border: 1px solid #000; padding: 8px;">
                            {{ $id }}. {{ $statement }}
                        </td>
                        <td style="border: 1px solid #000; padding: 8px; text-align: center;">
                            <input type="radio" id="response_{{ $id }}_1" name="response_{{ $id }}" value="1" required>
                        </td>
                        <td style="border: 1px solid #000; padding: 8px; text-align: center;">
                            <input type="radio" id="response_{{ $id }}_2" name="response_{{ $id }}" value="2" required>
                        </td>
                        <td style="border: 1px solid #000; padding: 8px; text-align: center;">
                            <input type="radio" id="response_{{ $id }}_3" name="response_{{ $id }}" value="3" required>
                        </td>
                        <td style="border: 1px solid #000; padding: 8px; text-align: center;">
                            <input type="radio" id="response_{{ $id }}_4" name="response_{{ $id }}" value="4" required>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <button type="submit">Отправить</button>
        </div>
    </form>
@endsection

