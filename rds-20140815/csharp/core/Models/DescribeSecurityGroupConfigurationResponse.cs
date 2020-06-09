// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSecurityGroupConfigurationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceName")]
        [Validation(Required=true)]
        public string DBInstanceName { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeSecurityGroupConfigurationResponseItems Items { get; set; }
        public class DescribeSecurityGroupConfigurationResponseItems : TeaModel {
            [NameInMap("EcsSecurityGroupRelation")]
            [Validation(Required=true)]
            public List<DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation> EcsSecurityGroupRelation { get; set; }
            public class DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation : TeaModel {
                    public string RegionId { get; set; }
                    public string SecurityGroupId { get; set; }
                    public string NetworkType { get; set; }
            }
        };

    }

}
