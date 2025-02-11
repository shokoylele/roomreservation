<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // registers custom error pages to the Handler
        $this->registerErrorViewPaths();

        // redirects users to the homepage if error 404 gets encountered
        // if ($exception instanceof NotFoundHttpException) {
        //     return redirect()->route('home');
        // }

        // returns an error 401 if MethodNotAllowedHttpException gets encountered
        if ($exception instanceof MethodNotAllowedHttpException) {
            Log::notice("Unauthorized route/method access attempt detected. Redirecting to homepage.");
            return response()->view('errors.401', [], 401);
        }

        return parent::render($request, $exception);
    }
}
