// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeAccessGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("AccessGroups")]
        [Validation(Required=true)]
        public DescribeAccessGroupsResponseAccessGroups AccessGroups { get; set; }
        public class DescribeAccessGroupsResponseAccessGroups : TeaModel {
            [NameInMap("AccessGroup")]
            [Validation(Required=true)]
            public List<DescribeAccessGroupsResponseAccessGroupsAccessGroup> AccessGroup { get; set; }
            public class DescribeAccessGroupsResponseAccessGroupsAccessGroup : TeaModel {
                    public string AccessGroupName { get; set; }
                    public string AccessGroupType { get; set; }
                    public int? RuleCount { get; set; }
                    public int? MountTargetCount { get; set; }
                    public string Description { get; set; }
                    public string CreateTime { get; set; }
            }
        };

    }

}
