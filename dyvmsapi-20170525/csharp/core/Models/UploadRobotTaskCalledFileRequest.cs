// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class UploadRobotTaskCalledFileRequest : TeaModel {
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

        [NameInMap("Id")]
        [Validation(Required=false)]
        public long Id { get; set; }

        [NameInMap("CalledNumber")]
        [Validation(Required=false)]
        public string CalledNumber { get; set; }

        [NameInMap("TtsParam")]
        [Validation(Required=false)]
        public string TtsParam { get; set; }

        [NameInMap("TtsParamHead")]
        [Validation(Required=false)]
        public string TtsParamHead { get; set; }

    }

}
