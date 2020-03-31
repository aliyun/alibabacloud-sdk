<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    public $startDate;
    public $endDate;
    public $issue;
    protected $_required = [
        'startDate' => true,
        'endDate'   => true,
        'issue'     => true,
    ];
    protected $_name = [
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
        'issue'     => 'Issue',
    ];
    protected $_description = [
        'startDate' => 'startDate',
        'endDate'   => 'endDate',
        'issue'     => 'issue',
    ];
}
