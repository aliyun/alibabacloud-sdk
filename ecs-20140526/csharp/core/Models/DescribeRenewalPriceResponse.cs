// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeRenewalPriceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PriceInfo")]
        [Validation(Required=true)]
        public DescribeRenewalPriceResponsePriceInfo PriceInfo { get; set; }
        public class DescribeRenewalPriceResponsePriceInfo : TeaModel {
            [NameInMap("Rules")]
            [Validation(Required=true)]
            public DescribeRenewalPriceResponsePriceInfoRules Rules { get; set; }
            public class DescribeRenewalPriceResponsePriceInfoRules : TeaModel {
                [NameInMap("Rule")]
                [Validation(Required=true)]
                public List<DescribeRenewalPriceResponsePriceInfoRulesRule> Rule { get; set; }
                public class DescribeRenewalPriceResponsePriceInfoRulesRule : TeaModel {
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
            public DescribeRenewalPriceResponsePriceInfoPrice Price { get; set; }
            public class DescribeRenewalPriceResponsePriceInfoPrice : TeaModel {
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
                public DescribeRenewalPriceResponsePriceInfoPriceDetailInfos DetailInfos { get; set; }
                public class DescribeRenewalPriceResponsePriceInfoPriceDetailInfos : TeaModel {
                    [NameInMap("ResourcePriceModel")]
                    [Validation(Required=true)]
                    public List<DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModel> ResourcePriceModel { get; set; }
                    public class DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModel : TeaModel {
                            public string Resource { get; set; }
                            public float? OriginalPrice { get; set; }
                            public float? DiscountPrice { get; set; }
                            public float? TradePrice { get; set; }
                            public DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRules SubRules { get; set; }
                            public class DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRules : TeaModel {
                                [NameInMap("Rule")]
                                [Validation(Required=true)]
                                public List<DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRulesRule> Rule { get; set; }
                                public class DescribeRenewalPriceResponsePriceInfoPriceDetailInfosResourcePriceModelSubRulesRule : TeaModel {
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
