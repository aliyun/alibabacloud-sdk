// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterAccessWhitelistResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Items")]
        [Validation(Required=true)]
        public DescribeDBClusterAccessWhitelistResponseItems Items { get; set; }
        public class DescribeDBClusterAccessWhitelistResponseItems : TeaModel {
            [NameInMap("DBClusterIPArray")]
            [Validation(Required=true)]
            public List<DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray> DBClusterIPArray { get; set; }
            public class DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray : TeaModel {
                    public string DBClusterIPArrayName { get; set; }
                    public string DBClusterIPArrayAttribute { get; set; }
                    public string SecurityIps { get; set; }
            }
        };

        [NameInMap("DBClusterSecurityGroups")]
        [Validation(Required=true)]
        public DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups DBClusterSecurityGroups { get; set; }
        public class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups : TeaModel {
            [NameInMap("DBClusterSecurityGroup")]
            [Validation(Required=true)]
            public List<DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup> DBClusterSecurityGroup { get; set; }
            public class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup : TeaModel {
                    public string SecurityGroupId { get; set; }
                    public string SecurityGroupName { get; set; }
            }
        };

    }

}
