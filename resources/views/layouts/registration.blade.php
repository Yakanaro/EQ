@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-xl bg-white p-8 border border-gray-300 rounded-lg">
        <h2 class="text-lg font-medium text-gray-900 mb-6">Регистрация</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Имя
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Введите ваше имя"
                />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Введите ваш email"
                />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Пароль
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Введите ваш пароль"
                />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">
                    Подтвердите пароль
                </label>
                <input
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="confirm-password"
                        name="confirm-password"
                        type="password"
                        placeholder="Подтвердите ваш пароль"
                />
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline bg-gradient-to-r from-blue-400 to-indigo-500 hover:bg-gradient-to-r hover:from-blue-500 hover:to-indigo-600">
                    Зарегистрироваться
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Забыли пароль?
                </a>
            </div>
        </form>
    </div>
</div>