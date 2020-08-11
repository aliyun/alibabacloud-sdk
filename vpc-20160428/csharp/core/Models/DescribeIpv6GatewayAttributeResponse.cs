// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeIpv6GatewayAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Ipv6GatewayId")]
        [Validation(Required=true)]
        public string Ipv6GatewayId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("BusinessStatus")]
        [Validation(Required=true)]
        public string BusinessStatus { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("Spec")]
        [Validation(Required=true)]
        public string Spec { get; set; }

        [NameInMap("InstanceChargeType")]
        [Validation(Required=true)]
        public string InstanceChargeType { get; set; }

        [NameInMap("ExpiredTime")]
        [Validation(Required=true)]
        public string ExpiredTime { get; set; }

        [NameInMap("CreationTime")]
        [Validation(Required=true)]
        public string CreationTime { get; set; }

    }

}
