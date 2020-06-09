// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddCustomLineResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("LineId")]
        [Validation(Required=true)]
        public long LineId { get; set; }

        [NameInMap("LineCode")]
        [Validation(Required=true)]
        public string LineCode { get; set; }

    }

}
