// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeTaxiInvoiceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeTaxiInvoiceResponseData Data { get; set; }
        public class RecognizeTaxiInvoiceResponseData : TeaModel {
            [NameInMap("Invoices")]
            [Validation(Required=true)]
            public List<RecognizeTaxiInvoiceResponseDataInvoices> Invoices { get; set; }
            public class RecognizeTaxiInvoiceResponseDataInvoices : TeaModel {
                    public int? RotateType { get; set; }
                    public List<RecognizeTaxiInvoiceResponseDataInvoicesItems> Items { get; set; }
                    public class RecognizeTaxiInvoiceResponseDataInvoicesItems : TeaModel {
                            public string Text { get; set; }
                            public RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi ItemRoi { get; set; }
                            public class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoi : TeaModel {
                                [NameInMap("Angle")]
                                [Validation(Required=true)]
                                public float Angle { get; set; }

                                [NameInMap("Center")]
                                [Validation(Required=true)]
                                public RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter Center { get; set; }
                                public class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiCenter : TeaModel {
                                    [NameInMap("X")]
                                    [Validation(Required=true)]
                                    public float X { get; set; }
                                    [NameInMap("Y")]
                                    [Validation(Required=true)]
                                    public float Y { get; set; }
                                };

                                [NameInMap("Size")]
                                [Validation(Required=true)]
                                public RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize Size { get; set; }
                                public class RecognizeTaxiInvoiceResponseDataInvoicesItemsItemRoiSize : TeaModel {
                                    [NameInMap("H")]
                                    [Validation(Required=true)]
                                    public float H { get; set; }
                                    [NameInMap("W")]
                                    [Validation(Required=true)]
                                    public float W { get; set; }
                                };

                            }
                    }
                    public RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi InvoiceRoi { get; set; }
                    public class RecognizeTaxiInvoiceResponseDataInvoicesInvoiceRoi : TeaModel {
                        [NameInMap("H")]
                        [Validation(Required=true)]
                        public float H { get; set; }

                        [NameInMap("W")]
                        [Validation(Required=true)]
                        public float W { get; set; }

                        [NameInMap("X")]
                        [Validation(Required=true)]
                        public float X { get; set; }

                        [NameInMap("Y")]
                        [Validation(Required=true)]
                        public float Y { get; set; }

                    }
            }
        };

    }

}
