// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeSecurityGroupReferencesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecurityGroupReferences")]
        [Validation(Required=true)]
        public DescribeSecurityGroupReferencesResponseSecurityGroupReferences SecurityGroupReferences { get; set; }
        public class DescribeSecurityGroupReferencesResponseSecurityGroupReferences : TeaModel {
            [NameInMap("SecurityGroupReference")]
            [Validation(Required=true)]
            public List<DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReference> SecurityGroupReference { get; set; }
            public class DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReference : TeaModel {
                    public string SecurityGroupId { get; set; }
                    public DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReferenceReferencingSecurityGroups ReferencingSecurityGroups { get; set; }
                    public class DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReferenceReferencingSecurityGroups : TeaModel {
                        [NameInMap("ReferencingSecurityGroup")]
                        [Validation(Required=true)]
                        public List<DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReferenceReferencingSecurityGroupsReferencingSecurityGroup> ReferencingSecurityGroup { get; set; }
                        public class DescribeSecurityGroupReferencesResponseSecurityGroupReferencesSecurityGroupReferenceReferencingSecurityGroupsReferencingSecurityGroup : TeaModel {
                            [NameInMap("AliUid")]
                            [Validation(Required=true)]
                            public string AliUid { get; set; }

                            [NameInMap("SecurityGroupId")]
                            [Validation(Required=true)]
                            public string SecurityGroupId { get; set; }

                        }

                    }
            }
        };

    }

}
