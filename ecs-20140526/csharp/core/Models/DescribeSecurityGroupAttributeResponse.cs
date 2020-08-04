// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSecurityGroupAttributeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("SecurityGroupId")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("SecurityGroupName")]
        [Validation(Required=true)]
        public string SecurityGroupName { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("InnerAccessPolicy")]
        [Validation(Required=true)]
        public string InnerAccessPolicy { get; set; }

        [NameInMap("Permissions")]
        [Validation(Required=true)]
        public DescribeSecurityGroupAttributeResponsePermissions Permissions { get; set; }
        public class DescribeSecurityGroupAttributeResponsePermissions : TeaModel {
            [NameInMap("Permission")]
            [Validation(Required=true)]
            public List<DescribeSecurityGroupAttributeResponsePermissionsPermission> Permission { get; set; }
            public class DescribeSecurityGroupAttributeResponsePermissionsPermission : TeaModel {
                    public string IpProtocol { get; set; }
                    public string PortRange { get; set; }
                    public string SourcePortRange { get; set; }
                    public string SourceGroupId { get; set; }
                    public string SourceGroupName { get; set; }
                    public string SourceCidrIp { get; set; }
                    public string Ipv6SourceCidrIp { get; set; }
                    public string Policy { get; set; }
                    public string NicType { get; set; }
                    public string SourceGroupOwnerAccount { get; set; }
                    public string DestGroupId { get; set; }
                    public string DestGroupName { get; set; }
                    public string DestCidrIp { get; set; }
                    public string Ipv6DestCidrIp { get; set; }
                    public string DestGroupOwnerAccount { get; set; }
                    public string Priority { get; set; }
                    public string Direction { get; set; }
                    public string Description { get; set; }
                    public string CreateTime { get; set; }
            }
        };

    }

}
