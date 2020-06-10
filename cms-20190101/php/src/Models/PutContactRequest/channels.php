<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutContactRequest;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @description sms
     *
     * @var string
     */
    public $SMS;

    /**
     * @description mail
     *
     * @var string
     */
    public $mail;

    /**
     * @description aliim
     *
     * @var string
     */
    public $aliIM;

    /**
     * @description dingwebhook
     *
     * @var string
     */
    public $dingWebHook;
    protected $_name = [
        'SMS'         => 'SMS',
        'mail'        => 'Mail',
        'aliIM'       => 'AliIM',
        'dingWebHook' => 'DingWebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SMS) {
            $res['SMS'] = $this->SMS;
        }
        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }
        if (null !== $this->aliIM) {
            $res['AliIM'] = $this->aliIM;
        }
        if (null !== $this->dingWebHook) {
            $res['DingWebHook'] = $this->dingWebHook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SMS'])) {
            $model->SMS = $map['SMS'];
        }
        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }
        if (isset($map['AliIM'])) {
            $model->aliIM = $map['AliIM'];
        }
        if (isset($map['DingWebHook'])) {
            $model->dingWebHook = $map['DingWebHook'];
        }

        return $model;
    }
}
