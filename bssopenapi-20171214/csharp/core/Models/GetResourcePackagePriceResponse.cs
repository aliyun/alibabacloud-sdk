// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class GetResourcePackagePriceResponse : TeaModel {
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
        public GetResourcePackagePriceResponseData Data { get; set; }
        public class GetResourcePackagePriceResponseData : TeaModel {
            [NameInMap("Currency")]
            [Validation(Required=true)]
            public string Currency { get; set; }
            [NameInMap("OriginalPrice")]
            [Validation(Required=true)]
            public float? OriginalPrice { get; set; }
            [NameInMap("TradePrice")]
            [Validation(Required=true)]
            public float? TradePrice { get; set; }
            [NameInMap("DiscountPrice")]
            [Validation(Required=true)]
            public float? DiscountPrice { get; set; }
            [NameInMap("Promotions")]
            [Validation(Required=true)]
            public GetResourcePackagePriceResponseDataPromotions Promotions { get; set; }
            public class GetResourcePackagePriceResponseDataPromotions : TeaModel {
                [NameInMap("Promotion")]
                [Validation(Required=true)]
                public List<GetResourcePackagePriceResponseDataPromotionsPromotion> Promotion { get; set; }
                public class GetResourcePackagePriceResponseDataPromotionsPromotion : TeaModel {
                    [NameInMap("Id")]
                    [Validation(Required=true)]
                    public long Id { get; set; }

                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                }

            }
        };

    }

}
