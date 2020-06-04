// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class GetMessageCallbackResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MessageCallback")]
        [Validation(Required=true)]
        public GetMessageCallbackResponseMessageCallback MessageCallback { get; set; }
        public class GetMessageCallbackResponseMessageCallback : TeaModel {
            [NameInMap("CallbackType")]
            [Validation(Required=true)]
            public string CallbackType { get; set; }
            [NameInMap("CallbackURL")]
            [Validation(Required=true)]
            public string CallbackURL { get; set; }
            [NameInMap("EventTypeList")]
            [Validation(Required=true)]
            public string EventTypeList { get; set; }
            [NameInMap("AuthSwitch")]
            [Validation(Required=true)]
            public string AuthSwitch { get; set; }
            [NameInMap("AuthKey")]
            [Validation(Required=true)]
            public string AuthKey { get; set; }
            [NameInMap("MnsEndpoint")]
            [Validation(Required=true)]
            public string MnsEndpoint { get; set; }
            [NameInMap("MnsQueueName")]
            [Validation(Required=true)]
            public string MnsQueueName { get; set; }
            [NameInMap("AppId")]
            [Validation(Required=true)]
            public string AppId { get; set; }
        };

    }

}
