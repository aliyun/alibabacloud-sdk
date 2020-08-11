// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeBgpPeersResponse : TeaModel {
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

        [NameInMap("BgpPeers")]
        [Validation(Required=true)]
        public DescribeBgpPeersResponseBgpPeers BgpPeers { get; set; }
        public class DescribeBgpPeersResponseBgpPeers : TeaModel {
            [NameInMap("BgpPeer")]
            [Validation(Required=true)]
            public List<DescribeBgpPeersResponseBgpPeersBgpPeer> BgpPeer { get; set; }
            public class DescribeBgpPeersResponseBgpPeersBgpPeer : TeaModel {
                    public string Name { get; set; }
                    public string Description { get; set; }
                    public string BgpPeerId { get; set; }
                    public string BgpGroupId { get; set; }
                    public string PeerIpAddress { get; set; }
                    public string PeerAsn { get; set; }
                    public string AuthKey { get; set; }
                    public string RouterId { get; set; }
                    public string BgpStatus { get; set; }
                    public string Status { get; set; }
                    public string Keepalive { get; set; }
                    public string LocalAsn { get; set; }
                    public string Hold { get; set; }
                    public string IsFake { get; set; }
                    public string RouteLimit { get; set; }
                    public string RegionId { get; set; }
                    public bool? EnableBfd { get; set; }
                    public string IpVersion { get; set; }
                    public int? BfdMultiHop { get; set; }
            }
        };

    }

}
