// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyVirtualBorderRouterAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("VbrId")]
        [Validation(Required=true)]
        public string VbrId { get; set; }

        [NameInMap("VlanId")]
        [Validation(Required=false)]
        public int? VlanId { get; set; }

        [NameInMap("CircuitCode")]
        [Validation(Required=false)]
        public string CircuitCode { get; set; }

        [NameInMap("LocalGatewayIp")]
        [Validation(Required=false)]
        public string LocalGatewayIp { get; set; }

        [NameInMap("PeerGatewayIp")]
        [Validation(Required=false)]
        public string PeerGatewayIp { get; set; }

        [NameInMap("PeeringSubnetMask")]
        [Validation(Required=false)]
        public string PeeringSubnetMask { get; set; }

        [NameInMap("MinTxInterval")]
        [Validation(Required=false)]
        public long MinTxInterval { get; set; }

        [NameInMap("MinRxInterval")]
        [Validation(Required=false)]
        public long MinRxInterval { get; set; }

        [NameInMap("DetectMultiplier")]
        [Validation(Required=false)]
        public long DetectMultiplier { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("AssociatedPhysicalConnections")]
        [Validation(Required=false)]
        public string AssociatedPhysicalConnections { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("LocalIpv6GatewayIp")]
        [Validation(Required=false)]
        public string LocalIpv6GatewayIp { get; set; }

        [NameInMap("PeerIpv6GatewayIp")]
        [Validation(Required=false)]
        public string PeerIpv6GatewayIp { get; set; }

        [NameInMap("PeeringIpv6SubnetMask")]
        [Validation(Required=false)]
        public string PeeringIpv6SubnetMask { get; set; }

        [NameInMap("EnableIpv6")]
        [Validation(Required=false)]
        public bool? EnableIpv6 { get; set; }

    }

}
