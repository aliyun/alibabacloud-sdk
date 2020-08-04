// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateKeyPairResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("KeyPairId")]
        [Validation(Required=true)]
        public string KeyPairId { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=true)]
        public string KeyPairName { get; set; }

        [NameInMap("KeyPairFingerPrint")]
        [Validation(Required=true)]
        public string KeyPairFingerPrint { get; set; }

        [NameInMap("PrivateKeyBody")]
        [Validation(Required=true)]
        public string PrivateKeyBody { get; set; }

    }

}
