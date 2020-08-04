// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeImageSupportInstanceTypesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ImageId")]
        [Validation(Required=true)]
        public string ImageId { get; set; }

        [NameInMap("InstanceTypes")]
        [Validation(Required=true)]
        public DescribeImageSupportInstanceTypesResponseInstanceTypes InstanceTypes { get; set; }
        public class DescribeImageSupportInstanceTypesResponseInstanceTypes : TeaModel {
            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public List<DescribeImageSupportInstanceTypesResponseInstanceTypesInstanceType> InstanceType { get; set; }
            public class DescribeImageSupportInstanceTypesResponseInstanceTypesInstanceType : TeaModel {
                    public string InstanceTypeId { get; set; }
                    public int? CpuCoreCount { get; set; }
                    public float? MemorySize { get; set; }
                    public string InstanceTypeFamily { get; set; }
            }
        };

    }

}
