// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class SingleCallByTtsRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("CalledShowNumber")]
        [Validation(Required=true)]
        public string CalledShowNumber { get; set; }

        [NameInMap("CalledNumber")]
        [Validation(Required=true)]
        public string CalledNumber { get; set; }

        [NameInMap("TtsCode")]
        [Validation(Required=true)]
        public string TtsCode { get; set; }

        [NameInMap("TtsParam")]
        [Validation(Required=false)]
        public string TtsParam { get; set; }

        [NameInMap("PlayTimes")]
        [Validation(Required=false)]
        public int? PlayTimes { get; set; }

        [NameInMap("Volume")]
        [Validation(Required=false)]
        public int? Volume { get; set; }

        [NameInMap("Speed")]
        [Validation(Required=false)]
        public int? Speed { get; set; }

        [NameInMap("OutId")]
        [Validation(Required=false)]
        public string OutId { get; set; }

    }

}
