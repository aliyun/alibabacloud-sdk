<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class box extends Model
{
    public $invoiceCodes;
    public $invoiceNoes;
    public $invoiceDates;
    public $invoiceFakeCodes;
    public $payerNames;
    public $payerRegisterNoes;
    public $payerAddresses;
    public $payerBankNames;
    public $withoutTaxAmounts;
    public $taxAmounts;
    public $sumAmounts;
    public $invoiceAmounts;
    public $payeeNames;
    public $payeeRegisterNoes;
    public $payeeAddresses;
    public $payeeBankNames;
    public $payees;
    public $checkers;
    public $clerks;
    protected $_required = [
        'invoiceCodes'      => true,
        'invoiceNoes'       => true,
        'invoiceDates'      => true,
        'invoiceFakeCodes'  => true,
        'payerNames'        => true,
        'payerRegisterNoes' => true,
        'payerAddresses'    => true,
        'payerBankNames'    => true,
        'withoutTaxAmounts' => true,
        'taxAmounts'        => true,
        'sumAmounts'        => true,
        'invoiceAmounts'    => true,
        'payeeNames'        => true,
        'payeeRegisterNoes' => true,
        'payeeAddresses'    => true,
        'payeeBankNames'    => true,
        'payees'            => true,
        'checkers'          => true,
        'clerks'            => true,
    ];
    protected $_name = [
        'invoiceCodes'      => 'InvoiceCodes',
        'invoiceNoes'       => 'InvoiceNoes',
        'invoiceDates'      => 'InvoiceDates',
        'invoiceFakeCodes'  => 'InvoiceFakeCodes',
        'payerNames'        => 'PayerNames',
        'payerRegisterNoes' => 'PayerRegisterNoes',
        'payerAddresses'    => 'PayerAddresses',
        'payerBankNames'    => 'PayerBankNames',
        'withoutTaxAmounts' => 'WithoutTaxAmounts',
        'taxAmounts'        => 'TaxAmounts',
        'sumAmounts'        => 'SumAmounts',
        'invoiceAmounts'    => 'InvoiceAmounts',
        'payeeNames'        => 'PayeeNames',
        'payeeRegisterNoes' => 'PayeeRegisterNoes',
        'payeeAddresses'    => 'PayeeAddresses',
        'payeeBankNames'    => 'PayeeBankNames',
        'payees'            => 'Payees',
        'checkers'          => 'Checkers',
        'clerks'            => 'Clerks',
    ];
    protected $_description = [
        'invoiceCodes'      => 'invoiceCodes',
        'invoiceNoes'       => 'invoiceNoes',
        'invoiceDates'      => 'invoiceDates',
        'invoiceFakeCodes'  => 'invoiceFakeCodes',
        'payerNames'        => 'payerNames',
        'payerRegisterNoes' => 'payerRegisterNoes',
        'payerAddresses'    => 'payerAddresses',
        'payerBankNames'    => 'payerBankNames',
        'withoutTaxAmounts' => 'withoutTaxAmounts',
        'taxAmounts'        => 'taxAmounts',
        'sumAmounts'        => 'sumAmounts',
        'invoiceAmounts'    => 'invoiceAmounts',
        'payeeNames'        => 'payeeNames',
        'payeeRegisterNoes' => 'payeeRegisterNoes',
        'payeeAddresses'    => 'payeeAddresses',
        'payeeBankNames'    => 'payeeBankNames',
        'payees'            => 'payees',
        'checkers'          => 'checkers',
        'clerks'            => 'clerks',
    ];
}
