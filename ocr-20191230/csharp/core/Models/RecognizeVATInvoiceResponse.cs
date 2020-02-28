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
            }
        };

    }

}
