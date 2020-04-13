// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Objectdet20191230.Models
{
    public class DetectWhiteBaseImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public DetectWhiteBaseImageResponseData Data { get; set; }
        public class DetectWhiteBaseImageResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<DetectWhiteBaseImageResponseDataElements> Elements { get; set; }
            public class DetectWhiteBaseImageResponseDataElements : TeaModel {
                    public int? WhiteBase { get; set; }
            }
        };

    }

}
