<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiagnosticResult; // Подключаем модель для работы с результатами диагностики

class DiagnosticResultController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'response_') !== false) {
                $statementId = str_replace('response_', '', $key);

                DiagnosticResult::create([
                    'statement_id' => $statementId,
                    'user_id' => auth()->id(),
                    'response' => $value,
                ]);
            }
        }

        $userResponses = DiagnosticResult::where('user_id', auth()->id())->get();

        $MP = 0;

        $directPoints = [1, 3, 11, 13, 20, 27, 29, 32, 34];
        $reversePoints = [38, 42, 46];

        foreach ($userResponses as $response) {
            $responseValue = intval($response->response);

            if (in_array($response->statement_id, $directPoints)) {
                $MP += $responseValue;
            } elseif (in_array($response->statement_id, $reversePoints)) {
                $MP += (4 - $responseValue);
            }
        }

        $user = auth()->user();
        $user->MP = $MP;
        $user->save();

        $MY = 0;

        $directPointsMY = [9, 15, 17, 24, 36];
        $reversePointsMY = [2, 5, 30, 40, 44];

        // Вычисление MY на основе ответов пользователя
        foreach ($userResponses as $response) {
            $responseValue = intval($response->response);

            if (in_array($response->statement_id, $directPointsMY)) {
                $MY += $responseValue;
            } elseif (in_array($response->statement_id, $reversePointsMY)) {
                $MY += (4 - $responseValue);
            }
        }

        // Сохранение значения MY в таблице users для текущего пользователя
        $user = auth()->user();
        $user->MY = $MY;
        $user->save();

        $VP = 0;

        // Определение значений для прямых и обратных пунктов для VP
        $directPointsVP = [7, 14, 26];
        $reversePointsVP = [8, 18, 22, 31, 35, 41, 45];

        // Вычисление VP на основе ответов пользователя
        foreach ($userResponses as $response) {
            $responseValue = intval($response->response);

            if (in_array($response->statement_id, $directPointsVP)) {
                $VP += $responseValue;
            } elseif (in_array($response->statement_id, $reversePointsVP)) {
                $VP += (4 - $responseValue);
            }
        }

        // Сохранение значения VP в таблице users для текущего пользователя
        $user = auth()->user();
        $user->VP = $VP;
        $user->save();

        $VY = 0;

        // Определение значений для прямых и обратных пунктов для VY
        $directPointsVY = [4, 25, 28, 37];
        $reversePointsVY = [12, 33, 43];

        // Вычисление VY на основе ответов пользователя
        foreach ($userResponses as $response) {
            $responseValue = intval($response->response);

            if (in_array($response->statement_id, $directPointsVY)) {
                $VY += $responseValue;
            } elseif (in_array($response->statement_id, $reversePointsVY)) {
                $VY += (4 - $responseValue);
            }
        }
        $user = auth()->user();
        $user->VY = $VY;
        $user->save();

        $EQ = 0;

        // Определение значений для прямых и обратных пунктов для EQ
        $directPointsEQ = [
            1, 3, 4, 7, 9, 11, 13, 14, 15, 17, 19, 20, 21, 23, 24, 25, 26, 27, 28, 29, 32, 34, 36, 37
        ];
        $reversePointsEQ = [
            2, 5, 6, 8, 10, 12, 16, 18, 22, 30, 31, 33, 35, 38, 39, 40, 41, 42, 43, 44, 45, 46
        ];

        // Вычисление EQ на основе ответов пользователя
        foreach ($userResponses as $response) {
            $responseValue = intval($response->response);

            if (in_array($response->statement_id, $directPointsEQ)) {
                $EQ += $responseValue;
            } elseif (in_array($response->statement_id, $reversePointsEQ)) {
                $EQ += (4 - $responseValue);
            }
        }

        // Сохранение значения EQ в таблице users для текущего пользователя
        $user = auth()->user();
        $user->EQ = $EQ;
        $user->save();

        return redirect()->route('me')->with('success', 'Результаты диагностики сохранены успешно!');
    }
}
