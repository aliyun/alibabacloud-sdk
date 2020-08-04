// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateNetworkInterfaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NetworkInterfaceId")]
        [Validation(Required=true)]
        public string NetworkInterfaceId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=true)]
        public string VSwitchId { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("PrivateIpAddress")]
        [Validation(Required=true)]
        public string PrivateIpAddress { get; set; }

        [NameInMap("MacAddress")]
        [Validation(Required=true)]
        public string MacAddress { get; set; }

        [NameInMap("NetworkInterfaceName")]
        [Validation(Required=true)]
        public string NetworkInterfaceName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=true)]
        public string Description { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("ServiceID")]
        [Validation(Required=true)]
        public long ServiceID { get; set; }

        [NameInMap("ServiceManaged")]
        [Validation(Required=true)]
        public bool? ServiceManaged { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=true)]
        public string OwnerId { get; set; }

        [NameInMap("PrivateIpSets")]
        [Validation(Required=true)]
        public CreateNetworkInterfaceResponsePrivateIpSets PrivateIpSets { get; set; }
        public class CreateNetworkInterfaceResponsePrivateIpSets : TeaModel {
            [NameInMap("PrivateIpSet")]
            [Validation(Required=true)]
            public List<CreateNetworkInterfaceResponsePrivateIpSetsPrivateIpSet> PrivateIpSet { get; set; }
            public class CreateNetworkInterfaceResponsePrivateIpSetsPrivateIpSet : TeaModel {
                    public string PrivateIpAddress { get; set; }
                    public bool? Primary { get; set; }
            }
        };

        [NameInMap("Tags")]
        [Validation(Required=true)]
        public CreateNetworkInterfaceResponseTags Tags { get; set; }
        public class CreateNetworkInterfaceResponseTags : TeaModel {
            [NameInMap("Tag")]
            [Validation(Required=true)]
            public List<CreateNetworkInterfaceResponseTagsTag> Tag { get; set; }
            public class CreateNetworkInterfaceResponseTagsTag : TeaModel {
                    public string TagKey { get; set; }
                    public string TagValue { get; set; }
            }
        };

        [NameInMap("SecurityGroupIds")]
        [Validation(Required=true)]
        public CreateNetworkInterfaceResponseSecurityGroupIds SecurityGroupIds { get; set; }
        public class CreateNetworkInterfaceResponseSecurityGroupIds : TeaModel {
            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public List<string> SecurityGroupId { get; set; }
        };

    }

}
