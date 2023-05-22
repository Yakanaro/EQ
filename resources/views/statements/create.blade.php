{{--<form action="{{ route('statements.store') }}" method="POST">--}}
{{--    @csrf--}}
{{--    <div class="mb-4">--}}
{{--        <label class="block text-gray-700 font-bold mb-2" for="statement">--}}
{{--            Утверждение--}}
{{--        </label>--}}
{{--        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="statement" id="statement" type="text" placeholder="Введите утверждение">--}}
{{--    </div>--}}
{{--    <div class="mb-4">--}}
{{--        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">--}}
{{--            Добавить--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</form>--}}
{{--<form method="POST" action="{{ route('statements.store') }}">--}}
{{--    @csrf--}}

{{--    <div class="mb-4">--}}
{{--        <label class="block font-medium text-sm text-gray-700" for="statements">--}}
{{--            Statements--}}
{{--        </label>--}}
{{--        <textarea class="form-input mt-1 block w-full rounded-md border-gray-300" id="statements" name="statements"></textarea>--}}
{{--    </div>--}}

{{--    <div class="flex items-center justify-end mt-4">--}}
{{--        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-400 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">--}}
{{--            Save--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</form>--}}


{{ Form::model($article, ['route' => 'articles.store']) }}
{{ Form::label('name', 'Название') }}
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Содержание') }}
{{ Form::textarea('body') }}<br>
{{ Form::submit('Создать') }}
{{ Form::close() }}