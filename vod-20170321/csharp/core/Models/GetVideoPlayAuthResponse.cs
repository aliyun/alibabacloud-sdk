// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetVideoPlayAuthResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PlayAuth")]
        [Validation(Required=true)]
        public string PlayAuth { get; set; }

        [NameInMap("VideoMeta")]
        [Validation(Required=true)]
        public GetVideoPlayAuthResponseVideoMeta VideoMeta { get; set; }
        public class GetVideoPlayAuthResponseVideoMeta : TeaModel {
            [NameInMap("CoverURL")]
            [Validation(Required=true)]
            public string CoverURL { get; set; }
            [NameInMap("Duration")]
            [Validation(Required=true)]
            public float? Duration { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }
            [NameInMap("VideoId")]
            [Validation(Required=true)]
            public string VideoId { get; set; }
        };

    }

}
