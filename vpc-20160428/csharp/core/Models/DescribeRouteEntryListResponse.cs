// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeRouteEntryListResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("RouteEntrys")]
        [Validation(Required=true)]
        public DescribeRouteEntryListResponseRouteEntrys RouteEntrys { get; set; }
        public class DescribeRouteEntryListResponseRouteEntrys : TeaModel {
            [NameInMap("RouteEntry")]
            [Validation(Required=true)]
            public List<DescribeRouteEntryListResponseRouteEntrysRouteEntry> RouteEntry { get; set; }
            public class DescribeRouteEntryListResponseRouteEntrysRouteEntry : TeaModel {
                    public string RouteTableId { get; set; }
                    public string DestinationCidrBlock { get; set; }
                    public string Type { get; set; }
                    public string RouteEntryId { get; set; }
                    public string RouteEntryName { get; set; }
                    public string Description { get; set; }
                    public string Status { get; set; }
                    public string IpVersion { get; set; }
                    public DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHops NextHops { get; set; }
                    public class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHops : TeaModel {
                        [NameInMap("NextHop")]
                        [Validation(Required=true)]
                        public List<DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHop> NextHop { get; set; }
                        public class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHop : TeaModel {
                            [NameInMap("NextHopType")]
                            [Validation(Required=true)]
                            public string NextHopType { get; set; }

                            [NameInMap("NextHopId")]
                            [Validation(Required=true)]
                            public string NextHopId { get; set; }

                            [NameInMap("Enabled")]
                            [Validation(Required=true)]
                            public int? Enabled { get; set; }

                            [NameInMap("Weight")]
                            [Validation(Required=true)]
                            public int? Weight { get; set; }

                            [NameInMap("NextHopRegionId")]
                            [Validation(Required=true)]
                            public string NextHopRegionId { get; set; }

                            [NameInMap("NextHopRelatedInfo")]
                            [Validation(Required=true)]
                            public DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHopNextHopRelatedInfo NextHopRelatedInfo { get; set; }
                            public class DescribeRouteEntryListResponseRouteEntrysRouteEntryNextHopsNextHopNextHopRelatedInfo : TeaModel {
                                [NameInMap("InstanceType")]
                                [Validation(Required=true)]
                                public string InstanceType { get; set; }
                                [NameInMap("RegionId")]
                                [Validation(Required=true)]
                                public string RegionId { get; set; }
                                [NameInMap("InstanceId")]
                                [Validation(Required=true)]
                                public string InstanceId { get; set; }
                            };

                        }

                    }
            }
        };

    }

}
