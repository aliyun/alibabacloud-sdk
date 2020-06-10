// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMonitorGroupInstanceAttributeResponse : TeaModel {
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
        public DescribeMonitorGroupInstanceAttributeResponseResources Resources { get; set; }
        public class DescribeMonitorGroupInstanceAttributeResponseResources : TeaModel {
            [NameInMap("Resource")]
            [Validation(Required=true)]
            public List<DescribeMonitorGroupInstanceAttributeResponseResourcesResource> Resource { get; set; }
            public class DescribeMonitorGroupInstanceAttributeResponseResourcesResource : TeaModel {
                    public string InstanceName { get; set; }
                    public string InstanceId { get; set; }
                    public string Desc { get; set; }
                    public string NetworkType { get; set; }
                    public string Category { get; set; }
                    public string Dimension { get; set; }
                    public DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags Tags { get; set; }
                    public class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags : TeaModel {
                        [NameInMap("Tag")]
                        [Validation(Required=true)]
                        public List<DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag> Tag { get; set; }
                        public class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag : TeaModel {
                            [NameInMap("Key")]
                            [Validation(Required=true)]
                            public string Key { get; set; }

                            [NameInMap("Value")]
                            [Validation(Required=true)]
                            public string Value { get; set; }

                        }

                    }
                    public DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion Region { get; set; }
                    public class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion : TeaModel {
                        [NameInMap("RegionId")]
                        [Validation(Required=true)]
                        public string RegionId { get; set; }

                        [NameInMap("AvailabilityZone")]
                        [Validation(Required=true)]
                        public string AvailabilityZone { get; set; }

                    }
                    public DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc Vpc { get; set; }
                    public class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc : TeaModel {
                        [NameInMap("VpcInstanceId")]
                        [Validation(Required=true)]
                        public string VpcInstanceId { get; set; }

                        [NameInMap("VswitchInstanceId")]
                        [Validation(Required=true)]
                        public string VswitchInstanceId { get; set; }

                    }
            }
        };

    }

}
