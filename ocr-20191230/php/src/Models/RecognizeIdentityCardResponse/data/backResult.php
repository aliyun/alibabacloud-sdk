<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeIdentityCardResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $issue;
    protected $_name = [
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
        'issue'     => 'Issue',
    ];

    public function validate()
    {
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('issue', $this->issue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->issue) {
            $res['Issue'] = $this->issue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Issue'])) {
            $model->issue = $map['Issue'];
        }

        return $model;
    }
}
