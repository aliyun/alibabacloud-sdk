// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class EipFillParamsRequest : TeaModel {
        [NameInMap("data")]
        [Validation(Required=true)]
        public string Data { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("UserCidr")]
        [Validation(Required=false)]
        public string UserCidr { get; set; }

    }

}
