// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeRegionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Regions")]
        [Validation(Required=true)]
        public List<DescribeRegionsResponseRegions> Regions { get; set; }
        public class DescribeRegionsResponseRegions : TeaModel {
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("RegionEndpoint")]
            [Validation(Required=true)]
            public string RegionEndpoint { get; set; }

            [NameInMap("Zones")]
            [Validation(Required=true)]
            public List<string> Zones { get; set; }

        }

    }

}
