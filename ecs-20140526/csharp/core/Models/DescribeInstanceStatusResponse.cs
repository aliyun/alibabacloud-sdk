// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceStatusResponse : TeaModel {
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

        [NameInMap("InstanceStatuses")]
        [Validation(Required=true)]
        public DescribeInstanceStatusResponseInstanceStatuses InstanceStatuses { get; set; }
        public class DescribeInstanceStatusResponseInstanceStatuses : TeaModel {
            [NameInMap("InstanceStatus")]
            [Validation(Required=true)]
            public List<DescribeInstanceStatusResponseInstanceStatusesInstanceStatus> InstanceStatus { get; set; }
            public class DescribeInstanceStatusResponseInstanceStatusesInstanceStatus : TeaModel {
                    public string InstanceId { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
