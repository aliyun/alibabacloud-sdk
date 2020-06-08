// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableCrossRegionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Regions")]
        [Validation(Required=true)]
        public DescribeAvailableCrossRegionResponseRegions Regions { get; set; }
        public class DescribeAvailableCrossRegionResponseRegions : TeaModel {
            [NameInMap("Region")]
            [Validation(Required=true)]
            public List<string> Region { get; set; }
        };

    }

}
