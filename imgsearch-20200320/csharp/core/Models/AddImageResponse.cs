// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imgsearch20200320.Models
{
    public class AddImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public AddImageResponseData Data { get; set; }
        public class AddImageResponseData : TeaModel {
            [NameInMap("DataId")]
            [Validation(Required=true)]
            public string DataId { get; set; }
        };

    }

}
