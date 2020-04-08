// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class QuerySmsSignResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("SignStatus")]
        [Validation(Required=true)]
        public int? SignStatus { get; set; }

        [NameInMap("Reason")]
        [Validation(Required=true)]
        public string Reason { get; set; }

        [NameInMap("SignName")]
        [Validation(Required=true)]
        public string SignName { get; set; }

        [NameInMap("CreateDate")]
        [Validation(Required=true)]
        public string CreateDate { get; set; }

    }

}
