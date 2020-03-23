// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Objectdet.Models
{
    public class DetectTransparentImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectTransparentImageResponseData Data { get; set; }
        public class DetectTransparentImageResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectTransparentImageResponseDataElements> Elements { get; set; }
            public class DetectTransparentImageResponseDataElements : TeaModel {
                    public int? TransparentImage { get; set; }
            }
        };

    }

}
