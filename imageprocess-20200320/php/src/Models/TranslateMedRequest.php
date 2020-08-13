<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;

class TranslateMedRequest extends Model
{
    /**
     * @var string
     */
    public $fromLanguage;

    /**
     * @var string
     */
    public $toLanguage;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'fromLanguage' => 'FromLanguage',
        'toLanguage'   => 'ToLanguage',
        'text'         => 'Text',
    ];

    public function validate()
    {
        Model::validateRequired('fromLanguage', $this->fromLanguage, true);
        Model::validateRequired('toLanguage', $this->toLanguage, true);
        Model::validateRequired('text', $this->text, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromLanguage) {
            $res['FromLanguage'] = $this->fromLanguage;
        }
        if (null !== $this->toLanguage) {
            $res['ToLanguage'] = $this->toLanguage;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TranslateMedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromLanguage'])) {
            $model->fromLanguage = $map['FromLanguage'];
        }
        if (isset($map['ToLanguage'])) {
            $model->toLanguage = $map['ToLanguage'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
