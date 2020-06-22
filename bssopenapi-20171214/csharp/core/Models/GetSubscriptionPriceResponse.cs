// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetSubscriptionPriceResponse : TeaModel {
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
        public GetSubscriptionPriceResponseData Data { get; set; }
        public class GetSubscriptionPriceResponseData : TeaModel {
            [NameInMap("OriginalPrice")]
            [Validation(Required=true)]
            public float? OriginalPrice { get; set; }
            [NameInMap("DiscountPrice")]
            [Validation(Required=true)]
            public float? DiscountPrice { get; set; }
            [NameInMap("TradePrice")]
            [Validation(Required=true)]
            public float? TradePrice { get; set; }
            [NameInMap("Currency")]
            [Validation(Required=true)]
            public string Currency { get; set; }
            [NameInMap("Quantity")]
            [Validation(Required=true)]
            public int? Quantity { get; set; }
            [NameInMap("ModuleDetails")]
            [Validation(Required=true)]
            public GetSubscriptionPriceResponseDataModuleDetails ModuleDetails { get; set; }
            public class GetSubscriptionPriceResponseDataModuleDetails : TeaModel {
                [NameInMap("ModuleDetail")]
                [Validation(Required=true)]
                public List<GetSubscriptionPriceResponseDataModuleDetailsModuleDetail> ModuleDetail { get; set; }
                public class GetSubscriptionPriceResponseDataModuleDetailsModuleDetail : TeaModel {
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
            public GetSubscriptionPriceResponseDataPromotionDetails PromotionDetails { get; set; }
            public class GetSubscriptionPriceResponseDataPromotionDetails : TeaModel {
                [NameInMap("PromotionDetail")]
                [Validation(Required=true)]
                public List<GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail> PromotionDetail { get; set; }
                public class GetSubscriptionPriceResponseDataPromotionDetailsPromotionDetail : TeaModel {
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
