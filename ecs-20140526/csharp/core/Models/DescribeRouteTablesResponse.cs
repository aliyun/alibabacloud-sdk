// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeRouteTablesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RouteTables")]
        [Validation(Required=true)]
        public DescribeRouteTablesResponseRouteTables RouteTables { get; set; }
        public class DescribeRouteTablesResponseRouteTables : TeaModel {
            [NameInMap("RouteTable")]
            [Validation(Required=true)]
            public List<DescribeRouteTablesResponseRouteTablesRouteTable> RouteTable { get; set; }
            public class DescribeRouteTablesResponseRouteTablesRouteTable : TeaModel {
                    public string VRouterId { get; set; }
                    public string RouteTableId { get; set; }
                    public string RouteTableType { get; set; }
                    public string CreationTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrys RouteEntrys { get; set; }
                    public class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrys : TeaModel {
                        [NameInMap("RouteEntry")]
                        [Validation(Required=true)]
                        public List<DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntry> RouteEntry { get; set; }
                        public class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntry : TeaModel {
                            [NameInMap("RouteTableId")]
                            [Validation(Required=true)]
                            public string RouteTableId { get; set; }

                            [NameInMap("DestinationCidrBlock")]
                            [Validation(Required=true)]
                            public string DestinationCidrBlock { get; set; }

                            [NameInMap("Type")]
                            [Validation(Required=true)]
                            public string Type { get; set; }

                            [NameInMap("Status")]
                            [Validation(Required=true)]
                            public string Status { get; set; }

                            [NameInMap("InstanceId")]
                            [Validation(Required=true)]
                            public string InstanceId { get; set; }

                            [NameInMap("NextHopType")]
                            [Validation(Required=true)]
                            public string NextHopType { get; set; }

                            [NameInMap("NextHops")]
                            [Validation(Required=true)]
                            public DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHops NextHops { get; set; }
                            public class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHops : TeaModel {
                                [NameInMap("NextHop")]
                                [Validation(Required=true)]
                                public List<DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHopsNextHop> NextHop { get; set; }
                                public class DescribeRouteTablesResponseRouteTablesRouteTableRouteEntrysRouteEntryNextHopsNextHop : TeaModel {
                                        public string NextHopType { get; set; }
                                        public string NextHopId { get; set; }
                                        public int? Enabled { get; set; }
                                        public int? Weight { get; set; }
                                }
                            };

                        }

                    }
            }
        };

    }

}
