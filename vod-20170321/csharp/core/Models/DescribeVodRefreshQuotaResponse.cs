// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class DescribeVodRefreshQuotaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UrlQuota")]
        [Validation(Required=true)]
        public string UrlQuota { get; set; }

        [NameInMap("DirQuota")]
        [Validation(Required=true)]
        public string DirQuota { get; set; }

        [NameInMap("UrlRemain")]
        [Validation(Required=true)]
        public string UrlRemain { get; set; }

        [NameInMap("DirRemain")]
        [Validation(Required=true)]
        public string DirRemain { get; set; }

        [NameInMap("PreloadQuota")]
        [Validation(Required=true)]
        public string PreloadQuota { get; set; }

        [NameInMap("BlockQuota")]
        [Validation(Required=true)]
        public string BlockQuota { get; set; }

        [NameInMap("PreloadRemain")]
        [Validation(Required=true)]
        public string PreloadRemain { get; set; }

        [NameInMap("blockRemain")]
        [Validation(Required=true)]
        public string BlockRemain { get; set; }

    }

}
