// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeRecommendInstanceTypeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DescribeRecommendInstanceTypeResponseData Data { get; set; }
        public class DescribeRecommendInstanceTypeResponseData : TeaModel {
            [NameInMap("RecommendInstanceType")]
            [Validation(Required=true)]
            public List<DescribeRecommendInstanceTypeResponseDataRecommendInstanceType> RecommendInstanceType { get; set; }
            public class DescribeRecommendInstanceTypeResponseDataRecommendInstanceType : TeaModel {
                    public string RegionId { get; set; }
                    public string CommodityCode { get; set; }
                    public string Scene { get; set; }
                    public string InstanceChargeType { get; set; }
                    public string SpotStrategy { get; set; }
                    public int? Priority { get; set; }
                    public DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZones Zones { get; set; }
                    public class DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZones : TeaModel {
                        [NameInMap("zone")]
                        [Validation(Required=true)]
                        public List<DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZonesZone> Zone { get; set; }
                        public class DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZonesZone : TeaModel {
                            [NameInMap("ZoneNo")]
                            [Validation(Required=true)]
                            public string ZoneNo { get; set; }

                            [NameInMap("NetworkTypes")]
                            [Validation(Required=true)]
                            public DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZonesZoneNetworkTypes NetworkTypes { get; set; }
                            public class DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeZonesZoneNetworkTypes : TeaModel {
                                [NameInMap("NetworkType")]
                                [Validation(Required=true)]
                                public List<string> NetworkType { get; set; }
                            };

                        }

                    }
                    public DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeInstanceType InstanceType { get; set; }
                    public class DescribeRecommendInstanceTypeResponseDataRecommendInstanceTypeInstanceType : TeaModel {
                        [NameInMap("Generation")]
                        [Validation(Required=true)]
                        public string Generation { get; set; }

                        [NameInMap("InstanceTypeFamily")]
                        [Validation(Required=true)]
                        public string InstanceTypeFamily { get; set; }

                        [NameInMap("InstanceType")]
                        [Validation(Required=true)]
                        public string InstanceType { get; set; }

                        [NameInMap("SupportIoOptimized")]
                        [Validation(Required=true)]
                        public string SupportIoOptimized { get; set; }

                        [NameInMap("Cores")]
                        [Validation(Required=true)]
                        public int? Cores { get; set; }

                        [NameInMap("Memory")]
                        [Validation(Required=true)]
                        public int? Memory { get; set; }

                    }
            }
        };

    }

}
