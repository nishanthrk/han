<?php

namespace app\components;

class ApiResponse
{
    /**
     * REST Header and body statusCode parameter
     * 200 OK
     * 201 Created
     * 204 No Content
     * 401 Unauthorized
     * 404 Not Found
     * 422 Unprocessable Entity
     * 304 Not Modified
     */
    const HTTP_STATUS_CODE_OK = 200;
    const HTTP_STATUS_CODE_CREATED = 201;
    const HTTP_STATUS_CODE_NO_CONTENT = 204;
    const HTTP_STATUS_CODE_UNAUTHORISED = 401;
    const HTTP_STATUS_CODE_NOT_FOUND = 404;
    const HTTP_STATUS_CODE_UNPROCESSABLE_ENTITY = 422;
    const HTTP_STATUS_CODE_NOT_MODIFIED = 304;

    public function data($status, $data, $httpStatusCode)
    {
        \Yii::$app->response->statusCode = $httpStatusCode;
        $_data = [
            'status' => $status,
            'data' => $data,
        ];
        \Yii::$app->response->data = $_data;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }

    public function error($status, $error, $httpStatusCode)
    {
        \Yii::$app->response->statusCode = $httpStatusCode;
        $_data = [
            'status' => $status,
            'error' => $error,
        ];
        \Yii::$app->response->data = $_data;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }

    /**
     * @param $status int
     * @param $data array|string
     */
    public function ok($status, $data)
    {
        $this->data($status, $data, self::HTTP_STATUS_CODE_OK);
    }

    /**
     * @param $status int
     * @param $data array
     */
    public function created($status, $data)
    {
        $this->data($status, $data, self::HTTP_STATUS_CODE_CREATED);
    }

    public function noContent()
    {
        \Yii::$app->response->statusCode = self::HTTP_STATUS_CODE_NO_CONTENT;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }

    public function unauthorised()
    {
        \Yii::$app->response->statusCode = self::HTTP_STATUS_CODE_UNAUTHORISED;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }

    /**
     * @param $status int
     * @param $error String|array
     */
    public function unprocessableEntity($status, $error)
    {
        $this->error($status, $error, self::HTTP_STATUS_CODE_UNPROCESSABLE_ENTITY);
    }

    public function notModified()
    {
        \Yii::$app->response->statusCode = self::HTTP_STATUS_CODE_NOT_MODIFIED;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }

    public function notFound()
    {
        \Yii::$app->response->statusCode = self::HTTP_STATUS_CODE_NOT_FOUND;
        \Yii::$app->response->send();
        \Yii::$app->end();
    }
}
