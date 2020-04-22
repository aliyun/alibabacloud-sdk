<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeVATInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class box extends Model
{
    /**
     * @description invoiceCodes
     *
     * @var array
     */
    public $invoiceCodes;

    /**
     * @description invoiceNoes
     *
     * @var array
     */
    public $invoiceNoes;

    /**
     * @description invoiceDates
     *
     * @var array
     */
    public $invoiceDates;

    /**
     * @description invoiceFakeCodes
     *
     * @var array
     */
    public $invoiceFakeCodes;

    /**
     * @description payerNames
     *
     * @var array
     */
    public $payerNames;

    /**
     * @description payerRegisterNoes
     *
     * @var array
     */
    public $payerRegisterNoes;

    /**
     * @description payerAddresses
     *
     * @var array
     */
    public $payerAddresses;

    /**
     * @description payerBankNames
     *
     * @var array
     */
    public $payerBankNames;

    /**
     * @description withoutTaxAmounts
     *
     * @var array
     */
    public $withoutTaxAmounts;

    /**
     * @description taxAmounts
     *
     * @var array
     */
    public $taxAmounts;

    /**
     * @description sumAmounts
     *
     * @var array
     */
    public $sumAmounts;

    /**
     * @description invoiceAmounts
     *
     * @var array
     */
    public $invoiceAmounts;

    /**
     * @description payeeNames
     *
     * @var array
     */
    public $payeeNames;

    /**
     * @description payeeRegisterNoes
     *
     * @var array
     */
    public $payeeRegisterNoes;

    /**
     * @description payeeAddresses
     *
     * @var array
     */
    public $payeeAddresses;

    /**
     * @description payeeBankNames
     *
     * @var array
     */
    public $payeeBankNames;

    /**
     * @description payees
     *
     * @var array
     */
    public $payees;

    /**
     * @description checkers
     *
     * @var array
     */
    public $checkers;

    /**
     * @description clerks
     *
     * @var array
     */
    public $clerks;
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

    public function validate()
    {
        Model::validateRequired('invoiceCodes', $this->invoiceCodes, true);
        Model::validateRequired('invoiceNoes', $this->invoiceNoes, true);
        Model::validateRequired('invoiceDates', $this->invoiceDates, true);
        Model::validateRequired('invoiceFakeCodes', $this->invoiceFakeCodes, true);
        Model::validateRequired('payerNames', $this->payerNames, true);
        Model::validateRequired('payerRegisterNoes', $this->payerRegisterNoes, true);
        Model::validateRequired('payerAddresses', $this->payerAddresses, true);
        Model::validateRequired('payerBankNames', $this->payerBankNames, true);
        Model::validateRequired('withoutTaxAmounts', $this->withoutTaxAmounts, true);
        Model::validateRequired('taxAmounts', $this->taxAmounts, true);
        Model::validateRequired('sumAmounts', $this->sumAmounts, true);
        Model::validateRequired('invoiceAmounts', $this->invoiceAmounts, true);
        Model::validateRequired('payeeNames', $this->payeeNames, true);
        Model::validateRequired('payeeRegisterNoes', $this->payeeRegisterNoes, true);
        Model::validateRequired('payeeAddresses', $this->payeeAddresses, true);
        Model::validateRequired('payeeBankNames', $this->payeeBankNames, true);
        Model::validateRequired('payees', $this->payees, true);
        Model::validateRequired('checkers', $this->checkers, true);
        Model::validateRequired('clerks', $this->clerks, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['InvoiceCodes'] = [];
        if (null !== $this->invoiceCodes) {
            $res['InvoiceCodes'] = $this->invoiceCodes;
        }
        $res['InvoiceNoes'] = [];
        if (null !== $this->invoiceNoes) {
            $res['InvoiceNoes'] = $this->invoiceNoes;
        }
        $res['InvoiceDates'] = [];
        if (null !== $this->invoiceDates) {
            $res['InvoiceDates'] = $this->invoiceDates;
        }
        $res['InvoiceFakeCodes'] = [];
        if (null !== $this->invoiceFakeCodes) {
            $res['InvoiceFakeCodes'] = $this->invoiceFakeCodes;
        }
        $res['PayerNames'] = [];
        if (null !== $this->payerNames) {
            $res['PayerNames'] = $this->payerNames;
        }
        $res['PayerRegisterNoes'] = [];
        if (null !== $this->payerRegisterNoes) {
            $res['PayerRegisterNoes'] = $this->payerRegisterNoes;
        }
        $res['PayerAddresses'] = [];
        if (null !== $this->payerAddresses) {
            $res['PayerAddresses'] = $this->payerAddresses;
        }
        $res['PayerBankNames'] = [];
        if (null !== $this->payerBankNames) {
            $res['PayerBankNames'] = $this->payerBankNames;
        }
        $res['WithoutTaxAmounts'] = [];
        if (null !== $this->withoutTaxAmounts) {
            $res['WithoutTaxAmounts'] = $this->withoutTaxAmounts;
        }
        $res['TaxAmounts'] = [];
        if (null !== $this->taxAmounts) {
            $res['TaxAmounts'] = $this->taxAmounts;
        }
        $res['SumAmounts'] = [];
        if (null !== $this->sumAmounts) {
            $res['SumAmounts'] = $this->sumAmounts;
        }
        $res['InvoiceAmounts'] = [];
        if (null !== $this->invoiceAmounts) {
            $res['InvoiceAmounts'] = $this->invoiceAmounts;
        }
        $res['PayeeNames'] = [];
        if (null !== $this->payeeNames) {
            $res['PayeeNames'] = $this->payeeNames;
        }
        $res['PayeeRegisterNoes'] = [];
        if (null !== $this->payeeRegisterNoes) {
            $res['PayeeRegisterNoes'] = $this->payeeRegisterNoes;
        }
        $res['PayeeAddresses'] = [];
        if (null !== $this->payeeAddresses) {
            $res['PayeeAddresses'] = $this->payeeAddresses;
        }
        $res['PayeeBankNames'] = [];
        if (null !== $this->payeeBankNames) {
            $res['PayeeBankNames'] = $this->payeeBankNames;
        }
        $res['Payees'] = [];
        if (null !== $this->payees) {
            $res['Payees'] = $this->payees;
        }
        $res['Checkers'] = [];
        if (null !== $this->checkers) {
            $res['Checkers'] = $this->checkers;
        }
        $res['Clerks'] = [];
        if (null !== $this->clerks) {
            $res['Clerks'] = $this->clerks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return box
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvoiceCodes'])) {
            if (!empty($map['InvoiceCodes'])) {
                $model->invoiceCodes = [];
                $model->invoiceCodes = $map['InvoiceCodes'];
            }
        }
        if (isset($map['InvoiceNoes'])) {
            if (!empty($map['InvoiceNoes'])) {
                $model->invoiceNoes = [];
                $model->invoiceNoes = $map['InvoiceNoes'];
            }
        }
        if (isset($map['InvoiceDates'])) {
            if (!empty($map['InvoiceDates'])) {
                $model->invoiceDates = [];
                $model->invoiceDates = $map['InvoiceDates'];
            }
        }
        if (isset($map['InvoiceFakeCodes'])) {
            if (!empty($map['InvoiceFakeCodes'])) {
                $model->invoiceFakeCodes = [];
                $model->invoiceFakeCodes = $map['InvoiceFakeCodes'];
            }
        }
        if (isset($map['PayerNames'])) {
            if (!empty($map['PayerNames'])) {
                $model->payerNames = [];
                $model->payerNames = $map['PayerNames'];
            }
        }
        if (isset($map['PayerRegisterNoes'])) {
            if (!empty($map['PayerRegisterNoes'])) {
                $model->payerRegisterNoes = [];
                $model->payerRegisterNoes = $map['PayerRegisterNoes'];
            }
        }
        if (isset($map['PayerAddresses'])) {
            if (!empty($map['PayerAddresses'])) {
                $model->payerAddresses = [];
                $model->payerAddresses = $map['PayerAddresses'];
            }
        }
        if (isset($map['PayerBankNames'])) {
            if (!empty($map['PayerBankNames'])) {
                $model->payerBankNames = [];
                $model->payerBankNames = $map['PayerBankNames'];
            }
        }
        if (isset($map['WithoutTaxAmounts'])) {
            if (!empty($map['WithoutTaxAmounts'])) {
                $model->withoutTaxAmounts = [];
                $model->withoutTaxAmounts = $map['WithoutTaxAmounts'];
            }
        }
        if (isset($map['TaxAmounts'])) {
            if (!empty($map['TaxAmounts'])) {
                $model->taxAmounts = [];
                $model->taxAmounts = $map['TaxAmounts'];
            }
        }
        if (isset($map['SumAmounts'])) {
            if (!empty($map['SumAmounts'])) {
                $model->sumAmounts = [];
                $model->sumAmounts = $map['SumAmounts'];
            }
        }
        if (isset($map['InvoiceAmounts'])) {
            if (!empty($map['InvoiceAmounts'])) {
                $model->invoiceAmounts = [];
                $model->invoiceAmounts = $map['InvoiceAmounts'];
            }
        }
        if (isset($map['PayeeNames'])) {
            if (!empty($map['PayeeNames'])) {
                $model->payeeNames = [];
                $model->payeeNames = $map['PayeeNames'];
            }
        }
        if (isset($map['PayeeRegisterNoes'])) {
            if (!empty($map['PayeeRegisterNoes'])) {
                $model->payeeRegisterNoes = [];
                $model->payeeRegisterNoes = $map['PayeeRegisterNoes'];
            }
        }
        if (isset($map['PayeeAddresses'])) {
            if (!empty($map['PayeeAddresses'])) {
                $model->payeeAddresses = [];
                $model->payeeAddresses = $map['PayeeAddresses'];
            }
        }
        if (isset($map['PayeeBankNames'])) {
            if (!empty($map['PayeeBankNames'])) {
                $model->payeeBankNames = [];
                $model->payeeBankNames = $map['PayeeBankNames'];
            }
        }
        if (isset($map['Payees'])) {
            if (!empty($map['Payees'])) {
                $model->payees = [];
                $model->payees = $map['Payees'];
            }
        }
        if (isset($map['Checkers'])) {
            if (!empty($map['Checkers'])) {
                $model->checkers = [];
                $model->checkers = $map['Checkers'];
            }
        }
        if (isset($map['Clerks'])) {
            if (!empty($map['Clerks'])) {
                $model->clerks = [];
                $model->clerks = $map['Clerks'];
            }
        }

        return $model;
    }
}
