// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Videoenhan20200320.Models
{
    public class AbstractEcommerceVideoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AbstractEcommerceVideoResponseData Data { get; set; }
        public class AbstractEcommerceVideoResponseData : TeaModel {
            [NameInMap("VideoUrl")]
            [Validation(Required=true)]
            public string VideoUrl { get; set; }
            [NameInMap("VideoCoverUrl")]
            [Validation(Required=true)]
            public string VideoCoverUrl { get; set; }
        };

    }

}
