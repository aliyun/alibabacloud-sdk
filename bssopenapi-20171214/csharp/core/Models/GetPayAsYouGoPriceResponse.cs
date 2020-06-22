// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetPayAsYouGoPriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetPayAsYouGoPriceResponseData Data { get; set; }
        public class GetPayAsYouGoPriceResponseData : TeaModel {
            [NameInMap("Currency")]
            [Validation(Required=true)]
            public string Currency { get; set; }
            [NameInMap("ModuleDetails")]
            [Validation(Required=true)]
            public GetPayAsYouGoPriceResponseDataModuleDetails ModuleDetails { get; set; }
            public class GetPayAsYouGoPriceResponseDataModuleDetails : TeaModel {
                [NameInMap("ModuleDetail")]
                [Validation(Required=true)]
                public List<GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail> ModuleDetail { get; set; }
                public class GetPayAsYouGoPriceResponseDataModuleDetailsModuleDetail : TeaModel {
                    [NameInMap("ModuleCode")]
                    [Validation(Required=true)]
                    public string ModuleCode { get; set; }

                    [NameInMap("OriginalCost")]
                    [Validation(Required=true)]
                    public float? OriginalCost { get; set; }

                    [NameInMap("InvoiceDiscount")]
                    [Validation(Required=true)]
                    public float? InvoiceDiscount { get; set; }

                    [NameInMap("CostAfterDiscount")]
                    [Validation(Required=true)]
                    public float? CostAfterDiscount { get; set; }

                    [NameInMap("UnitPrice")]
                    [Validation(Required=true)]
                    public float? UnitPrice { get; set; }

                }

            }
            [NameInMap("PromotionDetails")]
            [Validation(Required=true)]
            public GetPayAsYouGoPriceResponseDataPromotionDetails PromotionDetails { get; set; }
            public class GetPayAsYouGoPriceResponseDataPromotionDetails : TeaModel {
                [NameInMap("PromotionDetail")]
                [Validation(Required=true)]
                public List<GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail> PromotionDetail { get; set; }
                public class GetPayAsYouGoPriceResponseDataPromotionDetailsPromotionDetail : TeaModel {
                    [NameInMap("PromotionName")]
                    [Validation(Required=true)]
                    public string PromotionName { get; set; }

                    [NameInMap("PromotionDesc")]
                    [Validation(Required=true)]
                    public string PromotionDesc { get; set; }

                    [NameInMap("PromotionId")]
                    [Validation(Required=true)]
                    public long PromotionId { get; set; }

                }

            }
        };

    }

}
