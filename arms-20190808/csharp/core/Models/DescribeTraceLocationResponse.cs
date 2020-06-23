// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class DescribeTraceLocationResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("RegionConfigs")]
        [Validation(Required=true)]
        public List<DescribeTraceLocationResponseRegionConfigs> RegionConfigs { get; set; }
        public class DescribeTraceLocationResponseRegionConfigs : TeaModel {
            [NameInMap("RegionNo")]
            [Validation(Required=true)]
            public string RegionNo { get; set; }

            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }

        }

    }

}
