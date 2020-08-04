// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ImportKeyPairRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("KeyPairName")]
        [Validation(Required=true)]
        public string KeyPairName { get; set; }

        [NameInMap("PublicKeyBody")]
        [Validation(Required=true)]
        public string PublicKeyBody { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=false)]
        public List<ImportKeyPairRequestTag> Tag { get; set; }
        public class ImportKeyPairRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

    }

}
