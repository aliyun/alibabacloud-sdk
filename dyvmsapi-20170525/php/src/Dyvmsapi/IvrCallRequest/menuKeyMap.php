<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Dyvmsapi\IvrCallRequest;

use AlibabaCloud\Tea\Model;

class menuKeyMap extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $key;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description ttsParams
     *
     * @var string
     */
    public $ttsParams;
    protected $_name = [
        'key'       => 'Key',
        'code'      => 'Code',
        'ttsParams' => 'TtsParams',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ttsParams', $this->ttsParams, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['Key']       = $this->key;
        $res['Code']      = $this->code;
        $res['TtsParams'] = $this->ttsParams;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return menuKeyMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TtsParams'])) {
            $model->ttsParams = $map['TtsParams'];
        }

        return $model;
    }
}
