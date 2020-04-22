// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Viapiutils20200401.Models
{
    public class GetOssStsTokenResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public GetOssStsTokenResponseData Data { get; set; }
        public class GetOssStsTokenResponseData : TeaModel {
            [NameInMap("AccessKeyId")]
            [Validation(Required=true)]
            public string AccessKeyId { get; set; }
            [NameInMap("AccessKeySecret")]
            [Validation(Required=true)]
            public string AccessKeySecret { get; set; }
            [NameInMap("SecurityToken")]
            [Validation(Required=true)]
            public string SecurityToken { get; set; }
            [NameInMap("Script")]
            [Validation(Required=true)]
            public string Script { get; set; }
        };

    }

}
