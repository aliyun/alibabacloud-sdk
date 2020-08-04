// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeNetworkInterfacePermissionsResponse : TeaModel {
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

        [NameInMap("NetworkInterfacePermissions")]
        [Validation(Required=true)]
        public DescribeNetworkInterfacePermissionsResponseNetworkInterfacePermissions NetworkInterfacePermissions { get; set; }
        public class DescribeNetworkInterfacePermissionsResponseNetworkInterfacePermissions : TeaModel {
            [NameInMap("NetworkInterfacePermission")]
            [Validation(Required=true)]
            public List<DescribeNetworkInterfacePermissionsResponseNetworkInterfacePermissionsNetworkInterfacePermission> NetworkInterfacePermission { get; set; }
            public class DescribeNetworkInterfacePermissionsResponseNetworkInterfacePermissionsNetworkInterfacePermission : TeaModel {
                    public long AccountId { get; set; }
                    public string ServiceName { get; set; }
                    public string NetworkInterfaceId { get; set; }
                    public string NetworkInterfacePermissionId { get; set; }
                    public string Permission { get; set; }
                    public string PermissionState { get; set; }
            }
        };

    }

}
