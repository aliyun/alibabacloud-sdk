<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleTemplateListRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description keyword
     *
     * @var string
     */
    public $keyword;

    /**
     * @description id
     *
     * @var int
     */
    public $templateId;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description history
     *
     * @var bool
     */
    public $history;
    protected $_name = [
        'name'       => 'Name',
        'keyword'    => 'Keyword',
        'templateId' => 'TemplateId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'history'    => 'History',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->history) {
            $res['History'] = $this->history;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleTemplateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['History'])) {
            $model->history = $map['History'];
        }

        return $model;
    }
}
