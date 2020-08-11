// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVpnPbrRouteEntriesResponse : TeaModel {
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

        [NameInMap("VpnPbrRouteEntries")]
        [Validation(Required=true)]
        public DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntries VpnPbrRouteEntries { get; set; }
        public class DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntries : TeaModel {
            [NameInMap("VpnPbrRouteEntry")]
            [Validation(Required=true)]
            public List<DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntriesVpnPbrRouteEntry> VpnPbrRouteEntry { get; set; }
            public class DescribeVpnPbrRouteEntriesResponseVpnPbrRouteEntriesVpnPbrRouteEntry : TeaModel {
                    public string VpnInstanceId { get; set; }
                    public string RouteSource { get; set; }
                    public string RouteDest { get; set; }
                    public string NextHop { get; set; }
                    public int? Weight { get; set; }
                    public long CreateTime { get; set; }
                    public string State { get; set; }
            }
        };

    }

}
