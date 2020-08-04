// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSecurityGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("SecurityGroups")]
        [Validation(Required=true)]
        public DescribeSecurityGroupsResponseSecurityGroups SecurityGroups { get; set; }
        public class DescribeSecurityGroupsResponseSecurityGroups : TeaModel {
            [NameInMap("SecurityGroup")]
            [Validation(Required=true)]
            public List<DescribeSecurityGroupsResponseSecurityGroupsSecurityGroup> SecurityGroup { get; set; }
            public class DescribeSecurityGroupsResponseSecurityGroupsSecurityGroup : TeaModel {
                    public string SecurityGroupId { get; set; }
                    public string Description { get; set; }
                    public string SecurityGroupName { get; set; }
                    public string VpcId { get; set; }
                    public string CreationTime { get; set; }
                    public string SecurityGroupType { get; set; }
                    public int? AvailableInstanceAmount { get; set; }
                    public int? EcsCount { get; set; }
                    public string ResourceGroupId { get; set; }
                    public long ServiceID { get; set; }
                    public bool? ServiceManaged { get; set; }
                    public DescribeSecurityGroupsResponseSecurityGroupsSecurityGroupTags Tags { get; set; }
                    public class DescribeSecurityGroupsResponseSecurityGroupsSecurityGroupTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeSecurityGroupsResponseSecurityGroupsSecurityGroupTagsTag> Tag { get; set; }
                        public class DescribeSecurityGroupsResponseSecurityGroupsSecurityGroupTagsTag : TeaModel {
                            [NameInMap("TagKey")]
                            [Validation(Required=true)]
                            public string TagKey { get; set; }

                            [NameInMap("TagValue")]
                            [Validation(Required=true)]
                            public string TagValue { get; set; }

                        }

                    }
            }
        };

    }

}
