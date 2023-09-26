@extends('layouts.app')
@section('content')
<form method="POST" action="">
    @csrf
    <h2>Инструкция: насколько выражены нижеприведённые чувства в этом лице.</h2>

    <p>Пожалуйста, дайте ответ по каждой шкале.</p>

    <div class="flex flex-col items-center justify-center">
        <!-- Image -->
        <div class="mb-4">
            <img src="https://psylab.info/images/1/1c/MSCEIT_-_секция_A_-_1.jpg" alt="Test Image">
        </div>

        <!-- Test option -->
        <div class="flex items-center justify-center">
            <span>Отсутствие счастья</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Огромное счастье</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие страха</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[fear]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Сильнейший страх</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие удивления</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Крайняя степень удивления</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие отвращения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Полное отвращение</span>
        </div>
        <div class="flex items-center justify-center">
            <span class="text-center">Отсутствие волнения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span class="text-center">Сильнейшее волнение</span>
        </div>
    </div>


    <div class="flex flex-col items-center justify-center mt-5">
        <!-- Image -->
        <div class="mb-4">
            <img src="https://psylab.info/images/7/75/MSCEIT_-_секция_A_-_2.jpg" alt="Test Image">
        </div>

        <!-- Test option -->
        <div class="flex items-center justify-center">
            <span>Отсутствие счастья</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Огромное счастье</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие страха</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[fear]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Сильнейший страх</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие удивления</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Крайняя степень удивления</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие отвращения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Полное отвращение</span>
        </div>
        <div class="flex items-center justify-center">
            <span class="text-center">Отсутствие волнения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span class="text-center">Сильнейшее волнение</span>
        </div>
    </div>


    <div class="flex flex-col items-center justify-center mt-5">
        <!-- Image -->
        <div class="mb-4">
            <img src="" alt="Test Image">
        </div>

        <!-- Test option -->
        <div class="flex items-center justify-center">
            <span>Отсутствие счастья</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Огромное счастье</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие страха</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[fear]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Сильнейший страх</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие удивления</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Крайняя степень удивления</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие отвращения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Полное отвращение</span>
        </div>
        <div class="flex items-center justify-center">
            <span class="text-center">Отсутствие волнения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span class="text-center">Сильнейшее волнение</span>
        </div>
    </div>


    <div class="flex flex-col items-center justify-center mt-5">
        <!-- Image -->
        <div class="mb-4">
            <img src="https://psylab.info/images/5/57/MSCEIT_-_секция_A_-_4.jpg" alt="Test Image">
        </div>

        <!-- Test option -->
        <div class="flex items-center justify-center">
            <span>Отсутствие счастья</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Огромное счастье</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие страха</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[fear]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Сильнейший страх</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие удивления</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Крайняя степень удивления</span>
        </div>
        <div class="flex items-center justify-center">
            <span>Отсутствие отвращения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span>Полное отвращение</span>
        </div>
        <div class="flex items-center justify-center">
            <span class="text-center">Отсутствие волнения</span>
            <div class="flex items-center mx-4">
                @foreach(range(1, 5) as $value)
                    <div class="mr-2">
                        <input type="radio" id="happiness-{{$value}}" name="scales[happiness]" value="{{$value}}">
                        <label for="happiness-{{$value}}">{{$value}}</label>
                    </div>
                @endforeach
            </div>
            <span class="text-center">Сильнейшее волнение</span>
        </div>
    </div>

    <input type="submit" value="Submit" class="mb-10">
</form>
@endsection