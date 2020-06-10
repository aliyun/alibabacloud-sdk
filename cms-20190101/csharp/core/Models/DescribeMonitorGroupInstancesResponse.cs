// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public int? Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public DescribeMonitorGroupInstancesResponseResources Resources { get; set; }
        public class DescribeMonitorGroupInstancesResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeMonitorGroupInstancesResponseResourcesResource> Resource { get; set; }
            public class DescribeMonitorGroupInstancesResponseResourcesResource : TeaModel {
                    public long Id { get; set; }
                    public string RegionId { get; set; }
                    public string InstanceId { get; set; }
                    public string Category { get; set; }
                    public string InstanceName { get; set; }
            }
        };

    }

}
