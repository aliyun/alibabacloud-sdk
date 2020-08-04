// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAutoProvisioningGroupsRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("AutoProvisioningGroupName")]
        [Validation(Required=false)]
        public string AutoProvisioningGroupName { get; set; }

        [NameInMap("AutoProvisioningGroupId")]
        [Validation(Required=false)]
        public List<string> AutoProvisioningGroupId { get; set; }

        [NameInMap("AutoProvisioningGroupStatus")]
        [Validation(Required=false)]
        public List<string> AutoProvisioningGroupStatus { get; set; }

    }

}
