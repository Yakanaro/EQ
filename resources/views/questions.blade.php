@vite(['resources/css/app.css', 'resources/js/app.js'])
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Номер
        </th>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Утверждение
        </th>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Совсем не согласен
        </th>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Скорее не согласен
        </th>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Скорее согласен
        </th>
        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
            Полностью согласен
        </th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
    <tr class="py-4">
        <td class="text-center">1</td>
        <td class="text-center">Я замечаю, когда человек переживает, даже если он (она) пытается это скрыть </td>
        <td class="text-center"><input type="radio" name="statement1" value="1"></td>
        <td class="text-center"><input type="radio" name="statement1" value="2"></td>
        <td class="text-center"><input type="radio" name="statement1" value="3"></td>
        <td class="text-center"><input type="radio" name="statement1" value="4"></td>
    </tr>
    <tr>
        <td class="text-center">2</td>
        <td class="text-center">Если человек на меня обижается, я не знаю, как восстановить с ним хорошие отношения</td>
        <td class="text-center"><input type="radio" name="statement1" value="1"></td>
        <td class="text-center"><input type="radio" name="statement1" value="2"></td>
        <td class="text-center"><input type="radio" name="statement1" value="3"></td>
        <td class="text-center"><input type="radio" name="statement1" value="4"></td>
    </tr>
    <tr>
        <td class="text-center">3</td>
        <td class="text-center">Мне легко догадаться о чувствах человека по выражению его лица </td>
        <td class="text-center"><input type="radio" name="statement1" value="1"></td>
        <td class="text-center"><input type="radio" name="statement1" value="2"></td>
        <td class="text-center"><input type="radio" name="statement1" value="3"></td>
        <td class="text-center"><input type="radio" name="statement1" value="4"></td>
    </tr>
    <tr>
        <td class="text-center">4</td>
        <td class="text-center">Я хорошо знаю, чем заняться, чтобы улучшить себе настроение </td>
        <td class="text-center"><input type="radio" name="statement1" value="1"></td>
        <td class="text-center"><input type="radio" name="statement1" value="2"></td>
        <td class="text-center"><input type="radio" name="statement1" value="3"></td>
        <td class="text-center"><input type="radio" name="statement1" value="4"></td>
    </tr>
    <tr>
        <td class="text-center">5</td>
        <td class="text-center">У меня обычно не получается повлиять на эмоциональное состояние своего собеседника </td>
        <td class="text-center"><input type="radio" name="statement1" value="1"></td>
        <td class="text-center"><input type="radio" name="statement1" value="2"></td>
        <td class="text-center"><input type="radio" name="statement1" value="3"></td>
        <td class="text-center"><input type="radio" name="statement1" value="4"></td>
    </tr>

    </tbody>
</table>

<script>
    const radioButtons = document.querySelectorAll('input[type="radio"]');

    // при выборе радиокнопки сохраняем её значение в localStorage
    radioButtons.forEach((radio) => {
        radio.addEventListener('change', () => {
            localStorage.setItem(radio.name, radio.value);
        });
    });

    // при загрузке страницы загружаем сохранённые значения радиокнопок
    radioButtons.forEach((radio) => {
        const savedValue = localStorage.getItem(radio.name);
        if (savedValue && savedValue === radio.value) {
            radio.checked = true;
        }
    });
</script>

