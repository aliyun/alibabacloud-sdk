// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnRouteEntriesResponse : TeaModel {
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

        [NameInMap("VpnRouteEntries")]
        [Validation(Required=true)]
        public DescribeVpnRouteEntriesResponseVpnRouteEntries VpnRouteEntries { get; set; }
        public class DescribeVpnRouteEntriesResponseVpnRouteEntries : TeaModel {
            [NameInMap("VpnRouteEntry")]
            [Validation(Required=true)]
            public List<DescribeVpnRouteEntriesResponseVpnRouteEntriesVpnRouteEntry> VpnRouteEntry { get; set; }
            public class DescribeVpnRouteEntriesResponseVpnRouteEntriesVpnRouteEntry : TeaModel {
                    public string VpnInstanceId { get; set; }
                    public string RouteDest { get; set; }
                    public string NextHop { get; set; }
                    public int? Weight { get; set; }
                    public long CreateTime { get; set; }
                    public string State { get; set; }
                    public string AsPath { get; set; }
                    public string Community { get; set; }
                    public string Source { get; set; }
                    public string RouteEntryType { get; set; }
            }
        };

    }

}
