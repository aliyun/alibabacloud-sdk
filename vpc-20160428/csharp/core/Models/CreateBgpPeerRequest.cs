// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateBgpPeerRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("BgpGroupId")]
        [Validation(Required=true)]
        public string BgpGroupId { get; set; }

        [NameInMap("PeerIpAddress")]
        [Validation(Required=false)]
        public string PeerIpAddress { get; set; }

        [NameInMap("EnableBfd")]
        [Validation(Required=false)]
        public bool? EnableBfd { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("IpVersion")]
        [Validation(Required=false)]
        public string IpVersion { get; set; }

        [NameInMap("BfdMultiHop")]
        [Validation(Required=false)]
        public int? BfdMultiHop { get; set; }

    }

}
