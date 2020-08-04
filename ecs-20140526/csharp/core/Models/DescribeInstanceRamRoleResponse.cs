// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceRamRoleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("InstanceRamRoleSets")]
        [Validation(Required=true)]
        public DescribeInstanceRamRoleResponseInstanceRamRoleSets InstanceRamRoleSets { get; set; }
        public class DescribeInstanceRamRoleResponseInstanceRamRoleSets : TeaModel {
            [NameInMap("InstanceRamRoleSet")]
            [Validation(Required=true)]
            public List<DescribeInstanceRamRoleResponseInstanceRamRoleSetsInstanceRamRoleSet> InstanceRamRoleSet { get; set; }
            public class DescribeInstanceRamRoleResponseInstanceRamRoleSetsInstanceRamRoleSet : TeaModel {
                    public string InstanceId { get; set; }
                    public string RamRoleName { get; set; }
            }
        };

    }

}
