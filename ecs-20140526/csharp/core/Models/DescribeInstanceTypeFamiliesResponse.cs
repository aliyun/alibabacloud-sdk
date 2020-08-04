// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceTypeFamiliesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceTypeFamilies")]
        [Validation(Required=true)]
        public DescribeInstanceTypeFamiliesResponseInstanceTypeFamilies InstanceTypeFamilies { get; set; }
        public class DescribeInstanceTypeFamiliesResponseInstanceTypeFamilies : TeaModel {
            [NameInMap("InstanceTypeFamily")]
            [Validation(Required=true)]
            public List<DescribeInstanceTypeFamiliesResponseInstanceTypeFamiliesInstanceTypeFamily> InstanceTypeFamily { get; set; }
            public class DescribeInstanceTypeFamiliesResponseInstanceTypeFamiliesInstanceTypeFamily : TeaModel {
                    public string InstanceTypeFamilyId { get; set; }
                    public string Generation { get; set; }
            }
        };

    }

}
