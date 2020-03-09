// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeVATInvoiceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeVATInvoiceResponseData Data { get; set; }
        public class RecognizeVATInvoiceResponseData : TeaModel {
            [NameInMap("Content")]
            [Validation(Required=true)]
            public RecognizeVATInvoiceResponseDataContent Content { get; set; }
            public class RecognizeVATInvoiceResponseDataContent : TeaModel {
                [NameInMap("InvoiceCode")]
                [Validation(Required=true)]
                public string InvoiceCode { get; set; }

                [NameInMap("InvoiceNo")]
                [Validation(Required=true)]
                public string InvoiceNo { get; set; }

                [NameInMap("InvoiceDate")]
                [Validation(Required=true)]
                public string InvoiceDate { get; set; }

                [NameInMap("AntiFakeCode")]
                [Validation(Required=true)]
                public string AntiFakeCode { get; set; }

                [NameInMap("PayerName")]
                [Validation(Required=true)]
                public string PayerName { get; set; }

                [NameInMap("PayerRegisterNo")]
                [Validation(Required=true)]
                public string PayerRegisterNo { get; set; }

                [NameInMap("PayerAddress")]
                [Validation(Required=true)]
                public string PayerAddress { get; set; }

                [NameInMap("PayerBankName")]
                [Validation(Required=true)]
                public string PayerBankName { get; set; }

                [NameInMap("WithoutTaxAmount")]
                [Validation(Required=true)]
                public string WithoutTaxAmount { get; set; }

                [NameInMap("TaxAmount")]
                [Validation(Required=true)]
                public string TaxAmount { get; set; }

                [NameInMap("SumAmount")]
                [Validation(Required=true)]
                public string SumAmount { get; set; }

                [NameInMap("InvoiceAmount")]
                [Validation(Required=true)]
                public string InvoiceAmount { get; set; }

                [NameInMap("PayeeName")]
                [Validation(Required=true)]
                public string PayeeName { get; set; }

                [NameInMap("PayeeRegisterNo")]
                [Validation(Required=true)]
                public string PayeeRegisterNo { get; set; }

                [NameInMap("PayeeAddress")]
                [Validation(Required=true)]
                public string PayeeAddress { get; set; }

                [NameInMap("PayeeBankName")]
                [Validation(Required=true)]
                public string PayeeBankName { get; set; }

                [NameInMap("Payee")]
                [Validation(Required=true)]
                public string Payee { get; set; }

                [NameInMap("Checker")]
                [Validation(Required=true)]
                public string Checker { get; set; }

                [NameInMap("Clerk")]
                [Validation(Required=true)]
                public string Clerk { get; set; }

            }
            [NameInMap("Box")]
            [Validation(Required=true)]
            public RecognizeVATInvoiceResponseDataBox Box { get; set; }
            public class RecognizeVATInvoiceResponseDataBox : TeaModel {
                [NameInMap("InvoiceCodes")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxInvoiceCodes> InvoiceCodes { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxInvoiceCodes : TeaModel {
                    [NameInMap("InvoiceCode")]
                    [Validation(Required=true)]
                    public float? InvoiceCode { get; set; }

                }

                [NameInMap("InvoiceNoes")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxInvoiceNoes> InvoiceNoes { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxInvoiceNoes : TeaModel {
                    [NameInMap("InvoiceNo")]
                    [Validation(Required=true)]
                    public float? InvoiceNo { get; set; }

                }

                [NameInMap("InvoiceDates")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxInvoiceDates> InvoiceDates { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxInvoiceDates : TeaModel {
                    [NameInMap("InvoiceDate")]
                    [Validation(Required=true)]
                    public float? InvoiceDate { get; set; }

                }

                [NameInMap("InvoiceFakeCodes")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes> InvoiceFakeCodes { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxInvoiceFakeCodes : TeaModel {
                    [NameInMap("InvoiceFakeCode")]
                    [Validation(Required=true)]
                    public float? InvoiceFakeCode { get; set; }

                }

                [NameInMap("PayerNames")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayerNames> PayerNames { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayerNames : TeaModel {
                    [NameInMap("PayerName")]
                    [Validation(Required=true)]
                    public float? PayerName { get; set; }

                }

                [NameInMap("PayerRegisterNoes")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes> PayerRegisterNoes { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayerRegisterNoes : TeaModel {
                    [NameInMap("PayerRegisterNo")]
                    [Validation(Required=true)]
                    public float? PayerRegisterNo { get; set; }

                }

                [NameInMap("PayerAddresses")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayerAddresses> PayerAddresses { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayerAddresses : TeaModel {
                    [NameInMap("PayerAddress")]
                    [Validation(Required=true)]
                    public float? PayerAddress { get; set; }

                }

                [NameInMap("PayerBankNames")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayerBankNames> PayerBankNames { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayerBankNames : TeaModel {
                    [NameInMap("PayerBankNames")]
                    [Validation(Required=true)]
                    public float? PayerBankNames { get; set; }

                }

                [NameInMap("WithoutTaxAmounts")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts> WithoutTaxAmounts { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxWithoutTaxAmounts : TeaModel {
                    [NameInMap("WithoutTaxAmount")]
                    [Validation(Required=true)]
                    public float? WithoutTaxAmount { get; set; }

                }

                [NameInMap("TaxAmounts")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxTaxAmounts> TaxAmounts { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxTaxAmounts : TeaModel {
                    [NameInMap("TaxAmount")]
                    [Validation(Required=true)]
                    public float? TaxAmount { get; set; }

                }

                [NameInMap("SumAmounts")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxSumAmounts> SumAmounts { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxSumAmounts : TeaModel {
                    [NameInMap("SumAmount")]
                    [Validation(Required=true)]
                    public float? SumAmount { get; set; }

                }

                [NameInMap("InvoiceAmounts")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxInvoiceAmounts> InvoiceAmounts { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxInvoiceAmounts : TeaModel {
                    [NameInMap("InvoiceAmount")]
                    [Validation(Required=true)]
                    public float? InvoiceAmount { get; set; }

                }

                [NameInMap("PayeeNames")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayeeNames> PayeeNames { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayeeNames : TeaModel {
                    [NameInMap("PayeeName")]
                    [Validation(Required=true)]
                    public float? PayeeName { get; set; }

                }

                [NameInMap("PayeeRegisterNoes")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes> PayeeRegisterNoes { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayeeRegisterNoes : TeaModel {
                    [NameInMap("PayeeRegisterNo")]
                    [Validation(Required=true)]
                    public float? PayeeRegisterNo { get; set; }

                }

                [NameInMap("PayeeAddresses")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayeeAddresses> PayeeAddresses { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayeeAddresses : TeaModel {
                    [NameInMap("PayeeAddress")]
                    [Validation(Required=true)]
                    public float? PayeeAddress { get; set; }

                }

                [NameInMap("PayeeBankNames")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayeeBankNames> PayeeBankNames { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayeeBankNames : TeaModel {
                    [NameInMap("PayeeBankName")]
                    [Validation(Required=true)]
                    public float? PayeeBankName { get; set; }

                }

                [NameInMap("Payees")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxPayees> Payees { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxPayees : TeaModel {
                    [NameInMap("Payee")]
                    [Validation(Required=true)]
                    public float? Payee { get; set; }

                }

                [NameInMap("Checkers")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxCheckers> Checkers { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxCheckers : TeaModel {
                    [NameInMap("Checker")]
                    [Validation(Required=true)]
                    public float? Checker { get; set; }

                }

                [NameInMap("Clerks")]
                [Validation(Required=true)]
                public List<RecognizeVATInvoiceResponseDataBoxClerks> Clerks { get; set; }
                public class RecognizeVATInvoiceResponseDataBoxClerks : TeaModel {
                    [NameInMap("Clerk")]
                    [Validation(Required=true)]
                    public float? Clerk { get; set; }

                }

            }
        };

    }

}
