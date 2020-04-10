// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class ClickToDialRequest : TeaModel {
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

        [NameInMap("CallerShowNumber")]
        [Validation(Required=true)]
        public string CallerShowNumber { get; set; }

        [NameInMap("CallerNumber")]
        [Validation(Required=true)]
        public string CallerNumber { get; set; }

        [NameInMap("CalledShowNumber")]
        [Validation(Required=true)]
        public string CalledShowNumber { get; set; }

        [NameInMap("CalledNumber")]
        [Validation(Required=true)]
        public string CalledNumber { get; set; }

        [NameInMap("RecordFlag")]
        [Validation(Required=false)]
        public bool? RecordFlag { get; set; }

        [NameInMap("AsrFlag")]
        [Validation(Required=false)]
        public bool? AsrFlag { get; set; }

        [NameInMap("SessionTimeout")]
        [Validation(Required=false)]
        public int? SessionTimeout { get; set; }

        [NameInMap("AsrModelId")]
        [Validation(Required=false)]
        public string AsrModelId { get; set; }

        [NameInMap("OutId")]
        [Validation(Required=false)]
        public string OutId { get; set; }

    }

}
