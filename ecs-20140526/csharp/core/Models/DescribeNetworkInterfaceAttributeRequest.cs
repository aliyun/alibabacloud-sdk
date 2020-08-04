// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNetworkInterfaceAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<DescribeNetworkInterfaceAttributeRequestTag> Tag { get; set; }
        public class DescribeNetworkInterfaceAttributeRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("NetworkInterfaceId")]
        [Validation(Required=true)]
        public string NetworkInterfaceId { get; set; }

        [NameInMap("Attribute")]
        [Validation(Required=false)]
        public string Attribute { get; set; }

    }

}
