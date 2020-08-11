// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeVSwitchAttributesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("CidrBlock")]
        [Validation(Required=true)]
        public string CidrBlock { get; set; }

        [NameInMap("Ipv6CidrBlock")]
        [Validation(Required=true)]
        public string Ipv6CidrBlock { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("AvailableIpAddressCount")]
        [Validation(Required=true)]
        public long AvailableIpAddressCount { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("VSwitchName")]
        [Validation(Required=true)]
        public string VSwitchName { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

        [NameInMap("IsDefault")]
        [Validation(Required=true)]
        public bool? IsDefault { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("NetworkAclId")]
        [Validation(Required=true)]
        public string NetworkAclId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=true)]
        public long OwnerId { get; set; }

        [NameInMap("ShareType")]
        [Validation(Required=true)]
        public string ShareType { get; set; }

        [NameInMap("RouteTable")]
        [Validation(Required=true)]
        public DescribeVSwitchAttributesResponseRouteTable RouteTable { get; set; }
        public class DescribeVSwitchAttributesResponseRouteTable : TeaModel {
            [NameInMap("RouteTableId")]
            [Validation(Required=true)]
            public string RouteTableId { get; set; }
            [NameInMap("RouteTableType")]
            [Validation(Required=true)]
            public string RouteTableType { get; set; }
        };

    }

}
