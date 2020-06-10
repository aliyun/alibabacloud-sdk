<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\errorCodeSamples;

use AlibabaCloud\Tea\Model;

class errorCodeSample extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description model
     *
     * @var string
     */
    public $model;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'description' => 'Description',
        'model'       => 'Model',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('model', $this->model, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorCodeSample
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
