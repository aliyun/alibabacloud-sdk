// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribePlayUserAvgResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UserPlayStatisAvgs")]
        [Validation(Required=true)]
        public DescribePlayUserAvgResponseUserPlayStatisAvgs UserPlayStatisAvgs { get; set; }
        public class DescribePlayUserAvgResponseUserPlayStatisAvgs : TeaModel {
            [NameInMap("UserPlayStatisAvg")]
            [Validation(Required=true)]
            public List<DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg> UserPlayStatisAvg { get; set; }
            public class DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg : TeaModel {
                    public string Date { get; set; }
                    public string AvgPlayDuration { get; set; }
                    public string AvgPlayCount { get; set; }
            }
        };

    }

}
