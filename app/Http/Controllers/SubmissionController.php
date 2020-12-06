<?php declare(strict_types = 1);

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class SubmissionController 
{
    public function show(Request $request) : Response 
    {
        $content = 'Submission Controller';
        return new Response($content);
    }
}