<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeBusinessCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $name;
    public $companies;
    public $departments;
    public $titles;
    public $cellPhoneNumbers;
    public $officePhoneNumbers;
    public $addresses;
    public $emails;
    protected $_required = [
        'name'               => true,
        'companies'          => true,
        'departments'        => true,
        'titles'             => true,
        'cellPhoneNumbers'   => true,
        'officePhoneNumbers' => true,
        'addresses'          => true,
        'emails'             => true,
    ];
    protected $_name = [
        'name'               => 'Name',
        'companies'          => 'Companies',
        'departments'        => 'Departments',
        'titles'             => 'Titles',
        'cellPhoneNumbers'   => 'CellPhoneNumbers',
        'officePhoneNumbers' => 'OfficePhoneNumbers',
        'addresses'          => 'Addresses',
        'emails'             => 'Emails',
    ];
    protected $_description = [
        'name'               => 'name',
        'companies'          => 'company',
        'departments'        => 'department',
        'titles'             => 'title',
        'cellPhoneNumbers'   => 'cellNumber',
        'officePhoneNumbers' => 'officePhoneNumber',
        'addresses'          => 'address',
        'emails'             => 'email',
    ];
}
