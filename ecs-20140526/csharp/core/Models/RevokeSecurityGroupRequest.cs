// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class RevokeSecurityGroupRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("DestCidrIp")]
        [Validation(Required=false)]
        public string DestCidrIp { get; set; }

        [NameInMap("Ipv6DestCidrIp")]
        [Validation(Required=false)]
        public string Ipv6DestCidrIp { get; set; }

        [NameInMap("PortRange")]
        [Validation(Required=true)]
        public string PortRange { get; set; }

        [NameInMap("IpProtocol")]
        [Validation(Required=true)]
        public string IpProtocol { get; set; }

        [NameInMap("SourceGroupId")]
        [Validation(Required=false)]
        public string SourceGroupId { get; set; }

        [NameInMap("SourceGroupOwnerId")]
        [Validation(Required=false)]
        public long SourceGroupOwnerId { get; set; }

        [NameInMap("SourceGroupOwnerAccount")]
        [Validation(Required=false)]
        public string SourceGroupOwnerAccount { get; set; }

        [NameInMap("SourceCidrIp")]
        [Validation(Required=false)]
        public string SourceCidrIp { get; set; }

        [NameInMap("Ipv6SourceCidrIp")]
        [Validation(Required=false)]
        public string Ipv6SourceCidrIp { get; set; }

        [NameInMap("SourcePortRange")]
        [Validation(Required=false)]
        public string SourcePortRange { get; set; }

        [NameInMap("Policy")]
        [Validation(Required=false)]
        public string Policy { get; set; }

        [NameInMap("Priority")]
        [Validation(Required=false)]
        public string Priority { get; set; }

        [NameInMap("NicType")]
        [Validation(Required=false)]
        public string NicType { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

    }

}
