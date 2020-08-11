// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeBgpGroupsResponse : TeaModel {
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

        [NameInMap("BgpGroups")]
        [Validation(Required=true)]
        public DescribeBgpGroupsResponseBgpGroups BgpGroups { get; set; }
        public class DescribeBgpGroupsResponseBgpGroups : TeaModel {
            [NameInMap("BgpGroup")]
            [Validation(Required=true)]
            public List<DescribeBgpGroupsResponseBgpGroupsBgpGroup> BgpGroup { get; set; }
            public class DescribeBgpGroupsResponseBgpGroupsBgpGroup : TeaModel {
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string BgpGroupId { get; set; }
                    public string PeerAsn { get; set; }
                    public string AuthKey { get; set; }
                    public string RouterId { get; set; }
                    public string Status { get; set; }
                    public string Keepalive { get; set; }
                    public string LocalAsn { get; set; }
                    public string Hold { get; set; }
                    public string IsFake { get; set; }
                    public string RouteLimit { get; set; }
                    public string RegionId { get; set; }
                    public string IpVersion { get; set; }
            }
        };

    }

}
