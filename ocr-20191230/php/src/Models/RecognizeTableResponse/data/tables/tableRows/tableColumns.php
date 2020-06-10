<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponse\data\tables\tableRows;

use AlibabaCloud\Tea\Model;

class tableColumns extends Model
{
    /**
     * @description startColumn
     *
     * @var int
     */
    public $startColumn;

    /**
     * @description startRow
     *
     * @var int
     */
    public $startRow;

    /**
     * @description endColumn
     *
     * @var int
     */
    public $endColumn;

    /**
     * @description endRow
     *
     * @var int
     */
    public $endRow;

    /**
     * @description height
     *
     * @var int
     */
    public $height;

    /**
     * @description width
     *
     * @var int
     */
    public $width;

    /**
     * @description texts
     *
     * @var array
     */
    public $texts;
    protected $_name = [
        'startColumn' => 'StartColumn',
        'startRow'    => 'StartRow',
        'endColumn'   => 'EndColumn',
        'endRow'      => 'EndRow',
        'height'      => 'Height',
        'width'       => 'Width',
        'texts'       => 'Texts',
    ];

    public function validate()
    {
        Model::validateRequired('startColumn', $this->startColumn, true);
        Model::validateRequired('startRow', $this->startRow, true);
        Model::validateRequired('endColumn', $this->endColumn, true);
        Model::validateRequired('endRow', $this->endRow, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('texts', $this->texts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startColumn) {
            $res['StartColumn'] = $this->startColumn;
        }
        if (null !== $this->startRow) {
            $res['StartRow'] = $this->startRow;
        }
        if (null !== $this->endColumn) {
            $res['EndColumn'] = $this->endColumn;
        }
        if (null !== $this->endRow) {
            $res['EndRow'] = $this->endRow;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->texts) {
            $res['Texts'] = [];
            if (null !== $this->texts) {
                $res['Texts'] = $this->texts;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartColumn'])) {
            $model->startColumn = $map['StartColumn'];
        }
        if (isset($map['StartRow'])) {
            $model->startRow = $map['StartRow'];
        }
        if (isset($map['EndColumn'])) {
            $model->endColumn = $map['EndColumn'];
        }
        if (isset($map['EndRow'])) {
            $model->endRow = $map['EndRow'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $model->texts = $map['Texts'];
            }
        }

        return $model;
    }
}
