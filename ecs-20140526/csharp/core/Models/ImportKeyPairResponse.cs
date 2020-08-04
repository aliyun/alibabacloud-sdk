// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ImportKeyPairResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=true)]
        public string KeyPairName { get; set; }

        [NameInMap("KeyPairFingerPrint")]
        [Validation(Required=true)]
        public string KeyPairFingerPrint { get; set; }

    }

}
