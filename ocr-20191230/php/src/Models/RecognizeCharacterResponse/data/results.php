<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeCharacterResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\results\textRectangles;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description probability
     *
     * @var float
     */
    public $probability;

    /**
     * @description text
     *
     * @var string
     */
    public $text;

    /**
     * @description textRectangles
     *
     * @var textRectangles
     */
    public $textRectangles;
    protected $_name = [
        'probability'    => 'Probability',
        'text'           => 'Text',
        'textRectangles' => 'TextRectangles',
    ];

    public function validate()
    {
        Model::validateRequired('probability', $this->probability, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('textRectangles', $this->textRectangles, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Probability']    = $this->probability;
        $res['Text']           = $this->text;
        $res['TextRectangles'] = null !== $this->textRectangles ? $this->textRectangles->toMap() : null;

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
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TextRectangles'])) {
            $model->textRectangles = textRectangles::fromMap($map['TextRectangles']);
        }

        return $model;
    }
}
