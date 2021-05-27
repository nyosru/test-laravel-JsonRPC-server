<?php

// namespace Services;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

use Services\JsonRpcResponse;

class RpcServer
{

    public function handle(Request $request, Controller $controller)
    {

        try {

            // $content = json_decode($request->getContent(), true);

            // if (empty($content)) {
            //     throw new \Exception('Parse error', \Exception::PARSE_ERROR);
            //     // throw new JsonRpcException('Parse error', JsonRpcException::PARSE_ERROR);
            // }

            // $result = $controller->{$content['method']}(...[$content['params']]);

            // return JsonRpcResponse::success($result, $content['id']);

        } catch (\Exception $e) {
            return JsonRpcResponse::error($e->getMessage());
        }

    }
}
