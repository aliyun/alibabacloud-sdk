// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeContainerGroupPriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PriceInfo")]
        [Validation(Required=true)]
        public DescribeContainerGroupPriceResponsePriceInfo PriceInfo { get; set; }
        public class DescribeContainerGroupPriceResponsePriceInfo : TeaModel {
            [NameInMap("Rules")]
            [Validation(Required=true)]
            public DescribeContainerGroupPriceResponsePriceInfoRules Rules { get; set; }
            public class DescribeContainerGroupPriceResponsePriceInfoRules : TeaModel {
                [NameInMap("Rule")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupPriceResponsePriceInfoRulesRule> Rule { get; set; }
                public class DescribeContainerGroupPriceResponsePriceInfoRulesRule : TeaModel {
                    [NameInMap("RuleId")]
                    [Validation(Required=true)]
                    public long RuleId { get; set; }

                    [NameInMap("Description")]
                    [Validation(Required=true)]
                    public string Description { get; set; }

                }

            }
            [NameInMap("Price")]
            [Validation(Required=true)]
            public DescribeContainerGroupPriceResponsePriceInfoPrice Price { get; set; }
            public class DescribeContainerGroupPriceResponsePriceInfoPrice : TeaModel {
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

                [NameInMap("DetailInfos")]
                [Validation(Required=true)]
                public DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos DetailInfos { get; set; }
                public class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos : TeaModel {
                    [NameInMap("DetailInfo")]
                    [Validation(Required=true)]
                    public List<DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo> DetailInfo { get; set; }
                    public class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo : TeaModel {
                            public string Resource { get; set; }
                            public float? OriginalPrice { get; set; }
                            public float? DiscountPrice { get; set; }
                            public float? TradePrice { get; set; }
                            public DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules Rules { get; set; }
                            public class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules : TeaModel {
                                [NameInMap("Rule")]
                                [Validation(Required=true)]
                                public List<DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule> Rule { get; set; }
                                public class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule : TeaModel {
                                    [NameInMap("RuleId")]
                                    [Validation(Required=true)]
                                    public long RuleId { get; set; }

                                    [NameInMap("Description")]
                                    [Validation(Required=true)]
                                    public string Description { get; set; }

                                }

                            }
                    }
                };

            }
        };

    }

}
