<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class ModelController extends Controller
{
    public function processForm(Request $request)
    {
        // Retrieve form data
        $answer1 = $request->input('answer1');
        $answer2 = $request->input('answer2');
        $answer3 = $request->input('answer3');

        // Serialize data to JSON
        $formDataJson = json_encode(['answer1' => $answer1, 'answer2' => $answer2, 'answer3' => $answer3]);
        // Call Python script passing form data as argument
        $process = new Process(["python", "C:\xampp2\htdocs\git\Kriyeta-2.0\app\python\recommendation_model.py", $formDataJson]);
        $process->run();

        // Handle output from Python script
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        $output = $process->getOutput();

        // Handle further processing or return the output
        return response()->json(['recommendation' => $output]);
    }
}
