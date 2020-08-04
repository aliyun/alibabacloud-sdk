// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AssignPrivateIpAddressesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AssignedPrivateIpAddressesSet")]
        [Validation(Required=true)]
        public AssignPrivateIpAddressesResponseAssignedPrivateIpAddressesSet AssignedPrivateIpAddressesSet { get; set; }
        public class AssignPrivateIpAddressesResponseAssignedPrivateIpAddressesSet : TeaModel {
            [NameInMap("NetworkInterfaceId")]
            [Validation(Required=true)]
            public string NetworkInterfaceId { get; set; }
            [NameInMap("PrivateIpSet")]
            [Validation(Required=true)]
            public AssignPrivateIpAddressesResponseAssignedPrivateIpAddressesSetPrivateIpSet PrivateIpSet { get; set; }
            public class AssignPrivateIpAddressesResponseAssignedPrivateIpAddressesSetPrivateIpSet : TeaModel {
                [NameInMap("PrivateIpAddress")]
                [Validation(Required=true)]
                public List<string> PrivateIpAddress { get; set; }

            }
        };

    }

}
