<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse\data\results\generalText;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse\data\results\roi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeStampResponse\data\results\text;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description generalText
     *
     * @var array
     */
    public $generalText;

    /**
     * @description roi
     *
     * @var roi
     */
    public $roi;

    /**
     * @description text
     *
     * @var text
     */
    public $text;
    protected $_name = [
        'generalText' => 'GeneralText',
        'roi'         => 'Roi',
        'text'        => 'Text',
    ];

    public function validate()
    {
        Model::validateRequired('generalText', $this->generalText, true);
        Model::validateRequired('roi', $this->roi, true);
        Model::validateRequired('text', $this->text, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['GeneralText'] = [];
        if (null !== $this->generalText && \is_array($this->generalText)) {
            $n = 0;
            foreach ($this->generalText as $item) {
                $res['GeneralText'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Roi']  = null !== $this->roi ? $this->roi->toMap() : null;
        $res['Text'] = null !== $this->text ? $this->text->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeneralText'])) {
            if (!empty($map['GeneralText'])) {
                $model->generalText = [];
                $n                  = 0;
                foreach ($map['GeneralText'] as $item) {
                    $model->generalText[$n++] = null !== $item ? generalText::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Roi'])) {
            $model->roi = roi::fromMap($map['Roi']);
        }
        if (isset($map['Text'])) {
            $model->text = text::fromMap($map['Text']);
        }

        return $model;
    }
}
