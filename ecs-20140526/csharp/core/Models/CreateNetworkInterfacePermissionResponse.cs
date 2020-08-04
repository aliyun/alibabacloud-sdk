// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateNetworkInterfacePermissionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NetworkInterfacePermission")]
        [Validation(Required=true)]
        public CreateNetworkInterfacePermissionResponseNetworkInterfacePermission NetworkInterfacePermission { get; set; }
        public class CreateNetworkInterfacePermissionResponseNetworkInterfacePermission : TeaModel {
            [NameInMap("AccountId")]
            [Validation(Required=true)]
            public long AccountId { get; set; }
            [NameInMap("ServiceName")]
            [Validation(Required=true)]
            public string ServiceName { get; set; }
            [NameInMap("NetworkInterfaceId")]
            [Validation(Required=true)]
            public string NetworkInterfaceId { get; set; }
            [NameInMap("NetworkInterfacePermissionId")]
            [Validation(Required=true)]
            public string NetworkInterfacePermissionId { get; set; }
            [NameInMap("Permission")]
            [Validation(Required=true)]
            public string Permission { get; set; }
            [NameInMap("PermissionState")]
            [Validation(Required=true)]
            public string PermissionState { get; set; }
        };

    }

}
