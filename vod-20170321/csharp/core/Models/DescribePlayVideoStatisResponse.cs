// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribePlayVideoStatisResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VideoPlayStatisDetails")]
        [Validation(Required=true)]
        public DescribePlayVideoStatisResponseVideoPlayStatisDetails VideoPlayStatisDetails { get; set; }
        public class DescribePlayVideoStatisResponseVideoPlayStatisDetails : TeaModel {
            [NameInMap("VideoPlayStatisDetail")]
            [Validation(Required=true)]
            public List<DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail> VideoPlayStatisDetail { get; set; }
            public class DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail : TeaModel {
                    public string Date { get; set; }
                    public string PlayDuration { get; set; }
                    public string VV { get; set; }
                    public string UV { get; set; }
                    public string PlayRange { get; set; }
                    public string Title { get; set; }
            }
        };

    }

}
