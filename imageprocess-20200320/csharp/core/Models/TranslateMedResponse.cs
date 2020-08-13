// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imageprocess20200320.Models
{
    public class TranslateMedResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public TranslateMedResponseData Data { get; set; }
        public class TranslateMedResponseData : TeaModel {
            [NameInMap("Text")]
            [Validation(Required=true)]
            public string Text { get; set; }
            [NameInMap("Words")]
            [Validation(Required=true)]
            public long Words { get; set; }
        };

    }

}
