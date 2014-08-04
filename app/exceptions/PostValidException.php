<?php

class PostValidException extends Exception {}

App::error(function(PostValidException $e, $code, $fromConsole)
{
    return Response::json(
        ['message' => $e->getMessage()],
        500
    );
});