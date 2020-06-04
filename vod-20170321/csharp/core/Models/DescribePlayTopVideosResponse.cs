// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribePlayTopVideosResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNo")]
        [Validation(Required=true)]
        public long PageNo { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("TotalNum")]
        [Validation(Required=true)]
        public long TotalNum { get; set; }

        [NameInMap("TopPlayVideos")]
        [Validation(Required=true)]
        public DescribePlayTopVideosResponseTopPlayVideos TopPlayVideos { get; set; }
        public class DescribePlayTopVideosResponseTopPlayVideos : TeaModel {
            [NameInMap("TopPlayVideoStatis")]
            [Validation(Required=true)]
            public List<DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis> TopPlayVideoStatis { get; set; }
            public class DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis : TeaModel {
                    public string PlayDuration { get; set; }
                    public string VV { get; set; }
                    public string UV { get; set; }
                    public string VideoId { get; set; }
                    public string Title { get; set; }
            }
        };

    }

}
